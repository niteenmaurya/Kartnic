(function($) {
    wp.customize('kartnic_logo_width', function(value) {
        value.bind(function(newval) {
            $('.site-logo').css('width', newval + 'px');
        });
    });

    wp.customize('kartnic_logo', function(value) {
        value.bind(function(newval) {
            $('.site-logo').attr('src', newval);
        });
    });
})(jQuery);
