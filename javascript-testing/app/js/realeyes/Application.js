define(
	[
		'realeyes/model/AppModel'
	], 

	function(appModel) {
   		var Application = function() {

   		}

   		$.extend(Application.prototype, {

   			canvas: undefined,
   			stage: undefined,
            message: undefined,

   			init: function() {

   				canvas = $('#application');
   				appModel.stage = stage = new Stage(canvas);

               this.initListeners();

               this.addText();
   			},

            initListeners: function() {
               $('#start_btn').on('click', function() {
                  $('#header').html('<p id="score">Score: 0</p>');
               });
            }, 

            addText: function() {
               message = new Text('My awesome app.', '36px Arial', '#666');
               message.x = 10;
               message.y = 10;
               stage.addChild(message)
            },

   		});

    	return new Application();
	}
);