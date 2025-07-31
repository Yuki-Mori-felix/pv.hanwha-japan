"use strict";

window.addEventListener("DOMContentLoaded", function() {
  // =====================
  //  関数呼び出し
  // =====================
  systemToggle();
  catalogNumber();
  disableSubmitBtn();

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

      input.addEventListener("change", () => { // 直接入力
        if (input.value !== '') {
          group.parentElement.classList.add("choose");
        } else {
          group.parentElement.classList.remove("choose");
        }

        catalogNumCheck();
      })

      incBtn.addEventListener("click", () => { // プラスボタン
        let current = parseInt(input.value) || 0;
        let max = parseInt(input.max) || 9999;
        let step = parseInt(input.step) || 1;
        group.parentElement.classList.add("choose");
        if (current + step <= max) {
          input.value = current + step;
        }

        catalogNumCheck();
      });

      decBtn.addEventListener("click", () => { // マイナスボタン
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

  // バグ防止のため、フォーム内のボタンを一度クリックしたら10秒間無効化させる
  function disableSubmitBtn() {
    const btns = document.querySelectorAll(".form .submit-btn");

    if (!btns) return;

    btns.forEach(function(btn) {
      btn.addEventListener('click', function() {
        // pointer-events を無効化
        btn.style.pointerEvents = 'none';

        // 10秒後に再度有効化
        setTimeout(function() {
          btn.style.pointerEvents = '';
        }, 10000); // 10000ミリ秒 = 10秒
      });
    });
  }

  // CF7 エラーメッセージが出ている箇所までスクロールさせる
  document.addEventListener('wpcf7invalid', function (event) {
    const form = event.target;
    const contactCatalog = document.querySelector("main.contact-catalog");

    if (!contactCatalog) return;

    setTimeout(() => {
      const catA = form.querySelector('input[name^="cat-noc-"]'); // カタログ部数
      const catalogErrorMsg = form.querySelector('.catalog-err-msg');
      const defaultErrorMsg = form.querySelector('.input-address .wpcf7-not-valid');
      const catAHasError = catA && catA.classList.contains('wpcf7-not-valid'); // catAにエラーがあるか

      if (catAHasError) {
        // catA にエラー → エラーメッセージ表示＋スクロール
        catalogErrorMsg.style.display = 'block';
        catalogErrorMsg.scrollIntoView({ behavior: 'smooth', block: 'center' });
      } else {
        // catA にエラーがない → エラーメッセージ非表示
        catalogErrorMsg.style.display = 'none';

        if (defaultErrorMsg) {
          // 他の項目にエラー → そこにスクロール
          defaultErrorMsg.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
      }
    }, 100);
  });

  // CF7 見積依頼フォームが送信されたら完了ページへリダイレクトさせる
  document.addEventListener('wpcf7mailsent', function (event) {
    if (event.target.classList.contains('form-quotation')) {
      window.location.href = "/service-support/contact-quotation/complete/";
    }
  }, false);
});