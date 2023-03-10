<?php
	/* a template for displaying the header area */

	$header_side_style = kingster_get_option('general', 'header-side-style', 'top-left');
	$header_class = 'kingster-' . kingster_get_option('general', 'header-side-align', 'left') . '-align';
?>	
<header class="kingster-header-wrap kingster-header-style-side <?php echo esc_attr($header_class); ?>" >
	<?php

		$logo_wrap_class = '';
		$navigation_class = '';
		if( kingster_get_option('general', 'enable-main-navigation-submenu-indicator', 'disable') == 'enable' ){
			$navigation_class .= 'kingster-navigation-submenu-indicator ';
		}
		if( in_array($header_side_style, array('middle-left-2', 'middle-right-2')) ){
			$logo_wrap_class .= 'kingster-pos-middle ';
		}else if( in_array($header_side_style, array('middle-left', 'middle-right')) ){
			$navigation_class .= 'kingster-pos-middle ';
		} 

		echo kingster_get_logo(array('padding' => false, 'wrapper-class' => $logo_wrap_class));
	?>
	<div class="kingster-navigation clearfix <?php echo esc_attr($navigation_class); ?>" >
	<?php
		// print main menu
		if( has_nav_menu('main_menu') ){
			echo '<div class="kingster-main-menu" id="kingster-main-menu" >';
			wp_nav_menu(array(
				'theme_location'=>'main_menu', 
				'container'=> '', 
				'menu_class'=> 'sf-vertical'
			));
			echo '</div>';
		}

		// menu right side
		$enable_search = (kingster_get_option('general', 'enable-main-navigation-search', 'enable') == 'enable')? true: false;
		$enable_cart = (kingster_get_option('general', 'enable-main-navigation-cart', 'enable') == 'enable' && class_exists('WooCommerce'))? true: false;
		if( $enable_search || $enable_cart ){
			echo '<div class="kingster-main-menu-right-wrap clearfix" >';

			// search icon
			if( $enable_search ){
				echo '<div class="kingster-main-menu-search" id="kingster-top-search" >';
				echo '<i class="icon_search" ></i>';
				echo '</div>';
				kingster_get_top_search();
			}

			// cart icon
			if( $enable_cart ){
				echo '<div class="kingster-main-menu-cart" id="kingster-main-menu-cart" >';
				echo '<i class="fa fa-shopping-cart" ></i>';
				kingster_get_woocommerce_bar();
				echo '</div>';
			}

			echo '</div>'; // kingster-main-menu-right-wrap
		}
	?>
	</div><!-- kingster-navigation -->
	<?php
		// social network
		$top_bar_social = kingster_get_option('general', 'enable-top-bar-social', 'enable');
		if( $top_bar_social == 'enable' ){

			$top_bar_social_class = '';
			if( in_array($header_side_style, array('top-left', 'top-right', 'middle-left', 'middle-right')) ){
				$top_bar_social_class .= 'kingster-pos-bottom ';
			}

			echo '<div class="kingster-header-social ' . esc_attr($top_bar_social_class) . '" >';
			get_template_part('header/header', 'social');
			echo '</div>';
			
			kingster_set_option('general', 'enable-top-bar-social', 'disable');
		}
	?>
</header><!-- header -->