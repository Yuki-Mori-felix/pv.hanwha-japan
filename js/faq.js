
$(function () {
	$(".question").click(function () {
    $(this).toggleClass('open');
		$(this).next(".view").slideToggle();
	});
});
