<?php
/**
 * The template for displaying the footer.
 *
 * @package Kin_Athletics_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class='footer-social-container'>
					<div class='footer-text-container'>
							<a href='<?php echo esc_url( home_url( '/consultation/') )?>'>free consultation</a>
							<a href='<?php echo esc_url( home_url( '/events/#on-now-and-services') )?>'><?php echo CFS()->get('past_events_featured', 34); ?></a>
							<a href='<?php echo esc_url( home_url( '/find-us/') )?>'>find us</a>
					</div><!-- .footer-text-container -->
					<div class='footer-social-logo'>
						<a href='https://www.facebook.com/kinathletics/' target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href='https://www.instagram.com/kinathletics/' target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</div>				
				</div>
				<p>	&copy; 2017 red go team </p>
			</footer><!-- #colophon -->

		</div><!-- #page -->
		<?php wp_footer(); ?>
	</body> 
</html>
