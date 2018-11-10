<?php
/**
 * Outstock Themes functions and definitions
 *
 * @package WordPress
 * @subpackage Outstock_theme
 * @since Outstock Themes 1.2
 */
//Plugin-Activation
require_once( get_template_directory().'/class-tgm-plugin-activation.php' );

 //Init the Redux Framework
if ( class_exists( 'ReduxFramework' ) && !isset( $redux_demo )){
	if(file_exists( trailingslashit(get_stylesheet_directory()) . 'theme-config.php')){
		require_once( trailingslashit(get_stylesheet_directory()) . 'theme-config.php' );
	}else{
		require_once( trailingslashit(get_template_directory()) . 'theme-config.php' );
	}
}



// require system parts
if ( file_exists( get_template_directory().'/includes/theme-helper.php' ) ) {
	require_once( get_template_directory().'/includes/theme-helper.php' );
}
if ( file_exists( get_template_directory().'/includes/widget-areas.php' ) ) {
	require_once( get_template_directory().'/includes/widget-areas.php' );
}
if ( file_exists( get_template_directory().'/includes/head-media.php' ) ) {
	require_once( get_template_directory().'/includes/head-media.php' );
}
if ( file_exists( get_template_directory().'/includes/bootstrap-extras.php' ) ) {
	require_once( get_template_directory().'/includes/bootstrap-extras.php' );
}
if ( file_exists( get_template_directory().'/includes/bootstrap-tags.php' ) ) {
	require_once( get_template_directory().'/includes/bootstrap-tags.php' );
}
if ( file_exists( get_template_directory().'/includes/woo-hook.php' ) ) {
	require_once( get_template_directory().'/includes/woo-hook.php' );
}

// theme setup
function outstock_setup(){
	// Load languages
	load_theme_textdomain( 'outstock', get_template_directory() . '/languages' );
	
	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'image', 'gallery', 'video', 'audio' ) );
	
	if ( ! isset( $content_width ) ) $content_width = 625;
	
	add_theme_support( 'title-tag' );
	
	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );

	set_post_thumbnail_size( 1170, 9999 ); // Unlimited height, soft crop
	add_image_size( 'outstock-category-thumb', 1170, 597, true ); // (cropped)
	add_image_size( 'outstock-category-full', 1170, 597, true ); // (cropped)
	add_image_size( 'outstock-post-thumb', 1170, 597, true ); // (cropped)
	add_image_size( 'outstock-post-thumbwide', 539, 358, true ); // (cropped)
	
	add_theme_support( 'woocommerce' );
	
	add_theme_support( 'custom-background', array() );
	add_theme_support( 'custom-header', array() );
	
	register_nav_menu( 'primary', esc_html__( 'Primary Menu', 'outstock' ) );
	register_nav_menu( 'mobilemenu', esc_html__( 'Mobile Menu', 'outstock' ) );
	
	if(class_exists('WooCommerce')){
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
	}
	
	add_editor_style( array( 'css/editor-style.css' ) );
}
add_action( 'after_setup_theme', 'outstock_setup');

