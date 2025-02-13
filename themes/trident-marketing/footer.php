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
				<svg><use xlink:href="#trident-t"></use></svg>
			</div>
			<!-- .Footer > Logo -->
			 
			<div class="site-info contact">
				<!-- Footer > Social Links -->
				<div class="col socials">
					<span class="title"><?php printf('Connect with us'); ?>
					<ul>
						<li>
							<?php
							/* Facebook */
							printf( esc_html__( '%1$s', 'trident-web' ), '<a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a>');
							?>
						</li>
						<li>
							<?php
							/* witter */
							printf( esc_html__( '%1$s', 'trident-web' ), '<a href="#" target="_blank"><i class="fa-brands fa-twitter"></i></a>');
							?>
						</li>
						<li>
							<?php
							/* Instagram */
							printf( esc_html__( '%1$s', 'trident-web' ), '<a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>');
							?>
						</li>
						<li>
							<?php
							/* LinkedIn */
							printf( esc_html__( '%1$s', 'trident-web' ), '<a href="#" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>');
							?>
						</li>
					</ul>
				</div>
				<!-- .Footer > Social Links -->

				<div>
					<address>
						<span>Trident Marketing Anglia Ltd.</span><br />
						<span>Trident House,</span>
						<span>Semer, Ipswich,</span>
						<span>Suffolk, IP7 6HL.</span>
					</address
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
			</div><!-- .site-info -->

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
