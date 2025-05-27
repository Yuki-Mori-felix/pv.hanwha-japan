/*------------------------------------------
  製品一覧ページ AJAX フィルタリング処理
------------------------------------------*/
document.addEventListener("DOMContentLoaded", function () {
	const filter1Select = document.getElementById("filter1");
	const filter2Select = document.getElementById("filter2");
	const productList = document.querySelector(".prod-list");
	const allButton = document.querySelector(".all");

	const termSlug = document
		.getElementById("product-term")
		.getAttribute("data-term"); // PHPからターム値を取得

	function fetchFilteredProducts() {
		const filter1Value = filter1Select.value;
		const filter2Value = filter2Select.value;

		const xhr = new XMLHttpRequest();
		xhr.open("POST", "/wp-admin/admin-ajax.php", true);
		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

		xhr.onreadystatechange = function () {
			if (xhr.readyState === 4 && xhr.status === 200) {
				productList.innerHTML = xhr.responseText;
			}
		};

		xhr.send(
			`action=filter_products&filter1=${encodeURIComponent(
				filter1Value
			)}&filter2=${encodeURIComponent(
				filter2Value
			)}&term_slug=${encodeURIComponent(termSlug)}`
		);
	}

	filter1Select.addEventListener("change", fetchFilteredProducts);
	filter2Select.addEventListener("change", fetchFilteredProducts);

	allButton.addEventListener("click", function () {
		// セレクトボックスをデフォルトに戻す
		filter1Select.value = "";
		filter2Select.value = "";

		// 絞り込みなしで全投稿を取得
		fetchFilteredProducts();
	});

	// 初回ロード時にデータを取得
	fetchFilteredProducts();
});
