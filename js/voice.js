/*------------------------------------------
  お客様インタビューページ カテゴリごとに記事表示
------------------------------------------*/
document.addEventListener("DOMContentLoaded", function () {
	const buttons = document.querySelectorAll(".filter-button");
	const voiceList = document.querySelector(".voice-list");

	// 初回読み込み時に全投稿をデフォルト表示
	fetch("/wp-admin/admin-ajax.php?action=filter_voice&term_id=all")
		.then((response) => response.text())
		.then((data) => {
			voiceList.innerHTML = data;
		})
		.catch((error) => console.error("Error:", error));

	// カテゴリ別に投稿を表示
	buttons.forEach((button) => {
		button.addEventListener("click", function () {
			const termId = this.getAttribute("data-term-id");

			// ボタンの「active」クラスを更新
			buttons.forEach((btn) => btn.classList.remove("active"));
			this.classList.add("active");

			fetch(`/wp-admin/admin-ajax.php?action=filter_voice&term_id=${termId}`)
				.then((response) => response.text())
				.then((data) => {
					voiceList.innerHTML = data;
				})
				.catch((error) => console.error("Error:", error));
		});
	});
});
