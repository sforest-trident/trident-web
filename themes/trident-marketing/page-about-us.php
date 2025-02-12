<?php
/**
 * Template Name: About (page)
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
                <h1>About Us</h1>
            </div>
        </section>

        <section class="section__our-team">
            <div class="inner">
                <h3>Our Team</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan laoreet nibh, ac posuere nisl pretium a. Nullam laoreet dui sit amet lacus lobortis, sit amet finibus nulla maximus. Fusce viverra est quis fringilla feugiat. Nullam leo velit, tristique at elit ut, congue vestibulum ligula. Mauris mollis rhoncus felis et laoreet.</p>
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
                <h3>Our Team</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan laoreet nibh, ac posuere nisl pretium a. Nullam laoreet dui sit amet lacus lobortis, sit amet finibus nulla maximus. Fusce viverra est quis fringilla feugiat. Nullam leo velit, tristique at elit ut, congue vestibulum ligula. Mauris mollis rhoncus felis et laoreet.</p>
            </div>
        </section>

        <section class="section__community">
            <div class="inner">
                <h3>Community</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan laoreet nibh, ac posuere nisl pretium a. Nullam laoreet dui sit amet lacus lobortis, sit amet finibus nulla maximus. Fusce viverra est quis fringilla feugiat. Nullam leo velit, tristique at elit ut, congue vestibulum ligula. Mauris mollis rhoncus felis et laoreet.</p>
            </div>
        </section>

        <section class="section__sustainability">
            <div class="inner">
                <h3>Sustainablity</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan laoreet nibh, ac posuere nisl pretium a. Nullam laoreet dui sit amet lacus lobortis, sit amet finibus nulla maximus. Fusce viverra est quis fringilla feugiat. Nullam leo velit, tristique at elit ut, congue vestibulum ligula. Mauris mollis rhoncus felis et laoreet.</p>
            </div>
        </section>

        <section class="section__work-for-us">
            <div class="inner">
                <h3>Work For Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan laoreet nibh, ac posuere nisl pretium a. Nullam laoreet dui sit amet lacus lobortis, sit amet finibus nulla maximus. Fusce viverra est quis fringilla feugiat. Nullam leo velit, tristique at elit ut, congue vestibulum ligula. Mauris mollis rhoncus felis et laoreet.</p>
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