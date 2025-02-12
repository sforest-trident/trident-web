$(document).ready(function () {


	// Smooth scroll
    $('a[href^="#"]').on('click', function (event) {

        if (this.hash !== "") {
            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top - $('header').height()
            }, 800, 'swing'); 
            location.hash = hash.replace('section_', '');;
        }
    });
});