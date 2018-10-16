jQuery(document).ready(function($) {		
	var ie = /MSIE (\d+)/.exec(navigator.userAgent);
	ie = ie? ie[1] : null;
	if(ie && ie == 8){	
			//alert("ie8");
			$('head').append("<style type='text/css'>.buorg{display:block}</style>");				
	}	
	else if(ie && ie == 7){
			
			//alert("ie7");
			$('head').append("<style type='text/css'>.buorg{display:block}</style>");
	}

  $('#banner').royalSlider({
	arrowsNav: true,
    loop: true,
    keyboardNavEnabled: false,
    controlsInside: false,
    imageScaleMode: 'fill',
    arrowsNavAutoHide: true,
    autoScaleSlider: true, 
    autoScaleSliderWidth: 1600,     
    autoScaleSliderHeight: 630,
    controlNavigation: 'bullets',
    thumbsFitInViewport: false,
    navigateByClick: false,
	sliderDrag: false,
    startSlideId: 0,
    autoPlay: true,
    transitionType:'move',
    globalCaption: false,
	imageScalePadding:0,
	slidesSpacing:0,
    deeplinking: {
      enabled: true,
      change: false
    },
  });
  
   $("#event").owlCarousel({
	autoPlay: 3000, //Set AutoPlay to 3 seconds
	items: 3, //10 items above 1000px browser width
	itemsDesktop: [1000,3], //5 items between 1000px and 901px
	itemsDesktopSmall: [979,2], // 3 items betweem 900px and 601px
	itemsTablet: [600,1], //2 items between 600 and 0;
	itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
	navigation:true,
	pagination:false
  });
  
    $("#activites").owlCarousel({
	autoPlay: 3000, //Set AutoPlay to 3 seconds
	items : 4, //10 items above 1000px browser width
	itemsDesktop: [1000,3], //5 items between 1000px and 901px
	itemsDesktopSmall: [979,3], // 3 items betweem 900px and 601px
	itemsTablet: [767,2], //2 items between 600 and 0;
	itemsMobile: [479,1], // itemsMobile disabled - inherit from itemsTablet option
	navigation: true,
	pagination: false
  });

	
});

$(function(){
  var shrinkHeader = 40;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
           $('header').addClass('shrink');
        }
        else {
            $('header').removeClass('shrink');
        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});

$("#foot-togle h5.link-title").click(function()
{	
	var w = $(window).width();
	if(w <= 767)
	{	
		$('.footer-title').removeClass("activetogal");
		$('.togle-body').attr('style','display: none');				
		$(this).toggleClass("activetogal").next("ul.togle-body").slideToggle().siblings("ul.togle-body").slideUp("fast");
		mapload();
		$(this).siblings().removeClass("activetogal");
	}
});	

$(window).resize(function() {
  var w = $(window).width();
	if(w >= 767)
	{	
 		 $('.togle-body').attr('style','display: block');	
	}
	else{
		 $('.togle-body').attr('style','display: none');	
	}
})

$(window).scroll(function () {
	if ($(this).scrollTop() > 80) {
		$('#back-to-top').show();
	} else {
		$('#back-to-top').hide();
	}
});


 $(".navdiv .dropdown").each(function() {
	$(this).mouseout(function() {
		$(this).removeClass('open');
	});
	$(this).mouseover(function() {
		$(this).addClass('open');
	});
});

// scroll body to 0px on click
$('#back-to-top').click(function () {
	$('body,html').animate({
		scrollTop: 0
	}, 600);
	return false;
});

$('.collapse').on('shown.bs.collapse', function(){
$(this).parent().find(".fa").removeClass("fa-plus").addClass("fa-minus");
}).on('hidden.bs.collapse', function(){
$(this).parent().find(".fa").removeClass("fa-minus").addClass("fa-plus");
});

$('.responsive-tabs').responsiveTabs({
  accordionOn: ['xs', 'sm']
});

$(".fancybox").fancybox({ 
	openEffect: 'elastic',
	prevEffect: 'fade',
	nextEffect: 'fade'
}); 
 
$('.fancybox-media')
.attr('rel', 'media-gallery')
.fancybox({
	openEffect : 'none',
	closeEffect : 'none',
	prevEffect : 'none',
	nextEffect : 'none',

	arrows : false,
	helpers : {
		media : {},
		buttons : {}
	}
});
$("#content-6").mCustomScrollbar({
	axis:"x",
	theme:"light-3",
	advanced:{autoExpandHorizontalScroll:true}
}); 
$(function () {
    header = $('header');
	if ( $(window).width() < 767) {     
		$(document).on('focusin', 'input, textarea', function(){
		   header.addClass('unfixed');
		})
		.on('focusout', 'input, textarea', function () {
		   header.removeClass('unfixed');
		});	
	}
});