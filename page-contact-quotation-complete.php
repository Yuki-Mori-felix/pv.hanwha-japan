<?php
/*
Template Name: お見積り依頼--完了
*/
get_header();
?>
<main class="contact complete">
  <section class="mv" style="background-image: url(<?= get_field('fv_page_img'); ?>)">
    <h2 class="ttl"><?= the_title(); ?></h2>
  </section>
  <!-- // MV -->
  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>
  <section class="top">
    <div class="container">
      <p class="lead">この度はお見積り依頼をしていただき、ありがとうございます。<br>後日担当者より、ご連絡させていただきます。</p>
      <div class="links">
        <a href="<?=get_my_home_url()?>" class="btn">TOPへ戻る</a>
      </div>
    </div>
  </section>
  <!-- // TOP -->
  <section class="common-info">
    <div class="container">
      <div class="ctt customer">
        <div class="img"><img src="<?=get_img_path()?>/contact/icon-customer.svg" alt=""></div>
        <div class="detail">
          <p class="head">お問い合わせはこちらまで</p>
          <p class="txt">
            番号 0120-322-001<br>
            受付時間 09：00～17：00<br class="none-min-ml">（12：00～13：00を除く）<br>
            ※土日・祝日および年末年始を除く
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- // INFO -->
</main>
<!-- // CONTACT -->
<?=get_footer();?>