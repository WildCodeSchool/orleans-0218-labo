import $ from "jquery"

$(document).ready(function () {
    $('#room').hide();
    $('#equipment').hide();

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