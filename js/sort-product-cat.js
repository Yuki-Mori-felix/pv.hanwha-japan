/*------------------------------------------
  製品一覧ページ AJAX フィルタリング処理
------------------------------------------*/
document.addEventListener("DOMContentLoaded", function () {
	const filter1Select = document.getElementById("filter1");
	const filter2Select = document.getElementById("filter2");
	const productList = document.querySelector(".prod-list");
  const readyList = document.getElementById("ready-list");
  const hybridList = document.getElementById("hybrid-list");
	const allButton = document.querySelector(".all");

	const termSlug = document
		.getElementById("product-term")
		.getAttribute("data-term"); // PHPからターム値を取得

	// // ✅ 追加: filter2 の選択肢変更時の処理
	// filter2Select.addEventListener("change", function () {
	// 	if (termSlug !== "storage-system") return; // ✅ 追加: 他のタームでは実行しない

	// 	const filter2Value = filter2Select.value;

	// 	// ✅ 追加: ready / hybrid の prod-list を切り替え
	// 	document.querySelector(".ready").style.display =
	// 		filter2Value === "" || filter2Value === filter2Select.options[1].value
	// 			? "block"
	// 			: "none";
	// 	document.querySelector(".hybrid").style.display =
	// 		filter2Value === "" || filter2Value === filter2Select.options[2].value
	// 			? "block"
	// 			: "none";
	// });

	async function fetchFilteredProducts() {
		const filter1Value = filter1Select.value;
		const filter2Value = filter2Select.value;

		const ajaxAction =
			termSlug === "storage-system"
				? "filter_products_storage_system"
				: "filter_products"; // `storage-system` だけ異なる処理を実行

		try {
			const response = await fetch("/wp-admin/admin-ajax.php", {
				method: "POST",
				headers: {
					"Content-Type": "application/x-www-form-urlencoded",
				},
				body: new URLSearchParams({
					action: ajaxAction,
					filter1: filter1Value,
					filter2: filter2Value,
					term_slug: termSlug,
				}),
			});

			if (!response.ok) {
				throw new Error(`HTTP error! status: ${response.status}`);
			}

			const data = await response.text();
			productList.innerHTML = data;
			// readyList.innerHTML = data;
			// hybridList.innerHTML = data;
			// ✅ `data` を HTML として解析
			const parser = new DOMParser();
			const doc = parser.parseFromString(data, "text/html");

			// ✅ `#ready-list` の内容を更新
			const readyItems = doc.querySelector("#ready-list");
			if (readyItems) {
				readyList.innerHTML = readyItems.innerHTML;
			} else {
				readyList.innerHTML = "<p>該当する商品がありません</p>";
			}

			// ✅ `#hybrid-list` の内容を更新
			const hybridItems = doc.querySelector("#hybrid-list");
			if (hybridItems) {
				hybridList.innerHTML = hybridItems.innerHTML;
			} else {
				hybridList.innerHTML = "<p>該当する商品がありません</p>";
			}
		} catch (error) {
			// console.error("Error fetching filtered products:", error);
		}
	}

	// 疑似セレクトボックスの変更でソート機能を実行
	document.querySelectorAll(".custom-options li").forEach((option) => {
		option.addEventListener("click", function () {
      fetchFilteredProducts();
		});
	});

	filter1Select.addEventListener("change", fetchFilteredProducts);
	filter2Select.addEventListener("change", fetchFilteredProducts);

	allButton.addEventListener("click", function () { // ALLボタン押下時の処理
		// 疑似セレクトボックスを削除
		document
			.querySelectorAll(".custom-select")
			.forEach((elem) => elem.remove());

		// セレクトボックスの値をリセット
		filter1Select.value = "";
		filter2Select.value = "";

		// `change` イベントを発火させる
		filter1Select.dispatchEvent(new Event("change"));
		filter2Select.dispatchEvent(new Event("change"));

		// 疑似セレクトボックスを再生成
		if (window.selectChoice) {
			window.selectChoice();
		}
		fetchFilteredProducts();
	});

	fetchFilteredProducts();
});