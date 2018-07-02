$(document).ready(function () {

    jQuery('.contact-form').submit(function () {
        event.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            dataType: 'json',
            data: $(this).serialize(),
   
            success: function (data, status) {
                if (status === 'success') {
                    $('.flash-message-contact-form-success').removeClass('d-none');
                }
            },
            error: function(err) {
                response = err.responseJSON;
                if (err.status === 422) {
                    if (response.contactFormName) {
                        $('.flash-message-contact-form-name span').html(response.contactFormName[0]);
                        $('.flash-message-contact-form-name').removeClass('d-none');
                    }
                    else {
                        $('.flash-message-contact-form-name').addClass('d-none');
                    }
                    if (response.contactFormEmail) {
                        $('.flash-message-contact-form-email span').html(response.contactFormEmail[0]);
                        $('.flash-message-contact-form-email').removeClass('d-none');
                    }
                    else {
                        $('.flash-message-contact-form-email').addClass('d-none');
                    }
                    if (response.contactFormMessage) {
                        $('.flash-message-contact-form-message span').html(response.contactFormMessage[0]);
                        $('.flash-message-contact-form-message').removeClass('d-none');
                    }
                    else {
                        $('.flash-message-contact-form-message').addClass('d-none');
                    }
                }
            }
        });

        return false;
    });


    jQuery('.newsletter-form').submit(function () {
        event.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            dataType: 'json',
            data: $(this).serialize(),

            success: function (data, status) {
                if (status === 'success') {
                    $('.flash-message-newsletter-form-success').removeClass('d-none');
                }
            },
            error: function (err) {
                response = err.responseJSON;
                if (err.status === 422) {
                    if (response.contactFormName) {
                        $('.flash-message-newsletter-form-name span').html(response.contactFormName[0]);
                        $('.flash-message-newsletter-form-name').removeClass('d-none');
                    }
                    else {
                        $('.flash-message-newsletter-form-name').addClass('d-none');
                    }
                    if (response.contactFormEmail) {
                        $('.flash-message-newsletter-form-email span').html(response.contactFormEmail[0]);
                        $('.flash-message-newsletter-form-email').removeClass('d-none');
                    }
                    else {
                        $('.flash-message-newsletter-form-email').addClass('d-none');
                    }
                }
            }
        });

        return false;
    });

});


$(document).ready(function () {

    $(".javascript").timer(90);
    $(".angular").timer(85);
    $(".express").timer(80);
    
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
        var tween = TweenMax.from(this , 0.2, {autoAlpha: 0, scale: 0.5, y: '-=50', ease: Linear.easeNone});

        var scene = new ScrollMagic.Scene({
            triggerElement: this
        })
        .setTween(tween) // trigger a TweenMax tween
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

$.fn.timer = function (progress) {
    class progressBar {
        constructor(progress) {
            this.progress = progress;
        }

        init(target) {
            this.render(target)
        }

        getProgress() {
            return this.progress;
        }

        render(target) {
            this.animation(target)
        }
        
        animation(target) {
            target[0]

            var timeleft = this.getProgress();
            var time = this.getProgress();
            var timer = setInterval(function () {
                target[0].innerHTML = time- --timeleft + '%';
                if (timeleft <= 0)
                    clearInterval(timer);
            }, 30);

        }

    }
  
    var javascript = new progressBar(progress);
    javascript.init($(this))
};

