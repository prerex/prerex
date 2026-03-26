<?php
/**
 * Prerex — Bot prerender proxy for Apache
 * https://prerex.io
 *
 * This script is called by .htaccess when a bot user-agent is detected.
 * It fetches the prerendered HTML from the Prerex API and serves it.
 * If the API fails or returns an error, it falls back to the original page.
 *
 * SETUP:
 *   1. Copy this file to your document root (next to index.php)
 *   2. Set your API key below (get one at https://prerex.io/dashboard)
 *   3. Add the .htaccess rules from prerex.htaccess
 *
 * REQUIREMENTS:
 *   - PHP 8.1+ with curl extension
 */

// ---------------------------------------------------------------------------
// Configuration
// ---------------------------------------------------------------------------

// Your Prerex API key — get one at https://prerex.io/dashboard
// You can also set this via environment variable: SetEnv PREREX_API_KEY xxx
$apiKey = getenv('PREREX_API_KEY') ?: 'YOUR_API_KEY_HERE';

// Prerex API endpoint
$apiEndpoint = 'https://api.prerex.dev/api/render';

// Timeout in seconds for the API call
$timeout = 20;

// ---------------------------------------------------------------------------
// Build the original URL
// ---------------------------------------------------------------------------

$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host   = $_SERVER['HTTP_HOST'] ?? 'localhost';

// The original path is passed via query param by .htaccess rewrite
// Fall back to REQUEST_URI if prerex_path is not set
if (isset($_GET['prerex_path'])) {
    $path = '/' . ltrim($_GET['prerex_path'], '/');
    // Preserve original query string (minus our prerex_path param)
    $originalParams = $_GET;
    unset($originalParams['prerex_path']);
    $query = http_build_query($originalParams);
    $url = $scheme . '://' . $host . $path . ($query ? '?' . $query : '');
} else {
    $url = $scheme . '://' . $host . ($_SERVER['REQUEST_URI'] ?? '/');
}

$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
$botIp     = $_SERVER['REMOTE_ADDR'] ?? '';

// ---------------------------------------------------------------------------
// Call the Prerex API
// ---------------------------------------------------------------------------

$ch = curl_init($apiEndpoint . '?url=' . urlencode($url));

if ($ch === false) {
    prerexFallback('curl_init failed');
}

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => $timeout,
    CURLOPT_CONNECTTIMEOUT => 5,
    CURLOPT_FOLLOWLOCATION => false,
    CURLOPT_HTTPHEADER     => [
        'x-api-key: '      . $apiKey,
        'x-original-ua: '  . $userAgent,
        'x-bot-ip: '       . $botIp,
        'Accept: text/html',
    ],
]);

$html     = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlErr  = curl_error($ch);
curl_close($ch);

// ---------------------------------------------------------------------------
// Serve prerendered HTML or fall back
// ---------------------------------------------------------------------------

if ($httpCode === 200 && is_string($html) && strlen($html) > 0) {
    // Success — serve the prerendered page
    header('Content-Type: text/html; charset=utf-8');
    header('X-Prerex: 1');
    header('X-Prerex-Source: apache-php');
    echo $html;
    exit;
}

// API failed — fall back to the original page
$reason = $curlErr ?: ('HTTP ' . $httpCode);
prerexFallback($reason);

// ---------------------------------------------------------------------------
// Fallback: serve the original page as if the bot was a normal visitor
// ---------------------------------------------------------------------------

/**
 * Graceful fallback — serves the original page when the Prerex API is
 * unavailable or returns an error. The bot gets the normal (unrendered)
 * page, which is better than a blank page or an error.
 */
function prerexFallback(string $reason = ''): void
{
    header('X-Prerex-Fallback: 1');

    if ($reason) {
        // Log for debugging — only visible in Apache error log, not to the client
        error_log('Prerex: fallback triggered — ' . $reason);
    }

    // Determine the original file path
    $requestUri = $_GET['prerex_path'] ?? ($_SERVER['REQUEST_URI'] ?? '/');
    $parsedPath = parse_url('/' . ltrim($requestUri, '/'), PHP_URL_PATH);
    $docRoot    = rtrim($_SERVER['DOCUMENT_ROOT'] ?? '', '/');

    if ($parsedPath === null) {
        $parsedPath = '/';
    }

    $filePath = $docRoot . $parsedPath;

    // If it's a real file (e.g., /about.php), include it directly
    if (is_file($filePath) && pathinfo($filePath, PATHINFO_EXTENSION) === 'php') {
        include $filePath;
        exit;
    }

    // Otherwise, fall through to index.php (most PHP frameworks / CMS)
    $indexFile = $docRoot . '/index.php';
    if (is_file($indexFile)) {
        // Restore the original REQUEST_URI so the framework routes correctly
        if (isset($_GET['prerex_path'])) {
            $originalParams = $_GET;
            unset($originalParams['prerex_path']);
            $query = http_build_query($originalParams);
            $_SERVER['REQUEST_URI'] = '/' . ltrim($_GET['prerex_path'], '/') . ($query ? '?' . $query : '');
        }
        include $indexFile;
        exit;
    }

    // Last resort — 404
    http_response_code(404);
    echo '<!DOCTYPE html><html><head><title>404 Not Found</title></head>';
    echo '<body><h1>404 Not Found</h1></body></html>';
    exit;
}
