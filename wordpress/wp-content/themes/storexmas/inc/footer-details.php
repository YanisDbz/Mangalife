<?php
/**
 * @package Theme Freesia
 * @subpackage storexmas
 * @since storexmas 1.0
 */
?>
<?php
/************************* storexmas FOOTER DETAILS **************************************/

function storexmas_site_footer() {
if ( is_active_sidebar( 'storexmas_footer_options' ) ) :
		dynamic_sidebar( 'storexmas_footer_options' );
	else:
		echo '<div class="copyright">'; ?>
		<a title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo( 'name', 'display' ); ?></a> | 
						<?php esc_html_e('Designed by:','storexmas'); ?> <a title="<?php echo esc_attr__( 'Theme Freesia', 'storexmas' ); ?>" target="_blank" href="<?php echo esc_url( 'https://themefreesia.com' ); ?>"><?php esc_html_e('Theme Freesia','storexmas');?></a> |
						<?php  echo '&copy; ' . date_i18n(__('Y','storexmas')) ; ?> <a title="<?php echo esc_attr__( 'WordPress', 'storexmas' );?>" target="_blank" href="<?php echo esc_url( 'https://wordpress.org' );?>"><?php esc_html_e('WordPress','storexmas'); ?></a>
					</div>
	<?php endif;
}
add_action( 'storexmas_sitegenerator_footer', 'storexmas_site_footer');