/**
* TGM-Plugin-Activation
*/
add_action( 'tgmpa_register', 'outstock_register_required_plugins'); 
function outstock_register_required_plugins(){
	$plugins = array(
				array(
					'name'               => esc_html__('LionThemes Helper', 'outstock'),
					'slug'               => 'lionthemes-helper',
					'source'             => get_template_directory() . '/plugins/lionthemes-helper.zip',
					'required'           => true,
					'external_url'       => '',
					'force_activation' => false,
					'force_deactivation' => false,
				),
				array(
					'name'               => esc_html__('Mega Main Menu', 'outstock'),
					'slug'               => 'mega_main_menu',
					'source'             => get_template_directory() . '/plugins/mega_main_menu.zip',
					'required'           => true,
					'external_url'       => '',
				),
				array(
					'name'               => esc_html__('Revolution Slider', 'outstock'),
					'slug'               => 'revslider',
					'source'             => get_template_directory() . '/plugins/revslider.zip',
					'required'           => true,
					'external_url'       => '',
				),
				array(
					'name'               => esc_html__('Visual Composer', 'outstock'),
					'slug'               => 'js_composer',
					'source'             => get_template_directory() . '/plugins/js_composer.zip',
					'required'           => true,
					'external_url'       => '',
				),
				// Plugins from the Online WordPress Plugin
				array(
					'name'               => esc_html__('Redux Framework', 'outstock'),
					'slug'               => 'redux-framework',
					'required'           => true,
					'force_activation'   => false,
					'force_deactivation' => false,
				),
				array(
					'name'      => esc_html__('Contact Form 7', 'outstock'),
					'slug'      => 'contact-form-7',
					'required'  => true,
				),
				array(
					'name'      => esc_html__('MailChimp for WP', 'outstock'),
					'slug'      => 'mailchimp-for-wp',
					'required'  => true,
				),
				array(
					'name'      => esc_html__('Projects', 'outstock'),
					'slug'      => 'projects-by-woothemes',
					'required'  => false,
				),
				array(
					'name'      => esc_html__('Shortcodes Ultimate', 'outstock'),
					'slug'      => 'shortcodes-ultimate',
					'required'  => true,
				),
				array(
					'name'      => esc_html__('TinyMCE Widget', 'outstock'),
					'slug'      => 'black-studio-tinymce-widget',
					'required'  => true,
				),
				array(
					'name'      => esc_html__('Testimonials', 'outstock'),
					'slug'      => 'testimonials-by-woothemes',
					'required'  => false,
				),
				array(
					'name'      => esc_html__('TinyMCE Advanced', 'outstock'),
					'slug'      => 'tinymce-advanced',
					'required'  => false,
				),
				array(
					'name'      => esc_html__('Widget Importer & Exporter', 'outstock'),
					'slug'      => 'widget-importer-exporter',
					'required'  => false,
				),
				array(
					'name'      => esc_html__('WooCommerce', 'outstock'),
					'slug'      => 'woocommerce',
					'required'  => true,
				),
				array(
					'name'      => esc_html__('YITH WooCommerce Compare', 'outstock'),
					'slug'      => 'yith-woocommerce-compare',
					'required'  => true,
				),
				array(
					'name'      => esc_html__('YITH WooCommerce Wishlist', 'outstock'),
					'slug'      => 'yith-woocommerce-wishlist',
					'required'  => true,
				),
				array(
					'name'      => esc_html__('YITH WooCommerce Zoom Magnifier', 'outstock'),
					'slug'      => 'yith-woocommerce-zoom-magnifier',
					'required'  => true,
				),
			);
			
	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'default_path' => '',                      // Default absolute path to pre-packaged plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
		'strings'      => array(
			'page_title'                      => esc_html__( 'Install Required Plugins', 'outstock' ),
			'menu_title'                      => esc_html__( 'Install Plugins', 'outstock' ),
			'installing'                      => esc_html__( 'Installing Plugin: %s', 'outstock' ), // %s = plugin name.
			'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'outstock' ),
			'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'outstock' ),
			'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'outstock' ), // %1$s = plugin name(s).
			'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'outstock' ), // %1$s = plugin name(s).
			'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'outstock' ), // %1$s = plugin name(s).
			'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'outstock' ), // %1$s = plugin name(s).
			'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'outstock' ), // %1$s = plugin name(s).
			'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'outstock' ), // %1$s = plugin name(s).
			'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'outstock' ), // %1$s = plugin name(s).
			'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'outstock' ),
			'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'outstock' ),
			'return'                          => esc_html__( 'Return to Required Plugins Installer', 'outstock' ),
			'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'outstock' ),
			'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'outstock' ), // %s = dashboard link.
			'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
		)
	);
	tgmpa( $plugins, $config );
}

