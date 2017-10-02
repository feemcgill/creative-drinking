


function setClientLogos(){

    $('.client-logo:nth-of-type(4n+1)').each(function(){
        TweenMax.set($(this), { 
          scale:1,
          y:-10,
          //x:10,
          opacity:0,
        });     
    });


    $('.client-logo:nth-of-type(4n+2)').each(function(){
        TweenMax.set($(this), { 
          scale:1,
          y:10,
          //x:-10,
          opacity:0,
        });     
    });


    $('.client-logo:nth-of-type(4n+3)').each(function(){
        TweenMax.set($(this), { 
          scale:1,
          y:-10,
          //x:-10,
          opacity:0,
        });     
    });
    
    $('.client-logo:nth-of-type(4n+4)').each(function(){
        TweenMax.set($(this), { 
          scale:1,
          y:10,
          //x:10,
          opacity:0,
        });     
    });
}




function resetClientLogos(){

    $('.client-logo:nth-of-type(4n+1)').each(function(){
        TweenMax.staggerTo($(this), 2, { 
          scale:1,
          y:-10,
          //x:10,
          opacity:0,
        },.1);     
    });


    $('.client-logo:nth-of-type(4n+2)').each(function(){
        TweenMax.staggerTo($(this), 2, { 
          scale:1,
          y:10,
          //x:-10,
          opacity:0,
        },.1);     
    });


    $('.client-logo:nth-of-type(4n+3)').each(function(){
        TweenMax.staggerTo($(this), 2, { 
          scale:1,
          y:-10,
          //x:-10,
          opacity:0,
        },.1);     
    });
    
    $('.client-logo:nth-of-type(4n+4)').each(function(){
        TweenMax.staggerTo($(this), 2, { 
          scale:1,
          y:10,
          //x:10,
          opacity:0,
        },.1);     
    });

}


function animateClientLogos(){


        TweenMax.staggerTo($('.client-logo:nth-of-type(4n+1)'), 1.2, { 
          scale:1,
          y:0,
          //x:10,
          opacity:1,
        },.2);     




        TweenMax.staggerTo($('.client-logo:nth-of-type(4n+2)'), 1, { 
          scale:1,
          y:0,
          //x:-10,
          opacity:1,
        },.3);     




        TweenMax.staggerTo($('.client-logo:nth-of-type(4n+3)'), .8, { 
          scale:1,
          y:0,
          //x:-10,
          opacity:1,
        },.2);     

    

        TweenMax.staggerTo($('.client-logo:nth-of-type(4n+4)'), 1.1, { 
          scale:1,
          y:0,
          //x:10,
          opacity:1,
        },.2);     


}




function setScrawlings() {
        console.log('set scrawl');

    $('.scrawl svg #Layer_1 g:nth-of-type(odd)').each(function(){
        TweenMax.set($(this), { 
          scale:.99,
         // y:-10,
         // x:0,
          opacity:0
        });     
    });


    $('.scrawl svg #Layer_1 g:nth-of-type(even)').each(function(){
        TweenMax.set($(this), { 
          scale:1.01,
          y:10,
         //// x:100,
          opacity:0
        });     
    });

}


function meltScrawlings() {
      TweenMax.staggerTo($('.scrawl svg #Layer_1 g'), 2, {
        scale:1,
        y:0,
        X:0,
        opacity:1,
      //  ease: Circ.easeOut
        ease: Back.easeOut.config(1.7),
        delay:.3,
        onComplete: function() {

        }
      }, 0.01);
}


$(document).ready(function() {

    $('.fadein').fadeOut(200);
    
    var datBody = $('body');
    var scrawl = $('.scrawl svg path');
    var blockText = $('.bigblock, .bigblock a');
    var burst = $('.burst');
    var burstPath = $('.burst svg polygon');
    var deets = $('.badge .deets');
    var logoPath = $('#logo-svg path');
    var scrawlEven = $('.scrawl svg #Layer_1 g:nth-of-type(even) path');
    var scrawlOdd = $('.scrawl svg #Layer_1 g:nth-of-type(odd) path');
    var scrawlBg = $('.scrawl svg #Layer_3 path');
    var inSvg;
    var h2 = $('h2');
    var cdInput = $('.cd-input');
    var cdSubmit = $('.cd-submit');
    var contactLink = $('.contact a');
    var socialIcon = $('.socials li a');


    var datBody = $('body');

    var rand360 = Math.floor(Math.random() * 360) + 1
    console.log(rand360);

    var svgCnt = 0;
    var svgLngt = $('img.svg').length;

    jQuery('img.svg').each(function(){
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        jQuery.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Replace image with new SVG
            $img.replaceWith($svg);
            svgCnt++;
            //console.log(svgCnt,svgLngt);
            if (svgCnt == svgLngt) {
              //console.log('all SVGS loaded');
              inSvg = $('.inSvg svg path, .inSvg svg rect, .inSvg svg polygon');
              startZone();
            };
        }, 'xml');

    });



    TweenMax.set($('.badge'),{opacity:0,y:20});
    TweenMax.set($('.menu li'),{opacity:0,x:-1000});

    //TweenMax.set($('.intro'),{opacity:0,y:60});
    //TweenMax.set($('.clients-msg'),{opacity:0,y:60});


    console.log('dr');
    setScrawlings();
    setClientLogos();

    recalculateFills();




