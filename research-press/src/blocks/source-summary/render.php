<?php
/**
 * Source summary block.
 *
 * @package research-press
 */

namespace ResearchPress;

$wrapper_attributes = get_block_wrapper_attributes();
?>
<div <?php echo $wrapper_attributes; // phpcs:ignore ?>>
	<table>
		<tbody>
			<tr>
				<th>Archived Link:</th>
				<td>
					<a href="<?php echo esc_attr( $attributes['sourceLink'] ); ?>">
						<?php echo esc_html( $attributes['sourceLink'] ); ?>
					</a>
				</td>
			</tr>
			<tr>
				<th>Publication Date:</th>
				<td>
					<?php echo esc_html( $attributes['date'] ); ?>
				</td>
			</tr>
			<tr>
				<th>Authors:</th>
				<td>
					<?php echo wp_kses_post( $attributes['authors'] ); ?>
				</td>
			</tr>
		</tbody>
	</table>
</div>
