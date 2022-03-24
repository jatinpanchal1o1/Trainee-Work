<?php $show_breadcrumbs = couponxl_get_option( 'show_breadcrumbs' ); 
$breadcrumbs = couponxl_get_breadcrumbs();
if( !empty( $breadcrumbs ) ):
?>
	<section class="breadcrumb-section <?php echo 'yes' == $show_breadcrumbs ? '' : 'breadcrumb-hide' ?>">
		<div class="container">
			<?php echo wp_kses_post( $breadcrumbs ); ?>
		</div>
	</section>
<?php else: ?>
	<section class="breadcrumb-section">
	</section>
<?php endif; ?>