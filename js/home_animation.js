$(window).on("load",function() {
    var valueOld = "";

    preload = anime({
        targets: '#preload',
        opacity: { value: "0", easing: "linear", duration: 200 }
    });

    preload.complete = function(){
        $("#preload").addClass("preload-finished");
    }
    
    $('#home .banner-profile').inviewport({
        threshold: 75, 
        className: 'banner-profile-loaded'
    });

    $('#home .work-experience').inviewport({
        threshold: 25, 
        className: 'work-experience-loaded'
    });

    $('#home .technical-skills').inviewport({
        threshold: 25, 
        className: 'technical-skills-loaded'
    });

    $('#home #philrice').inviewport({
        threshold: 25, 
        className: 'work-wrapper1-loaded'
    });

    $('#home #wideout').inviewport({
        threshold: 25, 
        className: 'work-wrapper1-loaded'
    });

    $('#home #clsu').inviewport({
        threshold: 25, 
        className: 'work-wrapper2-loaded'
    });

    $('#home #techno').inviewport({
        threshold: 25, 
        className: 'work-wrapper3-loaded'
    });

    $('.skill-wrapper .skill').on('mouseenter',function(){
        var name = $(this).attr('class').split(' ')[1];
        var value = "";
        var target = "."+name+ " h4";
        if(name == "js" || name == "php" || name == "json" || name == "photoshop"){
            value = [0+"<span>%</span>",80+"<span>%</span>"];
        }
        else if(name == "sass" || name == "jquery"){
            value = [0+"<span>%</span>",85+"<span>%</span>"];
        }
        else if(name == "bootstrap"){
            value = [0+"<span>%</span>",55+"<span>%</span>"];
        }
        else if(name == "alertifyjs" || name == "sweetalert" || name == "chartjs" || name == "css" || name == "html"){
            value = [0+"<span>%</span>",90+"<span>%</span>"];
        }
        else if(name == "leaflet"){
            value = [0+"<span>%</span>",75+"<span>%</span>"];
        }
        else if(name == "mysql" || name == "nodejs" || name == "angular" || name == "mariadb" || name == "mailgun"){
            value = [0+"<span>%</span>",70+"<span>%</span>"];
        }
        else if(name == "mongodb"){
            value = [0+"<span>%</span>",75+"<span>%</span>"];
        }
        else if(name == "firebase"){
            value = [0+"<span>%</span>",50+"<span>%</span>"];
        }
        else if(name == "phpmyadmin"){
            value = [0+"<span>%</span>",95+"<span>%</span>"];
        }
        else if(name == "illustrator"){
            value = [0+"<span>%</span>",55+"<span>%</span>"];
        }
        else if(name == "adstudio"){
            value = [0+"<span>%</span>",75+"<span>%</span>"];
        }
        else if(name == "laravel"){
            value = [0+"<span>%</span>",85+"<span>%</span>"];
        }
        else if(name == "vonage" || name == "godaddy" || name == "splideClass" || name == "tinglejs" || name == "sqlite"){
            value = [0+"<span>%</span>",80+"<span>%</span>"];
        }
        anime({
            targets: target,
            innerHTML: value,
            easing: 'linear',
            duration: 500,
            round: 10 // Will round the animated value to 1 decimal
        });
    });

    $('#home .developments').inviewport({
        threshold: 25, 
        className: 'developments-loaded'
    });

    $('#home #project').inviewport({
        threshold: 25, 
        className: 'project-wrapper-loaded'
    });

    $('#footer .contact').inviewport({
        threshold: 25, 
        className: 'contact-loaded'
    });

    $('#footer .social-links').inviewport({
        threshold: 25, 
        className: 'social-links-loaded'
    });
    
    new Splide( '.web-fundamentals', {
        rewind: true,
        fixedWidth: 266.66,
        perPage: 3,
        perMove: 1,
        pagination: false,
        breakpoints: {
            '880': {
                fixedWidth: 0,
            },
            '768': {
                fixedWidth: 0,
                perPage: 1,
            }
        }
    } ).mount();
    new Splide( '.applications', {
        rewind: true,
        fixedWidth: 266.66,
        perPage: 3,
        perMove: 1,
        pagination: false,
        breakpoints: {
            '880': {
                fixedWidth: 0,
            },
            '768': {
                fixedWidth: 0,
                perPage: 1,
            }
        }
    } ).mount();
    new Splide( '.frameworks', {
        rewind: true,
        fixedWidth: 266.66,
        perPage: 3,
        perMove: 1,
        pagination: false,
        breakpoints: {
            '880': {
                fixedWidth: 0,
            },
            '768': {
                fixedWidth: 0,
                perPage: 1,
            }
        }
    } ).mount();
    new Splide( '.databases', {
        rewind: true,
        fixedWidth: 266.66,
        perPage: 3,
        perMove: 1,
        pagination: false,
        breakpoints: {
            '880': {
                fixedWidth: 0,
            },
            '768': {
                fixedWidth: 0,
                perPage: 1,
            }
        }
    } ).mount();
    new Splide( '.services', {
        rewind: true,
        fixedWidth: 266.66,
        perPage: 3,
        perMove: 1,
        pagination: false,
        breakpoints: {
            '880': {
                fixedWidth: 0,
            },
            '768': {
                fixedWidth: 0,
                perPage: 1,
            }
        }
    } ).mount();
    new Splide( '.js-libraries', {
        rewind: true,
        fixedWidth: 266.66,
        perPage: 3,
        perMove: 1,
        pagination: false,
        breakpoints: {
            '880': {
                fixedWidth: 0,
            },
            '768': {
                fixedWidth: 0,
                perPage: 1,
            }
        }
    } ).mount();
});
