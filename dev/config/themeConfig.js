'use strict';

module.exports = {
	theme: {
		name: 'rigtheme',
		author: 'Morten Rand-Hendriksen'
	},
	dev: {
		browserSync: {
			live: true,
			proxyURL: 'wprigio.test:8888',
			bypassPort: '8181'
		},
		browserslist: [ // See https://github.com/browserslist/browserslist
			'> 1%',
			'last 2 versions'
		],
		debug: {
			styles: false, // Render verbose CSS for debugging.
			scripts: false // Render verbose JS for debugging.
		}
	},
	export: {
		compress: false
	}
};
