<form role="search" method="get" class="search-form" action="<?php echo e($sf_action); ?>">
  <label>
    <span class="screen-reader-text"><?php echo e($sf_screen_reader_text); ?></span>
    <input type="search" class="search-field" placeholder="<?php echo $sf_placeholder; ?>" value="<?php echo e($sf_current_query); ?>" name="s">
  </label>
  <input type="submit" class="search-submit" value="<?php echo e($sf_submit_text); ?>">
</form>
