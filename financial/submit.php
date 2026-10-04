<?php

declare(strict_types=1);

const FINANCE_TO_EMAIL   = 'hello.stulovax@gmail.com';
const FINANCE_FROM_EMAIL = 'hello.stulovax@gmail.com';
const FINANCE_SUCCESS    = 'https://stulovax.com/financial/thank-you.html';
const FINANCE_ERROR      = 'https://stulovax.com/financial/?error=1';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ./index.html', true, 303);
    exit;
}

// Honeypot — silently pass bots through to success page
if (!empty($_POST['website_url'] ?? '')) {
    header('Location: ' . FINANCE_SUCCESS, true, 303);
    exit;
}

$name       = trim((string) ($_POST['full_name']    ?? ''));
$email      = trim((string) ($_POST['email']        ?? ''));
$phone      = trim((string) ($_POST['phone']        ?? ''));
$location   = trim((string) ($_POST['location']     ?? ''));
$experience = trim((string) ($_POST['experience']   ?? ''));
$horizon    = trim((string) ($_POST['horizon']      ?? ''));
$budget     = trim((string) ($_POST['budget']       ?? ''));
$referral   = trim((string) ($_POST['referral']     ?? ''));
$interests  = array_filter((array) ($_POST['interests'] ?? []), 'is_string');

// Required fields
if ($name === '' || $email === '' || $phone === '' || $location === '') {
    header('Location: ' . FINANCE_ERROR, true, 303);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ' . FINANCE_ERROR, true, 303);
    exit;
}

// Sanitise
$safeName       = strip_tags($name);
$safeEmail      = filter_var($email, FILTER_SANITIZE_EMAIL);
$safePhone      = strip_tags($phone);
$safeLocation   = strip_tags($location);
$safeExperience = strip_tags($experience);
$safeHorizon    = strip_tags($horizon);
$safeBudget     = strip_tags($budget);
$safeReferral   = strip_tags($referral);
$safeInterests  = implode(', ', array_map('strip_tags', $interests));

// Build email
$subject = sprintf('Dangote IPO Briefing Registration — %s', $safeName);

$body = implode(PHP_EOL . PHP_EOL, [
    'New Dangote IPO Briefing registration submitted via stulovax.com/financial',
    'CONTACT DETAILS',
    'Full name:           ' . $safeName,
    'Email:               ' . $safeEmail,
    'Phone / WhatsApp:    ' . $safePhone,
    'Location:            ' . $safeLocation,
    'INVESTOR PROFILE',
    'Experience level:    ' . $safeExperience,
    'Time horizon:        ' . $safeHorizon,
    'Investment range:    ' . $safeBudget,
    'INTERESTS',
    'What they want:      ' . ($safeInterests ?: 'None selected'),
    'Referred from:       ' . ($safeReferral ?: 'Not specified'),
]);

$headerSafeName  = str_replace(["\r", "\n"], '', $safeName);
$headerSafeEmail = str_replace(["\r", "\n"], '', $safeEmail);

$headers = implode("\r\n", [
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'From: Stulovax Finance <' . FINANCE_FROM_EMAIL . '>',
    'Reply-To: ' . $headerSafeName . ' <' . $headerSafeEmail . '>',
    'X-Mailer: PHP/' . PHP_VERSION,
]);

$sent = mail(FINANCE_TO_EMAIL, $subject, $body, $headers);

header('Location: ' . ($sent ? FINANCE_SUCCESS : FINANCE_ERROR), true, 303);
exit;
