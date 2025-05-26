"use strict";

window.addEventListener("DOMContentLoaded", function() {
  // =====================
  //  関数呼び出し
  // =====================
  systemToggle();

  // =====================
  //  関数
  // =====================
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
});