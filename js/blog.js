$(function () {
	$(".toc-title").on("click", function () {
		$(this).next().slideToggle();
    $(this).toggleClass('close');
	});
});
