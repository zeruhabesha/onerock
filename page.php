<?php
/**
 * The template for displaying all pages
 * 
 * @package OneRock
 */

get_header();
?>

<!-- Generic Page Header -->
<header class="page-hero">
    <div class="page-hero-container">
        <div class="page-hero-content animate fade-in">
            <h1 class="page-title reveal-text shimmer-text"><?php the_title(); ?></h1>
        </div>
    </div>
</header>

<!-- Page Content -->
<div class="container" style="padding: 60px 20px;">
    <?php
    while (have_posts()) :
        the_post();
        the_content();
    endwhile;
    ?>
</div>

<?php get_footer(); ?>
