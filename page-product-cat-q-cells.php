<?php
/*
Template Name: Qcells製品一覧
*/ 
get_header();
$img_path = get_stylesheet_directory_uri() . "/images";
?>
<!-- 製品詳細 ターム(Qcells) 一覧ページ -->
<main class="taxonomy-product-cat q-cells">
  <section class="mv mv-q-cells">
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
      <div class="share">
        <div class="img"><img src="<?=$img_path?>/tax-prod-cat/share-no1.png" alt=""></div>
        <div class="img"><img src="<?=$img_path?>/tax-prod-cat/top-share.png" alt=""></div>
      </div>
      <div class="panel"><img src="<?=$img_path?>/tax-prod-cat/panel-qcells.png" alt=""></div>
    </div>
  </section>
  <!-- // TOP -->
  <section class="intro bg-q-cells">
    <div class="container">
      <div class="img"><img src="<?=$img_path?>/tax-prod-cat/logo-qcells.png" alt=""></div>
      <div class="ctt">
        <p class="name col-q-cells">Qcells</p>
        <p class="txt"><?= get_field('description'); ?></p>
      </div>
    </div>
  </section>
  <!-- // INTRO -->
  <section class="lineup">
    <div class="container">
      <h2 class="ttl">ラインナップ</h2>
      <div class="choose">
        <button class="all">ALL</button>
        <div class="series">
          <select name="" class="select">
            <option value="">シリーズ</option>
            <option value="Q.TRONシリーズ">Q.TRONシリーズ</option>
          </select>
        </div>
        <div class="size">
          <select name="" class="select">
            <option value="">サイズ</option>
            <option value="一般サイズ">一般サイズ</option>
            <option value="小型サイズ">小型サイズ</option>
          </select>
        </div>
      </div>
      <div class="prod-list">
        <a class="prod-item" href="">
          <div class="img"><img src="<?=$img_path?>/tax-prod-cat/m-g24-440.png" alt=""></div>
          <div class="ttl"><h3 class="name">Q.TRON M-G2.4+ 440</h3></div>
        </a>
        <a class="prod-item" href="">
          <div class="img"><img src="<?=$img_path?>/tax-prod-cat/s-g24.png" alt=""></div>
          <div class="ttl"><h3 class="name">Q.TRON S-G2.4+</h3></div>
        </a>
      </div>
    </div>
  </section>
  <!-- // LINEUP -->
  <div>
    <?php
    $term_object = get_queried_object();
    $term_slug = $term_object->slug;
    $args = array(
      'post_type' => 'product',
      'posts_per_page' => -1,
      'taxonomy' => 'product-cat',
      'term' => 'q-cells',
    );
    $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()): ?>
      <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

        <!-- 繰り返し処理する内容 -->
        <article>
          <a href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
          </a>
        </article>
        <!-- 繰り返し処理する内容 -->

      <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
  </div>
</main>
<!-- // TAXONOMY_PRODUCTS_CAT Q_CELLS -->
<?=get_footer();?>