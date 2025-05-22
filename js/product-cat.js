"use strict";

window.addEventListener("DOMContentLoaded", function() {
  // =====================
  //  関数呼び出し
  // =====================
  selectChoice();

  // =====================
  //  関数
  // =====================
  function selectChoice() {
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
        const li = document.createElement("li");
        li.textContent = option.text;
        li.dataset.value = option.value;

        li.addEventListener("click", () => {
          customSelected.textContent = option.text;
          originalSelect.value = option.value;

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
          customOptions.style.height = customOptions.scrollHeight + 'px';
        }
      });

      customSelect.appendChild(customSelected);
      customSelect.appendChild(customOptions);
      originalSelect.parentNode.insertBefore(customSelect, originalSelect.nextSibling);
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
  }
});