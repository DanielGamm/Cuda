$(function() {
    let header = $("#header"); 
    let welcome = $("#welcome");
    let welcomeH;
    let scrollPos = $(window).scrollTop();
    let navToggle = $("#navToggle");
    let nav =  $("#nav");
    let teamSlider = $("#teamSlider"); 
    let windowW;
    let testimonialsSlider = $("#testimonialsSlider");

    $(window).on("scroll load resize", function() {
        welcomeH = welcome.innerHeight(); // Присвоим полную высоту блока с id wellcome
        scrollPos = $(this).scrollTop(); // Получаем позичию скролла от верха окна браузера
		
        if( scrollPos > welcomeH ) {
            header.addClass("fixed");
        } else {
            header.removeClass("fixed");
        }
    });

    /* Smooth scroll */
    $("[data-scroll]").on("click", function(event) {
        event.preventDefault();

        let elementId = $(this).data('scroll');
        let elementOffset = $(elementId).offset().top;
        nav.removeClass("show");
        $("html, body").animate({
            scrollTop: elementOffset - 57
        }, 2000);
    });

    /* Nav Toggle */
    navToggle.on("click", function(event){
        event.preventDefault();      //  отключаем стандартное поведение ссылки

        nav.toggleClass("show");
    })

    /* Слайдер для Team если окно меньше 460px */
    $(window).on("scroll load resize", function() {
        windowW =  window.innerWidth; // Получаем ширину окна браузера с учетом полосы прокрутки
        if( windowW < 460 ) {
            teamSlider.addClass("myslick");
            $('.myslick').not('.slick-initialized').slick({infinite: true, autoplay: true, autoplaySpeed: 2000,fade: true, slidesToShow: 1, slidesToScroll: 1});
            testimonialsSlider.addClass("myslick");
            $('.myslick').not('.slick-initialized').slick({infinite: true, autoplay: true, autoplaySpeed: 2000,fade: true, slidesToShow: 1, slidesToScroll: 1});
        } else {
            $('.myslick').slick("unslick");
            teamSlider.removeClass("myslick");
            $('.myslick').slick("unslick");
            testimonialsSlider.removeClass("myslick");
        }
    });

})