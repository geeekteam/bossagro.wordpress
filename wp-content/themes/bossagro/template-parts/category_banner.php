<?php

$banner = get_field('banner', 308);
$link = get_field('link', 308);

?>

<div class="news-banner">
    <a class="link-image" href="<?=$link;?>" target="_blank">
        <img src="<?=$banner;?>">
    </a>
</div>