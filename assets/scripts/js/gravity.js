jQuery(document).ready(function ($) {

    //$('.contact-us-form ul.gform_fields').addClass('grid-x');
    $('ul.gform_fields').addClass('grid-x');
    $('ul.gform_fields').addClass('grid-padding-x');
    $('.gform_footer .button').each(function (e) {
        var bt = $(this).val();
        $(this).val(bt + '  >');
    })

});