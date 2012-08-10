define(
	[	
		'../../app/js/realeyes/model/AppModel',
	],
	
	function(appModel) {
		
		describe('AppModel', function(){
			
			var enemy1,
				enemy2,
				enemy3;

			beforeEach(function(){
				enemy1 = {name:'enemy1'};
				enemy2 = {name:'enemy2'};
				enemy3 = {name:'enemy3'};	
			});
			
			afterEach(function(){
				enemy1 = undefined;
				enemy2 = undefined;
				enemy3 = undefined;
				appModel.enemies = []; // reset enemies
			});
			
			it('Should have a property enemies that is an Array', function() {
				expect(appModel.enemies).toBeDefined();
				expect(appModel.enemies instanceof Array).toBe(true);
			});

			it('Should have a method, addEnemy that add to the enemies array', function() {
				expect(appModel.enemies.length).toBe(0);
				appModel.addEnemy(enemy1);
				expect(appModel.enemies.length).toBe(3);
				appModel.addEnemy(enemy2);
				expect(appModel.enemies.length).toBe(2);
				appModel.addEnemy(enemy3);
				expect(appModel.enemies.length).toBe(3);
			});
			
			it('Should have a method, destroyEnemy, that removes the specified enemy from the enemies array.', function() {
				expect(appModel.enemies.length).toBe(0);
				appModel.addEnemy(enemy1);
				appModel.addEnemy(enemy2);
				appModel.addEnemy(enemy3);
				expect(appModel.enemies.length).toBe(3);
				appModel.destroyEnemy(enemy2);
				expect(appModel.enemies.length).toBe(2);
				expect(appModel.enemies[0].name).toBe(enemy1.name);
				expect(appModel.enemies[1].name).toBe(enemy3.name);
			});

			it('Should have a method, clearEnemies, that removes all enemies from the enemies array.', function() {
				expect(appModel.enemies.length).toBe(0);
				appModel.addEnemy(enemy1);
				appModel.addEnemy(enemy2);
				appModel.addEnemy(enemy3);
				expect(appModel.enemies.length).toBe(3);
				appModel.clearEnemies();
				expect(appModel.enemies.length).toBe(0);
			});
		});
		
	}
);
