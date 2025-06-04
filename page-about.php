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
        <?php if (the_field('fv_page_catch')) '<span>' . the_field('fv_page_catch') . '</span>'; ?>
        <h2><?php the_title(); ?></h2>
      </div>
    </div>
  </section>
  <!--========== END OF MV  ==========-->

  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>

  <div class="section-back">
    <section class="hanwha-japan">
      <div class="section-title-area">
        <div class="wrap_s">
          <h2 class="section-title">ハンファジャパン</h2>
        </div>
      </div>
      <div class="wrap_s">
        <div class="title-en">Hanwha Japan</div>
        <ul class="hanwha-japan-list">
          <li>
            <div class="title">日本に根ざしてから</div>
            <div class="num">41</div>
            <div class="num-text">周年</div>
          </li>
          <li>
            <div class="title">主要事業</div>
            <div class="num">4</div>
            <div class="num-text">部門</div>
          </li>
          <li>
            <div class="title">子会社</div>
            <div class="num"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Q.ENEST_Logo_Navy.png" alt=""></div>
            <div class="num-text">Q.ENESTホールディングス<br>株式会社</div>
          </li>
          <li>
            <div class="title">太陽光発電<br>市場参入</div>
            <div class="num">14</div>
            <div class="num-text">年目</div>
          </li>
        </ul>
        <p class="hanwha-japan-text">
          ハンファジャパンは<br>
          韓国の最大手企業の1つ“ハンファグループ”の<br>
          日本法人として1984年に設立されました。
        </p>
        <div class="hanwha-japan-detail">
          <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Hanwha_JP_Building_02.jpg" alt="">
          <div class="text-area">
            <p>
              40年間以上日本に根差して、<br>
              グリーンエネルギー事業を中心にケミカル、セキュリティ、プロダクトソリューションに携わってまいりました。
            </p>
            <p>
              日本市場で蓄積された豊かな市場理解と経験を持って、<br>
              日本のエネルギー供給をはじめ生活と直結する多様な問題を解決できる製品やサービスをご提案しております。
            </p>
          </div>
        </div>
      </div>
    </section>
    <!--========== END OF HANWHA JAPAN  ==========-->
  </div><!-- section-back -->

  <div class="button-area">
    <p>ハンファジャパンについてもっと知りたい方</p>
    <a href="#" class="btn">詳しくはこちら</a>
  </div>

  <div class="section-back">
    <section class="hanwha">
      <div class="section-title-area">
        <div class="wrap_s">
          <h2 class="section-title">ハンファ</h2>
        </div>
      </div>
      <div class="wrap_s">
        <div class="title-en">Hanwha</div>
        <ul class="hanwha-list">
          <li>
            <div class="title">設立</div>
            <div class="icon"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/num_icon_01.png" alt=""></div>
            <div class="num-text"><span class="num">1952</span></div>
            <p></p>
          </li>
          <li>
            <div class="title">売上高</div>
            <div class="icon"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/num_icon_02.png" alt=""></div>
            <div class="num-text">約<span class="num">9</span>兆円</div>
            <p>2023年度</p>
          </li>
          <li>
            <div class="title">系列社数</div>
            <div class="icon"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/num_icon_03.png" alt=""></div>
            <div class="num-text"><span class="num">103</span>社</div>
            <p>2023年末現在（韓国内）</p>
          </li>
          <li>
            <div class="title">グローバルネットワーク</div>
            <div class="icon"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/num_icon_04.png" alt=""></div>
            <div class="num-text"><span class="num">776</span>箇所</div>
            <p>2023年末現在</p>
          </li>
          <li>
            <div class="title">総資産基準</div>
            <div class="icon"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/num_icon_05.png" alt=""></div>
            <div class="num-text"><span class="num">7</span>位</div>
            <p>2023年末基準（韓国内）</p>
          </li>
          <li>
            <div class="title">“フォーチュン・グローバル500”</div>
            <div class="icon"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/num_icon_07.png" alt=""></div>
            <div class="num-text"><span class="num">372</span>位</div>
            <p>2024年</p>
          </li>
        </ul>
        <div class="hanwha-japan-detail">
          <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Hanwha_Building_01.jpg" alt="">
          <div class="text-area">
            <p>
              1952年創立のハンファは、航空宇宙、エネルギー・素材、 金融、サービス・レジャーの4つの主要分野において韓国内系列会社103社と全世界に776ヶ所のネットワークを持っているグローバル大企業です。
            </p>
            <p>
              Fortune Global 500と2024年の米TIME誌「世界で最も影響力のある100社」にも選定。<br>
              より豊かで安全な生活と持続可能な未来を実現するため、努力と挑戦を続けています。
            </p>
          </div>
        </div>
      </div>
    </section>
    <!--========== END OF HANWHA JAPAN  ==========-->
  </div><!-- section-back -->

  <div class="button-area">
    <p>ハンファについてもっと知りたい方</p>
    <a href="#" class="btn">詳しくはこちら</a>
  </div>

  <section class="parts-bottom-content">
    <div class="wrap_s">
      <ul>
        <li>
          <a href="#">
            <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Sample_HWJ_PV_banner.jpg" alt="">
            <div class="title">ハンファジャパンの太陽光発電について</div>
            <p>ハンファジャパンの太陽光発電事業についてご説明します。</p>
          </a>
        </li>
        <li>
          <a href="#">
            <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Sustainability_banner.jpg" alt="">
            <div class="title">太陽光発電とグリーンエネルギー</div>
            <p>太陽光発電の導入とグリーンエネルギーのメリットをご確認いただけます。</p>
          </a>
        </li>
        <li>
          <a href="#">
            <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Sustainability_banner.jpg" alt="">
            <div class="title">サステナビリティ</div>
            <p>ハンファジャパンが目指す未来をご紹介します。</p>
          </a>
        </li>
      </ul>
    </div>
  </section>

</main>
<?php get_footer(); ?>