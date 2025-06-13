window.addEventListener("DOMContentLoaded", function() {
  // =====================
  //  関数呼び出し
  // =====================
  search();

  // =====================
  //  関数
  // =====================
  // サイト内検索
  function search() {
    const searchForm = document.querySelector(".search-form");

    if (!searchForm) return;

    const searchOpenBtn = document.querySelector(".site-search");
    const searchCloseBtn = document.querySelector(".s-close-btn");

    searchOpenBtn.addEventListener("click", searchDetailClickEvent);
    searchCloseBtn.addEventListener("click", searchDetailClickEvent);

    function searchDetailClickEvent() {
      if (searchForm.classList.contains("active")) {
        searchForm.classList.remove("active");
        searchForm.style.height = 0;
      } else {
        searchForm.classList.add("active");
        searchForm.style.height = searchForm.scrollHeight + 'px';
      }
    }
  }
});