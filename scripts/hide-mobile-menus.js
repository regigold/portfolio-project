// javascript doc
$(document).ready(function () {
    console.log("Let's do this!");
    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('.nav-bar').outerHeight();
    $(window).scroll(function (event) {
        didScroll = true;
    });
    setInterval(function () {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();
        // Make sure they scroll more than delta
        if (Math.abs(lastScrollTop - st) <= delta) return;
        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight) {
            // Scroll Down
            if ($(window).scrollTop() + $(window).height() == $(document).height()) {
                $('.nav-bar').css('bottom','0');
            }
            else {
                $('.nav-bar').css('bottom','-50px');
            }
        }
        else {
            // Scroll Up
            if (st + $(window).height() < $(document).height()) {
                $('.nav-bar').css('bottom','0');
            }
        }
        lastScrollTop = st;
    }
});