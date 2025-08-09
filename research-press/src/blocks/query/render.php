<?php
/**
 *
 * Dynamic block for research query loops.
 *
 * @package research-press
 * @var array $attributes
 */

namespace ResearchPress;

$args = array(
	'post_type'           => $attributes['postType'] ?? 'post',
	'posts_per_page'      => (int) ( $attributes['perPage'] ?? -1 ),
	'order'               => in_array( ( $attributes['order'] ?? 'DESC' ), array( 'ASC', 'DESC' ), true ) ? $attributes['order'] : 'DESC',
	'orderby'             => $attributes['orderby'] ?? 'date',
	'ignore_sticky_posts' => true,
);

$tpl_block = '<!-- wp:template-part {"slug":"post-card","theme":"research-press"} /-->';


if ( is_tax() ) {
	$queried_term      = get_queried_object();
	$tax_name          = $queried_term->taxonomy;
	$term_slug         = $queried_term->slug;
	$args['tax_query'] = array(
		array(
			'taxonomy' => $tax_name,
			'field'    => 'slug',
			'terms'    => $term_slug,
		),
	);
}

$q = new \WP_Query( $args );

ob_start();
?>
<div class="mytheme-custom-query">
	<?php
	if ( $q->have_posts() ) :
		while ( $q->have_posts() ) {
			$q->the_post();
			echo do_blocks( $tpl_block );  // phpcs:ignore
		}
	else :
		?>
	<p>None found—you better get to work.</p>
	<?php endif; ?>
</div>
<?php
wp_reset_postdata();
echo ob_get_clean(); // phpcs:ignore
