<form role="search" method="get" id="searchform" class="form-inline searchform" action="<?php echo home_url( '/' ); ?>">
    <div class="form-group">
        <label for="s" class="sr-only screen-reader-text"><?php _e('Search for:','bonestheme'); ?></label>
        <input type="search" id="s" name="s" value="" class="form-control" placeholder="<?php _e('Search for:','bonestheme'); ?>" />

        <button type="submit" id="searchsubmit" class="btn btn-default"><?php _e('Search','bonestheme'); ?></button>
    </div>
</form>