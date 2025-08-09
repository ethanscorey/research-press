import { registerBlockType } from '@wordpress/blocks';
import metadata from './block.json';
import { default as ServerSideRender } from '@wordpress/server-side-render';

registerBlockType(metadata.name, {
	edit: ({ attributes }) => (
		<ServerSideRender block={metadata.name} attributes={attributes} />
	),
	save: () => null,
});
