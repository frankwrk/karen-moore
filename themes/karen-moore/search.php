<?php
/**
 * The template for displaying Search Results pages
 *
 * @package Karen Moore
 * @since Karen Moore 1.0
 */
?>

<?php get_header(); ?>

<div class="search pb5 pt4">
	<div class="wrap--sm">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="search-result">

					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<?php the_excerpt(); ?>
				</div>




		<?php endwhile;?>
		<?php else: ?>
			<p>No results found</p>
		<?php endif; ?>
	</div>

</div>




<?php get_footer(); ?>
