<?php
/**
 * Footer Layout 4
 *
 * @package Astra Addon
 * @since   Astra 1.0.12
 */

/**
 * Hide advanced footer markup if:
 *
 * - User is not logged in. [AND]
 * - All widgets are not active.
 */
if ( ! is_user_logged_in() ) {
	if (
		! is_active_sidebar( 'advanced-footer-widget-1' ) &&
		! is_active_sidebar( 'advanced-footer-widget-2' ) &&
		! is_active_sidebar( 'advanced-footer-widget-3' ) &&
		! is_active_sidebar( 'advanced-footer-widget-4' )
	) {
		return;
	}
}

$classes[] = 'footer-adv';
$classes[] = 'footer-adv-layout-4';
$classes   = implode( ' ', $classes );
?>

<div class="<?php echo esc_attr( $classes ); ?>">
	<div class="footer-adv-overlay">
		<div class="container">
			<div class="row">
				<div class="col1 col-sm-6 col-md-3 customWidth30" <?php echo wp_kses_post( apply_filters( 'astra_sidebar_data_attrs', '', 'advanced-footer-widget-1' ) ); ?>>
					<?php astra_get_footer_widget( 'advanced-footer-widget-1' ); ?>
				</div>
				<div class="col2 col-sm-6 col-md-3 customWidth20" <?php echo wp_kses_post( apply_filters( 'astra_sidebar_data_attrs', '', 'advanced-footer-widget-2' ) ); ?>>
					<?php astra_get_footer_widget( 'advanced-footer-widget-2' ); ?>
				</div>
				<div class="clearfix visible-sm paddTop30"></div>
				<div class="col3 col-sm-6 col-md-3 customWidth20" <?php echo wp_kses_post( apply_filters( 'astra_sidebar_data_attrs', '', 'advanced-footer-widget-3' ) ); ?>>
					<?php astra_get_footer_widget( 'advanced-footer-widget-3' ); ?>
				</div>
				<div class="col4 col-sm-6 col-md-3 customWidth30" <?php echo wp_kses_post( apply_filters( 'astra_sidebar_data_attrs', '', 'advanced-footer-widget-4' ) ); ?>>
					<?php astra_get_footer_widget( 'advanced-footer-widget-4' ); ?>
				</div>
			</div><!-- .ast-row -->
		</div><!-- .ast-container -->
	</div><!-- .footer-adv-overlay-->
</div><!-- .ast-theme-footer .footer-adv-layout-4 -->
