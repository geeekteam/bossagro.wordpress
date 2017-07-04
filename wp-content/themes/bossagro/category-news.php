<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bossagro
 */

global $post;
$postcat = get_the_category( $post->ID );
$postdescr = get_the_content();

get_header(); ?>
    <div class="news-page">
        <div class="container">
            <ul class="breadcrumbs">
                <li class="breadcrumbs__item"><a class="link-with-underline link-gray" href="/">Главная</a></li>
                <li class="breadcrumbs__item"><a class="link-with-underline link-gray" href=""><?=$postcat[0]->name;?></a></li>
            </ul>
            <div class="d-flex">
                <div class="page-content">
                    <h2 class="h2-title"><?=$postcat[0]->name;?></h2>
                    <div class="news">
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', 'news');
                            endwhile; ?>
                        <?php endif;?>
                    </div>
                </div>
                <?php get_sidebar();?>
            </div>
        </div>
    </div>

<?php

get_footer();
