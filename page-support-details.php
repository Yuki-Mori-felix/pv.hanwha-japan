<?php
/* Template Name: サポート詳細 */
require get_stylesheet_directory() . '/include/my_variables.php';
?>
<?php get_header(); ?>

<main class="under-pv">
  <section class="mv">
    <div class="back-img" style="background-image: url(<?= get_field('fv_page_img'); ?>);">
      <h1 class="title">最後まで徹底サポート</h1>
    </div>
  </section>
  <!--========== END OF MV ==========-->

  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>

  <?= get_field('content', false, false); ?>
  <!--========== END OF SUPPORT ==========-->

  <a href="<?= home_url(); ?>/pv" class="btn location-button">ハンファジャパンの太陽光発電について</a>
</main>
<?php get_footer(); ?>