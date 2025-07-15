<?php
/* Template Name: コンセプトページ */
require get_stylesheet_directory() . '/include/my_variables.php';
?>

<?php get_header(); ?>

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

<div class="wrap">
  <?php custom_breadcrumb(); ?>
</div>

<section class="popular_products_now"><!--数字で見るハンファジャパンの実績-->
  <div class="wrap">
    <h3><?= get_field('popular_products_title') ?></h3>
    <div class="_contents001">
      <div class="_box1">
        <ul class="wrap_s">
          <?php if (get_field('popular_products_img1')): ?>
            <li>
              <img src="<?= get_field('popular_products_img1')['url']; ?>" alt="<?= get_field('popular_products_img1')['alt']; ?>">
              <div class="textarea">
                <div class="title"><?= get_field('popular_products_title1'); ?></div>
                <div class="year"><?= get_field('popular_products_year1'); ?></div>
                <div class="caution"><?= get_field('popular_products_caution1'); ?></div>
              </div>
            </li>
          <?php endif; ?>
          <?php if (get_field('popular_products_img2')): ?>
            <li>
              <img src="<?= get_field('popular_products_img2')['url']; ?>" alt="<?= get_field('popular_products_img2')['alt']; ?>">
              <div class="textarea">
                <div class="title"><?= get_field('popular_products_title2'); ?></div>
                <div class="year"><?= get_field('popular_products_year2'); ?></div>
                <div class="caution"><?= get_field('popular_products_caution2'); ?></div>
              </div>
            </li>
          <?php endif; ?>
          <?php if (get_field('popular_products_img3')): ?>
            <li>
              <img src="<?= get_field('popular_products_img3')['url']; ?>" alt="<?= get_field('popular_products_img3')['alt']; ?>">
              <div class="textarea">
                <div class="title"><?= get_field('popular_products_title3'); ?></div>
                <div class="year"><?= get_field('popular_products_year3'); ?></div>
                <div class="caution"><?= get_field('popular_products_caution3'); ?></div>
              </div>
            </li>
          <?php endif; ?>
          <?php if (get_field('popular_products_img4')): ?>
            <li>
              <img src="<?= get_field('popular_products_img4')['url']; ?>" alt="<?= get_field('popular_products_img4')['alt']; ?>">
              <div class="textarea">
                <div class="title"><?= get_field('popular_products_title4'); ?></div>
                <div class="year"><?= get_field('popular_products_year4'); ?></div>
                <div class="caution"><?= get_field('popular_products_caution4'); ?></div>
              </div>
            </li>
          <?php endif; ?>
        </ul>
        <div class="wrap">
          <h3><?= get_field('popular_products_bottom_text'); ?></h3>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="_contents002" style="background-image: url('<?= get_field('contents002_back_img')['url']; ?>');">
  <div class="wrap">
    <h3><?= get_field('contents002_title_main'); ?></h3>
  
    <div class="_contents002_inner">
      <div class="wrap">
        <div class="wrap_s">
          <div class="_box1">
            <img src="<?= get_field('contents002_img')['url']; ?>" alt="<?= get_field('contents002_img')['alt']; ?>">
          </div>
        </div>
        <div class="_box2">
          <p class="_box2-title"><?= get_field('contents002_title'); ?></p>
          <?= get_field('contents002_contents'); ?>
        </div>
      </div>
    </div><!--_contents002_inner-->
  </div>

</div><!--_contents002-->


