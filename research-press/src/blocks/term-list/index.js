import { registerBlockType } from '@wordpress/blocks';
import { default as ServerSideRender } from '@wordpress/server-side-render';
import metadata from './block.json';

registerBlockType(metadata.name, {
	edit: ({ attributes }) => (
		<ServerSideRender block={metadata.name} attributes={attributes} />
	),
	save: () => null,
});
