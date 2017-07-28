<?php

/**
 * template name: Редакция
 */

$slider = get_field('slider', 332);

get_header();
?>

<div class="article-page">
    <div class="container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item"><a class="link-with-underline link-gray" href="/">Главная</a></li>
            <li class="breadcrumbs__item"><a class="link-with-underline link-gray" href="#">Редакция</a></li>
        </ul>
        <div class="d-flex">
            <div class="page-content">
                <div class="page-content-wrapper">
                    <h3 class="h3-title">Редакция</h3>
                    <div class="redaction owl-carousel jq-redaction-slider">
                        <?php foreach ($slider as $slide):?>
                            <img src="<?=$slide['slide'];?>" class="redaction-slider-image">
                        <?php endforeach;?>
                    </div>
                    <div class="article">
                        <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', 'page' );

                        endwhile;
                        ?>
                        <div class="shared">
                            <span class="shared__title">Поделиться:</span>
                            <div class="pluso" data-background="transparent" data-options="big,round,line,horizontal,nocounter,theme=04" data-services="facebook,twitter,google,vkontakte,email"></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php

get_footer();

?>
