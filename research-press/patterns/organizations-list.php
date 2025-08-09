<?php
/**
 * Title: Organizations List
 * Slug: research-press/organizations-list
 * Categories: featured
 *
 * @package research-press
 */

$terms = get_terms(
	array(
		'taxonomy'   => 'organizations',
		'hide_empty' => true,
	)
);
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)">
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Organizations</h2>
<!-- /wp:heading -->
<!-- wp:list -->
<ul class="wp-block-list">
<?php foreach ( $terms as $source_term ) : ?>
<!-- wp:list-item -->
<li><a href="<?php echo esc_attr( get_term_link( $source_term ) ); ?>"><?php echo esc_html( $source_term->name ); ?></a></li>
<!-- /wp:list-item -->
<?php endforeach; ?>
</ul>
<!-- /wp:list -->
</section>
<!-- /wp:group -->
