function PPOFixedColumn(col) {
    var summaries = jQuery(col);
    summaries.each(function (i) {
        var summary = jQuery(summaries[i]);
        var next = summaries[i + 1];
        var margin_top = jQuery('#wpadminbar').outerHeight(true);

        summary.scrollToFixed({
            marginTop: margin_top,
            limit: function () {
                var limit = 0;
                if (next) {
                    limit = jQuery(next).offset().top - jQuery(this).outerHeight(true) - 10;
                } else {
                    limit = jQuery('.footer_top_logo').offset().top - jQuery(this).outerHeight(true) - 10;
                }
                return limit;
            },
            zIndex: 998
        });
    });
}
jQuery(document).ready(function ($) {
    PPOFixedColumn(jQuery(".single-product-sidebar .widget").get(jQuery(".single-product-sidebar .widget").length - 1));
    PPOFixedColumn(jQuery(".sidebar-web .widget").get(jQuery(".sidebar-web .widget").length - 1));
    
    $('#lindo_logo').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
                nav: true
            },
            600: {
                items: 5,
                nav: false
            },
            1000: {
                items: 8,
                nav: true,
                loop: false,
                margin: 10
            }
        }
    });

});
