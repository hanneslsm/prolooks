/** Register Block Styles
 * --------------------------------------------- */
import { registerBlockStyle } from '@wordpress/blocks';

const blockStyles = [
	{
		block: 'core/button',
		styles: [
			{ name: 'prolooks-brand', label: 'Brand' },
			{ name: 'prolooks-base', label: 'Base' },
		],
	},
	{
		block: 'core/details',
		styles: [ { name: 'prolooks-chevron', label: 'Chevron' } ],
	},
	{
		block: 'core/gallery',
		styles: [ { name: 'prolooks-scale-effect', label: 'Scale Effect' } ],
	},
	{
		block: 'core/group',
		styles: [ { name: 'prolooks-spotlight', label: 'Spotlight' } ],
		styles: [ { name: 'prolooks-bg-gradient', label: 'Gradient' } ],
	},
	{
		block: 'core/image',
		styles: [ { name: 'prolooks-picture-frame', label: 'Picture Frame' } ],
	},
	{
		block: 'core/list',
		styles: [
			{ name: 'prolooks-checkmark', label: 'Checkmark' },
			{ name: 'prolooks-crossmark', label: 'Crossmark' },
			{ name: 'prolooks-crossmark-2', label: 'Crossmark 2 Red' },
			{ name: 'prolooks-checkmark-2', label: 'Checkmark 2 Green' },
		],
	},
	{
		block: 'core/paragraph',
		styles: [ { name: 'prolooks-indicator', label: 'Indicator' } ],
		styles: [ { name: 'prolooks-overline', label: 'Overline' } ],
	},
];

blockStyles.forEach( ( { block, styles } ) => {
	styles.forEach( ( { name, label } ) => {
		wp.blocks.registerBlockStyle( block, { name, label } );
	} );
} );
