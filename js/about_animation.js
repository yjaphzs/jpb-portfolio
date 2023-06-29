$(window).on("load",function() {

    preload = anime({
        targets: '#preload',
        opacity: { value: "0", easing: "linear", duration: 200 }
    });

    preload.complete = function(){
        $("#preload").addClass("preload-finished");
    }

    $('#about .about-intro').inviewport({
        threshold: 75, 
        className: 'about-intro-loaded'
    });

    $('#about .education').inviewport({
        threshold: 25, 
        className: 'education-loaded'
    });

    $('#about #education-level').inviewport({
        threshold: 25, 
        className: 'education-level-loaded'
    });

    $('#about .education-wrapper').inviewport({
        threshold: 25, 
        className: 'education-wrapper-loaded'
    });

    $('#about .gallery').inviewport({
        threshold: 25, 
        className: 'gallery-loaded'
    });

    $('#about .gallery .image-container').inviewport({
        threshold: 25, 
        className: 'image-container-loaded'
    });

    $('#about .hobbies').inviewport({
        threshold: 25, 
        className: 'hobbies-loaded'
    });

    $('#about .hobby').inviewport({
        threshold: 25, 
        className: 'hobby-loaded'
    });

    $('#footer .contact').inviewport({
        threshold: 25, 
        className: 'contact-loaded'
    });

    $('#footer .social-links').inviewport({
        threshold: 25, 
        className: 'social-links-loaded'
    });
});
