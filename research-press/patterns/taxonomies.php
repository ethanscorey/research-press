<?php
/**
 * Title: Taxonomies
 * Slug: research-press/taxonomies
 * Categories: widgets
 *
 * @package research-press
 */

$taxonomies = array( 'Persons', 'Organizations', 'Locations', 'Topics' );
?>
<div class="foo">
<?php foreach ( $taxonomies as $source_taxonomy ) : ?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:heading {"level":2} -->
	<h2>Related <?php echo esc_html( $source_taxonomy ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:post-terms {"term":"<?php echo esc_html( strtolower( $source_taxonomy ) ); ?>","separator":"  ","className":"is-style-post-terms-1"} /-->
</div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
