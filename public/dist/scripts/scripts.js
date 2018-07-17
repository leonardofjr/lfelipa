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
$(document).ready(function () {

    $('#addWorkForm').submit(function (e) {
        // Getting form data from selected form
        // $(this) contains the selected form
        e.preventDefault();
        var formData = new FormData($('#addWorkForm')[0]);
        // Starting Ajax request
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            // Expecting JSON to be returned
            dataType: 'json',
            processData: false,
            contentType: false,
            // Attaching Cross Site Request Forgery Token value into header
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            // Attaching form data
            data: formData,

            success: function (data, status) {
                // 
                if (status === 'success') {
                    // We will redirect our user to the following url
                    location.href = '/admin/work';
                }
            },
            error: function (xhr, status, err) {
                response = xhr.responseJSON;
                if (response.title) {
                    $('.flash-message-title span').html(response.title[0]);
                    $('.flash-message-title').removeClass('d-none');
                }
                else {
                    $('.flash-message-title').addClass('d-none');
                }
                if (response.description) {
                    $('.flash-message-description span').html(response.description[0]);
                    $('.flash-message-description').removeClass('d-none');
                }
                else {
                    $('.flash-message-description').addClass('d-none');
                }
            }

        });
        return false;
    });


    $('#editWorkForm').submit(function (e) {
        e.preventDefault();
        // Getting form data from selected form
        // $(this) contains the selected form
        var formData = new FormData($('#editWorkForm')[0]);
        // Starting Ajax request
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            // Expecting JSON to be returned
            dataType: 'json',
            processData: false,
            contentType: false,
            // Attaching Cross Site Request Forgery Token value into header
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            // Attaching form data
            data: formData,

            success: function (data, status) {
                // 
                if (status === 'success') {
                    // We will redirect our user to the following url
                    location.href = '/admin/work';

                }
            },
            error: function (xhr, status, err) {
                response = xhr.responseJSON;
               console.log(xhr);
                 
                if (response.title) {
                    $('.flash-message-title span').html(response.title[0]);
                    $('.flash-message-title').removeClass('d-none');
                }
                else {
                    $('.flash-message-title').addClass('d-none');
                }
                if (response.description) {
                    $('.flash-message-description span').html(response.description[0]);
                    $('.flash-message-description').removeClass('d-none');
                }
                else {
                    $('.flash-message-description').addClass('d-none');
                }
          
            }

        });
        return false;
    });



    $('#deleteWorkForm').submit(function(e) {
        e.preventDefault();
    
        // Starting Ajax request
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            // Expecting JSON to be returned
            dataType: 'json',
            // Attaching Cross Site Request Forgery Token value into header
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function (data, status) {
                // 
                if (status === 'success') {
                    // We will redirect our user to the following url
                    location.href = '/admin/work';

                }
            },
            error: function (xhr, status, err) {
               console.log(err);
            }

        });
    });
});



$(document).ready(function () {

    class DialogBox {
        constructor() {
            this.isDialogCreated = false;
        }
        init(target) {
            this.cacheDom(target);
            this.bindEvents();
        }

        cacheDom(target) {
            this.target = target;
            this.div;
            this.closeBtn;
            this.createDialogBoxBtn = document.querySelector('.create-dialog-box-btn');
            this.inputDialogBox = document.querySelector('.input-dialog-box');
            this.name = document.querySelector('.developer-name');

        }

        disableBtn() {
            this.createDialogBoxBtn.setAttribute('disabled', 'disabled');
        }

        bindEvents() {
            this.createDialogBoxBtn.addEventListener('click', function () {
                this.createElements();
                this.disableBtn();
            }.bind(this));
        }

        createElements() {
            if (this.getIsDialogCreated() === false) {
                this.createInput(this.target);
                this.createCloseBtn(this.target);
                this.isDialogCreated = true;
            }
        }

        getIsDialogCreated() {
            return this.isDialogCreated
        }

        reset(element) {
            $('.create-dialog-box-btn')[0].removeAttribute('disabled', 'disabled');
            $(element).empty();
            this.isDialogCreated = false;
        }

        createInput(target) {
            this.div = document.createElement('div');
            this.div.className = 'form-group mx-sm-3 mb-2';
            target.appendChild(this.div);
            this.input = document.createElement('input');
            this.input.className = 'change-name form-control';
            this.input.value = this.name.innerHTML;

            this.div.appendChild(this.input);

            this.input.addEventListener('keyup', function () {
                if (this.input.value.length < 1) {
                    this.name.innerHTML = 'Leonardo';
                } else {
                    this.name.innerHTML = this.input.value;
                }

            }.bind(this));
        }

        createCloseBtn() {
            this.closeBtn = document.createElement('span');
            this.closeBtn.className = 'close-input-box pl-3 fas fa-window-close';
            this.div.appendChild(this.closeBtn);

            this.closeBtn.addEventListener('click', function () {
                this.reset(this.inputDialogBox);
            }.bind(this));

        }
    }


    var dialogbox = new DialogBox;
    dialogbox.init($('.input-dialog-box')[0]);
})




$.fn.timer = function (progress) {
    class progressBar {
        constructor(progress) {
            this.progress = progress;
        }

        init(target) {
            this.render(target[0])
        }

        getProgress() {
            return this.progress;
        }

        render(target) {
            this.animation(target)
        }
        
        animation(target) {
            var timeleft = this.getProgress();
            var time = this.getProgress();
            var timer = setInterval(function () {
                target.innerHTML = time- --timeleft + '%';
                if (timeleft <= 0) {
                    clearInterval(timer);
                }
            }, 30);

        }

    }
  
    var javascript = new progressBar(progress);

    javascript.init($(this))
};


$(document).ready(function() {
    $('.work-container ul li').click(function() {
        var index = $(this).index();
        $(this).parent().children().removeClass('active');
        $(this).addClass('active');
        $(this).parent().parent().parent().siblings().children().children().hide();
        $(this).parent().parent().parent().siblings().children().children().eq(index).fadeIn();
    })
})

