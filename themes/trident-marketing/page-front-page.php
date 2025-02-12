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
?>

	<main id="primary" class="site-main">
		<?php
		// Import: Hero (custom page edition).
		//get_template_part('template-parts/page-hero');
		?>

        <section class="section__hero">
            <div class="inner">
                <h1>Putting your brands and business on the map</h1>
                <p>We are Trident. A mulit-disciplinary marketing agency helping take your marketing to the next level.</p>

                <div class="cta-block">
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

        <section class="section__our-team">
            <div class="inner">
                <h3>We are...</h3>
                <ul>
                    <li>
                        <h4>Creative</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan laoreet nibh, ac posuere nisl pretium a. Nullam laoreet dui sit amet lacus lobortis, sit amet finibus nulla maximus. Fusce viverra est quis fringilla feugiat. Nullam leo velit, tristique at elit ut, congue vestibulum ligula. Mauris mollis rhoncus felis et laoreet.</p>
                    </li>
                    <li>
                        <h4>Comprehensive</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan laoreet nibh, ac posuere nisl pretium a. Nullam laoreet dui sit amet lacus lobortis, sit amet finibus nulla maximus. Fusce viverra est quis fringilla feugiat. Nullam leo velit, tristique at elit ut, congue vestibulum ligula. Mauris mollis rhoncus felis et laoreet.</p>
                    </li>
                    <li>
                        <h4>Collaborative</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan laoreet nibh, ac posuere nisl pretium a. Nullam laoreet dui sit amet lacus lobortis, sit amet finibus nulla maximus. Fusce viverra est quis fringilla feugiat. Nullam leo velit, tristique at elit ut, congue vestibulum ligula. Mauris mollis rhoncus felis et laoreet.</p>
                    </li>
                </ul>
            </div>
        </section>

        <section class="section__ our-team">
            <div class="inner">
                <h3>Our Services</h3>

                <ul>
                    <li>
                        <h4>Strategy &amp; Planning</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan laoreet nibh, ac posuere nisl pretium a. Nullam laoreet dui sit amet lacus lobortis, sit amet finibus nulla maximus. Fusce viverra est quis fringilla feugiat. Nullam leo velit, tristique at elit ut, congue vestibulum ligula. Mauris mollis rhoncus felis et laoreet.</p>
                    </li>
                    <li>
                        <h4>Graphic Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan laoreet nibh, ac posuere nisl pretium a. Nullam laoreet dui sit amet lacus lobortis, sit amet finibus nulla maximus. Fusce viverra est quis fringilla feugiat. Nullam leo velit, tristique at elit ut, congue vestibulum ligula. Mauris mollis rhoncus felis et laoreet.</p>
                    </li>
                    <li>
                        <h4>Website Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan laoreet nibh, ac posuere nisl pretium a. Nullam laoreet dui sit amet lacus lobortis, sit amet finibus nulla maximus. Fusce viverra est quis fringilla feugiat. Nullam leo velit, tristique at elit ut, congue vestibulum ligula. Mauris mollis rhoncus felis et laoreet.</p>
                    </li>
                    <li>
                        <h4>Digital Marketing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan laoreet nibh, ac posuere nisl pretium a. Nullam laoreet dui sit amet lacus lobortis, sit amet finibus nulla maximus. Fusce viverra est quis fringilla feugiat. Nullam leo velit, tristique at elit ut, congue vestibulum ligula. Mauris mollis rhoncus felis et laoreet.</p>
                    </li>
                    <li>
                        <h4>Search Engine Optimisation (SEO)</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan laoreet nibh, ac posuere nisl pretium a. Nullam laoreet dui sit amet lacus lobortis, sit amet finibus nulla maximus. Fusce viverra est quis fringilla feugiat. Nullam leo velit, tristique at elit ut, congue vestibulum ligula. Mauris mollis rhoncus felis et laoreet.</p>
                    </li>
            </div>
        </section>

        <section class="section__our-clients">
            <div class="inner">
                <h3>Our Clients</h3>
                <ul class="client__grid image-grid">
                    <li>
                        <a href=""><img src="" /></a>
                    </li>
                </ul>
            </div>
        </section>

        <section class="section__client-testimonials">
            <div class="inner">
                <h3>Our Clients Say...</h3>
                
                <ul class="testimonials">
                    <li>
                        <div class="tml__body">
                            <p>The team seek to understand our needs, provide options and guidance and then deliver a high quality service. Trident are emotionally invested in our success and that shows with every interaction.</p>
                        </div>
                        <div class="tml__author">Ben Bryden, RAK</div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="learn-more__cta">
            <div class="inner">
                <h3>Want to know more?</h3>
                <ul class="cta__details">
                    <li class="cta__email"><a href="mailto:"><i class="icon icon__email"></i><span class="text">enquiries@tridentmarketinguk.com</span></a><li>
                    <li class="cta__telephone"><a href="tel:"><i class="icon icon__email"></i><span class="text">01473 823700</span></a><li>
                </ul>

                <div class="cta__form">
                    <form>
                        <div class="form__field-block">
                            <label for="_a">Full Name:</label>
                            <input type="text" name="_a" />
                        </div>
                        <div class="form__field-block">
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