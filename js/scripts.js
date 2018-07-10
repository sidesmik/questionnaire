$(document).ready(function(){

	// Current menu item highlithing
	$(function () {
		var location = window.location.href;
		var cur_url = location.split('/').pop();

		$('.header-nav li, .panel-nav li').each(function () {
			var link = $(this).find('a').attr('href');

			// console.log(link);

			if (cur_url == '') {
				cur_url = 'index.php';
			}

			if (cur_url == link)
			{
				$(this).addClass('current');
			}
		});
	});

	// Tabs nav
	$("[data-tab]").click(function(e){
		e.preventDefault();
		var dest = $( $(this).data('tab') );
		dest.stop().fadeIn(300).siblings().hide(0);
		$(this).addClass('current').siblings().removeClass('current');
	});

	$("[data-tab]:first-child").click();
	$(".tabs-nav-inner > .item:first-child").click();

	// jQuery Custom Fields
	// jcf.setOptions('Range', {});

	jcf.setOptions('Select', {
		wrapNative: false,
		useCustomScroll: true,
		multipleCompactStyle: true
	});

	jcf.replaceAll();

	// Range
	$('.range-slider').jRange({
		from: 0,
		to: 10000,
		step: 1,
		format: '%s',
		showLabels: true,
		isRange : true
	});

	// Mobile nav
	$('.menu-opener').bigSlide({
		side: 'right',
		easyClose: true,
		menuWidth: '260px'
	});

	// Main Slider
	var mainSlider = $('.main-slider');
	var sliderStatus = $('.slider-pagination .current');

	mainSlider.on('init reInit beforeChange', function(event, slick, currentSlide, nextSlide){
		//currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
		var i = (currentSlide ? currentSlide : 0) + 1;
		sliderStatus.text(i + ' / ' + slick.slideCount);
	});

	mainSlider.slick({
		arrows: true,
		dots: false,
		appendArrows: $('.slider-pagination')
	});


	// Sticky Header Highliting
	$(function(){
		function changeHeaderState(isScrolled, isHeaderScrolled){
			if(isScrolled && !isHeaderScrolled){
				$(".header").addClass('scrolled');
			} else{
				$(".header").removeClass('scrolled');
			}
		}

		var isHeaderScrolled = false;
		var isScrolled = $(window).scrollTop() > 10;

		changeHeaderState(isScrolled, isHeaderScrolled)

		$(window).scroll(function(){
			isScrolled = $(window).scrollTop() > 10;

			changeHeaderState(isScrolled, isHeaderScrolled)
		});
	});

	// About Us
	$('.about-us-section .section-image .image-corner').css({
		'border-top-width' : $('.about-us-section').outerHeight() + "px"
	});

	$(window).resize(function(){
		$('.about-us-section .section-image .image-corner').css({
			'border-top-width' : $('.about-us-section').outerHeight() + "px"
		});
	});

});