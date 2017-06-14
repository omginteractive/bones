<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
    <div class="input-group">
        <input type="search" id="s" name="s" value="" class="form-control" placeholder="<?php echo 'Search for...'; ?>" />
        <span class="input-group-btn">
            <button type="submit" id="searchsubmit" class="btn btn-primary"><?php echo 'Search'; ?></button>
        </span>
    </div>
</form>