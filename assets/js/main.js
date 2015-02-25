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


    //There is a call for vimeo, youtube, and blip.
    var $allVideos = $("iframe[src^='http://maps.google.com/maps'], iframe[src^='http://player.vimeo.com'], iframe[src^='http://www.youtube.com'], iframe[src^='http://blip.tv'], object, embed, iframe"),

    //-----Your will need to change this to identify the scalable object each video lives in-------
    $fluidEl = $(".iframe");

    //Scan the document and resizes all the videos
      $allVideos.each(function() {

        $(this)
          // jQuery .data does not work on object/embed elements
          .attr('data-aspectRatio', this.height / this.width)
          .removeAttr('height')
          .removeAttr('width');

      });

      $(window).resize(function() {

        var newWidth = $fluidEl.width();
        $allVideos.each(function() {

          var $el = $(this);
          $el
              .width(newWidth)
              .height(newWidth * $el.attr('data-aspectRatio'));

        });

      }).resize();




});
