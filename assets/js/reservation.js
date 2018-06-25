import $ from "jquery";
import flatpickr from "flatpickr";
import {French} from 'flatpickr/dist/l10n/fr.js';

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

    flatpickr('.flatpickr', {
        utc: false,
        locale: French,
        altInput: true,
        enableTime: true,
        altFormat: 'd/m/Y - H:i',
        time_24hr: true
    });

    $('.flatpickr-input:visible').on('focus', function () {
        $(this).blur()
    })
    $('.flatpickr-input:visible').prop('readonly', false)

});