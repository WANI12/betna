<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nonprofit-organization' ); ?></a>

<div class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-12 col-sm-12 align-self-center">
				<div class="logo text-center text-lg-left mb-3 mb-lg-0">
		    		<div class="logo-image">
		    			<?php echo esc_url( the_custom_logo() ); ?>
			    	</div>
			    	<div class="logo-content">
				    	<?php
				    		if ( get_theme_mod('nonprofit_organization_display_header_title', true) == true ) :
					      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
					      			echo esc_attr(get_bloginfo('name'));
					      		echo '</a>';
					      	endif;

					      	if ( get_theme_mod('nonprofit_organization_display_header_text', false) == true ) :
				      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
				      		endif;
			    		?>
					</div>
				</div>
		   	</div>
		   	<div class="col-lg-9 col-md-12 col-sm-12 align-self-center text-center text-md-left">
		   		<div class="row">
		   			<div class="col-lg-3 col-md-3 col-sm-3 align-self-center">
		   				<?php if ( get_theme_mod('nonprofit_organization_phone_support_text') || get_theme_mod('nonprofit_organization_location') ) : ?>
		   					<div class="row">
			   					<div class="col-lg-3 col-md-3 col-sm-3 align-self-center">
			   						<i class="fas fa-phone"></i>
			   					</div>
			   					<div class="col-lg-9 col-md-9 col-sm-9 align-self-center">
						    		<h6 class="mb-0"><?php echo esc_html(get_theme_mod('nonprofit_organization_phone_support_text'));?></h6>
						    		<p class="mb-0"><?php echo esc_html(get_theme_mod('nonprofit_organization_phone_support'));?></p>
			   					</div>
		   					</div>
		   				<?php endif; ?>
		   			</div>
		   			<div class="col-lg-4 col-md-4 col-sm-4 align-self-center">
		   				<?php if ( get_theme_mod('nonprofit_organization_email_support_text') || get_theme_mod('nonprofit_organization_location') ) :?>
		   					<div class="row">
			   					<div class="col-lg-3 col-md-3 col-sm-3 align-self-center">
			   						<i class="fas fa-envelope"></i>
			   					</div>
			   					<div class="col-lg-9 col-md-9 col-sm-9 align-self-center">
						    		<h6 class="mb-0"><?php echo esc_html(get_theme_mod('nonprofit_organization_email_support_text'));?></h6>
						    		<p class="mb-0"><?php echo esc_html(get_theme_mod('nonprofit_organization_email_support'));?></p>
			   					</div>
		   					</div>
		   				<?php endif; ?>
		   			</div>
		   			<div class="col-lg-5 col-md-5 col-sm-5 align-self-center">
		   				<?php if ( get_theme_mod('nonprofit_organization_location_text') || get_theme_mod('nonprofit_organization_location') ) : ?>
			   				<div class="row">
			   					<div class="col-lg-2 col-md-2 col-sm-2 align-self-center">
			   						<i class="fas fa-map-marker-alt"></i>
			   					</div>
			   					<div class="col-lg-10 col-md-10 col-sm-10 align-self-center">
						    		<h6 class="mb-0"><?php echo esc_html(get_theme_mod('nonprofit_organization_location_text'));?></h6>
						    		<p class="mb-0"><?php echo esc_html(get_theme_mod('nonprofit_organization_location'));?></p>
			   					</div>
			   				</div>
		   				<?php endif; ?>
		   			</div>
		   		</div>
		   	</div>
		</div>
	</div>
</div>


<header id="site-navigation" class="header">
	<div class="container">
		<div class="row">
		   	<div class="col-lg-9 col-md-9 col-sm-9 align-self-center text-center text-md-left">
			   	<?php if(has_nav_menu('main-menu')){ ?>
					<button class="menu-toggle my-2 py-2 px-3 text-center" aria-controls="top-menu" aria-expanded="false" type="button">
						<span aria-hidden="true"><?php esc_html_e( 'Menu', 'nonprofit-organization' ); ?></span>
					</button>
					<nav id="main-menu" class="close-panal">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'main-menu',
								'container' => 'false'
							));
						?>
						<button class="close-menu my-2 p-2" type="button">
							<span aria-hidden="true"><i class="fa fa-times"></i></span>
						</button>
					</nav>
				<?php }?>
		   	</div>
		   	<div class="col-lg-3 col-md-3 col-sm-3 align-self-center text-center text-md-right">
		   		<?php if ( get_theme_mod('nonprofit_organization_donation_link') || get_theme_mod('nonprofit_organization_donation_text') ) : ?>
			   		<p class="slider-button mt-3">
						<a href="<?php echo esc_url(get_theme_mod('nonprofit_organization_donation_link'));?>" class="mb-0"><?php echo esc_html(get_theme_mod('nonprofit_organization_donation_text'));?></a>
					</p>
		   		<?php endif; ?>
		   	</div>
	   	</div>
	</div>
</header>
