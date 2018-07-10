$(document).ready(function () {

/**** Srolling Functionality Services ****/
    // init controller
    var anchorLinkScrollingController = new ScrollMagic.Controller();

    // change behaviour of controller to animate scroll instead of jump
    anchorLinkScrollingController.scrollTo(function (newpos, offset) {
        TweenMax.to(window, 0.5, { scrollTo: { y: newpos + offset } });
    });

    //  bind scroll to anchor links
    $(document).on("click", "a[href^='#']", function (e) {
        var id = $(this).attr("href");
        if ($(id).length > 0) {
            e.preventDefault();

            // trigger scroll
            anchorLinkScrollingController.scrollTo(id, - 100);

            // if supported by the browser we can even update the URL.
            if (window.history && window.history.pushState) {
                history.pushState("", document.title, id);
            }
        }
    });

    var servicesController = new ScrollMagic.Controller();
    $('.fade-in').each(function () {
        var fadeTween = TweenMax.from(this , 0.2, {autoAlpha: 0, scale: 0.5, y: '-=50', ease: Linear.easeNone});

        var scene = new ScrollMagic.Scene({
            triggerElement: this
        })
        .setTween(fadeTween) // trigger a TweenMax tween
        .addTo(servicesController)
    })


/* Collapse Mobile Navigation Box On Click */

    $('#navbarToggleExternalContent .nav-item').each(function() {
        $(this).click(function() {
            $('nav:nth-child(2) button').attr('aria-expanded', 'false');
            $('nav:nth-child(2) button').removeClass('navbar-toggler');
            $('nav:nth-child(2) button').addClass('navbar-toggler collapsed');
            $('#navbarToggleExternalContent').addClass('collapsing');
            $('#navbarToggleExternalContent').removeClass('show');
        })
    })
});

//** Helper Functions **/
function revealElement(target, animation) {
    $(target).removeClass('invisible');
    $(target).addClass('animated' + animation);
}

var triggered = false;

if (triggered == false) {
    $(window).scroll(function (event) {
        var hT = $('.skills-container').offset().top;
        var wH = $(window).height();
        var wS = $(this).scrollTop();
        if (wS > (hT - wH) && triggered == false) {
            $(".javascript").timer(90);
            $(".angular").timer(85);
            $(".photoshop").timer(90);
            $(".dreamweaver").timer(87);
            $(".linux").timer(87);
            $(".mac").timer(87);
            $(".windows").timer(87);
            triggered = true;
        }


    });


}