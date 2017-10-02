$(document).ready(function() {

}); // ready end

$( window ).resize(function() {

}); // resize end



/*
 SMART RESZIE: Use when resize triggers functions repeatedly.  
*/
(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null; 
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 500); 
      };
  }
    // smartresize 
    jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');


$(window).smartresize(function(){  

}); // smart resize end





var fillVids = {

    full_bleed: function(boxWidth, boxHeight, imgWidth, imgHeight) {

        // Calculate new height and width...
        var initW = imgWidth;
        var initH = imgHeight;
        var ratio = initH / initW;

        imgWidth = boxWidth;
        imgHeight = boxWidth * ratio;

        // If the video is not the right height, then make it so...     
    
        if(imgHeight < boxHeight){
          //console.log('vid-height');
            imgHeight = boxHeight;
            imgWidth = imgHeight / ratio;
        }
    
        console.log(ratio,imgWidth,imgHeight,boxWidth,boxHeight);
        //  Return new size for video
        return {
            width: imgWidth,
            height: imgHeight
        };

    },

};



 function recalculateFills() {
   //get pixel size of browser window.
//  var browserHeight = Math.round($(window).height());
//    var browserWidth = Math.round($(window).width());
  

  
  //jquery all items on page with fill tag
  var fills = $('.fill');
  
  
  //for each fill, recalculate size and position and apply using jQuery
  fills.each(function () {
  
    
    
   var browserHeight = Math.round($(this).parent(".jam").height());
   var browserWidth = Math.round($(this).parent(".jam").width());
  //height of element. not neccessarily video
    var videoHeight = $(this).height();
    var videoWidth = $(this).width();


  //calculate new size
    var new_size = fillVids.full_bleed(browserWidth, browserHeight, videoWidth, videoHeight);

  //distance from top and left is half of the difference between the browser width and the size of the element
    $(this)
        .width(new_size.width)
        .height(new_size.height)
    .css("margin-left", ((browserWidth - new_size.width)/2))
    .css("margin-top", ((browserHeight - new_size.height)/2));
    
  });
 }      



