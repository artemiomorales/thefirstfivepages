<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
    <div class="footerClass">
        
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        	<div class="purchase">
            purchase
            </div>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="menu2">
                <!-- <img src="assets/img/mobile-feedback-button.png"/> -->
            </div>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        	<div class="nextStory">
                

                    <button name="button1" value="next story" onClick="loadStory()">


                    next story
                        <script type="text/javascript">

                        var randomId = 0;

                            function loadStory(){
                                
                                randomId++;
                                if(randomId > 6)
                                    randomId = 1;

                                $("#reader").fadeOut(200, function(){
                                    $.post( "loadStory.php", { randomId: randomId } ) 

                                        .done(function( data ) {
                                            console.log(randomId);
                                            arrayOfStrings = data.split("~")
                                            placeText(arrayOfStrings[0], arrayOfStrings[1], arrayOfStrings[2]);

                                    });

                                });

                            }

                        </script>
                    
                    </button>
            </div>
        </div>

    </div>
</div>