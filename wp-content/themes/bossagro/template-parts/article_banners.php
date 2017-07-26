<?php

$banner_1 = get_field('banner_1', 319);
$link_1 = get_field('link_1', 319);
$banner_2 = get_field('banner_2', 319);
$link_2 = get_field('link_2', 319);

?>

<div class="news-banners">
    <div class="news-banners__first">
        <a class="link-image" href="<?=$link_1;?>" target="_blank">
            <img src="<?=$banner_1;?>">
        </a>
    </div>
    <div class="news-banners__second">
        <a class="link-image" href="<?=$link_2;?>" target="_blank">
            <img src="<?=$banner_2;?>">
        </a>
    </div>
</div>