<div class="section-back">

  <div class="wrap">

    <div class="_contents003"><!--_contents003-->
      <section class="_main_sub_title _product_contant"><!--ハンファジャパン　太陽光事業の沿革-->

        <div class="section-title-area">
          <div class="wrap_s">
            <?= get_field('contents003_title'); ?>
          </div>
        </div>

        <div class="_contents003_inner">
          <div class="_box1">
            <div class="wrap_s">
              <img src="<?= get_field('contents003_img')['url']; ?>">
            </div>
          </div>

          <div class="_box2">
            <?= get_field('contents003_text'); ?>
          </div>
        </div>

      </section><!--ハンファジャパン　太陽光事業の沿革-->
    </div><!--_contents003-->


    <div class="_contents004"><!--_contents004-->
      <section class="_main_sub_title _product_contant"><!--日本各地に広がる拠点-->
        <div class="section-title-area">
          <div class="wrap_s">
            <?= get_field('contents004_title') ?>
          </div>
        </div>

        <div class="_contents004_inner wrap">
          <div class="wrap_s">
            <div class="_box1">
              <img src="<?= get_field('contents004_img')['url']; ?>">
            </div>
            <div class="_box2">
              <?= get_field('contents004_text'); ?>
              <a class="btn" href="<?= get_field('contents004_url') ?>">詳しくはこちら</a>
            </div>
          </div>
        </div>
      </section><!--日本各地に広がる拠点-->
    </div><!--_contents004-->


    <div class="_contents005"><!--_contents005-->
      <section class="_main_sub_title _product_contant"><!--選ばれる理由-->
        <div class="section-title-area">
          <div class="wrap_s">
            <?= get_field('contents005_title'); ?>
          </div>
        </div>

        <div class="_contents005_inner">

          <div class="wrap">
            <div class="wrap_s">
              <ul class="reason-list">
                <?php if (get_field('contents005_text1')): ?>
                  <li class="reason-item"><?= get_field('contents005_text1'); ?></li>
                <?php endif; ?>
                <?php if (get_field('contents005_text2')): ?>
                  <li class="reason-item"><?= get_field('contents005_text2'); ?></li>
                <?php endif; ?>
                <?php if (get_field('contents005_text3')): ?>
                  <li class="reason-item"><?= get_field('contents005_text3'); ?></li>
                <?php endif; ?>
                <?php if (get_field('contents005_text4')): ?>
                  <li class="reason-item"><?= get_field('contents005_text4'); ?></li>
                <?php endif; ?>
              </ul>
            </div>
            <div class="reason-img">
              <img src="<?= get_field('contents005_img')['url']; ?>" alt="<?= get_field('contents005_img')['alt']; ?>">
            </div>
          </div>

          <div class="banner">
            <a href="<?= get_field('contents005_url') ?>">
              <img src="<?= get_field('contents005_banner_img')['url'] ?>" alt="<?= get_field('contents005_banner_img')['alt'] ?>">
              <div class="banner-text-back"><span class="banner-text">受賞・実績</span></div>
            </a>
          </div>
        </div>
      </section><!--選ばれる理由-->
    </div><!--_contents005-->

  </div>

</div><!-- section-back -->


<div class="_contents006">
  <section class="_main_sub_title _product_contant"><!--導入されたお客様の声-->

    <div class="wrap_s">
      <?= get_field('contents006_title'); ?>
    </div>

    <div class="_contents006_inner">
      <div class="wrap">
        <div class="_box1">
          <ul class="voice-list">
            <?php if (get_field('contents006_img1')['url']): ?>
              <li class="voice-item">
                <img src="<?= get_field('contents006_img1')['url']; ?>" alt="<?= get_field('contents006_img1')['alt']; ?>">
                <?= get_field('contents006_text1') ?>
              </li>
            <?php endif; ?>
            <?php if (get_field('contents006_img2')['url']): ?>
              <li class="voice-item">
                <img src="<?= get_field('contents006_img2')['url']; ?>" alt="<?= get_field('contents006_img2')['alt']; ?>">
                <?= get_field('contents006_text2') ?>
              </li>
            <?php endif; ?>
            <?php if (get_field('contents006_img3')['url']): ?>
              <li class="voice-item">
                <img src="<?= get_field('contents006_img3')['url']; ?>" alt="<?= get_field('contents006_img3')['alt']; ?>">
                <?= get_field('contents006_text3') ?>
              </li>
            <?php endif; ?>
          </ul>
          <div class="next-more1"><a href="<?= get_field('contents006_url') ?>">もっと見る</a></div>
        </div>
      </div>
    </div>

  </section><!--導入されたお客様の声-->
</div><!-- _contents006 -->


<div class="_contents007">
  <section class="_main_sub_title _product_contant">

    <div class="_contents007_inner">
      <div class="wrap">
        <div class="wrap_s">
          <div class="_box1">
            <ul>
              <?php if (get_field('contents007_img1')['url']): ?>
                <li>
                  <img src="<?= get_field('contents007_img1')['url'] ?>" alt="<?= get_field('contents007_img1')['alt'] ?>">
                  <div class="title"><?= get_field('contents007_title1') ?></div>
                  <p><?= get_field('contents007_text1') ?></p>
                </li>
              <?php endif; ?>
              <?php if (get_field('contents007_img2')['url']): ?>
                <li>
                  <img src="<?= get_field('contents007_img2')['url'] ?>" alt="<?= get_field('contents007_img2')['alt'] ?>">
                  <div class="title"><?= get_field('contents007_title2') ?></div>
                  <p><?= get_field('contents007_text2') ?></p>
                </li>
              <?php endif; ?>
              <?php if (get_field('contents007_img3')['url']): ?>
                <li>
                  <img src="<?= get_field('contents007_img3')['url'] ?>" alt="<?= get_field('contents007_img3')['alt'] ?>">
                  <div class="title"><?= get_field('contents007_title3') ?></div>
                  <p><?= get_field('contents007_text3') ?></p>
                </li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </section>
</div><!-- _contents007 -->



<?php get_footer(); ?>