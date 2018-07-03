import $ from "jquery";
import "bootstrap-sass/assets/javascripts/bootstrap";

$(document).ready(function () {
    $("#button-modal").click(function () {
        $("#myModal").modal('show');
    });
});