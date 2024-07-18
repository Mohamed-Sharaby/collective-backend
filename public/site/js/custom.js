$(document).ready(function () {
  const text2 = "DESIGNING BRAND JOURNEYS";
  let index2 = 0;
  let speed2 = 70;
  let interval2;
  let typed = document.getElementById("typing2")

  function writeText2() {
    if (typed) {
      typed.innerHTML = text2.slice(0, index2);
      index2++;
      if (index2 > text2.length) {
        clearInterval(interval2);
      }
    }
  }
  // Clear any existing interval and start new one
  clearInterval(interval2);
  interval2 = setInterval(writeText2, speed2);
  // Start typing immediately
  writeText2();


  $('.marquee').slick({
    speed: 5000,
    autoplay: true,
    autoplaySpeed: 0,
    centerMode: true,
    cssEase: 'linear',
    slidesToShow: 1,
    slidesToScroll: 1,
    variableWidth: true,
    infinite: true,
    initialSlide: 1,
    arrows: false,
    buttons: false
  });


  // About Us Section animation 
  var progressBar = $('#progress-bar');
  var section = $('#about_us');
  function sectionOverlaySlide() {
    var windowHeight = $(window).height();
    var scrollTop = $(window).scrollTop();
    var sectionTop = section.offset().top;
    var sectionHeight = section.outerHeight();

    if (scrollTop + windowHeight >= sectionTop && scrollTop <= sectionTop + sectionHeight) {
      var progress = ((scrollTop + windowHeight - sectionTop) / (sectionHeight + windowHeight) * 100) * 3;
      progressBar.width(progress + '%');
    } else {
      progressBar.width('0%');
    }
  }

  $(window).on('scroll', function () {
    sectionOverlaySlide();
  });
  sectionOverlaySlide();


  // typing animation
  let typedStarted = false;
  function isSectionInView() {
    let $section = $('#about_us');
    if ($section.length) { // Ensure the element exists
      let sectionTop = $section.offset().top;
      let sectionHeight = $section.height();
      let windowScrollTop = $(window).scrollTop();
      let windowHeight = $(window).height();

      if (windowScrollTop + windowHeight > sectionTop + 250 && windowScrollTop < sectionTop + sectionHeight) {
        if (!typedStarted) {
          startTypingAnimation();
          typedStarted = true;
        }
      }
    }
  }

  $(window).on('scroll', isSectionInView);

  function startTypingAnimation() {
    new Typed('#headingTyping', {
      strings: ["ABOUT US"],
      typeSpeed: 40,
      backSpeed: 10,
      loop: false
    });

    new Typed('#typing', {
      strings: ["Collective25 is a dynamic and innovative creative agency dedicated to designing impactful brand journeys. Our dedicated team, with over a decade of combined industry expertise, delivers resourceful knowledge and experience in managing accounts for regional and multinational companies like <span>Nestlé, P&#38;G, Al Jouf and L’Oréal among others.</span>"],
      typeSpeed: 5,
      backSpeed: 10,
      loop: false
    });
  }

  // Initial check in case the section is already in view when the page loads
  isSectionInView();


  // Services Section animation 
  var section2 = $('#services');
  var secOverlay = $('#services .overlay');

  function sectionOverlay() {
    var windowHeight2 = $(window).height();
    var scrollTop2 = $(window).scrollTop();
    var sectionTop2 = section2.offset().top;
    var sectionHeight2 = section2.outerHeight();
    if (scrollTop2 + windowHeight2 >= sectionTop2 && scrollTop2 <= sectionTop2 + sectionHeight2) {
      var alphaVal = (((scrollTop2 + windowHeight2 - sectionTop2) / (sectionHeight2 + windowHeight2))).toFixed(2);
      
      if (alphaVal >= 0.15) {
        secOverlay.css("background-color", 'rgba(48, 48, 46, 1)');
        $("#services h2").css("color", 'rgba(240, 238, 234, 1');
        $("#services p").css("color", 'rgba(240, 238, 234, 1)');
      }
      else {
        secOverlay.css("background", 'rgb(240, 238, 234)');
      }
    } 
  }

  $(window).on('scroll', function () {
    sectionOverlay();
  });
  sectionOverlay();


  // Vertical Slider JS
  $('.vertical-slider').slick({
    dots: false,
    arrows: false,
    vertical: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    verticalSwiping: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 300,
    speed: 500,
    centerMode: true,
    pauseOnHover: false, 
  });


  "use strict";
  var offSetTop = 100;
  var $scrollToTopButton = $('.scrollToTop');
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > offSetTop) {
			$scrollToTopButton.fadeIn();
		} else {
			$scrollToTopButton.fadeOut();
		}
	});
	
	//Click event to scroll to top
	$scrollToTopButton.click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});


  AOS.init();
});
