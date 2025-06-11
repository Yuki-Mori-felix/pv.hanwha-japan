"use strict";

window.addEventListener("DOMContentLoaded", function() {
  // =====================
  //  関数呼び出し
  // =====================
  systemToggle();
  catalogNumber();

  // =====================
  //  関数
  // =====================
  // WEBカタログ・ダウンロード 動作環境アコーディオン
  function systemToggle() {
    const system = document.querySelector(".catalog-dl .system");

    if (!system) return;

    const systemOpenBtn = document.querySelector(".system .container .ttl");
    const systemElem = document.querySelector(".system .container .ctt");

    systemOpenBtn.addEventListener("click", searchDetailClickEvent);

    function searchDetailClickEvent() {
      if (systemElem.classList.contains("active")) {
        systemElem.classList.remove("active");
        systemOpenBtn.classList.remove("active");
        systemElem.style.height = 0;
      } else {
        systemElem.classList.add("active");
        systemOpenBtn.classList.add("active");
        systemElem.style.height = systemElem.scrollHeight + 'px';
      }
    }
  }

  // カタログ請求 カタログ部数選択
  function catalogNumber() {
    const nocGroups = document.querySelectorAll(".cat-num");
    const scrollBtn = document.querySelector(".scroll-btn");

    nocGroups.forEach((group) => {
      const input = group.querySelector('input[type="number"]');
      const incBtn = group.querySelector(".increment");
      const decBtn = group.querySelector(".decrement");

      incBtn.addEventListener("click", () => {
        let current = parseInt(input.value) || 0;
        let max = parseInt(input.max) || 9999;
        let step = parseInt(input.step) || 1;
        group.parentElement.classList.add("choose");
        if (current + step <= max) {
          input.value = current + step;
        }

        catalogNumCheck();
      });

      decBtn.addEventListener("click", () => {
        let current = parseInt(input.value) || 0;
        let step = parseInt(input.step) || 1;
        if (current <= 1) {
          input.value = ""; // 空欄にする
          group.parentElement.classList.remove("choose");
        } else {
          input.value = current - step;
        }

        catalogNumCheck();
      });
    });

    // カタログ部数に数値が入っているかチェックする
    function catalogNumCheck() {
      let hasAnyValue = false;

      nocGroups.forEach((group) => {
        const input = group.querySelector('input[type="number"]');
        if (input.value !== '') {
          hasAnyValue = true;
        }
      });

      if (hasAnyValue) {
        scrollBtn.classList.add("active");
      } else {
        scrollBtn.classList.remove("active");
      }
    }
  }
});