var requirejs = require('requirejs');
//var Jasmine = require('jasmine').Jasmine;

requirejs.config({
    //Pass the top-level main.js/index.js require
    //function to requirejs so that node modules
    //are loaded relative to the top-level JS file.
    nodeRequire: require,

	baseUrl: './',
	paths: {
		// Externals
		'tpl': '../app/tpl',
		
		'spec': 'spec',
		
		// Libraries
		//'jquery': '../app/js/libs/jquery-1.7.2',
		//'underscore': '../app/js/libs/underscore-1.3.3',
		//'backbone': '../app/js/libs/backbone-0.9.2',
		//'handlebars': '../app/js/libs/handlebars-1.0.0.beta.6',
		'jasmine': 'jasmine.js',

		// Require
		//'use': '../app/js/libs/require/use-0.2.0',
		//'text': '../app/js/libs/require/text-1.0.7',
	},
	
	use: {
		underscore: {
			attach: '_'
		},
		backbone: {
			deps: ['use!underscore', 'jquery'],
			attach: 'Backbone'
		},
		handlebars: {
			attach: 'Handlebars'
		},
		jasmine: {
			attach: 'jasmine'
		}
	}
});

requirejs(
	[
		// Jasmine
		'test/jasmine'
	
		// Specs
		//'spec/PlayerSpec',
		
		// Globals
		//'use!backbone',
		//'use!jasmine'
	],

	function(jasmine) {
		
		var jasmineEnv = jasmine.getEnv();
		jasmineEnv.updateInterval = 1000;

		var reporter = new jasmine.HtmlReporter();

		jasmineEnv.addReporter(reporter);

		jasmineEnv.specFilter = function(spec) {
			return reporter.specFilter(spec);
		};

		jasmineEnv.execute();
	}
);

