<?php
/* Template Name: 404ページ */
require get_stylesheet_directory() . '/include/my_variables.php';
?>
<?php get_header(); ?>
<main class="err">
  <div class="wrap_s">
    <h1 class="error_logo"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/03/logo.png" alt="Hanwha Japan"></h1>
    <!-- cont_err -->
    <div class="cont_err">
      <article class="err_ty">
        <h3 class="err_tit">404 . THAT’S AN ERROR</h3>
        <p class="txt_s">お探しのページが見つかりませんでした。</p>
        <p class="txt">申し訳ございませんが、お探しのページが見つかりませんでした。お探しのページは削除されたか、URLが変更された可能性がございます。</p>
        <div class="btn_area">
          <!-- <a href="javascript:history.back();" class="btn_m btn_ty06">前ページ</a> -->
          <a href="https://pv.hanwha-japan.com/about/" class="btn_m btn_ty02">About Hanwha Japan</a>
          <!-- <a href="" class="btn_m btn_ty06">次ページ</a> -->
        </div>
      </article>
    </div>
    <!-- //cont_err -->
  </div>
</main>
<?php get_footer(); ?>