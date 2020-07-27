<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<div class="left-container">


			<div class="logo-container">




			</div>





			<div class="menu_3">

			<a class="menu_3_a" href="<?php echo get_page_link( get_page_by_title( home )->ID ); ?>"> WORK</a>


			<a class="menu_3_b"href="<?php echo get_page_link( get_page_by_title( home )->ID ); ?>">SHOP </a>

			</div>



		<nav id="site-navigation" class="menu2">


		<?php
		wp_nav_menu( array(
		'theme_location' => 'menu-1',
		'menu_id' => 'menu_shop',


		) );
		?> 
		</nav>


			
			
			






		</div>
		<div class="contacto">

		<h3>Contact<h3>
		<h2>Marina Vibot &hearts;</h2>
		<p><?php echo ci("ci_field_2"); ?></p>

		<p><a href="mailto:<?php echo ci("ci_field_4"); ?>"><?php echo ci("ci_field_4"); ?> </a></p>


		</div>





</div>	



<div class="productdes2">
				<?php if( get_field('producttxt') ): ?></p> 
															<?php the_field('producttxt'); ?>
																			<?php endif; ?> 
																	
		</div>
<div class="product_content2">

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );

	
?>
</div>
</div>


<?php do_action( 'woocommerce_after_single_product' ); ?>

