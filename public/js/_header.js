$(document).ready(function () {
    // $("#home-nav").removeClass("active");
    // $("#dashboard-nav").addClass("active");

    // Set Dropdown Same Width as button
    var loginButton = document.getElementById("login-button");
    loginButton.onclick = function (e) {
        $("#login-modal").removeClass("hidden");
        $(".modal-exclude").addClass("hidden");
    }

    var backButton = document.getElementById("back-button");
    backButton.onclick = function (e) {
        $("#login-modal").addClass("hidden");
        $(".modal-exclude").removeClass("hidden");
    }

    console.log("header loaded");
});
