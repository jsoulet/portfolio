<form action="<?php echo home_url( '/' ); ?>" method="get">
        <label for="search_bar">Search: </label>
        <input type="text" name="s" id="search_bar" value="<?php the_search_query(); ?>" placeholder="Keywords..." />
        <input type="submit" value="s" id="search_btn" />
</form>