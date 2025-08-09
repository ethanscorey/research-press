/**
 * @file Edit script for source summary block.
 * @author Ethan Corey <ethanscorey@gmail.com>
 */
import { useBlockProps, RichText } from '@wordpress/block-editor';
import { DatePicker, TextControl } from '@wordpress/components';
import { useSelect, useDispatch } from '@wordpress/data';

/**
 * Gutenberg editor component for filter block.
 * @param {Object}   props               - The block props.
 * @param {Object}   props.attributes    - The block attributes.
 * @param {Function} props.setAttributes - The attribute setter function.
 * @return {JSX.Element} - The editor component.
 */
export default function Edit({ attributes, setAttributes }) {
	const { sourceLink, authors } = attributes;
	const currentDate = useSelect(
		(select) => select('core/editor').getEditedPostAttribute('date'),
		[]
	);
	const { editPost } = useDispatch('core/editor');
	const updateDate = (newDate) => {
		editPost({ date: newDate });
		setAttributes({ date: new Date(newDate).toLocaleDateString() });
	};
	return (
		<div {...useBlockProps()}>
			<table>
				<tbody>
					<tr>
						<th>Archived Link:</th>
						<td>
							<TextControl
								__nextHasNoMarginBottom
								__next40pxDefaultSize
								value={sourceLink}
								onChange={(value) =>
									setAttributes({ sourceLink: value })
								}
							/>
						</td>
					</tr>
					<tr>
						<th>Publication Date:</th>
						<td>
							<DatePicker
								currentDate={currentDate}
								onChange={updateDate}
							/>
						</td>
					</tr>
					<tr>
						<th>Authors:</th>
						<td>
							<RichText
								tagName="p"
								placeholder="Enter author info..."
								value={authors}
								onChange={(value) =>
									setAttributes({ authors: value })
								}
							/>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	);
}
