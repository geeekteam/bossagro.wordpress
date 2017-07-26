<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package bossagro
 */

get_header(); ?>

<div class="news-page">
    <div class="container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item"><a class="link-with-underline link-gray" href="/">Главная</a></li>
            <li class="breadcrumbs__item"><a class="link-with-underline link-gray" href="#">Поиск</a></li>
        </ul>
        <div class="d-flex">
            <div class="page-content">
                <div class="news">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content', 'news');
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