import $ from "jquery";
import flatpickr from "flatpickr";

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

    flatpickr(".flatpickr", {
        enableTime: true,
        dateFormat: "d-m-Y H:i",
        time_24hr: true,
    });


});