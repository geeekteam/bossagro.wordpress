<div class="articles-wrapper">
    <div class="articles-item">
        <div class="articles-item__left-part">
            <img class="news-item__image" src="<?=get_the_post_thumbnail_url(get_the_ID()); ?>">
        </div>
        <div class="articles-item__right-part">
            <a class="articles-item__title" href="<?php the_permalink(get_the_ID());?>"><?=the_title();?></a>
            <div class="news-item__text"><?the_excerpt();?></div>
            <div class="articles-item__bottom news-item__bottom">
                <a class="button button_green" href="<?php the_permalink(get_the_ID());?>">Читать далее</a>
                <div class="articles-item__statistic-and-date">
                    <i class="fri fri-date"></i>
                    <span class="articles-item__date"><?php echo get_the_date('d.m.Y', get_the_ID()); ?></span>
                    <i class="fri fri-views"></i>
                    <span class="articles-item__views">25</span>
                </div>
            </div>
        </div>
    </div>
</div>