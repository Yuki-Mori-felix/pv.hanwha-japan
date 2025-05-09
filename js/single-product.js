"use strict";

//--- 商品詳細 ---//

document.addEventListener( 'DOMContentLoaded', function() {
	slider();

	function slider(){
		//スライダー
		const splideElemL = document.getElementById("splide-L")
		const splideElemS = document.getElementById("splide-S");
		if (!splideElemL || !splideElemS) return;
	
		var mainSlider = new Splide(splideElemL, {
			type: "loop",
			perPage: 1,
			perMove: 1,
			pagination: false,
			arrowPath: "M15.5741 0.54966C16.2853 -0.14332 17.4044 -0.180593 18.1587 0.434332L18.3039 0.566401L37.9999 20.2465L18.2869 39.4504C17.5283 40.1895 16.3062 40.182 15.5571 39.4337C14.8081 38.6852 14.8156 37.4793 15.5741 36.7402L32.5393 20.2112L15.5571 3.24312L15.4251 3.09803C14.8114 2.3461 14.8629 1.24268 15.5741 0.54966Z",
		});
	
		var thumbnailSlider = new Splide(splideElemS, {
			perPage: 3,
			perMove: 1,
			pagination: false,
			isNavigation: true,
			arrows: false,
			gap: 20,
		});
	
		mainSlider.sync(thumbnailSlider); //メインスライダーとサムネイルスライダーを同期
	
		mainSlider.mount();
		thumbnailSlider.mount();

		//スライダー上部のページ番号表示
		sliderPerPage();
		mainSlider.on('moved', sliderPerPage);

		function sliderPerPage(){
			let splideSliders = splideElemL.querySelector('.splide__slide.is-visible');
			let ariaLabel = splideSliders.getAttribute('aria-label');
			let perPage = document.getElementById('per_page');
			
			perPage.textContent = ariaLabel.replace(' of ', '/');
		}
	}
});

window.addEventListener("load", function () {
	//--- 呼び出し ---
	changeAnchorColor();
	modalWindow();
	//----------------

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

	//アンカーリンクの色変化
	function changeAnchorColor() {
		//監視する要素
		const sections = document.querySelectorAll('section');

		//ビューポートの高さを取得し、判定範囲をピクセル単位で計算
		const viewportHeight = window.innerHeight;
		const viewportRangeTop = -1 * (viewportHeight * 2/5);
		const viewportRangeBottom = -1 * (viewportHeight *  3/5) + 1;

		//[1] ビューポートの有効範囲
		//[2] どの程度の交差で有効とするか
		let options = {
			rootMargin:
				viewportRangeTop + 'px 0px ' + viewportRangeBottom + 'px 0px', // --[1]
				threshold: 0, // --[2]
		};

		let observer = new IntersectionObserver(callback, options);

		
		function callback(entries) {
			let activeSectionID = null;

			//セクションと同じキーをもつ要素を取得し、一致したものをactiveに
			entries.forEach(function (value) {
				if (value.isIntersecting) {
					activeSectionID = value.target.getAttribute('data-target');
				}
			});

			$('.fixed-anchor .link').each(function () {
				const id = $(this).data('id');						
				// activeSectionID が null なら全部外す
				if(activeSectionID === null){
					$(this).removeClass('active');
				}else if (id === activeSectionID) {
					$(this).addClass('active');
				} else {
					$(this).removeClass('active');
				}
			});
		}

		sections.forEach(function (section) {
			observer.observe(section);
		});
	}

	//モーダルウィンドウ
	function modalWindow(){
		const modalButton = document.getElementById('web-ar');
		const modalWindow = document.getElementById('modal-window');
		const closeModal = document.querySelector('.modal-window .close');

		if(modalButton && modalWindow){
			modalButton.addEventListener('click', function(){
				modalWindow.classList.add('visible');
			});
		}

		if(closeModal){
			closeModal.addEventListener('click', function(){
				modalWindow.classList.remove('visible');
			});
		}		
	}
});