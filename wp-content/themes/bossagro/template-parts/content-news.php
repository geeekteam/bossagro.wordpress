<div class="news-wrapper">
    <div class="news-item">
        <div class="news-item__image-wrapper">
            <a class="image-link" href="<?php the_permalink(get_the_ID());?>"><img class="news-item__image" src="<?=get_the_post_thumbnail_url(get_the_ID()); ?>"></a>
        </div>
        <a class="news-item__title" href="<?php the_permalink(get_the_ID());?>"><?=the_title();?></a>
        <div class="news-item__text"><?php the_excerpt();?></div>
        <div class="news-item__bottom d-flex">
            <a class="button button_green" href="<?php the_permalink(get_the_ID());?>">Читать далее</a>
            <div class="statistic-and-date">
                <i class="fri fri-date"></i>
                <span class="news-item__date"><?php echo get_the_date('d.m.Y', get_the_ID()); ?></span>
                <i class="fri fri-views"></i>
                <span class="news-item__views">25</span>
            </div>
        </div>
    </div>
</div>