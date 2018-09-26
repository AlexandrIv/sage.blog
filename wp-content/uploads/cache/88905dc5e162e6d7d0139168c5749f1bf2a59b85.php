<?php
if (post_password_required()) {
  return;
}
?>

<section id="comments" class="comments">
  <?php if(have_comments()): ?>
    <h2>
      Comments
      <?php echo get_comments_number(); ?>

      
    </h2>

    <div class="comment-list">
      
      <?php echo e(wp_list_comments('type=comment&callback=mytheme_comment')); ?>

      
    </div>

    <?php if(get_comment_pages_count() > 1 && get_option('page_comments')): ?>
      <nav>
        <ul class="pager">
          <?php if(get_previous_comments_link()): ?>
            <li class="previous"><?php previous_comments_link(__('&larr; Older comments', 'sage')) ?></li>
          <?php endif; ?>
          <?php if(get_next_comments_link()): ?>
            <li class="next"><?php next_comments_link(__('Newer comments &rarr;', 'sage')) ?></li>
          <?php endif; ?>
        </ul>
      </nav>
    <?php endif; ?>
  <?php endif; ?>

  <?php if(!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments')): ?>
    <div class="alert alert-warning">
      <?php echo e(__('Comments are closed.', 'sage')); ?>

    </div>
  <?php endif; ?>
  
  <?php comment_form() ?>
  
</section>
