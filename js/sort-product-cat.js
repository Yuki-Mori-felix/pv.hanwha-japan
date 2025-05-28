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

	async function fetchFilteredProducts() {
		const filter1Value = filter1Select.value;
		const filter2Value = filter2Select.value;

		try {
			const response = await fetch("/wp-admin/admin-ajax.php", {
				method: "POST",
				headers: {
					"Content-Type": "application/x-www-form-urlencoded",
				},
				body: new URLSearchParams({
					action: "filter_products",
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
		} catch (error) {
			console.error("Error fetching filtered products:", error);
		}
	}

	filter1Select.addEventListener("change", fetchFilteredProducts);
	filter2Select.addEventListener("change", fetchFilteredProducts);

	allButton.addEventListener("click", function () {
		filter1Select.value = "";
		filter2Select.value = "";
		fetchFilteredProducts();
	});

	fetchFilteredProducts();
});