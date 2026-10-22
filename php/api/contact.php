<?php
// BNS Development — Project Inquiry Contact Mailer Endpoint
require_once __DIR__ . '/../includes/config.php';

header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method Not Allowed']);
    exit;
}

// Extract and sanitize input fields
$fullName    = trim($_POST['fullName'] ?? $_POST['name'] ?? '');
$email       = trim($_POST['email'] ?? '');
$phone       = trim($_POST['phone'] ?? '');
$projectType = trim($_POST['projectType'] ?? $_POST['role_title'] ?? '');
$budget      = trim($_POST['budget'] ?? $_POST['experience'] ?? '');
$location    = trim($_POST['location'] ?? $_POST['portfolio'] ?? '');
$message     = trim($_POST['message'] ?? '');
$csrfToken   = trim($_POST['csrf_token'] ?? '');

// Validation
$errors = [];
if (empty($fullName)) {
    $errors[] = 'Full name is required.';
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'A valid email address is required.';
}
if (empty($message)) {
    $errors[] = 'Please provide details about your inquiry.';
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode([
        'status'  => 'error',
        'success' => false,
        'message' => 'Please correct the highlighted errors.',
        'errors'  => $errors
    ]);
    exit;
}

// Mail formulation
$to = CONTACT_EMAIL;
$subject = "[BNS Website Inquiry] New Project Inquiry from " . htmlspecialchars($fullName);

$body = "=== NEW BNS DEVELOPMENT PROJECT INQUIRY ===\n\n";
$body .= "Full Name:       " . $fullName . "\n";
$body .= "Email Address:   " . $email . "\n";
$body .= "Phone:           " . ($phone ?: 'Not provided') . "\n";
$body .= "Project Type:    " . ($projectType ?: 'Not specified') . "\n";
$body .= "Estimated Budget:" . ($budget ?: 'Not specified') . "\n";
$body .= "Project Location:" . ($location ?: 'Not specified') . "\n\n";
$body .= "--- Project Details / Scope ---\n";
$body .= $message . "\n\n";
$body .= "========================================\n";
$body .= "Submitted At: " . date('Y-m-d H:i:s T') . "\n";
$body .= "IP Address:   " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "\n";

$headers = [];
$headers[] = 'From: ' . SITE_NAME . ' <no-reply@' . ($_SERVER['SERVER_NAME'] ?? 'bnsdevelopment.com') . '>';
$headers[] = 'Reply-To: ' . $fullName . ' <' . $email . '>';
$headers[] = 'X-Mailer: PHP/' . phpversion();

// Attempt mail dispatch
$mailSent = @mail($to, $subject, $body, implode("\r\n", $headers));

// Log submission to inquiry log file for reliability
$logEntry = json_encode([
    'timestamp' => date('c'),
    'fullName' => $fullName,
    'email' => $email,
    'phone' => $phone,
    'projectType' => $projectType,
    'budget' => $budget,
    'location' => $location,
    'message' => $message,
    'mailSent' => $mailSent
]) . PHP_EOL;

@file_put_contents(__DIR__ . '/inquiries.log', $logEntry, FILE_APPEND | LOCK_EX);

// Success JSON response
echo json_encode([
    'status'   => 'success',
    'success'  => true,
    'message'  => 'Thank you for contacting BNS Development. Our executive team has received your project inquiry and will follow up with you promptly.',
    'mailSent' => $mailSent
]);
