"use strict";

window.addEventListener("DOMContentLoaded", function() {
	// =====================
  //  ラインナップのselect
  // =====================
  window.selectChoice = function() {
		// すでにカスタムセレクトボックスがある場合、処理を実行しない
		if (document.querySelector(".custom-select")) return;

		const selects = document.querySelectorAll("select.select");

		if (!selects) return;

		selects.forEach((originalSelect) => {
			// デフォルトのselectを非表示にする
			originalSelect.style.display = "none";

			// カスタムのselectを作成
			// select全体を囲む要素
			const customSelect = document.createElement("div");
			customSelect.className = "custom-select";

			// 選択されたoption名を表示させる要素
			const customSelected = document.createElement("div");
			customSelected.className = "custom-selected";
			customSelected.textContent = originalSelect.options[0].text;

			// optionが入っている要素
			const customOptions = document.createElement("ul");
			customOptions.className = "custom-options";

			for (let i = 0; i < originalSelect.options.length; i++) {
				const option = originalSelect.options[i];
        if (option.value === "") continue; // デフォルトの選択肢 (`option[value=""]`) をスキップ
				const li = document.createElement("li");
				li.textContent = option.text;
				li.dataset.value = option.value;

				li.addEventListener("click", () => {
					customSelected.textContent = option.text;
					originalSelect.value = option.value;
					originalSelect.dispatchEvent(new Event("change")); // 修正: changeイベント発火

					// デフォルトのselectにvalueが入ったらcustom-selectedにクラス名を付与
					if (originalSelect.value === "") {
						customSelected.classList.remove("has-value");
					} else {
						customSelected.classList.add("has-value");
					}

					// いずれかのoptionが選択されたら閉じる
					customSelect.classList.remove("open");
					customOptions.style.height = 0;
				});

				customOptions.appendChild(li);
			}

			// カスタムselectの開閉
			customSelected.addEventListener("click", (e) => {
				// デフォルトのselectのように、常に1つのselectしか開けないようにする
				document.querySelectorAll(".custom-select.open").forEach((elem) => {
					if (elem !== customSelect) {
						elem.classList.remove("open");
						const childElem = elem.querySelector(".custom-options");
						childElem.style.height = 0;
					}
				});

				if (customSelect.classList.contains("open")) {
					customSelect.classList.remove("open");
					customOptions.style.height = 0;
				} else {
					customSelect.classList.add("open");
					customOptions.style.height = customOptions.scrollHeight + "px";
				}
			});

			customSelect.appendChild(customSelected);
			customSelect.appendChild(customOptions);
			originalSelect.parentNode.insertBefore(
				customSelect,
				originalSelect.nextSibling
			);
		});

		// 画面外クリックで閉じる
		document.addEventListener("click", (e) => {
			document.querySelectorAll(".custom-select.open").forEach((elem) => {
				if (!elem.contains(e.target)) {
					elem.classList.remove("open");
					const childElem = elem.querySelector(".custom-options");
					childElem.style.height = 0;
				}
			});
		});
	};

  selectChoice();

	// =====================
  //  関数呼び出し
  // =====================
	bracket();

	// =====================
  //  関数
  // =====================

	// 架台・設置金具
	function bracket() {
		const bracketElem = document.querySelector("main.bracket");

		if (!bracketElem) return;

		modal();

		// 一般架台・設置金具 モーダルの開閉
    function modal() {
      const modalBlocks = document.querySelectorAll(".modal-block");

			modalBlocks.forEach(function (block) {
				const openBtn = block.querySelector(".modal-open");
				const modal = block.querySelector(".modal");

				openBtn.addEventListener("click", function () {
					modal.classList.add("is-active");
				});

				const closeBtns = modal.querySelectorAll(".modal-close");
				closeBtns.forEach(function (closeBtn) {
					closeBtn.addEventListener("click", function (e) {
						e.preventDefault();
						modal.classList.remove("is-active");
					});
				});
			});
    }
	}
});