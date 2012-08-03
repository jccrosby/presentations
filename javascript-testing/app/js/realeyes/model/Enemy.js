define(
	[
		
	], 

	function() {
   
    	var Enemy = function() {

    	}

    	$.extend(Enemy.prototype, {
    		name: undefined,
    		color: undefined,
    		size: undefined,

    		init: function(name, color, size) {
    			this.name = name;
    			this.color = color;
    			this.size = size;
    		}
    	});
   
    	return Enemy; 
	}
);