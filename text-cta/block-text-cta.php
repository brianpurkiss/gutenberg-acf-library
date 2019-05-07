<?php
/**
 * Block Name: Text CTA
 *
 * A simple CTA block
 */
?>

<?php $link = get_field('link');
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self'; ?>


<p class="link-cta-block link-cta my-4">
	<?php the_field('cta_text'); ?>

	<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="btn btn-outline-light hvr-sweep-to-right">
		<?php echo esc_html($link_title); ?>
	</a>
</p>
