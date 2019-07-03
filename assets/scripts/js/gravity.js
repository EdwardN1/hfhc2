jQuery(document).ready(function ($) {

    //$('.contact-us-form ul.gform_fields').addClass('grid-x');
    $('ul.gform_fields').addClass('grid-x');
    $('ul.gform_fields').addClass('grid-padding-x');
    $('.gform_footer .button, .gform_page_footer .button').each(function (e) {
        var bt = $(this).val();
        if(bt=='Previous') {
            $(this).val('<   ' + bt);
        } else {
            $(this).val(bt + '  >');
        }

    });

    $('.animated_forms .ginput_container input[type="text"],.animated_forms .ginput_container textarea,.animated_forms .ginput_container select').on("change", function () {
        if($(this).val()!='') {
            $(this).closest('.gfield').addClass('dataEntered');
        } else {
            $(this).closest('.gfield').removeClass('dataEntered');
        }
    });

    $('.animated_forms .ginput_container input[type="text"],.animated_forms .ginput_container textarea,.animated_forms .ginput_container select').on("focus", function () {
        if($(this).closest('.gfield').hasClass('removingDataFocused')) {
            $(this).closest('.gfield').removeClass('removingDataFocused');
        }
        if(!$(this).is($('.animated_forms .ginput_container select'))) {
            $('.animated_forms .ginput_container select').blur();
        }
        $(this).closest('.gfield').addClass('dataFocused');

    });

    var secondClickTimeout = null;

    $('.animated_forms .ginput_container input[type="text"], .animated_forms .ginput_container textarea,.animated_forms .ginput_container select').on("blur", function () {
        $(this).closest('.gfield').addClass('removingDataFocused');
        secondClickTimeout = setTimeout(function () {
            $('.removingDataFocused').removeClass('dataFocused');
            $('.removingDataFocused').removeClass('removingDataFocused');
        },200);
    });


});