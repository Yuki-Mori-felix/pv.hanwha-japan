<?php
/* Template Name: 技術詳細 */
require get_stylesheet_directory() . '/include/my_variables.php';
?>
<?php get_header(); ?>

<main class="under-pv">
  <section class="mv">
    <div class="back-img" style="background-image: url(<?= get_field('fv_page_img'); ?>);">
      <h1 class="title">最先端技術と徹底的な品質管理</h1>
    </div>
  </section>
  <!--========== END OF MV ==========-->

  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>

  <section class="technology">
    <div class="wrap">
      <h2>世界最高レベルの技術と絶えざる研究、<br>厳格な品質管理へのこだわり</h2>
    </div>
    <ul class="under-pv-list">
      <li>
        <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Quality_img1.jpg" alt="">
        <div class="text-area">
          <div class="title">独自のハイクラス技術及び<br>最先端技術採用</div>
          <p>
            Qセルズ独自のQ.ANTUMテクノロジーをはじめ、<br>
            Re.RISE®のバックコンタクト技術など<br>
            太陽光発電のグローバルリーダーとして<br>
            いつも一歩先を行く最先端技術を採用しております。
          </p>
        </div>
      </li>
      <li>
        <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Quality_img2.jpg" alt="">
        <div class="text-area">
          <div class="title">より高性能を実現するため<br>続く技術研究</div>
          <p>
            Qセルズのテクノロジー＆イノベーションHQ<br>
            （ドイツのタールハイム所在）などで<br>
            さらなる高出力・高効率を実現できる技術を<br>
            開発・採用するために常に尽力しております。
          </p>
        </div>
      </li>
      <li>
        <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Quality_img3.jpg" alt="">
        <div class="text-area">
          <div class="title">品質への強いこだわり</div>
          <p>
            業界初認定「品質検査認証」のQCPVで<br>
            過酷な環境ストレス、厳格な生産モニタリング、部材試験とサプライヤー管理を徹底に実施しております。<br>
            また、米国「RETC」　などの試験項目を全部クリアするなど、IEC規格　の最大6倍に及ぶ厳しい検査基準を通じて性能と信頼性が認証されています。
          </p>
          <div class="annotation">
            ※1：RETC（Renewable Energy Test Center, LLC）：太陽光電池モジュール、および蓄電池の安全性･長期信頼性評価のための試験を行う機関<br>
            ※2：IEC規格：国際電気標準会議が定めた電気及び電子技術分野の国際標準規格
          </div>
        </div>
      </li>
    </ul>
  </section>
  <!--========== END OF TECHNOLOGY ==========-->

  <a href="<?= home_url(); ?>/pv" class="btn location-button">ハンファジャパンの太陽光発電について</a>

</main>
<?php get_footer(); ?>