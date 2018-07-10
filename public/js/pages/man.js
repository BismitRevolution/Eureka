$(document).ready(function () {
    // Set boundaries automatically
    $("#uniform").height($("#uniform").width()/2);
    $("#accesories").height($("#accesories").width()/2);
    $("#shoes").height($("#shoes").width()/2);

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

});