function custom_price_shortcode_callback( $atts ) {

    $atts = shortcode_atts( array(
        'id' => null,
    ), $atts, 'product_price' );

    $html = '';

    if( intval( $atts['id'] ) > 0 && function_exists( 'wc_get_product' ) ){
        // Get an instance of the WC_Product object
        $product = wc_get_product( intval( $atts['id'] ) );

        // Get the product prices
        $price = $product->get_price(); // Get the active price
        $regular_price = $product->get_regular_price(); // Get the regular price
        $sale_price = $product->get_sale_price(); // Get the sale price

        // Your price CSS styles
        $style1 = 'style="font-size:40px;color:#e79a99;font-weight:bold;"';
        $style2 = 'style="font-size:25px;color:#e79a99"';

        // Formatting price settings (for the wc_price() function)
        $args = array(
            'ex_tax_label'       => false,
            'currency'           => 'EUR',
            'decimal_separator'  => '.',
            'thousand_separator' => ' ',
            'decimals'           => 2,
            'price_format'       => '%2$s&nbsp;%1$s',
        );

        // Formatting html output
        if( ! empty( $sale_price ) && $sale_price != 0 && $sale_price < $regular_price )
            $html = "<del $style2>" . wc_price( $regular_price, $args ) . "</del> <ins $style1>" . wc_price( $sale_price, $args ) . "</ins>"; // Sale price is set
        else
            $html = "<ins $style1>" . wc_price( $price, $args ) . "</ins>"; // No sale price set
    }
    return $html;
 }
 add_shortcode( 'product_price', 'custom_price_shortcode_callback' );

function wh_renderProductTagDetails()
{
    global $product;
    $tags = get_the_terms($product->get_id(), 'product_tag');
    //print_r($tags);
    if (empty($tags))
        return;
    foreach ($tags as $tag_detail)
    {			
        echo '<div class="xlarge-9 xlarge-centered columns"><p class="dsgn-footer-related-title"> ' . $tag_detail->name . '</p></div>'; //to print title
        echo '<div class="dsgn-footer-related"><div class="xlarge-9 xlarge-centered columns">' .  do_shortcode($tag_detail->description) . '</div></div>'; //to print description
    }
}

//move upsell products (spare products) bellow related products (designer products) 
add_action( 'init', 'move_upsells_after_related' );
function move_upsells_after_related( ) {
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
    add_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 25 );
}


//shortcode for designer title and description
add_shortcode('designer_info','wh_renderProductTagDetails');





// Show related products by designer (tag) 
add_filter( 'woocommerce_product_related_posts_relate_by_category', '__return_false' );

/**
 * Change number of related products output
 */ 
function woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 100;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
  function jk_related_products_args( $args ) {
	$args['posts_per_page'] = 100; // 4 related products
	$args['columns'] = 4; // arranged in 2 columns
	return $args;
}


//Add tax for CH country
add_action( 'woocommerce_cart_calculate_fees','woocommerce_custom_surcharge' );
function woocommerce_custom_surcharge() {
global $woocommerce;

if ( WC()->customer->get_shipping_country() == 'CH' || WC()->customer->get_shipping_country() == 'NO' ){

    $percentage = 0.077;
    $taxes = array_sum($woocommerce->cart->taxes);
    $surcharge = ( $woocommerce->cart->cart_contents_total + $woocommerce->cart->shipping_total ) * $percentage;   
    // Make sure that you return false here.  We can't double tax people!
    $woocommerce->cart->add_fee( '7,7% TAX', $surcharge, false, '' );
}
}

/**
*  Add custom handling fee to an order 
*/
function pt_add_handling_fee() {
     global $woocommerce;
 
if ( WC()->customer->get_shipping_country() == 'CH' || WC()->customer->get_shipping_country() == 'NO' ){
 	 $fee = 65.00;
     if(get_woocommerce_currency()=='CHF'): $fee = 74.00;
	 elseif(get_woocommerce_currency()=='USD'): $fee = 74.00;
	 elseif(get_woocommerce_currency()=='GBP'): $fee = 58.00;
	 elseif(get_woocommerce_currency()=='DKK'): $fee = 485.00;
	 endif; 
	 
	 $title = 'Customs Documents';
	
	 if(ICL_LANGUAGE_CODE=='it'): $title = 'Documenti Doganali';
	 elseif(ICL_LANGUAGE_CODE=='fr'): $title = 'Documents douaniers';
	 elseif(ICL_LANGUAGE_CODE=='de'): $title = 'Zoll Dokumente';
	 endif;

     $woocommerce->cart->add_fee( $title, $fee, TRUE, 'standard' );
}
}
// Action -> Add custom handling fee to an order
add_action( 'woocommerce_cart_calculate_fees', 'pt_add_handling_fee' );


