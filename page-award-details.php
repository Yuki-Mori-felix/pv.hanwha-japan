<?php
/* Template Name: 受賞詳細 */
require get_stylesheet_directory() . '/include/my_variables.php';
$img_path = get_stylesheet_directory_uri() . "/images";
?>
<?php get_header(); ?>

<main class="under-pv">
  <section class="mv">
    <div class="back-img" style="background-image: url(<?= get_field('fv_page_img'); ?>);">
      <h1 class="title"><?= the_title(); ?></h1>
    </div>
  </section>
  <!--========== END OF MV ==========-->

  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>

  <?= get_field('content_1', false, false); ?>
  <!--========== END OF AWARD ==========-->

  <?= get_field('content_2', false, false); ?>
  <!--========== END OF US MARKET ==========-->

  <?= get_field('content_3', false, false); ?>
  <!--========== END OF  ==========-->

  <a href="<?= home_url(); ?>/pv" class="btn location-button">ハンファジャパンの太陽光発電</a>

</main>
<?php get_footer(); ?>