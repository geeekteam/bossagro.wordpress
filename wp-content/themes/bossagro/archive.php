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

$category = get_queried_object();
$category_slug = $category->slug;
$posts_count = (int)$category->count;
$posts_per_page = (int)get_option( 'posts_per_page' );
$all_pages = (int)$posts_count/(int)$posts_per_page;
$current_page = get_query_var('paged');
//$last_pages_count = 3;
//$first_pages_count = 3;
//$all_pages_count = 7;
//for ($i = 0; $i < $pages; $i++) : $j = $i+1;
//    $pages_array[] = $j;
//endfor;
//$last_pages = array_slice($pages_array, -$last_pages_count);
//if ($current_page > $first_pages_count) :
//    $first_pages = array_slice($pages_array, $current_page-$first_pages_count, $first_pages_count);
//else :
//    $first_pages = array_slice($pages_array, 0, $first_pages_count);
//endif;
//$all_last_pages = array_slice($pages_array, -$all_pages_count);

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
                    <div class="articles">
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', 'articles');
                            endwhile; ?>
                        <?php endif;?>
                    </div>
                    <div class="all-news"></div>
                    <ul class="pagination">
                        <li class="pagination__item">
                            <a href="<?php echo '/category/'. $category_slug .'/page/' . ($current_page - 1); ?>">
                                <
                            </a>
                        </li>
                        <?php for ($i = 0; $i < $all_pages; $i++) : $j = $i+1; ?>
                        <li class="pagination__item">
                            <a href="<?php echo '/category/'. $category_slug .'/page/' . ($i); ?>">
                                <?=$i+1;?>
                            </a>
                        </li>
                        <?php endfor;?>
                        <li class="pagination__item">
                            <a href="<?php echo '/category/'. $category_slug .'/page/' . ($current_page - 1); ?>">
                                >
                            </a>
                        </li>
                    </ul>
                </div>
                <?php get_sidebar();?>
            </div>
        </div>
    </div>

<?php

get_footer();
