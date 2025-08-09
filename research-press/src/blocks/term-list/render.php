<?php
/**
 *
 * Dynamic block for research term lists.
 *
 * @package research-press
 * @var array $attributes
 */

namespace ResearchPress;

$terms              = get_terms(
	array(
		'taxonomy'   => $attributes['taxonomy'],
		'hide_empty' => true,
	)
);
$wrapper_attributes = get_block_wrapper_attributes();
?>
<section <?php echo $wrapper_attributes // phpcs:ignore ?>>
	<h2><?php echo esc_html( ucwords( $attributes['taxonomy'] ) ); ?></h2>
		<ul>
		<?php foreach ( $terms as $research_term ) : ?>
			<li><a href="<?php echo esc_attr( get_term_link( $research_term ) ); ?>"><?php echo esc_html( $research_term->name ); ?></a></li>
		<?php endforeach; ?>
		</ul>
</section>
