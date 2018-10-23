

<?php
	$type = $_GET['search-type']
?>

<?php if(isset($_GET['search-type'])): ?>
	<?php if($type == 'shop'): ?> 
		<?php echo $__env->make('partials.shop-search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 	<?php elseif($type == 'blog'): ?> 
		<?php echo $__env->make('partials.blog-search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php endif; ?>
<?php endif; ?>