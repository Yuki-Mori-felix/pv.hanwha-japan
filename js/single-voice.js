window.addEventListener("load", function () {

	//商品スペック アコーディオン
	$(function () {
    $('.accordion-btn').click(function () {
			//typeA
      $(this).closest('.accordion.typeA').toggleClass('open');
			$(this).prev('.accordion-content').slideToggle();
			//typeB
			$(this).closest('.accordion.typeB').toggleClass('open');
			$(this).next('.accordion-content').slideToggle();
    });
  });

});