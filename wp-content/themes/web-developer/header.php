<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Web Developer
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
  wp_body_open();
} else {
  do_action( 'wp_body_open' );
} ?>

<?php if ( get_theme_mod('web_developer_preloader', true) != "") { ?>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<?php }?>

<a class="screen-reader-text skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'web-developer' ); ?></a>

<div class="top_header text-center text-md-left py-3">
  <div class="container">
    <div class="row m-0">
      <div class="col-lg-4 col-md-12 p-0 center-align">
        <div class="logo text-center text-lg-left">
          <?php web_developer_the_custom_logo(); ?>
          <?php $blog_info = get_bloginfo( 'name' ); ?>
          <?php if ( ! empty( $blog_info ) ) : ?>
            <?php if ( get_theme_mod('web_developer_title_enable',true) != "") { ?>
            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
            <?php } ?>
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
              <?php if ( get_theme_mod('web_developer_tagline_enable',true) != "") { ?>
              <span class="site-description"><?php echo esc_html( $description ); ?></span>
              <?php } ?>
            <?php endif; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-8 col-md-12 center-align">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4">
            <?php if ( get_theme_mod('web_developer_address_location_text') != "" || get_theme_mod('web_developer_address_location') != "") { ?>
              <div class="row">
                <div class="col-lg-3 col-md-3 center-align">
                  <i class="fas fa-map-marker-alt mb-2 mb-lg-2"></i>
                </div>
                <div class="col-lg-9 col-md-9 pl-lg-0 border-right">
                  <h6><?php echo esc_html(get_theme_mod ('web_developer_address_location_text','')); ?></h6>
                  <p class="mb-0"><?php echo esc_html(get_theme_mod ('web_developer_address_location','')); ?></p>
                </div>
              </div>
            <?php }?>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <?php if ( get_theme_mod('web_developer_email_address_text') != "" || get_theme_mod('web_developer_email_address') != "") { ?>
              <div class="row">
                <div class="col-lg-3 col-md-3 center-align">
                  <i class="fas fa-envelope-open mb-2 mb-lg-2"></i>
                </div>
                <div class="col-lg-9 col-md-9 pl-lg-0 border-right">
                  <h6><?php echo esc_html(get_theme_mod ('web_developer_email_address_text','')); ?></h6>
                  <p class="mb-0"><?php echo esc_html(get_theme_mod ('web_developer_email_address','')); ?></p>
                </div>
              </div>
            <?php }?>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <?php if ( get_theme_mod('web_developer_phone_number_text') != "" || get_theme_mod('web_developer_phone_number') != "") { ?>
              <div class="row">
                <div class="col-lg-3 col-md-3 center-align">
                  <i class="fas fa-phone mb-2 mb-lg-2"></i>
                </div>
                <div class="col-lg-9 col-md-9 pl-lg-0">
                  <h6><?php echo esc_html(get_theme_mod ('web_developer_phone_number_text','')); ?></h6>
                  <p class="mb-0"><?php echo esc_html(get_theme_mod ('web_developer_phone_number','')); ?></p>
                </div>
              </div>
            <?php }?>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="header py-3">
  <div class="container">
    <div class="row">      
      <div class="col-lg-9 col-md-7 col-4 center-align">
        <div class="toggle-nav">
          <?php if(has_nav_menu('primary')){ ?>
            <button role="tab"><?php esc_html_e('MENU','web-developer'); ?></button>
          <?php }?>
        </div>
        <div id="mySidenav" class="nav sidenav">
          <nav id="site-navigation" class="main-nav" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu','web-developer' ); ?>">
            <?php if(has_nav_menu('primary')){
              wp_nav_menu( array( 
                'theme_location' => 'primary',
                'container_class' => 'main-menu clearfix' ,
                'menu_class' => 'clearfix',
                'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                'fallback_cb' => 'wp_page_menu',
              ) );
            } ?>
            <a href="javascript:void(0)" class="close-button"><?php esc_html_e('CLOSE','web-developer'); ?></a>
          </nav>
        </div>
      </div>
      <div class="col-lg-3 col-md-5 col-8 center-align">
        <span class="search_box"><?php get_search_form(); ?></span>
      </div>
    </div>
  </div>
</div>