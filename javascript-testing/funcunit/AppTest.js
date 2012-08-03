module('MyAwesomeApp', {
	setup: function() {
		// opens the page you want to test
		S.open('http://localhost:3000/app/index.html');
	}
})

test('page has content', function() {
	ok(S('body *').size(), 'THe body has elements.');
});

test('There is a canvas with the id application', function() {
	ok(S('#application').exists());
});

test('When I click the start button, the app starts.', function() {
	expect(3);
	S('#start_btn').click();
	
	ok(S('#score').visible(function(){
		ok(S('#score').exists());
	}))
	ok(S('#score').text(/Score/));
});