<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trident-web
 */

?>

	<footer class="site-footer">
		<div class="inner container">
			<!-- Footer > Logo -->
			<div class="footer-logo">
				<svg class="logo" width="50" height="50"><use xlink:href="#trident-t"></use></svg>
			</div>
			<!-- .Footer > Logo -->
			 
			<div class="company-details contact">
				<div class="cd__address-block">
					<address>
						<span>Trident Marketing Anglia Ltd.</span><br />
						<span>Trident House,</span>
						<span>Semer, Ipswich,</span>
						<span>Suffolk, IP7 6HL.</span>
					</address>
				</div>

				<div class="col email">
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( '%1$s', 'trident-web' ), '<span class="strong">E:</span> <a href="mailto:enquiries@tridentmarketinguk.com">enquiries@tridentmarketinguk.com</a>' );
					?>
				</div>
				 
				<div class="col telephone">
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( '%1$s', 'trident-web' ), '<span class="strong">T:</span> <a href="tel:+441473 823700">01473 823700</a>' );
					?>
				</div>
			</div><!-- .company-details -->

			<!-- Footer > Social Links -->
			<div class="col footer__socials-block socials">
				<span class="sb__title"><?php printf('Connect with us'); ?></span>
				<ul class="sb__item-wrapper">
					<li class="sb__item">
						<?php
						/* Facebook */
						printf( esc_html__( '%1$s', 'trident-web' ), '<a href="#" target="_blank" class="sb__item-link"><i class="fa-brands fa-facebook sb__item-icon"></i></a>');
						?>
					</li>
					<li class="sb__item">
						<?php
						/* witter */
						printf( esc_html__( '%1$s', 'trident-web' ), '<a href="#" target="_blank" class="sb__item-link"><i class="fa-brands fa-twitter sb__item-icon"></i></a>');
						?>
					</li>
					<li class="sb__item">
						<?php
						/* Instagram */
						printf( esc_html__( '%1$s', 'trident-web' ), '<a href="#" target="_blank" class="sb__item-link"><i class="fa-brands fa-instagram sb__item-icon"></i></a>');
						?>
					</li>
					<li class="sb__item">
						<?php
						/* LinkedIn */
						printf( esc_html__( '%1$s', 'trident-web' ), '<a href="#" target="_blank" class="sb__item-link"><i class="fa-brands fa-linkedin-in sb__item-icon"></i></a>');
						?>
					</li>
				</ul>
			</div>
			<!-- .Footer > Social Links -->

			<!-- Footer Menu -->
			<div class="footer-menu">
              <?php //wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>  
    		</div>
		</div><!-- .container -->
	</footer><!-- .site-footer -->
</div><!-- #page -->

<?php include('template-parts/svg-sprite.php'); ?>
<?php wp_footer(); ?>

</body>
</html>
