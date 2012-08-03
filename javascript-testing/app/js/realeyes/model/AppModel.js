define(
	[
		
	], 

	function() {
   
    	var AppModel = function() {
    		
    	}

    	$.extend(AppModel.prototype, {

    		stage: undefined,
    		enemies: [],

    		addEnemy: function(enemy) {
    			this.enemies.push(enemy);
    		},

    		destroyEnemy: function(enemy) {
    			var idx = 0;
    			for(var i = 0; i < this.enemies.length; i++) {
    				if(enemy === this.enemies[i]) {
    					idx = i;
    					break;
    				}
    			}
    			this.enemies.splice(idx, 1);
    		},

    		clearEnemies: function() {
    			this.enemies = [];
    		},

    	});
   
    	return new AppModel(); 
	}
);