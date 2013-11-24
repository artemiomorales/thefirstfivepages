<nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
    <div class="footerClass">
        
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        	<div class="purchase">
            Purchase
            </div>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="menu2">
                <img src="assets/fonts/mobile-feedback-button.png"/>
            </div>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        	<div class="nextStory">
                

                    <button name="button1" value="next story" onClick="loadStory()">

                    next story
                        <script type="text/javascript">
                            function loadStory(){
                                
                                $("#reader").fadeOut(200, function(){
                                    $("#loading-icon").fadeIn(100);
                                });

                                $.get( "loadStory.php", function( data ) {

                                    arrayOfStrings = data.split(".")
                                    
                                    placeText(arrayOfStrings[0], arrayOfStrings[1], arrayOfStrings[2]);
                                });

                            }

                        </script>
                    
                    </button>
            </div>
        </div>

    </div>
</nav>

