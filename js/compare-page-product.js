/*============= 製品比較機能（製品一覧ページ） =============*/
document.addEventListener("DOMContentLoaded", function () {
	const productSelect = document.getElementById("product-select");
	const compareSelect = document.getElementById("compare-product-select");

	const defaultProductId = productSelect.value;
	const defaultCompareProductId = compareSelect.value;

	console.log("Default Product ID:", defaultProductId);
	console.log("Default Compare Product ID:", defaultCompareProductId);

	function updateProductDetails(selectedPostId, isCompare = false) {
		if (!selectedPostId) return; // IDがない場合は処理しない

		fetch(`/wp-json/wp/v2/product/${selectedPostId}`)
			.then((response) => {
				if (!response.ok) {
					throw new Error(`HTTP error! status: ${response.status}`);
				}
				return response.json();
			})
			.then((data) => {

				const fields = Array.from(
					{ length: 30 },
					(_, i) => `product-detail-${i + 1}`
				);

				fields.forEach((field) => {
					const targetElement = document.getElementById(field);
					const compareTargetElement = document.getElementById(
						`compare-${field}`
					);
					const fieldKey = field.replace(/-/g, "_");

					if (targetElement && !isCompare) {
						targetElement.innerHTML = data.meta?.[fieldKey] || "ー";
					}

					if (compareTargetElement && isCompare) {
						compareTargetElement.innerHTML = data.meta?.[fieldKey] || "ー";
					}
				});

				const productImage = document.getElementById("product-image");
				const compareProductImage = document.getElementById(
					"compare-product-image"
				);
				const productMoreLink = document.getElementById("product-more-link");
				const compareMoreLink = document.getElementById(
					"compare-product-more-link"
				);

				if (!isCompare && productImage) {
					productImage.setAttribute("src", data.meta?.image1?.url || "");
				}

				if (isCompare && compareProductImage) {
					compareProductImage.setAttribute("src", data.meta?.image1?.url || "");
				}

				if (!isCompare && productMoreLink) {
					productMoreLink.setAttribute("href", data?.link || "#");
				}

				if (isCompare && compareMoreLink) {
					compareMoreLink.setAttribute("href", data?.link || "#");
				}
			})
			.catch((error) => console.error("Error fetching product data:", error));
	}

	// 初回ロード時にデータ取得
	if (defaultProductId) {
		updateProductDetails(defaultProductId, false);
	} else {
		console.error("Error: Default Product ID is missing");
	}

	if (defaultCompareProductId) {
		updateProductDetails(defaultCompareProductId, true);
	} else {
		console.error("Error: Default Compare Product ID is missing");
	}

	// セレクトボックス変更時の処理
	productSelect.addEventListener("change", function () {
		updateProductDetails(this.value, false);
	});

	compareSelect.addEventListener("change", function () {
		updateProductDetails(this.value, true);
	});
});

/*_____ 製品比較 アコーディオン _____*/
$(function () {
	$(".accordion-btn").click(function () {
		//typeA
		$(this).closest(".accordion.typeA").toggleClass("open");
		$(this).prev(".accordion-content").slideToggle();
	});
});