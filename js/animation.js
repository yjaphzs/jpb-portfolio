$(document).ready(function(){
    var loadingAni1 = anime({
        targets: '#preload .circle:first-child',
        translateY: [
            { value: 42.5, duration: 1000, easing: 'linear' },
            { value: 0, duration: 1000, easing: 'linear' },
            { value: -42.5, duration: 1000, easing: 'linear' },
            { value: 0, duration: 1000, easing: 'linear' }
        ],
        translateX: [
            { value: 42.5, duration: 1000, easing: 'linear' },
            { value: 85, duration: 1000, easing: 'linear' },
            { value: 42.5, duration: 1000, easing: 'linear' },
            { value: 0, duration: 1000, easing: 'linear' },
        ],
        background: [
            { value: "#FFF", duration: 500, easing: "linear" },
            { value: "#fdcd0b", delay: 1500, duration: 500, easing: "linear" },
        ],
        loop: true,
    });

    var loadingAni2 = anime({
        targets: '#preload .circle:nth-child(2)',
        translateY: [
            { value: -42.5, duration: 1000 },
            { value: 0, duration: 1000 },
            { value: 42.5, duration: 1000},
            { value: 0, duration: 1000 },
            { value: 42.5, duration: 1000},
            { value: 0, duration: 1000 },
            { value: -42.5, duration: 1000},
            { value: 0, duration: 1000 }
        ],
        translateX: [
            { value: 42.5, duration: 1000 },
            { value: 0, duration: 1000},
            { value: 42.5, duration: 1000 },
            { value: 0, duration: 1000 },
            { value: -42.5, duration: 1000 },
            { value: 0, duration: 1000 },
            { value: -42.5, duration: 1000 },
            { value: 0, duration: 1000 }
        ],
        background: [
            { value: "#fdcd0b", duration: 500, easing: "linear" },
            { value: "#FFF", delay: 1500, duration: 500, easing: "linear" },
            { value: "#fdcd0b", delay: 1500, duration: 500, easing: "linear" },
            { value: "#FFF", delay: 1500, duration: 500, easing: "linear" }
        ],
        loop: true,
    });

    var loadingAni3 = anime({
        targets: '#preload .circle:last-child',
        translateY: [
            { value: -42.5, duration: 1000, easing: 'linear' },
            { value: 0, duration: 1000, easing: 'linear' },
            { value: 42.5, duration: 1000, easing: 'linear' },
            { value: 0, duration: 1000, easing: 'linear' }
        ],
        translateX: [
            { value: -42.5, duration: 1000, easing: 'linear' },
            { value: -85, duration: 1000, easing: 'linear' },
            { value: -42.5, duration: 1000, easing: 'linear' },
            { value: 0, duration: 1000, easing: 'linear' },
        ],
        background: [
            { value: "#FFF", duration: 500, easing: "linear" },
            { value: "#fdcd0b", delay: 1500, duration: 500, easing: "linear" },
        ],
        loop: true,
    });
});

$(document).ready(function(){
    function stopLoading(){
        loadingAni1.pause();
        loadingAni2.pause();
        loadingAni3.pause();
    }
});
