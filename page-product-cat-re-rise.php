<?php
/*
Template Name: Re.RISE®製品一覧
*/ 
get_header();
$img_path = get_stylesheet_directory_uri() . "/images";
?>
<!-- 製品詳細 ターム(Re.RISE) 一覧ページ -->
<main class="taxonomy-product-cat re-rise">
  <section class="mv mv-re-rise">
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
      <div class="panel"><img src="<?=$img_path?>/tax-prod-cat/panel-re-rise.png" alt=""></div>
    </div>
  </section>
  <!-- // TOP -->
  <section class="intro bg-re-rise">
    <div class="container">
      <div class="img"><img src="<?=$img_path?>/tax-prod-cat/logo-re-rise.png" alt=""></div>
      <div class="ctt">
        <p class="name col-re-rise">Re.RISE<sup>®</sup></p>
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
            <option value="Re.RISE-G4シリーズ">Re.RISE-G4シリーズ</option>
            <option value="Re.Rise-G3シリーズ">Re.Rise-G3シリーズ</option>
            <option value="Re.RISE AC">Re.RISE AC</option>
            <option value="Re.RISE S 230">Re.RISE S 230</option>
            <option value="Re.RISE-G2 435">Re.RISE-G2 435</option>
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
          <div class="img"><img src="<?=$img_path?>/tax-prod-cat/ms-g4-bag-270.png" alt=""></div>
          <div class="ttl"><span class="new">NEW</span><h3 class="name">Re.RISE MS-G4 BAG 270</h3></div>
        </a>
        <a class="prod-item" href="">
          <div class="img"><img src="<?=$img_path?>/tax-prod-cat/g4-440.png" alt=""></div>
          <div class="ttl"><span class="new">NEW</span><h3 class="name">Re.RISE-G4 440</h3></div>
        </a>
        <a class="prod-item" href="">
          <div class="img"><img src="<?=$img_path?>/tax-prod-cat/ms-g4-290.png" alt=""></div>
          <div class="ttl"><span class="new">NEW</span><h3 class="name">Re.RISE MS-G4 290</h3></div>
        </a>
        <a class="prod-item" href="">
          <div class="img"><img src="<?=$img_path?>/tax-prod-cat/ac.png" alt=""></div>
          <div class="ttl"><h3 class="name">Re.RISE AC</h3></div>
        </a>
        <a class="prod-item" href="">
          <div class="img"><img src="<?=$img_path?>/tax-prod-cat/g3-440.png" alt=""></div>
          <div class="ttl"><h3 class="name">Re.RISE-G3 440</h3></div>
        </a>
        <a class="prod-item" href="">
          <div class="img"><img src="<?=$img_path?>/tax-prod-cat/ms-g3-290.png" alt=""></div>
          <div class="ttl"><h3 class="name">Re.RISE MS-G3 290</h3></div>
        </a>
        <a class="prod-item" href="">
          <div class="img"><img src="<?=$img_path?>/tax-prod-cat/g2-435.png" alt=""></div>
          <div class="ttl"><h3 class="name">Re.RISE-G2 435</h3></div>
        </a>
        <a class="prod-item" href="">
          <div class="img"><img src="<?=$img_path?>/tax-prod-cat/s-230.png" alt=""></div>
          <div class="ttl"><h3 class="name">Re.RISE S 230</h3></div>
        </a>
      </div>
    </div>
  </section>
  <!-- // LINEUP -->
  <div>
    <?php
    $args = array(
      'post_type' => 'product',
      'posts_per_page' => -1,
      'taxonomy' => 'product-cat',
      'term' => 're-rise',
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
<!-- // TAXONOMY_PRODUCTS_CAT RE_RISE -->
<?=get_footer();?>