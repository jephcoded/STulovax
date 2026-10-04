<?php

if (!function_exists('stulovax_url')) {
    require_once __DIR__ . '/functions.php';
}

$about_is_current = is_page('about');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/svg+xml" href="<?php echo esc_url(get_template_directory_uri() . '/assets/favicon.svg'); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="site-shell">
        <header class="site-header">
            <a class="brand" href="<?php echo stulovax_url('/'); ?>" aria-label="Stulovax home">
                <span class="brand-mark" aria-hidden="true">
                    <svg viewBox="0 0 72 72" role="img" aria-hidden="true">
                        <path
                            fill="#f5c457"
                            d="M44.8 7.5c9.7 0 17.6 7.8 17.6 17.5 0 7-4.1 13.1-10.1 15.9-3 1.4-5.1 4-5.8 7.2C44.7 56.1 37.8 62 29.6 62c-9.7 0-17.6-7.8-17.6-17.5 0-7.2 4.3-13.5 10.6-16.1 2.8-1.2 4.8-3.6 5.6-6.6C30.1 13.3 36.8 7.5 44.8 7.5Z" />
                        <path
                            fill="#071a33"
                            d="M45 16.2c2.9 0 5.5.8 7.5 2.5-6.6 1.6-11.3 6.2-13.6 13.6-2.5 8.2-7.4 13.6-14.7 15.9 1.2-5.9 5-10.3 11.4-13.2 4.6-2 7.3-5.4 8.3-10.4.9-4.5 3.4-8.4 7.4-8.4h-6.3Zm-17.7 39.6c-2.8 0-5.4-.8-7.5-2.5 6.6-1.6 11.3-6.2 13.6-13.6 2.5-8.2 7.4-13.6 14.7-15.9-1.2 5.9-5 10.3-11.4 13.2-4.6 2-7.3 5.4-8.3 10.4-.9 4.5-3.4 8.4-7.4 8.4h6.3Z" />
                    </svg>
                </span>
                <span class="brand-text">STULOVAX</span>
            </a>

            <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-nav">
                <span></span>
                <span></span>
            </button>

            <nav id="site-nav" class="site-nav">
                <a href="<?php echo stulovax_url('/#services'); ?>">Services</a>
                <a href="<?php echo stulovax_url('/about/'); ?>" <?php echo $about_is_current ? ' aria-current="page"' : ''; ?>>About</a>
                <a href="<?php echo stulovax_url('/#how-it-works'); ?>">How It Works</a>
                <a href="<?php echo stulovax_url('/#benefits'); ?>">Benefits</a>
                <a href="<?php echo stulovax_url('/#countries'); ?>">Countries</a>
                <a href="<?php echo stulovax_url('/#faq'); ?>">FAQ</a>
                <a href="<?php echo stulovax_url('/#contact'); ?>">Contact</a>
            </nav>

            <div class="header-actions">
                <a class="button button-secondary button-icon button-icon-left" href="tel:+2348032531089">
                    <span class="button-icon-glyph" aria-hidden="true">
                        <svg viewBox="0 0 20 20" role="img" aria-hidden="true">
                            <path d="M5.2 2.8h2.1c.4 0 .7.3.8.7l.5 2.5c.1.4 0 .8-.3 1.1L7 8.5a11.8 11.8 0 0 0 4.5 4.5l1.4-1.3c.3-.3.7-.4 1.1-.3l2.5.5c.4.1.7.4.7.8v2.1c0 .5-.4.9-.9 1-1 .1-2 .2-3 .1A14.8 14.8 0 0 1 4.1 6.7c0-1 0-2 .1-3a1 1 0 0 1 1-1Z" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                    <span>Call Us</span>
                </a>
                <a class="button button-primary button-icon button-icon-right" href="<?php echo stulovax_url('/#consultation'); ?>">
                    <span>Book Consultation</span>
                    <span class="button-icon-glyph" aria-hidden="true">
                        <svg viewBox="0 0 20 20" role="img" aria-hidden="true">
                            <path d="M4 10h12M11 5l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                </a>
            </div>
        </header>