"use strict";

var title = document.title;

$(window).blur(function () {
    setTimeout(function () {
        document.title = "Be sure to check me out! :P";
    }, 3000);
});

$(window).focus(function () {
    document.title = title;
});

//wowjs animations
new WOW().init();
$('section, .project__screen, .form').addClass('wow fadeInUp');

var dly = 0;
$('.project__screen').each(function () {
    dly = dly + 200
    $(this).css('animation-delay', dly + 'ms');
});

if ($('#body').ready() && $(window).focus()) {
    //hero animation
    $(".hero__text--heading").blast({
        delimiter: "character",
        customClass: "spans"
    });

    $(".spans").addClass("animated");

    var spans = $(".spans");
    var counter = -1;
    var intervalId = setInterval(function () {
        counter++;
        if (counter === spans.length) {
            clearInterval(intervalId);
            setTimeout(function () {
                [].forEach.call(spans, function (el) {
                    el.style.opacity = "1";
                    el.classList.remove("bounceIn");
                });
            }.bind(this), 300);
        } else {
            spans[counter].classList.add("bounceIn");
        }
    }.bind(undefined), 75);

    for (var i = 0; i < spans.length; i++) {
        spans[i].addEventListener("mouseover", function () {
            this.classList.add("rubberBand");
        });
        spans[i].addEventListener("mouseout", function () {
            setTimeout(function () {
                this.classList.remove("rubberBand");
            }.bind(this), 600);
        });
    }

    var contact = $(".hero__contact--btn");
    contact.delay(2800).queue(function () {
        contact.css("opacity", "1").addClass("fadeInDown");
    });
}

$('#body').ready(function () {
    //removes loader
    $('.loader').fadeOut('slow');
    $('#body').css('overflow', 'visible');

    //progress bar
    function progressing(name, percent) {
        var bar = new ProgressBar.Line(name, {
            strokeWidth: 4,
            easing: 'easeInOut',
            duration: 2200,
            color: '#FFEA82',
            trailColor: '#eee',
            trailWidth: 1,
            svgStyle: {
                width: '100%',
                height: '100%'
            },
            from: {
                color: '#FFEA82'
            },
            to: {
                color: '#ED6A5A'
            },
            step: function step(state, bar) {
                bar.path.setAttribute('stroke', state.color);
            }
        });

        $(window).scroll(function () {
            if ($('#skills').is(':visible')) {
                bar.animate(percent);
            } else {
                bar.animate(0);
            }
        });
    }

    progressing(html, 1);
    progressing(css, .98);
    progressing(js, .82);
    progressing(jq, .90);
    progressing(bs, .86);
    progressing(php, .77);
    progressing(wp, .93);
    progressing(sql, .65);
    progressing(node, .67);
    progressing(ps, .79);
    progressing(ai, .77);
    progressing(git, .88);

    var fab = $('.footer .fab');

    for (var i = 0; i < fab.length; i++) {
        var animation = "tada";
        fab[i].addEventListener("mouseover", function () {
            this.classList.add(animation);
        });
        fab[i].addEventListener("mouseout", function () {
            this.classList.remove(animation);
        });
    }

    //imported menu 
    (function () {
        $('.menu-wrapper').on('click', function () {
            $('.hamburger-menu').toggleClass('animatemenu');
            $('html, body').toggleClass('disablescroll');
            if ($('.menu__link').css('visibility') == 'hidden') $('.menu__link').css({
                'visibility': 'visible',
                'opacity': 1
            });
            else $('.menu__link').css({
                'visibility': 'hidden',
                'opacity': 0
            });
        });
    })();

    $('.menu__link').click(function () {
        var hbmenu = $('.hamburger-menu');
        if (hbmenu.hasClass('animatemenu')) {
            $('.menu__link').css({
                'visibility': 'hidden',
                'opacity': 0
            });
            $('html, body').removeClass('disablescroll');
            $('.hamburger-menu').removeClass('animatemenu');
        }
    });

    $(function () {
        var $window = $(window);
        $window.on('resize', function () {
            $('html, body').removeClass('disablescroll');
            $('.hamburger-menu').removeClass('animatemenu');
            if ($window.width() > 768) {
                $('.menu__link').css({
                    'visibility': 'visible',
                    'opacity': 1
                });
            } else {
                $('.menu__link').css({
                    'visibility': 'hidden',
                    'opacity': 0
                });
            }
        });
    });



    //submit data with ajax
    var submit = $('#submit');
    submit.click(function (e) {

        e.preventDefault();

        $(this).addClass('loading');

        var name = $('#name').val();
        var email = $('#email').val();
        var subject = $('#subject').val();
        var message = $('#message').val();
        var msg = $('#msg');

        function isEmail(e) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(e);
        }

        //validation
        if (name == "" || subject == "" || message == "") {
            msg.html('');
            setTimeout(function () {
                submit.removeClass('loading');
                msg.html('<span class="red">Please fill in all fields!</span>');
            }, 1000);
        } else if (!isEmail(email)) {
            msg.html('');
            setTimeout(function () {
                submit.removeClass('loading');
                msg.html('<span class="red">Please enter a valid email!</span>');
            }, 1000);
        } else {
            $.ajax({
                method: 'POST',
                async: true,
                url: 'inc/send.php',
                data: $('#cform').serialize(),
                beforeSend: function () {
                    msg.html('');
                },
                success: function (data) {
                    submit.removeClass('loading');
                    msg.html('<span class="green">' + data + '<span>');
                    $('#cform').each(function () {
                        this.reset();
                    });
                },
                error: function (data) {
                    submit.removeClass('loading');
                    msg.html('<span class="red">Sorry! Message not sent!</span>');
                    console.log(data);
                }
            });
        }
    });
});