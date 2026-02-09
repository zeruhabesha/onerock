<?php
/**
 * Page template override for Portfolio.
 *
 * @package OneRock
 */

$template = locate_template('page-templates/portfolio.php');
if ($template) {
    include $template;
    return;
}

get_header();
?>

<main class="page-content">
    <div class="container">
        <h2><?php esc_html_e('Portfolio template missing', 'onerock'); ?></h2>
        <p><?php esc_html_e('The portfolio layout could not be loaded. Please contact support so we can restore it.', 'onerock'); ?></p>
    </div>
</main>

<?php get_footer(); ?>
