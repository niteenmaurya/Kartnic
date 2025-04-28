jQuery(document).ready(function($) {
    if (kartnic_back_to_top_enabled.enabled) {
        var backToTopButton = $('<a>', {
            href: '#top',
            class: 'back-to-top',
            html: '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 15" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg>'
        }).appendTo('body');

        backToTopButton.hide();

        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                backToTopButton.fadeIn();
            } else {
                backToTopButton.fadeOut();
            }
        });

        backToTopButton.click(function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop: 0}, 600);
        });
    }
}); 

