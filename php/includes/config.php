<?php
// BNS Development — Core Configuration & Helpers

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Generate CSRF token if not set
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Brand Information
define('SITE_NAME', 'BNS Development');
define('SITE_TAGLINE', 'Development leadership, from first plan to final handover.');
define('CONTACT_PHONE', '(786) 368-3009');
define('CONTACT_EMAIL', 'bradford@bnsdevelopment.com');
define('OFFICE_FLORIDA', '17000 Collins Ave, Sunny Isles Beach, FL 33160');
define('OFFICE_TEXAS', 'Downtown Austin / Dallas Metroplex, TX');

// Compute Dynamic Base URL
$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$basePath = ($scriptDir === '/' || $scriptDir === '.') ? '' : rtrim($scriptDir, '/');

// If executed inside a subfolder like /services, adjust base path back to root
if (basename($basePath) === 'services' || basename($basePath) === 'api') {
    $basePath = dirname($basePath);
    if ($basePath === '/' || $basePath === '.') $basePath = '';
}

define('BASE_URL', $basePath);

/**
 * Returns an absolute URL within this application
 */
function url($path = '') {
    $cleanPath = '/' . ltrim($path, '/');
    return BASE_URL . $cleanPath;
}

/**
 * Returns asset path with proper base URL
 */
function asset($path = '') {
    return url($path);
}

// Load Global Data Stores
$servicesData = require __DIR__ . '/../data/services.php';
$projectsData = require __DIR__ . '/../data/projects.php';
$teamData = require __DIR__ . '/../data/team.php';
$jobsData = require __DIR__ . '/../data/jobs.php';
$projectTypesData = require __DIR__ . '/../data/project-types.php';
$newsData = require __DIR__ . '/../data/news.php';
