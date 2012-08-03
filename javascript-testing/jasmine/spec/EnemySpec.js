define(
	[
		'jquery',
		'../../app/js/realeyes/model/Enemy',
	], 

	function($, Enemy) {
   
    	describe('AppModel', function(){
			
			var enemy,
				name,
				color,
				size;


			beforeEach(function(){
				enemy = new Enemy();
				name = 'TestEnemy';
				color = 'red';
				size = 50;
			});
			
			afterEach(function(){
				enemy = undefined;
			});

			it('Should have a method, init, that can set the initial properties.', function() {
				expect(typeof enemy.init).toBe('function');
				enemy.init(name, color, size);
				expect(enemy.name).toBe(name);
				expect(enemy.color).toBe(color);
				expect(enemy.size).toBe(size);
			});
		});
	}
);