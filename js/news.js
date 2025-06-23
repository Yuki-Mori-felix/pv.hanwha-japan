/*------------------------------------------
  NEWSページ カテゴリごとに記事表示
------------------------------------------*/
document.addEventListener("DOMContentLoaded", function () {
	const buttons = document.querySelectorAll(".filter-button");
	const newsList = document.querySelector(".news-list");
	const pagination = document.getElementById("pagination");

	// 現在のページ番号を取得（URLから）
	const getCurrentPage = () => {
		const match = window.location.href.match(/page\/(\d+)/);
		return match ? parseInt(match[1]) : 1;
	};

	// 初回読み込み：すべての投稿（paged有効）
	const currentPage = getCurrentPage();
	fetch(
		`/wp-admin/admin-ajax.php?action=filter_news&term_id=all&paged=${currentPage}`
	)
		.then((response) => response.text())
		.then((data) => {
			newsList.innerHTML = data;
			pagination.style.display = "block";
		})
		.catch((error) => console.error("Error:", error));

	// フィルターボタンのクリック時
	buttons.forEach((button) => {
		button.addEventListener("click", function () {
			const termId = this.getAttribute("data-term-id");

			// active クラスの切り替え
			buttons.forEach((btn) => btn.classList.remove("active"));
			this.classList.add("active");

      if (termId === "all") { // 「すべて」をクリックした時
				// /news/ に遷移
				window.location.href = "/news/";
				return;
			}

			// AJAX URL生成
			let url = `/wp-admin/admin-ajax.php?action=filter_news&term_id=${termId}`;
			if (termId === "all") {
				url += `&paged=1`; // 「すべて」では1ページ目から再表示
			}

			fetch(url)
				.then((response) => response.text())
				.then((data) => {
					newsList.innerHTML = data;

					// ページネーションの表示/非表示
					if (termId === "all") {
						pagination.style.display = "block";
					} else {
						pagination.style.display = "none";
					}
				})
				.catch((error) => console.error("Error:", error));
		});
	});
});
