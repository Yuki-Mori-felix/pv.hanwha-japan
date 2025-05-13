document.addEventListener("DOMContentLoaded", function () {
	const productSelect = document.getElementById("product-select");
	const compareSelect = document.getElementById("compare-product-select");
	const productImage = document.getElementById("product-image");

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
					); // 比較用

					if (targetElement && !isCompare) {
						const fieldKey = field.replace(/-/g, "_");
						targetElement.textContent = data.meta?.[fieldKey] || "ー";
					}

					if (compareTargetElement && isCompare) {
						const fieldKey = field.replace(/-/g, "_");
						compareTargetElement.textContent = data.meta?.[fieldKey] || "ー";
					}
				});

				// メインの画像を変更（比較対象には適用しない）
				if (!isCompare && productImage && data.meta?.image1?.url) {
					productImage.setAttribute("src", data.meta.image1.url);
				} else if (!isCompare && productImage) {
					productImage.setAttribute("src", "");
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
