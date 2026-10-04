<?php
if (!function_exists('get_header')) {
    require_once __DIR__ . '/wordpress-stubs.php';
}
get_header();
?>

<main id="top">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <section class="section">
                <div class="section-heading narrow">
                    <p class="eyebrow">Page</p>
                    <h2><?php the_title(); ?></h2>
                </div>

                <article class="consultation-card">
                    <?php the_content(); ?>
                </article>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>