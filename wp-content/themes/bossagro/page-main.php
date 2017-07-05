<?php

/**
 * template name: Главная страница
 */

$news_args = array(
    'category' => 7,
    'numberposts' => 4,
);
$news_arr = get_posts($news_args);
$news_id = $news_arr['ID'];

$articles_args = array(
    'category' => 8,
    'numberposts' => 4,
);
$articles_arr = get_posts($articles_args);
$articles_id = $articles_arr['ID'];

$partners = get_field('partners', 164);
$articles_count = get_field('articles_view', 164);
$news_view = get_field('news_view', 164);

get_header();

?>

<div class="main-page">
    <div class="container">
        <div class="d-flex">
            <div class="page-content">
                <h2 class="h2-title">Новости</h2>
                <div class="news">
                    <?php foreach ($news_arr as $news) : ?>
                        <div class="news-wrapper">
                            <div class="news-item">
                                <div class="news-item__image-wrapper">
                                    <a class="image-link" href="<?=get_post_permalink($news->ID); ?>"><img class="news-item__image" src="<?=get_the_post_thumbnail_url($news->ID); ?>"></a>
                                </div>
                                <a class="news-item__title" href="<?=get_post_permalink($news->ID); ?>"><?=get_the_title($news->ID)?></a>
                                <p class="news-item__text"><?=mb_substr($news->post_content, 0, 210) . "..."; ?></p>
                                <div class="news-item__bottom d-flex">
                                    <a class="button button_green" href="<?=get_post_permalink($news->ID); ?>">Читать далее</a>
                                    <div class="statistic-and-date">
                                        <i class="fri fri-date"></i>
                                        <span class="news-item__date"><?=get_the_date('d.m.Y', $news->ID); ?></span>
                                        <i class="fri fri-views"></i>
                                        <span class="articles-item__views"><?php echo_views(get_the_ID()); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <p class="all-news">
                    <a class="all-news-link link-without-underline link-dark" href="<?=get_category_link(7);?>">Все новости</a>
                </p>
                <h2 class="h2-title">Статьи</h2>
                <div class="articles">
                    <?php foreach ($articles_arr as $articles) : ?>
                        <div class="articles-wrapper">
                            <div class="articles-item">
                                <div class="articles-item__left-part">
                                    <a class="image-link" href="<?=get_post_permalink($articles->ID); ?>"><img class="articles-item__image" src="<?=get_the_post_thumbnail_url($articles->ID); ?>"></a>
                                </div>
                                <div class="articles-item__right-part">
                                    <a class="articles-item__title" href="<?=get_post_permalink($articles->ID); ?>"><?=get_the_title($articles->ID)?></a>
                                    <p class="news-item__text"><?=mb_substr($articles->post_content, 0, 210) . "..."; ?></p>
                                    <div class="articles-item__bottom news-item__bottom">
                                        <a class="button button_green" href="<?=get_post_permalink($articles->ID); ?>">Читать далее</a>
                                        <div class="articles-item__statistic-and-date">
                                            <i class="fri fri-date"></i>
                                            <span class="articles-item__date"><?= get_the_date('d.m.Y', $articles->ID); ?></span>
                                            <i class="fri fri-views"></i>
                                            <span class="articles-item__views"><?php echo_views(get_the_ID()); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
                <p class="all-news">
                    <a class="all-news-link link-without-underline link-dark" href="<?=get_category_link(8);?>">Все статьи</a>
                </p>
            </div>
            <?php get_sidebar(); ?>
        </div>
        <h2 class="h2-title">Партнеры</h2>
        <div class="partners owl-carousel jq-partners-slider">
            <?php foreach ($partners as $partner):?>
                <a class="partners-wrapper" href="<?=$partner['partner_link'];?>" target="_blank">
                    <img class="partners__image" src="<?=$partner['partner_image'];?>">
                </a>
            <?php endforeach;?>
        </div>
    </div>
</div>

<?php


get_footer();

?>