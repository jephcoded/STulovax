<?php

declare(strict_types=1);

const STULOVAX_CONTACT_EMAIL = 'hello@stulovax.com, Remi@stulovax.com';
const STULOVAX_FROM_EMAIL = 'hello@stulovax.com';
const STULOVAX_SUCCESS_REDIRECT = 'https://calendly.com/stulovax';
const STULOVAX_ERROR_REDIRECT = './index.html?consultation=error#consultation';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ./index.html#consultation', true, 303);
    exit;
}

$successRedirect = sanitize_redirect($_POST['success_redirect'] ?? STULOVAX_SUCCESS_REDIRECT, STULOVAX_SUCCESS_REDIRECT);
$errorRedirect = sanitize_redirect($_POST['error_redirect'] ?? STULOVAX_ERROR_REDIRECT, STULOVAX_ERROR_REDIRECT);

if (!empty($_POST['company_website'] ?? '')) {
    redirect_to($successRedirect);
}

$name = trim((string) ($_POST['name'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$phone = trim((string) ($_POST['phone'] ?? ''));
$location = trim((string) ($_POST['location'] ?? ''));
$businessName = trim((string) ($_POST['business_name'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));

if ($name === '' || $email === '' || $phone === '' || $location === '' || $businessName === '' || $message === '') {
    redirect_to('./index.html?consultation=missing#consultation');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    redirect_to('./index.html?consultation=invalid#consultation');
}

$safeName = strip_tags($name);
$safeEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
$safePhone = strip_tags($phone);
$safeLocation = strip_tags($location);
$safeBusinessName = strip_tags($businessName);
$safeMessage = trim(preg_replace("/\r\n|\r|\n/", PHP_EOL, strip_tags($message)) ?? '');

$subject = sprintf('New consultation request from %s', $safeBusinessName);
$emailBody = implode(PHP_EOL . PHP_EOL, [
    'A new consultation request was submitted on the Stulovax website.',
    'Full name: ' . $safeName,
    'Email address: ' . $safeEmail,
    'Phone or WhatsApp: ' . $safePhone,
    'Current location: ' . $safeLocation,
    'Business name: ' . $safeBusinessName,
    'What the client needs help with in Nigeria:',
    $safeMessage,
]);

$headers = [
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'From: Stulovax Website <' . STULOVAX_FROM_EMAIL . '>',
    'Reply-To: ' . $safeName . ' <' . $safeEmail . '>',
    'X-Mailer: PHP/' . PHP_VERSION,
];

$mailSent = @mail(STULOVAX_CONTACT_EMAIL, $subject, $emailBody, implode("\r\n", $headers));

if (!$mailSent) {
    redirect_to($errorRedirect);
}

redirect_to($successRedirect);

function sanitize_redirect(string $candidate, string $fallback): string
{
    if ($candidate === '') {
        return $fallback;
    }

    if (preg_match('/^(https?:\/\/|\.\/|\/)/i', $candidate) !== 1) {
        return $fallback;
    }

    return $candidate;
}

function redirect_to(string $location): void
{
    header('Location: ' . $location, true, 303);
    exit;
}
