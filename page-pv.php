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
    <h3>数字で見るハンファジャパンの実績</h3>
    <div class="_contents001">
      <div class="_box1">
        <ul class="wrap_s">
          <li>
            <img src="/wp-content/uploads/2025/02/1200x1200.png" alt="新築住宅シェア">
            <div class="textarea">
              <div class="title">新築住宅シェア</div>
              <div class="year">(2003・2004年)</div>
              <div class="caution">※出展：月間スマートハウスNo.108(2024年2月号)<br>月間スマートハウスNo.120（2025年2月号）</div>
            </div>
          </li>
          <li>
            <img src="/wp-content/uploads/2025/02/1200x1200.png" alt="国内住宅用メーカーシェア">
            <div class="textarea">
              <div class="title">国内住宅用<br>メーカーシェア</div>
              <div class="year">(2004年)</div>
              <div class="caution">※出展：月間スマートハウスNo.108(2024年2月号)</div>
            </div>
          </li>
          <li>
            <img src="/wp-content/uploads/2025/02/1200x1200.png" alt="住宅用販売累計棟数(2004年)">
            <div class="textarea">
              <div class="title">住宅用販売<br>累計棟数</div>
              <div class="year">(2004年)</div>
            </div>
          </li>
          <li>
            <img src="/wp-content/uploads/2025/02/1200x1200.png" alt="モジュール累計出荷量(2004年)">
            <div class="textarea">
              <div class="title">モジュール<br>累計出荷量</div>
              <div class="year">(2004年)</div>
            </div>
          </li>
        </ul>
        <div class="wrap">
          <h3>日本で40年間以上培った経験と実績で、<br>日本に最適化した太陽光発電システムをご提供します。</h3>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="_contents002">
  <h3>太陽光で生活の向上を実現できるように</h3>

  <div class="_contents002_inner">
    <div class="wrap">
      <div class="wrap_s">
        <div class="_box1">
          <img src="/wp-content/uploads/2025/02/1200x1200.png" alt="">
        </div>
      </div>
      <div class="_box2">
        <p class="_box2-title">私たちハンファジャパンは</p>
        <p class="_box2-text">太陽光を通じて<br><span class="orange">お客様の生活の向上</span>を<br>実現できるよう
          <br>サポートいたします。
        </p>
      </div>
    </div>
  </div><!--_contents002_inner-->

</div><!--_contents002-->


<div class="section-back">

  <div class="wrap">

    <div class="_contents003"><!--_contents003-->
      <section class="_main_sub_title _product_contant"><!--ハンファジャパン　太陽光事業の沿革-->

        <div class="section-title-area">
          <div class="wrap_s">
            <h2 class="section-title"><span class="orange">ハンファジャパン</span><br>太陽光事業の沿革品</span></h2>
          </div>
        </div>

        <div class="_contents003_inner">
          <div class="_box1">
            <div class="wrap_s">
              <img src="">
            </div>
          </div>

          <div class="_box2">
            <p class="wrap_s">
              1984年日本に根差して以来、<br>
              ハンファジャパンの太陽光発電は今まで絶えず<span class="orange">進化、成長</span>してきました。
            </p>
          </div>
        </div>

      </section><!--ハンファジャパン　太陽光事業の沿革-->
    </div><!--_contents003-->


    <div class="_contents004"><!--_contents004-->
      <section class="_main_sub_title _product_contant"><!--日本各地に広がる拠点-->
        <div class="section-title-area">
          <div class="wrap_s">
            <h2 class="section-title"><span class="orange">日本各地に広がる</span><br>拠点</span></h2>
          </div>
        </div>

        <div class="_contents004_inner wrap">
          <div class="wrap_s">
            <div class="_box1">
              <img src="">
            </div>
            <div class="_box2">
              <p>北海道から沖縄まで<br><span class="orange">全国どこでも</span>即時対応。</p>
              <a class="btn" href="#">詳しくはこちら</a>
            </div>
          </div>
        </div>
      </section><!--日本各地に広がる拠点-->
    </div><!--_contents004-->


    <div class="_contents005"><!--_contents005-->
      <section class="_main_sub_title _product_contant"><!--選ばれる理由-->
        <div class="section-title-area">
          <div class="wrap_s">
            <h2 class="section-title"><span class="orange">選ばれる</span><br>4つの理由</span></h2>
          </div>
        </div>

        <div class="_contents005_inner">

          <div class="wrap">
            <div class="wrap_s">
              <ul class="reason-list">
                <li class="reason-item">
                  <a class="reason-link" href="#">
                    <div class="reason-text"><span class="num">1</span>圧倒的な実績</div>
                    <div class="reason-detail">詳しく見る</div>
                  </a>
                </li>
                <li class="reason-item">
                  <a class="reason-link" href="#">
                    <div class="reason-text"><span class="num">2</span>毎年続く成長</div>
                    <div class="reason-detail">詳しく見る</div>
                  </a>
                </li>
                <li class="reason-item">
                  <a class="reason-link" href="#">
                    <div class="reason-text"><span class="num">3</span>最先端技術、厳格な品質管理</div>
                    <div class="reason-detail">詳しく見る</div>
                  </a>
                </li>
                <li class="reason-item">
                  <a class="reason-link" href="#">
                    <div class="reason-text"><span class="num">4</span>最後まで手厚くサポート</div>
                    <div class="reason-detail">詳しく見る</div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="reason-img">
              <img src="" alt="">
            </div>
          </div>

          <div class="banner">
            <a href="#">
              <img src="<?= $img_path ?>/pv/banner.png" alt="">
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
      <h2 class="section-title">ご購入されたお客様の声</h2>
      <p>お客様の嬉しい声をご紹介します。</p>
    </div>

    <div class="_contents006_inner">
      <div class="wrap">
        <div class="_box1">
          <ul class="voice-list">
            <li class="voice-item">
              <img src="/wp-content/uploads/2025/04/voice.png" alt="">
              <p class="voice-text">「電気代が約半分の金額に<br>　なっていた」</p>
            </li>
            <li class="voice-item">
              <img src="/wp-content/uploads/2025/04/voice.png" alt="">
              <p class="voice-text">「発電量が期待以上。<br>　家族みんなで応援しています」</p>
            </li>
            <li class="voice-item">
              <img src="/wp-content/uploads/2025/04/voice.png" alt="">
              <p class="voice-text">「非常時の備えとしての安心感は、<br>　以前までとまったく違います」</p>
            </li>
          </ul>
          <div class="next-more1"><a href="/category/topics/">もっと見る</a></div>
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
              <li>
                <img src="<?= $img_path ?>/pv/pv.jpg" alt="">
                <div class="title">ハンファジャパン・ハンファについて</div>
                <p>ハンファジャパンとグローバル企業のハンファについてご説明します。</p>
              </li>
              <li>
                <img src="<?= $img_path ?>/pv/pv.jpg" alt="">
                <div class="title">太陽光発電とグリーンエネルギー</div>
                <p>太陽光発電の導入とグリーンエネルギーのメリットをご確認いただけます。</p>
              </li>
              <li>
                <img src="<?= $img_path ?>/pv/pv.jpg" alt="">
                <div class="title">サステナビリティ</div>
                <p>ハンファジャパンがめざす</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </section>
</div><!-- _contents007 -->



<?php get_footer(); ?>