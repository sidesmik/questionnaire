$(document).ready(function(){

	// Current menu item highlithing
	$(function () {
		var location = window.location.href;
		var cur_url = location.split('/').pop();

		$('.sidebar-nav li').each(function () {
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
	// $('.editor .minimizeBtn').click(function(){
	// 	$(this).closest('.editor').children('.editor-content').slideToggle(300);
	// 	$(this).closest('.editor').toggleClass('opened');
	// });

	// Tabs nav
	$("[data-tab]").click(function(e){
		e.preventDefault();
		var dest = $( $(this).data('tab') );
		dest.stop().fadeIn(300).siblings().hide(0);
		$(this).parent().addClass('current').siblings().removeClass('current');
	});

	$("*:first-child > [data-tab]").click();

	// jQuery Custom Fields
	// jcf.setOptions('Range', {});

	// jcf.setOptions('Select', {
	// 	wrapNative: false
	// });

	// jcf.replaceAll();

});