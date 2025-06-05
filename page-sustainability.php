<?php
/* Template Name: サステナビリティ */
require get_stylesheet_directory() . '/include/my_variables.php';
?>

<?php get_header(); ?>

<main class="sustainability">
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

  <?= get_field('section_1', false, false); ?>
  <!--========== END OF TOP  ==========-->

  <?= get_field('section_2', false, false); ?>
  <!--========== END OF OUR GOAL  ==========-->

  <?php if (get_field('section_3')): ?>
    <div class="section-back">
      <?= get_field('section_3', false, false); ?>
      <!--========== END OF GREEN ACTION  ==========-->
    </div><!-- section-back -->
  <?php endif; ?>

  <?= get_field('section_4', false, false); ?>
  <!--========== END OF BOTTOM CONTENT  ==========-->

</main>
<?php get_footer(); ?>