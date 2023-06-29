$(document).ready(function(){
    if( $('#home .work-experience').is( ':in-viewport(100)' ) ) {
        $('#nav-wrapper').addClass('bl-bg');
    }
    else if ( $('#about .about-intro').is( ':in-viewport(100)' ) ) {
        $('#nav-wrapper').addClass('bl-bg');
    }
    else{
        $('#nav-wrapper').removeClass('bl-bg');
    }

    if($('#home .banner-profile').is(':in-viewport(0)')){
        $('#messenger-chat').addClass('messenger-bg');
    }
    else{
        $('#messenger-chat').removeClass('messenger-bg');
    }
    /*NAVBAR*/
    $(window).scroll(function() {
        if( $('#home .work-experience').is( ':in-viewport(100)' ) ) {
            $('#nav-wrapper').addClass('bl-bg');
        }
        else if ( $('#home .developments').is( ':in-viewport(100)' ) ) {
            $('#nav-wrapper').addClass('bl-bg');
        }
        else if ( $('#about .education').is( ':in-viewport(100)' ) ) {
            $('#nav-wrapper').addClass('bl-bg');
        }
        else if ( $('#about .hobbies').is( ':in-viewport(100)' ) ) {
            $('#nav-wrapper').addClass('bl-bg');
        }
        else{
            $('#nav-wrapper').removeClass('bl-bg');
        }

        // if($('#home .banner-profile').is(':in-viewport(-100)')){
        //     $('#messenger-chat').addClass('messenger-bg');
        // }
        // else if($('#home .technical-skills').is(':in-viewport(-100)')){
        //     $('#messenger-chat').addClass('messenger-bg');
        // }
        // else if($('#footer').is(':in-viewport(-100)')){
        //     $('#messenger-chat').addClass('messenger-bg');
        // }
        // else if($('#about .about-intro').is(':in-viewport(-100)')){
        //     $('#messenger-chat').addClass('messenger-bg');
        // }
        // else if($('#about .gallery').is(':in-viewport(-100)')){
        //     $('#messenger-chat').addClass('messenger-bg');
        // }
        // else{
        //     $('#messenger-chat').removeClass('messenger-bg');
        // }
    });
});
    

