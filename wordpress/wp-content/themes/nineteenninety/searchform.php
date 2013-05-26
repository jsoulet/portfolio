<div class="search-form span3 omega">
    <form action="<?php echo home_url( '/' ); ?>" method="get" class="form-search form-inline">
            <label for="search" class="navbar-text">Search: </label>
            <div class="input-append">
                <input class="input-small search-query" type="text" id="search" placeholder="Enter keywords here..." value="<?php the_search_query(); ?>" name="s"/>
                <button class="btn symbol search-btn" type="submit" title="Search">s</button>
            <div>
    </form>
</div>