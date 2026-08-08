<?php
if (!defined('HTMLY')) die('HTMLy Direct Access Denied');

require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/posts.php';

/**
 * Main API v1 Request Entry Point
 */
function handle_api_v1_request($path, $method)
{
    // Validate Bearer Token
    $auth = validate_api_key();
    if (!$auth) {
        api_error('Unauthorized: Invalid or missing API Bearer Token', 401, 'UNAUTHORIZED');
    }

    $subPath = trim(substr($path, strlen('/api/v1')), '/');

    // Route: /api/v1/posts
    if ($subPath === 'posts' || strpos($subPath, 'posts/') === 0) {
        $parts = explode('/', $subPath);
        $slug = $parts[1] ?? null;

        if ($method === 'GET') {
            api_get_posts();
        } elseif ($method === 'POST') {
            api_create_post($auth);
        } elseif ($method === 'DELETE' && $slug) {
            api_delete_post($slug);
        } else {
            api_error('Method Not Allowed', 405, 'METHOD_NOT_ALLOWED');
        }
    }

    // Default 404 for unknown API endpoints
    api_error('API Endpoint Not Found', 404, 'NOT_FOUND');
}
