require.config({
	
	baseUrl: 'js/',

	paths: {
		'jquery': 'libs/jquery-1.7.2',
		'easel': 'libs/easeljs-0.4.2.min'
	},

	shim: {
		jquery: {
			exports:'$'
		},
		easel: {
			deps: ['jquery']
		}
	}
});

require(
    [
    	'jquery'
    ], 

	function($) {
		
		require(
	        [
	        	'easel',
				'realeyes/Application',
	        ], 
		    function(easel, app){

	        	$('#output').append('<p>RequireJS::main();</p>');
				app.initialize();
			}
		);

	}
);