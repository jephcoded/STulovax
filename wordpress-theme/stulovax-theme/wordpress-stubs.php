<?php

if (!class_exists('WP_Theme')) {
    class WP_Theme
    {
        public function get(string $header): string
        {
            return '1.0.0';
        }
    }
}

if (!function_exists('add_action')) {
    function add_action(string $hook_name, callable|string $callback, int $priority = 10, int $accepted_args = 1): bool
    {
        return true;
    }
}

if (!function_exists('add_filter')) {
    function add_filter(string $hook_name, callable|string $callback, int $priority = 10, int $accepted_args = 1): bool
    {
        return true;
    }
}

if (!function_exists('add_theme_support')) {
    function add_theme_support(string $feature, mixed ...$args): bool
    {
        return true;
    }
}

if (!function_exists('get_template_directory')) {
    function get_template_directory(): string
    {
        return __DIR__;
    }
}

if (!function_exists('get_template_directory_uri')) {
    function get_template_directory_uri(): string
    {
        return '';
    }
}

if (!function_exists('get_stylesheet_uri')) {
    function get_stylesheet_uri(): string
    {
        return __DIR__ . '/style.css';
    }
}

if (!function_exists('wp_get_theme')) {
    function wp_get_theme(): WP_Theme
    {
        return new WP_Theme();
    }
}

if (!function_exists('wp_enqueue_style')) {
    function wp_enqueue_style(string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, string $media = 'all'): bool
    {
        return true;
    }
}

if (!function_exists('wp_enqueue_script')) {
    function wp_enqueue_script(string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, bool $in_footer = false): bool
    {
        return true;
    }
}

if (!function_exists('is_page')) {
    function is_page(string|int|array $page = ''): bool
    {
        return false;
    }
}

if (!function_exists('esc_url')) {
    function esc_url(string $url): string
    {
        return $url;
    }
}

if (!function_exists('home_url')) {
    function home_url(string $path = '', string|null $scheme = null): string
    {
        return $path;
    }
}

if (!function_exists('admin_url')) {
    function admin_url(string $path = '', string $scheme = 'admin'): string
    {
        return $path;
    }
}

if (!function_exists('add_query_arg')) {
    function add_query_arg(string|array $key, string|bool $value = '', string|bool $url = ''): string
    {
        if (is_array($key)) {
            $query = http_build_query($key);
            return ($url ?: '') . ($query ? ('?' . $query) : '');
        }

        return ($url ?: '') . '?' . rawurlencode((string) $key) . '=' . rawurlencode((string) $value);
    }
}

if (!function_exists('language_attributes')) {
    function language_attributes(string $doctype = 'html'): void
    {
        echo 'lang="en"';
    }
}

if (!function_exists('bloginfo')) {
    function bloginfo(string $show = ''): void
    {
        if ($show === 'charset') {
            echo 'UTF-8';
        }
    }
}

if (!function_exists('wp_head')) {
    function wp_head(): void {}
}

if (!function_exists('wp_nonce_field')) {
    function wp_nonce_field(string|int $action = -1, string $name = '_wpnonce', bool $referer = true, bool $display = true): string
    {
        $field = '<input type="hidden" name="' . $name . '" value="stub-nonce" />';

        if ($display) {
            echo $field;
        }

        return $field;
    }
}

if (!function_exists('wp_verify_nonce')) {
    function wp_verify_nonce(string $nonce, string|int $action = -1): bool
    {
        return true;
    }
}

if (!function_exists('body_class')) {
    function body_class(array|string $class = ''): void {}
}

if (!function_exists('wp_body_open')) {
    function wp_body_open(): void {}
}

if (!function_exists('wp_footer')) {
    function wp_footer(): void {}
}

if (!function_exists('wp_unslash')) {
    function wp_unslash(string|array $value): string|array
    {
        return is_array($value) ? array_map('wp_unslash', $value) : stripslashes($value);
    }
}

if (!function_exists('sanitize_text_field')) {
    function sanitize_text_field(string $str): string
    {
        return trim(strip_tags($str));
    }
}

if (!function_exists('sanitize_email')) {
    function sanitize_email(string $email): string
    {
        return filter_var($email, FILTER_SANITIZE_EMAIL) ?: '';
    }
}

if (!function_exists('wp_strip_all_tags')) {
    function wp_strip_all_tags(string $text, bool $remove_breaks = false): string
    {
        $stripped = strip_tags($text);
        return $remove_breaks ? preg_replace('/[\r\n\t ]+/', ' ', $stripped) ?? '' : $stripped;
    }
}

if (!function_exists('wp_mail')) {
    function wp_mail(string|array $to, string $subject, string $message, string|array $headers = '', array $attachments = array()): bool
    {
        return true;
    }
}

if (!function_exists('wp_safe_redirect')) {
    function wp_safe_redirect(string $location, int $status = 302, string $x_redirect_by = 'WordPress'): bool
    {
        return true;
    }
}

if (!function_exists('get_header')) {
    function get_header(string $name = null, array $args = array()): void {}
}

if (!function_exists('get_footer')) {
    function get_footer(string $name = null, array $args = array()): void {}
}

if (!function_exists('have_posts')) {
    function have_posts(): bool
    {
        return false;
    }
}

if (!function_exists('the_post')) {
    function the_post(): void {}
}

if (!function_exists('the_title')) {
    function the_title(): void {}
}

if (!function_exists('the_content')) {
    function the_content(): void {}
}
