<form role="search" method="get" id="searchform" class="form-inline searchform" action="<?php echo home_url( '/' ); ?>">
    <div class="form-group">
        <label for="s" class="sr-only screen-reader-text"><?php echo 'Search for:'; ?></label>
        <input type="search" id="s" name="s" value="" class="form-control" placeholder="<?php echo 'Search for:'; ?>" />

        <button type="submit" id="searchsubmit" class="btn btn-default"><?php echo 'Search'; ?></button>
    </div>
</form>