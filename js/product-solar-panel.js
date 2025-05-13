document.addEventListener("DOMContentLoaded", function () {
	const productSelect = document.getElementById("product-select");
	const compareSelect = document.getElementById("compare-product-select");
	const productImage = document.getElementById("product-image"); // メイン投稿の画像
	const compareProductImage = document.getElementById("compare-product-image"); // 比較対象の画像
	const productMoreLink = document.getElementById("product-more-link"); // メイン投稿のリンク
	const compareMoreLink = document.getElementById("compare-product-more-link"); // 比較対象のリンク

	// 更新対象のカスタムフィールド一覧
	const fields = Array.from(
		{ length: 30 },
		(_, i) => `product-detail-${i + 1}`
	);

	function updateProductDetails(selectedPostId, isCompare = false) {
		fetch(`/wp-json/wp/v2/product/${selectedPostId}`)
			.then((response) => response.json())
			.then((data) => {
				fields.forEach((field) => {
					const targetElement = document.getElementById(field);
					const compareTargetElement = document.getElementById(
						`compare-${field}`
					);

					if (targetElement && !isCompare) {
						const fieldKey = field.replace(/-/g, "_");
						targetElement.textContent = data.meta?.[fieldKey] || "ー";
					}

					if (compareTargetElement && isCompare) {
						const fieldKey = field.replace(/-/g, "_");
						compareTargetElement.textContent = data.meta?.[fieldKey] || "ー";
					}
				});

				// メインの画像の変更
				if (!isCompare && productImage) {
					productImage.setAttribute("src", data.meta?.image1?.url || "");
				}

				// 比較対象の画像の変更
				if (isCompare && compareProductImage) {
					compareProductImage.setAttribute("src", data.meta?.image1?.url || "");
				}

				// メインの「詳しく見る」リンクの変更
				if (!isCompare && productMoreLink) {
					productMoreLink.setAttribute("href", data?.link || "#");
				}

				// 比較対象の「詳しく見る」リンクの変更
				if (isCompare && compareMoreLink) {
					compareMoreLink.setAttribute("href", data?.link || "#");
				}
			})
			.catch((error) => console.error("Error fetching product data:", error));
	}

	// メインのセレクトボックスの変更イベント
	productSelect.addEventListener("change", function () {
		const selectedPostId = this.value;
		updateProductDetails(selectedPostId, false);
	});

	// 比較対象のセレクトボックスの変更イベント
	compareSelect.addEventListener("change", function () {
		const selectedPostId = this.value;
		updateProductDetails(selectedPostId, true);
	});
});
