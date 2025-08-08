<?php
/**
 * Title: Locations List
 * Slug: research-press/locations-list
 * Categories: featured
 *
 * @package research-press
 */

$terms = get_terms(
	array(
		'taxonomy'   => 'locations',
		'hide_empty' => true,
	)
);
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)">
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Locations</h2>
<!-- /wp:heading -->
<ul>
<?php foreach ( $terms as $source_term ) : ?>
<li><a href="<?php echo esc_attr( get_term_link( $source_term ) ); ?>"><?php echo esc_html( $source_term->name ); ?></a></li>
<?php endforeach; ?>
</ul>
</section>
<!-- /wp:group -->
