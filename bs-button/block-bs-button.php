<?php
/**
 * Block Name: Button
 *
 * A generic button using Bootstrap styles.
 */
?>


<?php $link = get_field('link');
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self'; ?>

<?php if ( !get_field('link') ) : ?>
	<p>
		<a class="btn btn-primary"
		style="display:inline-block; border: 1px solid #ccc; padding: .375rem .75rem;">
			(Link)
		</a>
	</p>

<?php else : ?>

	<p>
		<a
		target="<?php echo esc_attr($link_target); ?>"
		class="
			btn
			<?php the_field('button_style'); ?>
			<?php the_field('button_size'); ?>
			<?php the_field('block_full_width'); ?>
		"
		<?php if ( is_admin() ) : ?>
			style="display:inline-block; border: 1px solid #ccc; padding: .375rem .75rem;"
		<?php else : ?>
			href="<?php echo esc_url($link_url); ?>"
		<?php endif; ?>>
			<?php echo esc_html($link_title); ?>
		</a>
	</p>

<?php endif; ?>
