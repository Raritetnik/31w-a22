<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package igc31w
 */

get_header();


?>
<h1>Index.php</h1>
	<main class="site__main">

		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				the_title("<h2>","</h2>");
				the_content();
				$linkHTML = "<a href='".get_the_permalink()."'>Suite</a>";
				?>
				<blockquote><?php the_excerpt(); ?></blockquote>
				<blockquote><?php echo wp_trim_words(get_the_excerpt(), 3, $linkHTML);  ?></blockquote>
				<pre><?php the_category(); ?></pre>
				<pre><?php the_date(); ?></pre>
				<pre><?php the_permalink(); ?></pre>
				<?php
			endwhile;
			endif;
		?>
	</main><!-- #main -->
<?php

get_footer();
