
document.addEventListener(
        "DOMContentLoaded", () => {
            new Mmenu( "#my-menu", {
                extensions: [
				"pagedim-black",
				"fx-menu-slide",
              	"fx-listitems-slide",
				"theme-black"							
							]
            });
        }
    );

document.addEventListener(
        "DOMContentLoaded", () => {
            new Mhead( "#my-header", {
                scroll: {
                    hide: 200
                }
            });
        }
    );


jQuery(document).ready(function ($) {
	$('.col-right-news').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: !0,
		dot: !1,
		vertical: !0,
		autoplaySpeed: 1000,
		infinite: !0,
		pauseOnHover: true,
		prevArrow: '<button type="button" class="slick-prev"></button>',
		nextArrow:  '<button type="button" class="slick-next"></button>',
		speed: 1000,
		adaptiveHeight: !0,
		responsive: [{
			breakpoint: 640,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: !0,
				vertical: !1,
				dots: !1,
				arrows: !1
			}
		}]
	})
});
jQuery(document).ready(function ($) {
	$('.related-post').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: !0,
		dot: !1,
		autoplaySpeed: 1000,
		infinite: !0,
		prevArrow: null,
		nextArrow: null,
		speed: 300,
		responsive: [{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: !0,
				dots: !1,
				arrows: !1
			}
		}, {
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		}, {
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}]
	})
});





/*
jQuery(document).ready(function ($) {

});
*/
(function() {
    new Headroom(document.querySelector("#header"), {
        tolerance: 5,
        offset : 205,
/*        classes: {
          initial: "slide",
          pinned: "slide--reset",
          unpinned: "slide--up"
        }*/
    }).init();

}());

jQuery(document).ready(function ($) {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 5) {
			$('body').addClass("sticky-header")
		} else {
			$('body').removeClass("sticky-header")
		}
	})
});
jQuery(window).scroll(function () {
	if (jQuery(this).scrollTop() > 100) {
		jQuery('#back-to-top').addClass('scrolled')
	} else if (jQuery(this).scrollTop() < 100) {
		jQuery('#back-to-top').removeClass('scrolled')
	}
});
jQuery('#back-to-top').click(function () {
	jQuery('html, body').animate({
		scrollTop: 0
	}, 800);
	return !1
})
var myLazyLoad = new LazyLoad({
    elements_selector: "img.lazy"		
});
/*
masonary

});
*/
/*
$('.grid').masonry({
  itemSelector: '.grid-item',
  columnWidth: '.grid-sizer',
	columnWidth: 0,
  percentPosition: true
})
*/
jQuery(document).ready(function ($) {
// jQuery
var $grid = $('.grid').isotope({
	itemSelector: '.grid-item',
  //percentPosition: true,
	masonry: {
   		columnWidth: 00,
    	horizontalOrder: true,
  }
});
// layout Isotope after each image loads
$grid.imagesLoaded().progress( function() {
$grid.isotope('layout');
});
	
function onArrange() {
  console.log('arrange done');
}
// bind event listener
$grid.on( 'arrangeComplete', onArrange );
// un-bind event listener
$grid.off( 'arrangeComplete', onArrange );
// bind event listener to be triggered just once. note ONE not ON
$grid.one( 'arrangeComplete', function() {
  console.log('arrange done, just this one time');
});
	});




var $grid;

function triggerIsotope() {
  // don't proceed if $grid has not been selected
  if ( !$grid ) {
    return;
  }
  // init Isotope
  $grid.isotope({
itemSelector: '.grid-item',
  //percentPosition: true,
	masonry: {
   		columnWidth: 00,
    	horizontalOrder: true,
	}
  });
}
// trigger Isotope on document ready
$(function(){
  $grid = $('.grid');
  triggerIsotope();
});
// trigger Isotope when fonts have loaded
WebFont.load({
  active: triggerIsotope,
  inactive: triggerIsotope
});

WebFont.load({
	google: {
		families: ['Calistoga','Poppins:400,500,700&display=swap']
	}
});
