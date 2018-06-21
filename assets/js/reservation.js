import $ from "jquery";

$(document).ready(function () {
    jQuery('.plus, .minus').click(function(){
        const elementId = jQuery(this).data('element');
        let elementValue = jQuery('#'+elementId).val();

        if (jQuery(this).hasClass('plus')) {
            jQuery('#'+elementId).val(++elementValue);
        } else {
            if (elementValue > 0) jQuery('#'+elementId).val(--elementValue);
        }
    })
     
        $('#datetimepicker2').datetimepicker({
            locale: 'ru'
        });
});