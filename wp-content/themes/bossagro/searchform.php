<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
    <span class="search-wrapper"><input class="input input_search" type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Поиск" /></span>
    <span><input class="button button_green button_search" type="submit" id="searchsubmit" value="найти" /></span>
</form>