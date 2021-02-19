 /*--------------------------------------JQUERY------------------------------------------*/
 (function($) {
    "use strict";
    $(window).on("load", function() {//Onload Start

        //Preloader
        $("#status").fadeOut();
        $("#preloader").delay(450).fadeOut("slow");

    });//Onload End

})(jQuery);
/*--------------------------------------./JQUERY------------------------------------------*/



/*--------------------------------------JAVASCRIPPT------------------------------------------*/
$(document).ready(function(){  
    //Change navbar bg color     
    var scroll_start = 0;
    var startchange = $('#change');
    var offset = startchange.offset();
    if (startchange.length > 0){
        $(document).scroll(function() { 
            scroll_start = $(document).scrollTop();
            if(scroll_start > offset.top) {
                $(".navbar").css('background-color', '#28a745');
                
            } else {
                $('.navbar').css('background-color', 'transparent');
            }
        });
    }

 });
 /*--------------------------------------./JAVASCRIPPT------------------------------------------*/