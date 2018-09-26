<?php
  $header_page = get_field('select_header_page', get_the_ID(), 'option');
  $footer_page = get_field('select_footer_page', get_the_ID(), 'option');
?>

<!doctype html>
<html <?php echo e(get_language_attributes()); ?>>
<?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body <?php body_class() ?>>
  <?php do_action('get_header') ?>

  <?php if($header_page == 'page-header'): ?>
    <?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('partials.header-slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php elseif($header_page == 'blog-header'): ?>
    <?php echo $__env->make('partials.blog-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endif; ?>

  <div class="wrap" role="document">
    <div class="content">
      <main class="main">
        <?php echo $__env->yieldContent('content'); ?>
      </main>
      <?php if(App\display_sidebar()): ?>
      <aside class="sidebar">
        <?php echo $__env->make('partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </aside>
      <?php endif; ?>
    </div>
  </div>
  <?php do_action('get_footer') ?>
  <?php if($footer_page == 'Blog footer'): ?>
    <?php echo $__env->make('partials.blog-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php elseif($footer_page == 'Page footer'): ?>
    <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endif; ?>
  <?php wp_footer() ?>
</body>
</html>
