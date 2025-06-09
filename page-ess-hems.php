<?php
/* Template Name: 蓄電システム・HEMSトップページ */
require get_stylesheet_directory() . '/include/my_variables.php';
?>

<?php get_header(); ?>

<main class="storage-system-hems">
  <section class="mv-for-page">
    <div class="mv-img" style="background-image: url(<?php the_field('fv_page_img'); ?>);">
      <div class="mv-sub-title-area">
        <div class="border"></div>
        <div class="mv-sub-title"><?php the_field('page_sub_title') ?></div>
      </div>
      <div class="mv-text wrap_s">
        <?php if (the_field('fv_page_catch')) '<span>' . the_field('fv_page_catch') . '</span>'; ?>
        <h2><?php the_title(); ?></h2>
      </div>
    </div>
  </section>
  <!--========== END OF MV  ==========-->

  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>

  <?= get_field('content_1', false, false); ?>
  <!--========== END OF STORAGE SYSTEM  ==========-->

  <?php if (get_field('content_2')): ?>
    <div class="section-back">
      <?= get_field('content_2', false, false); ?>
      <!--========== END OF READY ==========-->
    </div><!-- section-back -->
  <?php endif; ?>

  <?php if (get_field('content_3')): ?>
    <div class="section-back">
      <?= get_field('content_3', false, false); ?>
      <!--========== END OF HYBRID  ==========-->
    </div><!-- section-back -->
  <?php endif; ?>

  <?php if (get_field('content_4')): ?>
    <div class="section-back">
      <?= get_field('content_4', false, false); ?>
      <!--========== END OF SINGLE FUNCTION ==========-->
    </div><!-- section-back -->
  <?php endif; ?>

  <?= get_field('content_5', false, false); ?>
  <!--========== END OF SYSTEM TYPE ==========-->

  <?= get_field('content_6', false, false); ?>
  <!--========== END OF HEMS ==========-->

  <?= get_field('content_7', false, false); ?>
  <!--========== END OF BOTTOM CONTENT ==========-->

</main>
<?php get_footer(); ?>