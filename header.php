<?php

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--Details page Accordion-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

  <!--style.css-->
  <?php if (is_front_page() || is_home() ) : ?>
    <!-- <link rel='stylesheet' href='<?= get_stylesheet_directory_uri() ?>/css/add.css'> -->
  <?php elseif (is_page('interview') || is_singular('voice')) : ?>
    <link rel='stylesheet' href='<?= get_stylesheet_directory_uri() ?>/css/voice.css'>
    <script src="<?= get_stylesheet_directory_uri() ?>/js/voice.js"></script>
		<?php if(is_singular()): ?>
			<script src="<?= get_stylesheet_directory_uri() ?>/js/single-voice.js"></script>
		<?php endif; ?>
  <?php elseif (is_page('voice')): ?>
    <!-- splide -->
    <link href="<?= get_stylesheet_directory_uri() ?>/css/splide.min.css" rel="stylesheet">
    <script src="<?= get_stylesheet_directory_uri() ?>/js/splide.min.js"></script>
    <!-- //splide -->
    <link rel='stylesheet' href='<?= get_stylesheet_directory_uri() ?>/css/voice-top.css'>
    <script src="<?= get_stylesheet_directory_uri() ?>/js/voice-top.js"></script>
  <?php elseif (is_page('pv')) : ?>
    <link rel='stylesheet' href='<?= get_stylesheet_directory_uri() ?>/css/pv.css'>
  <?php elseif (is_page('about')) : ?>
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/css/odometer-theme-default.css">
    <script src="<?= get_stylesheet_directory_uri() ?>/js//odometer.min.js"></script>
    <link rel='stylesheet' href='<?= get_stylesheet_directory_uri() ?>/css/about.css'>
    <script src="<?= get_stylesheet_directory_uri() ?>/js/about.js"></script>
  <?php elseif (is_page('green-energy')) : ?>
    <link rel='stylesheet' href='<?= get_stylesheet_directory_uri() ?>/css/green-energy.css'>
  <?php elseif (is_page('sustainability')) : ?>
    <link rel='stylesheet' href='<?= get_stylesheet_directory_uri() ?>/css/sustainability.css'>
  <?php elseif (is_page('location-details') || is_page('achievement-details') || is_page('award-details') || is_page('support-details') || is_page('technology-details') || is_page('transition-details') ) : ?>
    <link rel='stylesheet' href='<?= get_stylesheet_directory_uri() ?>/css/under-pv.css'>
  <?php elseif (is_page('ess-hems')) : ?>
    <link rel='stylesheet' href='<?= get_stylesheet_directory_uri() ?>/css/storage-system-hems.css'>
  <?php elseif (is_page('product-list')) : ?>
    <link rel='stylesheet' href='<?= get_stylesheet_directory_uri() ?>/css/product-list.css'>
  <?php elseif (is_singular('product')) : ?>
    <!-- splide -->
    <link href="<?= get_stylesheet_directory_uri() ?>/css/splide.min.css" rel="stylesheet">
    <script src="<?= get_stylesheet_directory_uri() ?>/js/splide.min.js"></script>
    <!-- //splide -->
    <link rel='stylesheet' href='<?= get_stylesheet_directory_uri() ?>/css/single-product.css'>
    <script src="<?= get_stylesheet_directory_uri() ?>/js/single-product.js"></script>
    <script src="<?= get_stylesheet_directory_uri() ?>/js/compare-single-product.js"></script>
  <?php elseif (is_page('re-rise') || is_page('q-cells') || is_page('hems') || is_page('storage-system') || is_page('power-conditioner') ||is_page('bracket') ||is_page('v2h')) : ?>
    <link rel='stylesheet' href='<?= get_stylesheet_directory_uri() ?>/css/single-product.css'>
    <link rel='stylesheet' href='<?=get_stylesheet_directory_uri()?>/css/product-cat.css'>
    <script src="<?=get_stylesheet_directory_uri()?>/js/product-cat.js"></script>
    <script src="<?= get_stylesheet_directory_uri(); ?>/js/sort-product-cat.js"></script>
    <script src="<?= get_stylesheet_directory_uri() ?>/js/compare-page-product.js"></script>
  <?php elseif (is_page('contact') || is_page('contact-quotation') || is_page('contact-catalog') || is_page('catalog') || is_page('confirm') || is_page('complete')) : ?>
    <link rel='stylesheet' href='<?=get_stylesheet_directory_uri()?>/css/contact.css'>
    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
    <script src="<?=get_stylesheet_directory_uri()?>/js/contact.js"></script>
  <?php elseif (is_page('faq')) : ?>
    <link rel='stylesheet' href='<?= get_stylesheet_directory_uri() ?>/css/faq.css'>
    <script src="<?= get_stylesheet_directory_uri() ?>/js/faq.js"></script>
  <?php elseif (is_page('after-follow')) : ?>
    <link rel='stylesheet' href='<?= get_stylesheet_directory_uri() ?>/css/after-follow.css'>
  <?php elseif (is_post_type_archive('news') || is_singular('news')) : ?>
    <link rel='stylesheet' href='<?= get_stylesheet_directory_uri() ?>/css/news.css'>
    <script src="<?= get_stylesheet_directory_uri() ?>/js/news.js"></script>
  <?php elseif (is_page('blog') || is_singular('blog-post')) : ?>
    <link rel='stylesheet' href='<?= get_stylesheet_directory_uri() ?>/css/side-menu.css'>
    <link rel='stylesheet' href='<?= get_stylesheet_directory_uri() ?>/css/blog.css'>
    <script src="<?=get_stylesheet_directory_uri()?>/js/blog.js"></script>
  <?php endif; ?>
  <!--style.css-->

  <!--font-icon-->
  <link href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" rel="stylesheet">

  <!--font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=Noto+Sans+JP:wght@100..900&family=Zen+Old+Mincho&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward_ios,open_in_new" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_forward_ios,open_in_new" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header id="masthead" class="site-header">
    <?php get_search_form(); ?>
		
		<div class="masthead-top">
			<ul class="mht-list">
				<li class="mht-item mht-item-common"><a href="">ハンファジャパン</a></li>
        <li class="mht-item mht-item-common"><a href="">グリーンアライアンス</a></li>
        <li class="mht-item site-search"><i class="fa-solid fa-magnifying-glass" style="color: #3366aa;"></i>サイト内検索</li>
      </ul>
    </div>
		
    <?php if (has_nav_menu('top')) : ?>
      <div class="nav-menu-top">
				<a href="<?php echo esc_url(home_url('/')); ?>" class="nmt-logo"><img src="/wp-content/uploads/2025/03/logo.png" alt="ハンファジャパン"></a>
        <div class="nmt-wrap">
          <?php get_template_part('template-parts/navigation/navigation', 'top'); ?>
        </div><!-- .wrap -->
      </div><!-- .navigation-top -->
    <?php endif; ?>

  </header><!-- #masthead -->

  <!--main img-->
  <?php if (is_front_page()) : ?>

    <div class="main-mv"><!--main_slide-->

      <div class="main-catchphrase"><!--catchphrase-->
        <div class="wrap_S">
          <h1>ハンファジャパンの太陽光発電で贅沢な毎日を。</h1>
        </div>
      </div><!--catchphrase-->

      <!--buttom-->
      <div class="btn-box _mv_link_bt">
        <a href="" class="btn">製品はこちら</a>
      </div>

      <?php echo do_shortcode('[smartslider3 slider="1"]'); ?>

      <div class="scroll_down" id="type07"><!--scroll animation-->
        <!-- <a href="#">
          <span class="text">Scroll</span>
          <div class="arrow"></div>
          <div class="arrow"></div>
          <div class="arrow"></div>
        </a> -->
      </div><!--scroll animation-->

      <a href="#topics" class="scroll_text">SCROLL</a>
      <a href="#topics">
        <div class="cp_arrows">
          <div class="cp_arrow"></div>
          <div class="cp_arrow"></div>
          <div class="cp_arrow"></div>
        </div>
      </a>

    </div><!--main_slide-->

  <?php elseif (is_page()) : ?>

    <!-- <div class="_main_mv">
      <span><?php the_field('fv_page_catch'); ?></span>
      <div class="slider-item" style="background-image: url(<?php the_field('fv_page_img'); ?>)"></div>
      <h2><?php the_title(); ?></h2>
    </div> -->

  <?php elseif (is_singular('product')) : ?>

    <!-- <div class="_product_logo">
      <img src="/wp-content/uploads/2025/04/logo.png" alt="qcels">
    </div> -->

    <!-- model-viewer -->
		<script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
		<!-- //model-viewer -->

  <?php else: ?>
  <?php endif; ?>

  <!--main img-->

  <div class="site-content-contain">
    <div id="content" class="site-content">