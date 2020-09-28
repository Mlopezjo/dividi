<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
	$pid 	= $product->get_id();
	$pname 	= $product->get_name();
	$pprix 	= $product->get_price_html();
	$pthum 	= $product->get_image();
	$toCart = $product->add_to_cart_url();
	$pCat 	= $product->get_category_ids();
/*
echo '<pre>';
print_r($product);
echo '</pre>';*/
?>

<div class="<?php echo $pCat[0]; ?> col-sm-10 col-md-5 col-lg-3 mt-3">
    <div class="card" style="background-color: rgb(33,33,33);">
			<img class="card-img-top" src=<?php echo $pthum; ?>>
      <div class="card-body text-white text-center">
            <h5 class="card-title"><?php echo $pname; ?></h5>
						<p class="card-text prix"><?php echo $pprix; ?></p>
						<a class="mr-auto btn btn-success m-1 seeProduct" href="<?php echo the_permalink(); ?>">En Savoir +</a>
						<!--<a href="<?php echo $toCart; ?>"
						 data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart mr-auto btn btn-success m-1 " data-product_id="<?php echo $pid; ?>" data-product_sku="" aria-label="Ajouter “cookie” à votre panier" rel="nofollow">Ajouter au panier</a>-->
						<p class="prod-btn">
						<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
						</p>
			</div>
    </div>
</div>
