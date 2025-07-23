<?php
/* Template Name: ハンファジャパンについて */
require get_stylesheet_directory() . '/include/my_variables.php';
?>

<?php get_header(); ?>

<main class="about">
  <section class="mv-for-page">
    <div class="mv-img" style="background-image: url(<?php the_field('fv_page_img'); ?>);">
      <div class="mv-sub-title-area">
        <div class="border"></div>
        <div class="mv-sub-title"><?php the_field('page_sub_title') ?></div>
      </div>
      <div class="mv-text wrap_s">
        <?php $catch = get_field('fv_page_catch'); ?>
        <?php if ($catch) echo '<span>' . $catch . '</span>'; ?>
        <h2><?php the_title(); ?></h2>
      </div>
    </div>
  </section>
  <!--========== END OF MV  ==========-->

  <div class="wrap_s">
    <?php custom_breadcrumb(); ?>
  </div>

  <?php if (get_field('section_1')): ?>
    <div class="section-back">
      <?= get_field('section_1', false, false); ?>
      <!--========== END OF HANWHA JAPAN  ==========-->
    </div><!-- section-back -->
  <?php endif; ?>

  <div class="button-area">
    <?php if (get_field('url_1')): ?>
      <p>ハンファジャパンについてもっと知りたい方</p>
      <a href="<?= get_field('url_1'); ?>" class="btn" target="_blank" rel="noopener noreferrer">詳しくはこちら</a>
    <?php endif; ?>
  </div>

  <?php if (get_field('section_2')): ?>
    <div class="section-back">
      <?= get_field('section_2', false, false); ?>
      <!--========== END OF HANWHA  ==========-->
    </div><!-- section-back -->
  <?php endif; ?>

  <div class="button-area">
    <?php if (get_field('url_2')): ?>
      <p>ハンファについてもっと知りたい方</p>
      <a href="<?= get_field('url_2'); ?>" class="btn" target="_blank" rel="noopener noreferrer">詳しくはこちら</a>
    <?php endif; ?>
  </div>


  <?= get_field('section_3', false, false); ?>
  <!--========== END OF BOTTOM CONTENT  ==========-->

</main>
<?php get_footer(); ?>