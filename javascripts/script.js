// Custom scripts goes here
(function() {
    // Initialize carousel
    $("#carouselCollecte, #carouselReporting").carousel({intetval: 6000});
    $(".link-contact").click(function(e) {
        $('html, body').animate({
            scrollTop: $("form#contact").offset().top
        }, 1000, function() {
            $("form#contact input").first().focus();
        });
    });
    $(".link-demo").click(function(e) {
        $('html, body').animate({
            scrollTop: $("form#demo").offset().top
        }, 1000, function() {
            $("form#demo input").first().focus();
        });
    });
})();

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function message( type, title, content, duration ) {
    var messageHTML = '<div class="alert alert-' + type + '">'
                      + '<button type="button" class="close" data-dismiss="alert">×</button>'
                      + '<strong>' + title + '</strong> '
                      + content
                      + '</div>';

    var message = $(messageHTML).hide();

    $('#messages').append(message);

    message.fadeIn();

      // Increase compatibility with unnamed functions
    setTimeout(function() {
        message.fadeOut();
    }, duration);  // will work with every browser
}

