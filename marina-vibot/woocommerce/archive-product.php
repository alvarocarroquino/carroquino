<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */


defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */


?>



<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>





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




<div class="menu_movil">

	<a class="menu_movil_a" href="<?php echo get_page_link( get_page_by_title( work )->ID ); ?>"> WORK</a>


	<a class="menu_movil_b"href="<?php echo get_page_link( get_page_by_title( tienda )->ID ); ?>">SHOP </a>

</div>

<div class="index_menu">

<a href="<?php echo get_page_link( get_page_by_title( indexmovil )->ID ); ?>">+ </a>


</div>

<div class="contacto">

<h3>Contact<h3>
<h2>Marina Vibot &hearts;</h2>
<p><?php echo ci("ci_field_2"); ?></p>

<p><a href="mailto:<?php echo ci("ci_field_4"); ?>"><?php echo ci("ci_field_4"); ?> </a></p>


</div>


<div>


</div>																			
																		
																			

																			



<div class="shop_content" >

		
		<?php
		if ( woocommerce_product_loop() ) {

			/**
			 * Hook: woocommerce_before_shop_loop.
			 *
			 * @hooked woocommerce_output_all_notices - 10
			 * @hooked woocommerce_result_count - 20
			 * @hooked woocommerce_catalog_ordering - 30
			 */
			

			woocommerce_product_loop_start();

			if ( wc_get_loop_prop( 'total' ) ) {
				while ( have_posts() ) {
					the_post();

					/**
					 * Hook: woocommerce_shop_loop.
					 */
					do_action( 'woocommerce_shop_loop' );

					wc_get_template_part( 'content', 'product' );
				}
			}

			woocommerce_product_loop_end();

			/**
			 * Hook: woocommerce_after_shop_loop.
			 *
			 * @hooked woocommerce_pagination - 10
			 */
			do_action( 'woocommerce_after_shop_loop' );
		} else {
			/**
			 * Hook: woocommerce_no_products_found.
			 *
			 * @hooked wc_no_products_found - 10
			 */
			do_action( 'woocommerce_no_products_found' );
		}

		/**
		 * Hook: woocommerce_after_main_content.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );

		/**
		 * Hook: woocommerce_sidebar.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		?>





</div>


