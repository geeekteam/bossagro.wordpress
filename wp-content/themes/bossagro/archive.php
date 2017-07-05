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
$posts_count = $category->count;
$posts_per_page = get_option( 'posts_per_page' );
$all_pages = (int)$posts_count/(int)$posts_per_page;
$current_page = get_query_var('paged');
$last_pages_count = 3;
$first_pages_count = 3;
$all_pages_count = 7;
$first_page = 1;
$pages_array = [];
for ($i = 0; $i < $all_pages; $i++) : $j = $i+1;
    $pages_array[] = $j;
endfor;
$last_pages = array_slice($pages_array, -$last_pages_count);
if ($current_page > $first_pages_count) :
    $first_pages = array_slice($pages_array, $current_page-$first_pages_count, $first_pages_count);
else :
    $first_pages = array_slice($pages_array, 0, $first_pages_count);
endif;
$all_last_pages = array_slice($pages_array, -$all_pages_count);

get_header();

?>
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
                        <li class="pagination__item <?php if($current_page == 0) : echo 'inactive'; endif; ?>"><a href="<?php echo '/category/'. $category_slug .'/page/1'; ?>"><<</a></li>
                        <li class="pagination__item <?php if($current_page == 0) : echo 'inactive'; endif; ?>"><a href="<?php echo '/category/'. $category_slug .'/page/' . ($current_page - 1); ?>"><</a></li>
                        <?php if (($all_pages > 7) && end($first_pages) < $last_pages[0] ) : ?>
                            <?php if ($first_pages) : foreach ($first_pages as $first_page) : ?>
                                 <li class="pagination__item <?php if ($current_page == 0) : $current_page += 1; endif; if ($first_page == $current_page) : echo 'active'; endif; ?>"">
                                     <a href="<?php echo '/category/'. $category_slug .'/page/' . $first_page; ?>"><?=$first_page;?></a>
                                 </li>
                            <?php endforeach; endif; ?>
                            <li class="pagination__item">
                                <a href="<?php echo '/category/'. $category_slug .'/page/' . ($first_page+1); ?>">...</a>
                            </li>
                            <?php if ($last_pages) :  foreach ($last_pages as $last_page) : ?>
                                <li class="pagination__item <?php if ($current_page == 0) : $current_page += 1; endif; if ($last_page == $current_page) : echo 'inactive'; endif; ?>">
                                    <a href="<?php echo '/category/'. $category_slug .'/page/' . $last_page; ?>"><?=$last_page; ?></a>
                                </li>
                            <?php endforeach; endif; ?>
                        <?php endif; ?>
                        <?php if (($all_pages > 7) && (end($first_pages)) >= ($last_pages[0]) ) : ?>
                            <?php if ($all_last_pages) : foreach ($all_last_pages as $all_last_page) : ?>
                                <li class="pagination__item <?php if ($current_page == 0) : $current_page += 1; endif; if ($all_last_page == $current_page) : echo 'active'; endif; ?>">
                                    <a href="<?php echo '/category/'. $category_slug .'/page/' . $all_last_page; ?>"><?=$all_last_page; ?></a>
                                </li>
                            <?php endforeach; endif; ?>
                        <?php endif; ?>
                        <?php if ($all_pages < 7) : ?>
                            <?php if ($pages_array) : foreach ($pages_array as $page_array) : ?>
                            <li class="pagination__item <?php if ($current_page == 0) : $current_page += 1; endif; if ($page_array == $current_page) : echo 'inactive'; endif; ?>">
                                <a href="<?php echo '/category/'. $category_slug .'/page/' . $page_array; ?>"><?=$page_array; ?></a>
                            </li>
                            <?php endforeach; endif; ?>
                        <?php endif; ?>
                        <li class="pagination__item <?php if($current_page == 0) : echo 'inactive'; endif; ?> <?php if($current_page >= $all_pages) : echo 'inactive'; endif; ?>"><a href="<?php echo '/category/'. $category_slug .'/page/' . ($current_page + 1); ?>">></a></li>
                        <li class="pagination__item <?php if($current_page == 0) : echo 'inactive'; endif; ?> <?php if($current_page >= $all_pages) : echo 'inactive'; endif; ?>"><a href="<?php echo '/category/'. $category_slug .'/page/' . ($last_page); ?>">>></a></li>
                    </ul>
                </div>
                <?php get_sidebar();?>
            </div>
        </div>
    </div>

<?php

get_footer();
