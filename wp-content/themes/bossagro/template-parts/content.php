<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bossagro
 */

global $post;
$categories = get_the_category();

foreach ($categories as $category) :

    $exclude = get_the_ID();
    $posts = get_posts($category->term_id);

endforeach; wp_reset_postdata();

$category_id = 7;
$count = 8;

$recent = new WP_Query("cat=$category_id&showposts=$count");

?>


<ul class="breadcrumbs">
    <li class="breadcrumbs__item"><a class="link-with-underline link-gray" href="/">Главная</a></li>
    <li class="breadcrumbs__item">
        <a class="link-with-underline link-gray" href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>">
            <?php echo $category->cat_name;?>
        </a>
    </li>
    <li class="breadcrumbs__item"><a class="link-with-underline link-gray" href="#"><?php trim_title_chars(80, '...'); ?></a></li>
</ul>

<div class="d-flex">
    <div class="page-content">
        <div class="page-content-wrapper">
            <?php the_title('<h3 class="h3-title">', '</h3>'); ?>
        </div>
        <div class="statistic-and-date mb15">
            <i class="fri fri-date"></i>
            <span class="articles-item__date"><?php the_date('d.m.Y')?></span>
            <i class="fri fri-views"></i>
            <span class="articles-item__views"><?php echo_views(get_the_ID()); ?></span>
        </div>
        <div class="article">
            <div class="article-image-wrapper">
                <img class="article-image" src="<?php the_post_thumbnail(); ?>">
            </div>
            <div>
                <?php the_content();?>
            </div>
            <div class="shared">
                <span class="shared__title">Поделиться:</span>
                <div class="pluso" data-background="transparent" data-options="big,round,line,horizontal,nocounter,theme=04" data-services="facebook,twitter,google,vkontakte,email"></div>
            </div>
        </div>
        <div class="articles-slider owl-carousel jq-articles-slider">
            <?php
            while($recent->have_posts()){
            $recent->the_post();?>
                <a class="articles-slider__item" href="<?php the_permalink() ?>">
                    <div class="articles-slider__image-wraper">
                        <img class="articles-slider__image" src="<?php the_post_thumbnail(); ?>">
                    </div>
                    <div class="articles-slider__text"><?php trim_title_chars(80, '...'); ?></div>
                </a>
            <?php } ?>
        </div>
        <h2 class="h2-title h2-title_medium">Похожие статьи</h2>
        <div class="similar-articles owl-carousel jq-similar-articles-slider">
            <?php $categories = get_the_category($post->ID);
            if ($categories) {
                $category_ids = array();
                foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                $args=array(
                    'category__in' => $category_ids, // Сортировка производится по категориям
                    'orderby'=>rand, // Условие сортировки рандом
                    'post__not_in' => array($post->ID),
                    'showposts'=>3, //Количество выводимых записей
                    'caller_get_posts'=>1); // Запрещаем повторение ссылок
                $my_query = new wp_query($args);
                if( $my_query->have_posts() ) { ?>
                    <?php while ($my_query->have_posts()) {
                        $my_query->the_post();
                        ?>
                        <a class="similar-articles__item" href="<?php the_permalink() ?>" target="_blank">
                            <div class="similar-articles__image-wrapper">
                                <?php the_post_thumbnail('medium',['class' => 'similar-articles__image']); ?>
                            </div>
                            <div class="similar-articles__text"><?php trim_title_chars(80, '...'); ?></div>
                            <div class="articles-item__bottom">
                                <span class="button button_green">Читать далее</span>
                                <div class="statistic-and-date">
                                    <i class="fri fri-date"></i>
                                    <span class="articles-item__date"><?=get_the_date('d.m.Y');?></span>
                                </div>
                            </div>
                        </a>
                    <?php }?>
                <?php }
                wp_reset_query();
            }?>
        </div>
    </div>
    <?php get_sidebar(); ?>
</div>