<?php
/**
 * Title: Base Memo Query Loop
 * Slug: research-press/base-memo-query-loop
 * Categories: featured
 *
 * @package research-press
 */

?>
<!-- wp:query {"query":{"perPage":100,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"layout":{"type":"default"}} -->
<div class="wp-block-query">
	<!-- wp:post-template {"align":"full","layout":{"type":"default"}} -->
		<!-- wp:columns {"verticalAlignment":"center"} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%">
				<!-- wp:post-featured-image {"isLink":true} /-->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%">
				<!-- wp:post-title {"isLink":true,"fontSize":"large","level":3} /-->
				<!-- wp:post-excerpt {"fontSize":"medium"} /-->
				<!-- wp:post-date {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"small"} /-->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	<!-- /wp:post-template -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:query-no-results -->
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'research-press' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:query -->