function onixion_custom_discount() {
	global $woocommerce;
	$onixion_price_subtotal = WC()->cart->subtotal;
	$onixion_discount = 0;
	$onixion_discount_title = 'Discount: 0%';
	//EUR
	if (($onixion_price_subtotal > '200') && ($onixion_price_subtotal <= '600') && (get_woocommerce_currency()=='EUR')) {
		$onixion_discount = $onixion_price_subtotal*0.04*(-1);
		$onixion_discount_title = 'Discount: 4%';
		
	}
	if (($onixion_price_subtotal > '600') && ($onixion_price_subtotal <= '1200') && (get_woocommerce_currency()=='EUR')) {
		$onixion_discount = $onixion_price_subtotal*0.08*(-1);
		$onixion_discount_title = 'Discount: 8%';
		
	}
	if (($onixion_price_subtotal > '1200') && ($onixion_price_subtotal <= '2100') && (get_woocommerce_currency()=='EUR')) {
		$onixion_discount = $onixion_price_subtotal*0.14*(-1);
		$onixion_discount_title = 'Discount: 14%';
		
	}
	if (($onixion_price_subtotal > '2100') && ($onixion_price_subtotal <= '3000') && (get_woocommerce_currency()=='EUR')) {
		$onixion_discount = $onixion_price_subtotal*0.19*(-1);
		$onixion_discount_title = 'Discount: 19%';
		
	}
	if (($onixion_price_subtotal > '3000') && ($onixion_price_subtotal <= '3700') && (get_woocommerce_currency()=='EUR')) {
		$onixion_discount = $onixion_price_subtotal*0.23*(-1);
		$onixion_discount_title = 'Discount: 23%';
		
	}
	if (($onixion_price_subtotal > '3700') && ($onixion_price_subtotal <= '5000') && (get_woocommerce_currency()=='EUR')) {
		$onixion_discount = $onixion_price_subtotal*0.27*(-1);
		$onixion_discount_title = 'Discount: 27%';
		
	}
	if (($onixion_price_subtotal > '5000') && (get_woocommerce_currency()=='EUR')) {
		$onixion_discount = $onixion_price_subtotal*0.33*(-1);
		$onixion_discount_title = 'Discount: 33%';
		
	}
	//CHF
	if (($onixion_price_subtotal > '230') && ($onixion_price_subtotal <= '687') && (get_woocommerce_currency()=='CHF')) {
		$onixion_discount = $onixion_price_subtotal*0.04*(-1);
		$onixion_discount_title = 'Discount: 4%';
		
	}
	if (($onixion_price_subtotal > '687') && ($onixion_price_subtotal <= '1375') && (get_woocommerce_currency()=='CHF')) {
		$onixion_discount = $onixion_price_subtotal*0.08*(-1);
		$onixion_discount_title = 'Discount: 8%';
		
	}
	if (($onixion_price_subtotal > '1375') && ($onixion_price_subtotal <= '2405') && (get_woocommerce_currency()=='CHF')) {
		$onixion_discount = $onixion_price_subtotal*0.14*(-1);
		$onixion_discount_title = 'Discount: 14%';
		
	}
	if (($onixion_price_subtotal > '2405') && ($onixion_price_subtotal <= '3435') && (get_woocommerce_currency()=='CHF')) {
		$onixion_discount = $onixion_price_subtotal*0.19*(-1);
		$onixion_discount_title = 'Discount: 19%';
		
	}
	if (($onixion_price_subtotal > '3435') && ($onixion_price_subtotal <= '4236') && (get_woocommerce_currency()=='CHF')) {
		$onixion_discount = $onixion_price_subtotal*0.23*(-1);
		$onixion_discount_title = 'Discount: 23%';
		
	}
	if (($onixion_price_subtotal > '4236') && ($onixion_price_subtotal <= '5725') && (get_woocommerce_currency()=='CHF')) {
		$onixion_discount = $onixion_price_subtotal*0.27*(-1);
		$onixion_discount_title = 'Discount: 27%';
		
	}
	if (($onixion_price_subtotal > '5725') && (get_woocommerce_currency()=='CHF')) {
		$onixion_discount = $onixion_price_subtotal*0.33*(-1);
		$onixion_discount_title = 'Discount: 33%';
		
	}
	//GBP
	if (($onixion_price_subtotal > '175') && ($onixion_price_subtotal <= '523') && (get_woocommerce_currency()=='GBP')) {
		$onixion_discount = $onixion_price_subtotal*0.04*(-1);
		$onixion_discount_title = 'Discount: 4%';
		
	}
	if (($onixion_price_subtotal > '523') && ($onixion_price_subtotal <= '1045') && (get_woocommerce_currency()=='GBP')) {
		$onixion_discount = $onixion_price_subtotal*0.08*(-1);
		$onixion_discount_title = 'Discount: 8%';
		
	}
	if (($onixion_price_subtotal > '1045') && ($onixion_price_subtotal <= '1830') && (get_woocommerce_currency()=='GBP')) {
		$onixion_discount = $onixion_price_subtotal*0.14*(-1);
		$onixion_discount_title = 'Discount: 14%';
		
	}
	if (($onixion_price_subtotal > '1830') && ($onixion_price_subtotal <= '2615') && (get_woocommerce_currency()=='GBP')) {
		$onixion_discount = $onixion_price_subtotal*0.19*(-1);
		$onixion_discount_title = 'Discount: 19%';
		
	}
	if (($onixion_price_subtotal > '2615') && ($onixion_price_subtotal <= '3223') && (get_woocommerce_currency()=='GBP')) {
		$onixion_discount = $onixion_price_subtotal*0.23*(-1);
		$onixion_discount_title = 'Discount: 23%';
		
	}
	if (($onixion_price_subtotal > '3223') && ($onixion_price_subtotal <= '4355') && (get_woocommerce_currency()=='GBP')) {
		$onixion_discount = $onixion_price_subtotal*0.27*(-1);
		$onixion_discount_title = 'Discount: 27%';
		
	}
	if (($onixion_price_subtotal > '4355') && (get_woocommerce_currency()=='GBP')) {
		$onixion_discount = $onixion_price_subtotal*0.33*(-1);
		$onixion_discount_title = 'Discount: 33%';
		
	}
	//USD
	if (($onixion_price_subtotal > '229') && ($onixion_price_subtotal <= '686') && (get_woocommerce_currency()=='USD')) {
		$onixion_discount = $onixion_price_subtotal*0.04*(-1);
		$onixion_discount_title = 'Discount: 4%';
		
	}
	if (($onixion_price_subtotal > '686') && ($onixion_price_subtotal <= '1372') && (get_woocommerce_currency()=='USD')) {
		$onixion_discount = $onixion_price_subtotal*0.08*(-1);
		$onixion_discount_title = 'Discount: 8%';
		
	}
	if (($onixion_price_subtotal > '1372') && ($onixion_price_subtotal <= '2400') && (get_woocommerce_currency()=='USD')) {
		$onixion_discount = $onixion_price_subtotal*0.14*(-1);
		$onixion_discount_title = 'Discount: 14%';
		
	}
	if (($onixion_price_subtotal > '2400') && ($onixion_price_subtotal <= '3430') && (get_woocommerce_currency()=='USD')) {
		$onixion_discount = $onixion_price_subtotal*0.19*(-1);
		$onixion_discount_title = 'Discount: 19%';
		
	}
	if (($onixion_price_subtotal > '3430') && ($onixion_price_subtotal <= '4230') && (get_woocommerce_currency()=='USD')) {
		$onixion_discount = $onixion_price_subtotal*0.23*(-1);
		$onixion_discount_title = 'Discount: 23%';
		
	}
	if (($onixion_price_subtotal > '4230') && ($onixion_price_subtotal <= '5716') && (get_woocommerce_currency()=='USD')) {
		$onixion_discount = $onixion_price_subtotal*0.27*(-1);
		$onixion_discount_title = 'Discount: 27%';
		
	}
	if (($onixion_price_subtotal > '5716') && (get_woocommerce_currency()=='USD')) {
		$onixion_discount = $onixion_price_subtotal*0.33*(-1);
		$onixion_discount_title = 'Discount: 33%';
		
	}
	//DKK
	if (($onixion_price_subtotal > '1492') && ($onixion_price_subtotal <= '4476') && (get_woocommerce_currency()=='DKK')) {
		$onixion_discount = $onixion_price_subtotal*0.04*(-1);
		$onixion_discount_title = 'Discount: 4%';
		
	}
	if (($onixion_price_subtotal > '4476') && ($onixion_price_subtotal <= '8952') && (get_woocommerce_currency()=='DKK')) {
		$onixion_discount = $onixion_price_subtotal*0.08*(-1);
		$onixion_discount_title = 'Discount: 8%';
		
	}
	if (($onixion_price_subtotal > '8952') && ($onixion_price_subtotal <= '15665') && (get_woocommerce_currency()=='DKK')) {
		$onixion_discount = $onixion_price_subtotal*0.14*(-1);
		$onixion_discount_title = 'Discount: 14%';
		
	}
	if (($onixion_price_subtotal > '15665') && ($onixion_price_subtotal <= '22379') && (get_woocommerce_currency()=='DKK')) {
		$onixion_discount = $onixion_price_subtotal*0.19*(-1);
		$onixion_discount_title = 'Discount: 19%';
		
	}
	if (($onixion_price_subtotal > '22379') && ($onixion_price_subtotal <= '27601') && (get_woocommerce_currency()=='DKK')) {
		$onixion_discount = $onixion_price_subtotal*0.23*(-1);
		$onixion_discount_title = 'Discount: 23%';
		
	}
	if (($onixion_price_subtotal > '27601') && ($onixion_price_subtotal <= '37299') && (get_woocommerce_currency()=='DKK')) {
		$onixion_discount = $onixion_price_subtotal*0.27*(-1);
		$onixion_discount_title = 'Discount: 27%';
		
	}
	if (($onixion_price_subtotal > '37299') && (get_woocommerce_currency()=='DKK')) {
		$onixion_discount = $onixion_price_subtotal*0.33*(-1);
		$onixion_discount_title = 'Discount: 33%';
		
	}
	$woocommerce->cart->add_fee( $onixion_discount_title, $onixion_discount, TRUE, 'standard' );
	
}
add_action( 'woocommerce_cart_calculate_fees', 'onixion_custom_discount' );




// Remove the additional information tab from woocommerce - posted by Robin Scott of Silicon Dales @ https://silicondales.com/tutorials/woocommerce-tutorials/remove-tab-woocommerce/
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

unset( $tabs['additional_information'] ); // Remove the additional information tab

return $tabs;

}



/**
 * Changes the redirect URL for the Return To Shop button in the cart.
 *
 * @return string
 */
function wc_empty_cart_redirect_url() {
	return 'http://steel-classics.com';
}
add_filter( 'woocommerce_return_to_shop_redirect', 'wc_empty_cart_redirect_url' );



//add custom widget area that will be used for language and currency switcher
function sch_widgets_init() {
 
    register_sidebar( array(
        'name'          => 'SteelClassic Header WIdget Area',
        'id'            => 'custom-header-widget',
        'before_widget' => '<div class="sc-header-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="sc-header-title">',
        'after_title'   => '</h2>',
    ) );
 
}
add_action( 'widgets_init', 'sch_widgets_init' );