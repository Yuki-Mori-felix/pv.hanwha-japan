<div class="search-form">
  <div class="s-wrap">
    <form class="form" id="form" action="<?= home_url(); ?>" method="get">
      <input class="s-box" name="s" type="text" placeholder="キーワードを入力" />
      <button type="submit" class="s-btn"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/btn_header_search.svg" alt="検索"></button>
    </form>
    <?php if (!is_page("search")) :?>
      <div class="s-close-btn"><span class="inner"></span></div>
    <?php endif;?>
  </div>
</div>