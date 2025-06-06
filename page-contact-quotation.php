<?php
/*
Template Name: お見積り依頼
*/
get_header();
$form_id = is_public_server() ? "fc48203" : "2aa1f57"; // cf7のフォームid
?>
<main class="contact quotation">
  <section class="mv" style="background-image: url(https://pv.hanwha-japan.com/wp-content/uploads/2025/06/mv-contact-quotation.png)">
    <h2 class="ttl">お見積り依頼</h2>
  </section>
  <!-- // MV -->
  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>
  <section class="top">
    <div class="container">
      <p class="lead">以下のフォームよりお見積りいただけます。</p>
      <p class="txt">
        お見積り依頼頂きました内容に関しては弊社にて確認後、担当よりご連絡させて頂きます。<br>
        お見積り内容によっては、協力会社と共有する場合もございますので、予めご了承ください。
      </p>
    </div>
  </section>
  <!-- // TOP -->
  <section class="sec-form">
    <div class="container">
      <?php echo do_shortcode('[contact-form-7 id="' . $form_id . '" title="お見積り依頼" html_class="h-adr form"]');?>
      <div class="links">
        <a href="<?=get_my_home_url("/service-support/catalog")?>" class="link catalog-a"><span class="inner">カタログ請求・ダウンロードはこちら</span></a>
        <a href="<?=get_my_home_url("/service-support/contact")?>" class="link contact"><span class="inner">お問い合わせはこちら</span></a>
      </div>
    </div>
  </section>
  <!-- // SEC_FORM -->
  <section class="info">
    <div class="container">
      <div class="ctt customer">
        <div class="img"><img src="<?=get_img_path()?>/contact/icon-customer.svg" alt=""></div>
        <div class="detail">
          <p class="head">お客さまご相談センター</p>
          <p class="txt">
            電話番号 0120-322-001<br>
            受付時間 09：00～17：00<br class="none-min-ml">（12：00～13：00を除く）<br>
            ※土日・祝日および年末年始を除く
          </p>
        </div>
      </div>
      <div class="ctt repair">
        <div class="img"><img src="<?=get_img_path()?>/contact/icon-repair.svg" alt=""></div>
        <div class="detail">
          <p class="head">修理のご用命</p>
          <p class="txt">
            電話番号 0120-801-170<br>
            受付時間 09：00～17：00<br class="none-min-ml">（12：00～13：00を除く）<br>
            ※土日・祝日および年末年始を除く
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- // INFO -->
</main>
<!-- // CONTACT QUOTATION -->
<?=get_footer();?>