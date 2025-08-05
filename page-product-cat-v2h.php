<?php
/*
Template Name: V2H製品一覧
*/
get_header();
$img_path = get_stylesheet_directory_uri() . "/images";
require get_stylesheet_directory() . '/include/my_variables.php';
?>
<!-- 製品詳細 ターム(V2H) 一覧ページ -->
<main class="taxonomy-product-cat v2h single-products">
  <section class="mv" style="background-image: url(<?= get_field('fv_page_img'); ?>)">
    <div class="container">
      <div class="ttlc">
        <p class="prod-name"><?= get_field('title_main'); ?></p>
        <h2 class="ttl"><?= get_field('title_sub') ?></h2>
      </div>
    </div>
  </section>
  <!-- // MV -->
  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>
  <section class="top">
    <div class="container">
      <div class="prod-img"><img src="<?=get_field('top_product_img')['url'];?>" alt=""></div>
    </div>
  </section>
  <!-- // TOP -->
  <section class="intro bg-other">
    <div class="container">
      <div class="img intro-v2h"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/V2H_front.png" alt=""></div>
      <div class="ctt">
        <p class="txt"><?= get_field('description'); ?></p>
      </div>
    </div>
  </section>
  <!-- // INTRO -->

  <?= get_field('content_1', false, false); ?>
  <!-- // POWER_STATION -->

  <?= get_field('content_2', false, false); ?>
  <!-- // TRIBRID -->
</main>
<?= get_footer(); ?>