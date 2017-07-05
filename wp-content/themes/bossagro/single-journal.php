<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bossagro
 *
 * Template Name: Журнал "Агро-Босс"
 */

get_header(); ?>

    <div class="article-page">
        <div class="container">
            <div class="d-flex">
                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', 'journal');

                endwhile;
                get_sidebar();
                ?>
            </div>
        </div>
    </div>

<?php

get_footer();