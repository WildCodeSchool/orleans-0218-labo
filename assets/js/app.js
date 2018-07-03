import $ from "jquery";
import "bootstrap-sass/assets/javascripts/bootstrap";
import "bootstrap-sass/assets/javascripts/bootstrap.min";
import "bootstrap-sass/assets/javascripts/bootstrap/modal";

$(document).ready(function () {
    $("#button-modal").click(function () {
        console.log('test');
        $("#myModal").modal('show');
    });
});