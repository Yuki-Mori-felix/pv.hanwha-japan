<?php
/* Template Name: 拠点詳細 */
require get_stylesheet_directory() . '/include/my_variables.php';
?>
<?php get_header(); ?>

<main class="under-pv">
  <section class="mv">
    <div class="back-img" style="background-image: url(<?= get_field('fv_page_img'); ?>);">
      <h1 class="title">国内拠点ネットワーク</h1>
    </div>
  </section>
  <!--========== END OF MV ==========-->

  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>

  <nav class="location-menu">
    <div class="nav-title">ネットワーク一覧</div>
    <a href="#sales-support" class="parent-link">セールスサポート</a>
    <ul>
      <li><a href="#tokyo" class="child-link">東京本社</a></li>
      <li><a href="#sendai" class="child-link">仙台支店</a></li>
      <li><a href="#sapporo" class="child-link">札幌営業所</a></li>
      <li><a href="#nagoya" class="child-link">名古屋支店</a></li>
      <li><a href="#oosaka" class="child-link">大阪支店</a></li>
      <li><a href="#hukuoka" class="child-link">福岡支店</a></li>
      <li><a href="#q" class="child-link">Q.PARTNERS</a></li>
    </ul>
    <a href="#distribution" class="parent-link">物流拠点</a>
    <a href="#service-support" class="parent-link">サービスサポート</a>
  </nav>

  <section class="location-top">
    <div class="wrap_s">
      <div class="location-wrap">
        <div class="location-top-img">
          <img src="<?= get_field('image')['url']; ?>" alt="<?= get_field('image')['alt']; ?>">
        </div>
      </div>
    </div>
  </section>
  <!--========== END OF SUPPORT  ==========-->

  <?= get_field('content_1', false, false); ?>
  <!--========== END OF   ==========-->

  <?= get_field('content_2', false, false); ?>
  <!--========== END OF DISTRIBUTION  ==========-->

  <?= get_field('content_3', false, false); ?>
  <!--========== END OF SERVICE SUPPORT  ==========-->

  <div class="wrap_s">
    <div class="location-wrap">
      <a href="<?= home_url(); ?>/pv" class="btn location-button">ハンファジャパンの太陽光発電</a>
    </div>
  </div>

</main>
<?php get_footer(); ?>