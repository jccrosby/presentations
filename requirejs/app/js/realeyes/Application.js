define(
    [
    	'easel'
    ], 
    function(easel) {
    	return {
	    	initialize: function() {
	    		$('#output').append('<p>Application::initialize();</p>');

	    		var canvas = $('#view')[0];
				var stage = new createjs.Stage(canvas);

				stage.addChild(this.drawSmiley());
				stage.update();
	    	},

	    	drawSmiley: function() {
				var fill = createjs.Graphics.getRGB(255,255,0);
			    var s = new createjs.Shape();
			    var g = s.graphics;
			    s.x = 10;
				s.y = 10;

			    //Head
			    g.setStrokeStyle(15, 'round', 'round');
			    g.beginStroke("#000");
			    g.beginFill(fill);
			    g.drawCircle(170, 170, 170); //55,53
			    g.endFill();
			    g.setStrokeStyle(1, 'round', 'round');

			    //Right eye
			    g.setStrokeStyle(5, 'round', 'round');
			    g.beginStroke("#000");
			    g.beginFill("#000");
			    g.drawRoundRect(125, 64, 20, 50, 10);
			    g.endFill();

			    //Left eye
			    g.setStrokeStyle(5, 'round', 'round');
			    g.beginStroke("#000");
			    g.beginFill("#000");
			    g.drawRoundRect(200, 64, 20, 50, 10);
			    g.endFill();

			    //Mouth
			    g.setStrokeStyle(15, 'round', 'round');
			    g.beginStroke("#000");
			    g.moveTo(45, 155);
			    g.bezierCurveTo(83, 307, 254, 317, 296, 152);
			    return s;
			}
	    }
    }
);