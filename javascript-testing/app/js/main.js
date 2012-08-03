// RequireJS Configuration
require.config({
	baseUrl: 'js',

	paths: {
		'jquery': 'libs/jquery-1.7.2',
		'easel': 'libs/easeljs-0.4.2.min',
	},

	shim: {
		jquery: {
			exports: '$'
		}
	}
});

require(
	[
		'realeyes/Application',

		'jquery',
		'easel'
	],

	function(app, $) {
		app.init();	
	}
);