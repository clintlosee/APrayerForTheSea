jQuery(document).ready(function ($) {
 
 
    //initialise Stellar.js
    $(window).stellar();
 
       
    // Custom transform and opacity modifier for Stellar.js
    $.stellar.positionProperty.transfade = {
      setPosition: function(element, newLeft, originalLeft, newTop, originalTop) {
        var distance = newTop - originalTop;
        var rate = $(window).height() / 5;
        element.css('transform', 'translate3d(0, ' + distance + 'px, 0').css('opacity', 1 - (distance / rate));
      }
    };   
 
 
});