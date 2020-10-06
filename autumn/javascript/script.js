//*-~*~-*-*-~*~-*-*-~*~*-*-~*~-*-*-~*~-*
//
//　　　　　　　　Made with ❤ by ~
//　　　　　　 Areal Alien ❥ 雷克斯
//
//　　　　　　　　　　▄▀▄　　　▄▀▄
//　　　　　　　　 ▄█░░▀▀▀▀▀░░█▄
//　　　　　▄▄ 　█░░░░░░░░░░░█　▄▄
//　　　　█▄▄█　█░░▀░░┬░░▀░░█　█▄▄█
//*-~*~-*-*-~*~-*-*-~*~*-*-~*~-*-*-~*~-*

// Loading animation
let wrapperInner = document.querySelector('.loading-page');
let wrapper = document.querySelector('.loading-page svg');

function draw() {
    wrapper.classList.add('active');
    wrapperInner.classList.add('animation-in');
}
setTimeout(draw, 300);


// Disable drag on image
$('img').on('dragstart', function(event) { event.preventDefault(); });

// Video playing with timeout
let vid = document.querySelector("#header-video");
vid.autoplay = true;
vid.volume = 0;
vid.load();

$('a[href*="#"]')

    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {

        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            &&
            location.hostname == this.hostname
        ) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

            if (target.length) {

                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, function() {

                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) {
                        return false;
                    } else {
                        $target.attr('tabindex','-1');
                        $target.focus();
                    };
                });
            }
        }
    });