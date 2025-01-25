<?php
/**
 * Template Name: Blog
 * Description: Yazılar için bir sayfa
 * 
 */

get_header();
?>

<div class="container">
    <h1 class="cs-title">Blog</h1>
    <hr class="cs-hr">

    <?php
    $args= [
        'post_type'     => 'post',
        'posts_per_page'=> 10,
        'paged'         => get_query_var('paged') ?: 1,
    ];
    $blog_query = new WP_Query($args);
    
    if($blog_query->have_posts()) :
        while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2 class="cs-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <hr class="cs-hr">
                <div class="post-content">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; ?>
        <!-- (Pagination) -->
        <div class="cs-pagination">
        <?php
        echo paginate_links([
            'total' => $blog_query->max_num_pages
        ]);
        ?>
        </div>

        <?php else : ?>
            <p class="cs-input__label">Henüz blog yazısı yok gibi duruyor.</p>
        <?php endif;

        
        wp_reset_postdata();
        ?>

        </div><!-- .container -->

        <?php get_footer(); ?>
