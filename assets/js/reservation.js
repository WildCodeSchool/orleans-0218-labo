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
        altFormat: 'J F Y - H:i',
        time_24hr: true,
        disableMobile: true,

    });

    flatpickr('.start', {
        utc: false,
        locale: French,
        altInput: true,
        enableTime: true,
        altFormat: 'J F Y - H:i',
        time_24hr: true,
        disableMobile: true,
        defaultDate: Date.now(),

    });

    $('.flatpickr-input:visible').on('focus', function () {
        $(this).blur()
    })
    $('.flatpickr-input:visible').prop('readonly', false)


    $('#equipment').hide();
    $("#room-button").prop("disabled", true);

    $('#room-button').on('click', function () {
        $('#equipment').hide();
        $('#room').toggle();
        $("#room-button").prop("disabled", true);
        $("#equipment-button").prop("disabled", false);
    })

    $('#equipment-button').on('click', function () {
        $('#room').hide();
        $('#equipment').toggle();
        $("#equipment-button").prop("disabled", true);
        $("#room-button").prop("disabled", false);
    })

});