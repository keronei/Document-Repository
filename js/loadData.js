var script = document.createElement('script');
script.src = 'http://code.jquery.com/jquery-1.11.0.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);


// Anonymous "self-invoking" function
(function() {
    var startingTime = new Date().getTime();
    // Load the script
    var script = document.createElement("SCRIPT");
    script.src = 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js';
    script.type = 'text/javascript';
    document.getElementsByTagName("head")[0].appendChild(script);

    // Poll for jQuery to come into existance
    var checkReady = function(callback) {
        if (window.jQuery) {
            callback(jQuery);
        }
        else {
            window.setTimeout(function() { checkReady(callback); }, 20);
        }
    };

    // Start polling...
    checkReady(function($) {
        $(function() {
            var endingTime = new Date().getTime();
            var tookTime = endingTime - startingTime;
            window.alert("jQuery is loaded, after " + tookTime + " milliseconds!");
        });
    });
})();

	var loadData=	jQuery.ajax({
    type: "POST",
    url: 'fetchDocs.php',
    dataType: 'json',
    data: {
		functionname: 'add', arguments: [1, 2]},

    success: function (obj, textstatus) {
                  if( !('error' in obj) ) {
					
                      yourVariable = obj.result;
                  }
                  else {
                      console.log(obj.error);
                  }
            }
});