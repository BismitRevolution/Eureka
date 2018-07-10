$(document).ready(function () {
    $("#navbar").addClass("hidden");
    $("#footer").addClass("hidden");
    // Set boundaries automatically
    // $("#topic-chooser").height($(".chooser").width());

    // Create animation
    // var chooser = document.getElementsByClassName("chooser");
    // function setHover(item) {
    //     item.onmouseover = function () {
    //         TweenLite.to(item, 0.25, { padding: '5%' });
    //     };
    //
    //     item.onmouseleave = function () {
    //         TweenLite.to(item, 0.25, { padding: '8%' });
    //     };
    // }
    // Array.from(chooser).forEach(setHover);

    // Adjust responsiveness
    if (window.Util.isMobile() || window.Util.isSmall() || window.Util.isMedium()) {
        $(".hide-medium").addClass("hidden");
    }

    // Parallax Effect
    // var parallaxBg = document.getElementById("parallax");
    // var base = 0;
    //
    // window.onscroll = function () {
    //     window.Parallax.parallaxEffect(parallaxBg, base);
    // };

    // Fade on scroll
    // var pet = document.getElementsByClassName("pet");
    // window.onscroll = function () {
    //     for (var i = 0, item; item = pet[i]; i++) {
    //         if (window.Util.isShown(item)) {
    //             if (!item.classList.contains("animated")) {
    //                 item.style.visibility = "visible";
    //                 item.className += " animated fadeIn";
    //             }
    //         }
    //     }
    // };

    // Zoom Hover
    var chooserBg = document.getElementsByClassName("chooser-bg");
    function zoomHover(item) {
        item.onmouseover = function () {
            // TweenLite.to(item, 0.25, { backgroundSize: '+=25%' });
            TweenLite.to(item, 0.25, { backgroundSize: '120% 120%' });
        }
        item.onmouseleave = function () {
            // TweenLite.to(item, 0.25, { backgroundSize: '-=25%' });
            TweenLite.to(item, 0.25, { backgroundSize: '100% 100%' });
        }
    }
    Array.from(chooserBg).forEach(zoomHover);

    // Set Dropdown Same Width as button
    // var dropdownButton = document.getElementsByClassName("dropdown-button");
    // function setDropdownWidth(item) {
    //     item.onclick = function (e) {
    //         item.nextElementSibling.style.width = item.offsetWidth + "px";
    //     }
    // }
    // Array.from(dropdownButton).forEach(setDropdownWidth);

    // Set Value Selected from dropdown
    // var dropdownItem = document.getElementsByClassName("dropdown-item");
    // function setDropdownClick(item) {
    //     item.onclick = function (e) {
    //         item.parentNode.parentNode.previousElementSibling.innerHTML = item.innerHTML;
    //         item.parentNode.previousElementSibling.value = item.innerHTML;
    //         // document.getElementById(item.parentNode.parentNode.getAttribute("data-target")).value = item.innerHTML;
    //     }
    // }
    // Array.from(dropdownItem).forEach(setDropdownClick);

    console.log("index loaded");
});
