<?php
/**
 * A template part for displaying a gallery entry within an archive.
 *
 * @package     creativepress
 * @subpackage  HybridCore
 * @copyright   Copyright (c) 2015
 * @license     GPL-2.0+
 * @since       1.0.0
 */
?>
<article <?php hybrid_attr( 'post' ); ?>>

	<?php tha_entry_top(); ?>

	<?php
	// Display a featured image if one has been set.
	get_the_image(
		array(
			'size'   => 'creativepress-full',
			'before' => '<div class="featured-media image">',
			'after'  => '</div>',
		)
	);
	?>

	<header class="entry-header">

		<?php the_title( '<h2 ' . hybrid_get_attr( 'entry-title' ) . '><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" itemprop="url">', '</a></h2>' ); ?>

		<p class="entry-meta">
			<?php hybrid_post_format_link(); ?>
			<?php creativepress_entry_author(); ?>
			<?php creativepress_entry_published(); ?>
			<?php creativepress_entry_comments_link(); ?>
			<?php edit_post_link(); ?>
		</p><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div <?php hybrid_attr( 'entry-summary' ); ?>>
		<?php the_excerpt(); ?>
		<?php $count = hybrid_get_gallery_item_count(); ?>
		<p class="gallery-count"><?php printf( _n( 'This gallery contains %s item.', 'This gallery contains %s items.', $count, 'creativepress' ), $count ); ?></p>
	</div><!-- .entry-summary -->

	<?php tha_entry_bottom(); ?>

</article><!-- .entry -->
