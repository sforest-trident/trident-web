<?php
/**
 * Template Name: Front Page
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package trident-web
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php
		// Import: Hero (custom page edition).
		//get_template_part('template-parts/page-hero');
		?>


        <section class="section__hero bg-red text-white">
            <!-- <section class="section__hero bg-red text-white __uses-bg-image __has-overlay" style="background-image: url(<?php //echo get_template_directory_uri(); ?>/images/red-abstract-background.jpg);"> ?>-->
            <div class="inner">
                <h1 class="hero__heading page__heading">Putting your brands and business on the map</h1>
                <p class="hero__strapline">We are Trident. A mulit-disciplinary marketing agency helping take your marketing to the next level.</p>

                <div class="hero__cta-block cta-block">
                    <a href="#intro-block" class="cta primary">What we offer</a>
                    <a href="#contact-us" class="cta secondary">Get in touch</a>
                </div>
            </div>
        </section>

        

		<!-- Content-main-content -->
		<section class="main-content">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );
			endwhile; // End of the loop.
			?>
		</section>
		<!-- .main-content -->

        <section class="section__content section__who-we-are">
            <div class="inner container">
                <h3 class="content__heading primary-heading text-red">We are...</h3>

                <ul class="feature-blocks">
                    <li class="fb__block">
                        <h4 class="fb__heading font-heading text-red">Creative</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan laoreet nibh, ac posuere nisl pretium a. Nullam laoreet dui sit amet lacus lobortis, sit amet finibus nulla maximus. Fusce viverra est quis fringilla feugiat. Nullam leo velit, tristique at elit ut, congue vestibulum ligula. Mauris mollis rhoncus felis et laoreet.</p>
                    </li>
                    <li class="fb__block">
                        <h4 class="fb__heading font-heading text-red">Comprehensive</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan laoreet nibh, ac posuere nisl pretium a. Nullam laoreet dui sit amet lacus lobortis, sit amet finibus nulla maximus. Fusce viverra est quis fringilla feugiat. Nullam leo velit, tristique at elit ut, congue vestibulum ligula. Mauris mollis rhoncus felis et laoreet.</p>
                    </li>
                    <li class="fb__block">
                        <h4 class="fb__heading font-heading text-red">Collaborative</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan laoreet nibh, ac posuere nisl pretium a. Nullam laoreet dui sit amet lacus lobortis, sit amet finibus nulla maximus. Fusce viverra est quis fringilla feugiat. Nullam leo velit, tristique at elit ut, congue vestibulum ligula. Mauris mollis rhoncus felis et laoreet.</p>
                    </li>
                </ul>
            </div>
        </section>

        <section class="section__content section__our-team section__blue">
            <div class="inner container">
                <h3 class="content__heading primary-heading">Our Services</h3>

                <ul class="sideways-slider featured-services slider-block">
                    <li class="fs__block slider__item">
                        <h4 class="fs__heading">Strategy &amp; Planning</h4>
                        <p class="fs__detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan laoreet nibh, ac posuere nisl pretium a. Nullam laoreet dui sit amet lacus lobortis, sit amet finibus nulla maximus. Fusce viverra est quis fringilla feugiat. Nullam leo velit, tristique at elit ut, congue vestibulum ligula. Mauris mollis rhoncus felis et laoreet.</p>
                    </li>
                    <li class="fs__block slider__item">
                        <h4 class="fs__heading">Graphic Design</h4>
                        <p class="fs__detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan laoreet nibh, ac posuere nisl pretium a. Nullam laoreet dui sit amet lacus lobortis, sit amet finibus nulla maximus. Fusce viverra est quis fringilla feugiat. Nullam leo velit, tristique at elit ut, congue vestibulum ligula. Mauris mollis rhoncus felis et laoreet.</p>
                    </li>
                    <li class="fs__block slider__item">
                        <h4 class="fs__heading">Website Design</h4>
                        <p class="fs__detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan laoreet nibh, ac posuere nisl pretium a. Nullam laoreet dui sit amet lacus lobortis, sit amet finibus nulla maximus. Fusce viverra est quis fringilla feugiat. Nullam leo velit, tristique at elit ut, congue vestibulum ligula. Mauris mollis rhoncus felis et laoreet.</p>
                    </li>
                    <li class="fs__block slider__item">
                        <h4 class="fs__heading">Digital Marketing</h4>
                        <p class="fs__detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan laoreet nibh, ac posuere nisl pretium a. Nullam laoreet dui sit amet lacus lobortis, sit amet finibus nulla maximus. Fusce viverra est quis fringilla feugiat. Nullam leo velit, tristique at elit ut, congue vestibulum ligula. Mauris mollis rhoncus felis et laoreet.</p>
                    </li>
                    <li class="fs__block slider__item">
                        <h4 class="fs__heading">Search Engine Optimisation (SEO)</h4>
                        <p class="fs__detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan laoreet nibh, ac posuere nisl pretium a. Nullam laoreet dui sit amet lacus lobortis, sit amet finibus nulla maximus. Fusce viverra est quis fringilla feugiat. Nullam leo velit, tristique at elit ut, congue vestibulum ligula. Mauris mollis rhoncus felis et laoreet.</p>
                    </li>
            </div>
        </section>

        <section class="section__content section__our-clients">
            <div class="inner container">
                <h3 class="content__heading primary-heading text-blue">Our Clients</h3>
                <ul class="client__grid image-display-grid">
                    <li class="cg__item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/clients_hopkins-homes.png" /></a></li>
                    <li class="cg__item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/clients_weston-homes.png" /></a></li>
                    <li class="cg__item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/clients_laragh-homes.png" /></a></li>
                    <li class="cg__item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/clients_bradnam-joinery.png" /></a></li>
                    <li class="cg__item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/clients_rak-ceramics.png" /></a></li>
                    <li class="cg__item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/clients_baya-group.png" /></a></li>
                </ul>

                <div class="cta__block py-2 text-right">
                    <a href="#" class="cta__text">Read our case studies</a>
                </div>
            </div>
        </section>

        <section class="section__content section__testimonials section__divider">
            
            <div class="inner container">
                <h3 class="content__heading primary-heading text-blue">Our Clients Say...</h3>
                
                <div class="featured-testimonials">
                    <div class="tml__body">
                        <p>The team seek to understand our needs, provide options and guidance and then deliver a high quality service. Trident are emotionally invested in our success and that shows with every interaction.</p>
                    </div>
                    <div class="tml__author">Ben Bryden, RAK</div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="section__content section__learn-more__cta section__l-grey">
            <div class="inner container content__two-col">
                <div class="col full-width">
                    <h3 class="content__heading primary-heading text-blue">Want to know more?</h3>
                    <ul class="cta__details">
                        <li class="cta__email"><a href="mailto:"><i class="icon icon__email"></i><span class="text">enquiries@tridentmarketinguk.com</span></a><li>
                        <li class="cta__telephone"><a href="tel:"><i class="icon icon__email"></i><span class="text">01473 823700</span></a><li>
                    </ul>
                </div>

                <div class="cta__form col full-width">
                    <form>
                        <div class="form__field-block inline">
                            <label for="_a">Full Name:</label>
                            <input type="text" name="_a" />
                        </div>
                        <div class="form__field-block inline">
                            <label for="_b">Phone Number:</label>
                            <input type="number" name="_b" />
                        </div>
                        <div class="form__field-block full-width">
                            <label for="_c">Email Address:</label>
                            <input type="text" name="_c" />
                        </div>
                        <div class="form__field-block full-width">
                            <label for="_d">How can we help?</label>
                            <input type="textarea" name="_d" />
                        </div>
                        <div class="form__field-block form__cta_block">
                            <input type="submit" type="button" value="Send" />
                        </div>
                    </form>
                </div>
            </div>
        </section>

		<?php
		// Import: Pre-footer
		//get_template_part('template-parts/page-prefooter');
		?>
	</main><!-- #main -->

<?php
get_footer();
?>