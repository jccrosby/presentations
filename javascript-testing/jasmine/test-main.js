require.config({
	baseUrl: '../app/js',
	paths: {
		// Libraries
		'jquery': 'libs/jquery-1.7.2',
	}
	
});

require(
	[
		'jquery',
		// Specs
		//'../../jasmine/spec/AppModelSpec',
		'../../jasmine/spec/EnemySpec'
	],

	function($, appModel) {
		var jasmineEnv = jasmine.getEnv();
		jasmineEnv.updateInterval = 1000;

		//var reporter = new jasmine.HtmlReporter();
		var reporter = new jasmine.TrivialReporter();

		jasmineEnv.addReporter(reporter);

		jasmineEnv.specFilter = function(spec) {
			return reporter.specFilter(spec);
		};

		jasmineEnv.execute();
	}
);