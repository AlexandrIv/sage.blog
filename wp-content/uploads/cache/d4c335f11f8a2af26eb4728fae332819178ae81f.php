

<div class="content-single">
  <div class="container">
   <div class="row">
    <div class="col-md-9">
      <div class="breadcrumbs" typeof="BreadcrumbList">
        <?php if(function_exists('bcn_display')): ?>
        <?php echo bcn_display();; ?>

        <?php endif; ?>
      </div>
      <div class="post-single-page">
        <article>
          <h2><?php echo e(get_the_title()); ?></h2>
          <div class="meta">
            <ul>
              <li><?php echo e(get_the_date()); ?></li>
              <li><a href="<?php echo e(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php echo e(get_the_author()); ?></a></li>
              <li><?php echo e(comments_number()); ?></li>
              <li><a href="<?php echo get_the_category('ID'); ?>">Posted in <span><?php echo the_category('ID'); ?></span></a></li>
            </ul>
          </div>
          <div class="thumbnail">
            <?php echo get_the_post_thumbnail();; ?>

          </div>
          <div class="content">
            <?php echo e(the_content()); ?>

          </div>
        </article>
        <div class="tag">
          <?php echo wp_tag_cloud(); ?>

        </div>
        <div class="share">
          <a href="#">Facebook</a>
          <a href="#">Twitter</a>
        </div>
        <div class="comment-block">
          <?php comments_template('/partials/comments.blade.php') ?>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="sidebar-single">
        <?php echo $__env->make('partials/sidebar-single', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </div>
    </div>
  </div>
</div>
</div>





