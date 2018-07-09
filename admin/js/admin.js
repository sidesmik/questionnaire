$(document).ready(function(){

	// Current menu item highlithing
	$(function () {
		var location = window.location.href;
		var cur_url = location.split('/').pop();

		$('.sidebar-nav li, .panel-nav li').each(function () {
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

	// Notifications
	// $('.notification-card .card-opener').click(function(){
	// 	$(this).siblings('.card-info').find('.card-hidden-text').slideToggle(300);
	// 	$(this).parent().toggleClass('opened');
	// });

	// Question Editor
	$('.editor .minimizeBtn').click(function(){
		$(this).closest('.editor').children('.editor-content').slideToggle(300);
		$(this).closest('.editor').toggleClass('opened');
	});

	// Logic card
	$(function(){
		$('.logic-card .card-title, .logic-card .card-opener').click(function(){
			$(this).closest('.logic-card').toggleClass('opened');
			$(this).closest('.logic-card').children('.card-content').slideToggle(300);
		});

		$('.condition-card .condition-title, .condition-card .minimize').click(function(){
			$(this).closest('.condition-card').toggleClass('closed');
			$(this).closest('.condition-card').children('.condition-content').slideToggle(300);
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

});