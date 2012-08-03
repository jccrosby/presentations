var express = require('express');
var app = express.createServer();

app.configure(function () {
	app.use(express.methodOverride());
	app.use(express.bodyParser());
	app.use(express.static(__dirname));
	app.use(express.errorHandler({
		dumpExceptions: true, 
		showStack: true
	}));
	app.use(app.router);
});

app.get('/', function (req, res) {
	res.redirect('/app/index.html');
});

app.listen(3000);