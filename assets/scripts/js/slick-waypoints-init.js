jQuery(document).ready(function ($) {

    $('[data-waypoint]').each(function () {
        var $element = $(this);
        var wpOffset = $element.data('waypoint-offset');
        var wpDirection = $element.data('waypoint-direction');
        var wpClass = $element.data('waypoint-class');

        $element.waypoint(function (direction) {
            if(direction==wpDirection) {
                if(!$element.hasClass(wpClass)) {
                    $element.addClass(wpClass);
                }
            }
            this.destroy();
        }, {
            offset: wpOffset
        });
    });

    $('#header-waypoint').waypoint(function (direction) {
        $('#header-nav').toggleClass('fixed');
    }, {
        offset: 0
    });


    $('[data-slick-slider]').slick();

    $('.slick-button').click(function (e) {

        var slide = $(this).data('slide');
        var slider = $(this).data('slider-id');
        if(slide) {
            e.preventDefault();
            $('#' + slider).slick('slickGoTo', parseInt(slide));
        }

    });

});