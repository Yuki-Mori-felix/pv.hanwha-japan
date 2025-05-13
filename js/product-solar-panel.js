/* 
製品詳細ページ（太陽光パネル）製品比較機能
*/
document.addEventListener("DOMContentLoaded", function () {
	const selectBox = document.getElementById("product-select");
	const productImage = document.getElementById("product-image"); // 画像の要素を取得

	// 更新対象のカスタムフィールド一覧（product_detail_30まで対応）
	const fields = Array.from(
		{ length: 30 },
		(_, i) => `product-detail-${i + 1}`
	);

	selectBox.addEventListener("change", function () {
		const selectedPostId = this.value;

		fetch(`/wp-json/wp/v2/product/${selectedPostId}`)
			.then((response) => response.json())
			.then((data) => {
				fields.forEach((field) => {
					const targetElement = document.getElementById(field);
					if (targetElement) {
						// ページ内に存在する場合のみ更新
						const fieldKey = field.replace(/-/g, "_"); // REST API用に変換
						targetElement.textContent = data.meta?.[fieldKey] || "ー";
					}
				});

				// 画像の変更処理
				if (productImage && data.meta?.image1?.url) {
					productImage.setAttribute("src", data.meta.image1.url);
				} else if (productImage) {
					productImage.setAttribute("src", ""); // 画像がない場合は空白にする
				}
			})
			.catch((error) => console.error("Error fetching product data:", error));
	});
});
