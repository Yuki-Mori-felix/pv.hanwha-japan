window.addEventListener("DOMContentLoaded", function() {
  // =====================
  //  関数呼び出し
  // =====================
  search();
  footerAddMargin();

  // =====================
  //  関数
  // =====================
  // サイト内検索
  function search() {
    const searchForm = document.querySelector(".search-form");

    if (!searchForm) return;

    const searchOpenBtn = document.querySelector(".site-search");
    const searchCloseBtn = document.querySelector(".s-close-btn");

    searchOpenBtn.addEventListener("click", searchDetailClickEvent);
    searchCloseBtn.addEventListener("click", searchDetailClickEvent);

    function searchDetailClickEvent() {
      if (searchForm.classList.contains("active")) {
        searchForm.classList.remove("active");
        searchForm.style.height = 0;
      } else {
        searchForm.classList.add("active");
        searchForm.style.height = searchForm.scrollHeight + 'px';
      }
    }
  }

  // 1054px以下は固定ボタンの分フッターにマージンを入れる
  function footerAddMargin() {
    const sticky = document.querySelector('._footer_fixed_bt');
    const footer = document.querySelector('.site-footer');
    console.log("test");

    if (!sticky || !footer) return;

    const fixedBtnHeight = sticky.offsetHeight;

    if (window.matchMedia('(max-width: 1055px)').matches) {
      footer.style.marginBottom = fixedBtnHeight + 'px';
    }
  }
});

// =====================
//  リンクシェアボタン
// =====================
$(function () {
	$("#copy-url").click(function () {
		// data-urlの値を取得
		const url = $(this).data("url");

		// クリップボードにコピー
		navigator.clipboard
			.writeText(url)
			.then(() => {
				// メッセージを変更
				$(".success-msg").text("リンクをコピーしました");

				// フラッシュメッセージ表示
				$(".success-msg").fadeIn("slow", function () {
					$(this).delay(1500).fadeOut("slow");
				});
			})
			.catch((err) => {
				// エラー時のメッセージ
				$(".success-msg").text("コピーに失敗しました");

				$(".success-msg").fadeIn("slow", function () {
					$(this).delay(1500).fadeOut("slow");
				});
			});
	});
});
