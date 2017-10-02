/*
SOME HELPFUL COMMON SCRIPTS! 
*/

// Simple menu expand
$j('.burger').click(function(event){
	event.preventDefault();
	$j('.MENU').toggle();
});


// Example waypoints
$j('.more-trig').waypoint(function(direction) {
	$j('.scroll-for-more').fadeOut(100);
 	// $j(this).waypoint('disable');
});		



// Example fancybox
$j(".instabox").fancybox({
	helpers : {
        title: {
            type: 'outside' // long captions?
        }
	}
});    

// Example regs slider
$j('.bxslider').bxSlider();



// Example fitvids
$j(".videocontainer").fitVids();


// Example bxslider - maxed out with options and fun things

function slideshow(){

	slider = $j('.slider').bxSlider({
		    controls: true,
		    pager: false,
		    pause: 6000,
		    auto: true,
	      	infiniteLoop: true,
		      onSliderLoad: function(){
			     $j('.slideshow-out').addClass('loaded');
		      	},
			  onSlideBefore: function (slideElement, oldIndex, newIndex) {
		         $j(slideElement).siblings().removeClass('hello');
		         TweenMax.staggerFrom('.instagram-feed ul li img', .5, {opacity:0, delay:0, ease:Cubic.easeOut}, 0.1);

		       },
			  onSlideAfter: function (slideElement, oldIndex, newIndex) {
		          $j(slideElement).addClass('hello');
		      },	     
	});

	$j(".bx-controls").each(function(){
	       $j(this).closest(".slideshow-out").append(this);

	});

	$j('.slider>li:nth-of-type(2)').each(function(){ 
				$j(this).addClass('hello');
	});  
}



// Examples tweenmax
TweenMax.staggerFrom(items, .5, {marginTop:-100, opacity:0, delay:0, ease:Cubic.easeOut}, 0.1);
TweenMax.to($j('body.home .site-title a'), 2, {opacity:1, delay:.7, ease:Cubic.easeOut});



/*
These guys take an element (video) and make it a full screen affair similar to 
background-size: cover;
recalculateFills() needs bleedElements() to work
*/

function recalculateFills() {
	
	//get pixel size of browser window.
	var browserHeight = Math.round($j(window).height());
    var browserWidth = Math.round($j(window).width());
	

	
	//jquery all items on page with fill tag
	var fills = $j('.SELECTOR TO FILL!!!!');
	
	
	//for each fill, recalculate size and position and apply using jQuery
	fills.each(function () {
		
	//height of element. not neccessarily video
    var videoHeight = $j(this).height();
    var videoWidth = $j(this).width();


	//calculate new size
    var new_size = bleedElements.full_bleed(browserWidth, browserHeight, videoWidth, videoHeight);

	//distance from top and left is half of the difference between the browser width and the size of the element
    $j(this)
        .width(new_size.width)
        .height(new_size.height)
		.css("margin-left", ((browserWidth - new_size.width)/2))
		.css("margin-top", ((browserHeight - new_size.height)/2));
		
	});
}			

var bleedElements = {

    full_bleed: function(boxWidth, boxHeight, imgWidth, imgHeight) {
    	//console.log(boxWidth, boxHeight, imgWidth, imgHeight);

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
		
		//console.log(ratio,imgWidth,imgHeight,boxWidth,boxHeight);
        //  Return new size for video
        return {
            width: imgWidth,
            height: imgHeight
        };

    },

};