var logosWaypoint = new Waypoint({
  element: $('.logos'),
  handler: function(direction) {
    console.log('Scrolled to waypoint!')
    animateClientLogos();
  },
  offset: '70%'
})




var starterAni = function() {
    meltScrawlings();
}


var logoCallback = function(){
    setClientLogos();
    $('#up-top').removeClass('intro-ani');
    datBody.css('overflow','auto'); 
    var logoPath = $('#up-top .logo svg path'); 
    TweenMax.to(logoPath ,1.4,{css:{fill:'black', strokeWidth:0}});
    TweenMax.to($('.badge'),1.4,{opacity:1,y:0,delay:.7,clearProps:"all",onComplete:function(){
      $('.badge').addClass('clean');  
    }
    });
    TweenMax.staggerTo($('.menu li'),2,{delay:.3,opacity:1,x:1, ease: Back.easeOut.config(1.7),},.2);
    setTimeout(function(){
        Waypoint.refreshAll();
    }, 300);
}

starterAni();

cdLogo = new Vivus('logo-svg', {
  type: 'oneByOne', 
  duration: 100,
  forceRender: true,
  start: 'manual'
}, logoCallback);

//console.table(cdLogo.map);


setTimeout(function(){
  cdLogo.play(1);
}, 1200);


setTimeout(function() {
  window.scrollTo(0, 0)
}, 100);


$('.badge').click(function(e){
      e.preventDefault();
      var scrollEl = $("#events");
      var pos = scrollEl.position().top;
       $('html, body').animate({
         scrollTop: pos + 100
       }, 800);  
});



function scrollAnimations(where) {

        var spin = where * 7020;
        var hslaPre = where * 840;
        var hsla = hslaPre + rand360;
        var hslaInv = hsla - 180;
        var hsla2 = hsla + 15;
        var hsla3 = hsla + 25;
        var hsla4 = hsla + 55;

        var datColor = 'hsla(' + hsla + ', 85%, 75%, 1)';
        var datColorMod = 'hsla(' + hsla + ', 55%, 80%, 1)';

        //var datOtherColor = 'hsla(' + hsla3 + ', 85%, 75%, 1)';
        var datOtherColor = 'hsla(' + (hsla-180) + ', 55%, 80%, 1)';

        TweenMax.set(burst,{rotation:spin});
        /*
        burstPath.css({
            fill : 'hsla(' + hsla + ', 55%, 95%, 1)'
        });
        */

        deets.css({
          color: datColorMod
        });


        h2.css({
            backgroundColor : datColorMod
        });

        datBody.css({
            //backgroundColor : datColor
        });

        blockText.css({
            color : datColorMod
        });


        inSvg.css({
            fill : datColorMod
        });


        scrawlEven.css({
            fill : datColorMod
        });

        scrawlOdd.css({
            fill : datColorMod
        });
   
        scrawlBg.css({
            fill : datColorMod
        });




        contactLink.hover(
          function(){ 
            $(this).css({
              color : datOtherColor,
            });
          }, 
          function(){
            $(this).css({
              color : 'rgba(0,0,0,1)',
            });
          }
        );

        socialIcon.hover(
          function(){ 
            $(this).find('svg path').css({
              fill : datOtherColor,
            });
          }, 
          function(){
            $(this).find('svg path').css({
              fill : 'rgba(20,20,20,.95)',
            });
          }
        );


        cdSubmit.hover(
          function(){ 
            cdSubmit.css({
              backgroundColor : datOtherColor,
            });
          }, 
          function(){
            cdSubmit.css({
              backgroundColor : datColorMod,
            });
          }
        );





        cdSubmit.css({
            backgroundColor : datColorMod,
            //color: datColor
        });





        cdInput.css({
            'border-color' : datColorMod,
            color : datColorMod
        });




}

var zoneHeight = $('#zone-section').height();

function updatePosition () {
 //console.log(this.y);
 var pos = Math.abs(this.y);
 var where = pos / zoneHeight;
 scrollAnimations(where);

}

/*
setTimeout(function(){
  myScroll = new IScroll('#page-wrap',{
    probeType: 3,
    freeScroll: true, 
    mouseWheel: true,
    click: true 
  });

  myScroll.on('scroll', updatePosition);
  myScroll.on('scrollEnd', updatePosition);

}, 1200);
*/ 

function startZone(){
  $('#zone-section').Zone({

    within: function(value, position) {
        var where = value.toFixed(4);
        scrollAnimations(where);
    }
  });
}



}); /// end ready


$(window).smartresize(function(){  
    recalculateFills();
}); // smart resize end



