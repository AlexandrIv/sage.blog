<?php
  $header = get_field('select_header_blog', 'option');
  $footer = get_field('select_footer_blog', 'option');
?>
<!doctype html>
<html <?php echo e(get_language_attributes()); ?>>
<?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body <?php body_class() ?>>
  <?php do_action('get_header') ?>
   <div class="preloader">
    <div class="laoder-frame">
      <img class="svg-loader" src="<?= App\asset_path('images/loader.svg'); ?>" alt="circle-loader">
    </div>
  </div>
  <?php if($header == 'blog-header'): ?>
    <?php echo $__env->make('partials.blog-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php elseif($header == 'page-header'): ?>
    <?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('partials.header-slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
  <?php if($footer == 'blog-footer'): ?>
    <?php echo $__env->make('partials.blog-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php elseif($footer == 'page-footer'): ?>
    <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endif; ?>
  <?php wp_footer() ?>
</body>
</html>
