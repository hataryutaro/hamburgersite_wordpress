<form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="p-search-form">
    <label for="s">
        <input type="search" name="s" id="s" placeholder=" &#xf002" class="p-search-form__box" value="<?php if(get_search_query()) echo get_search_query() ?>">
        <input type="submit" name="submit" value="検索" class="p-search-form__btn">
    </label>
</form>
