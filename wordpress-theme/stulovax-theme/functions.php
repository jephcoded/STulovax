<?php

if (!function_exists('add_action')) {
    require_once __DIR__ . '/wordpress-stubs.php';
}

const STULOVAX_CONTACT_EMAIL = 'Hello@stulovax.com';
const STULOVAX_FROM_EMAIL = 'Hello@stulovax.com';
const STULOVAX_SUCCESS_REDIRECT = 'https://calendly.com/stulovax';

function stulovax_asset_version($relative_path)
{
    $absolute_path = get_template_directory() . $relative_path;

    if (file_exists($absolute_path)) {
        return (string) filemtime($absolute_path);
    }

    return wp_get_theme()->get('Version');
}

function stulovax_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );
}
add_action('after_setup_theme', 'stulovax_setup');

function stulovax_enqueue_assets()
{
    wp_enqueue_style(
        'stulovax-fonts',
        'https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'stulovax-theme',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'stulovax-site',
        get_template_directory_uri() . '/assets/css/site.css',
        array('stulovax-fonts', 'stulovax-theme'),
        stulovax_asset_version('/assets/css/site.css')
    );

    wp_enqueue_script(
        'stulovax-site',
        get_template_directory_uri() . '/assets/js/site.js',
        array(),
        stulovax_asset_version('/assets/js/site.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'stulovax_enqueue_assets');

function stulovax_body_classes($classes)
{
    if (is_page('about')) {
        $classes[] = 'page-about';
    }

    return $classes;
}
add_filter('body_class', 'stulovax_body_classes');

function stulovax_url($path = '/')
{
    return esc_url(home_url($path));
}

function stulovax_consultation_section_url($status = null)
{
    $url = home_url('/#consultation');

    if ($status) {
        $url = add_query_arg('consultation', $status, home_url('/')) . '#consultation';
    }

    return esc_url($url);
}

function stulovax_handle_consultation_submission()
{
    if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
        stulovax_redirect(stulovax_consultation_section_url());
    }

    $nonce = $_POST['stulovax_consultation_nonce'] ?? '';

    if (!wp_verify_nonce($nonce, 'stulovax_consultation_form')) {
        stulovax_redirect(stulovax_consultation_section_url('error'));
    }

    if (!empty($_POST['company_website'] ?? '')) {
        stulovax_redirect(STULOVAX_SUCCESS_REDIRECT);
    }

    $name = sanitize_text_field(wp_unslash($_POST['name'] ?? ''));
    $email = sanitize_email(wp_unslash($_POST['email'] ?? ''));
    $phone = sanitize_text_field(wp_unslash($_POST['phone'] ?? ''));
    $location = sanitize_text_field(wp_unslash($_POST['location'] ?? ''));
    $business_name = sanitize_text_field(wp_unslash($_POST['business_name'] ?? ''));
    $message = trim(wp_strip_all_tags(wp_unslash($_POST['message'] ?? '')));

    if ($name === '' || $email === '' || $phone === '' || $location === '' || $business_name === '' || $message === '') {
        stulovax_redirect(stulovax_consultation_section_url('missing'));
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        stulovax_redirect(stulovax_consultation_section_url('invalid'));
    }

    $subject = sprintf('New consultation request from %s', $business_name);
    $email_body = implode("\n\n", array(
        'A new consultation request was submitted on the Stulovax website.',
        'Full name: ' . $name,
        'Email address: ' . $email,
        'Phone or WhatsApp: ' . $phone,
        'Current location: ' . $location,
        'Business name: ' . $business_name,
        'What the client needs help with in Nigeria:',
        $message,
    ));

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: Stulovax Website <' . STULOVAX_FROM_EMAIL . '>',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );

    $mail_sent = wp_mail(STULOVAX_CONTACT_EMAIL, $subject, $email_body, $headers);

    if (!$mail_sent) {
        stulovax_redirect(stulovax_consultation_section_url('error'));
    }

    stulovax_redirect(STULOVAX_SUCCESS_REDIRECT);
}
add_action('admin_post_nopriv_stulovax_consultation', 'stulovax_handle_consultation_submission');
add_action('admin_post_stulovax_consultation', 'stulovax_handle_consultation_submission');

function stulovax_redirect($url)
{
    wp_safe_redirect($url);
    exit;
}
