<?php
/* Template Name: 推移詳細 */
require get_stylesheet_directory() . '/include/my_variables.php';
?>
<?php get_header(); ?>

<main class="under-pv">
  <section class="mv">
    <div class="back-img" style="background-image: url(<?= get_field('fv_page_img'); ?>);">
      <h1 class="title">成長し続ける<br>ハンファジャパンの太陽光発電</h1>
    </div>
  </section>
  <!--========== END OF MV ==========-->

  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>

  <section class="transition">
    <div class="wrap">
      <h2>絶え間ない努力と成長を重ねてきた<br>ハンファジャパンの太陽光発電</h2>
    </div>
    <ul class="under-pv-list">
      <li>
        <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Hanwha_pv_img1.jpg" alt="">
        <div class="text-area">
          <div class="title">2011年太陽光発電市場に<br>参入からこれまでの足跡</div>
          <p>
            1984年日本法人の創立以来、<br>
            グリーンエネルギーに関するニーズに深く共感し、<br>
            2011年から太陽光発電市場に参入しました。<br>
            それから今まで多数のお客様に<br>
            優れた技術と厳格な品質管理、徹底なサポート体制を<br>
            認められ、成長を続けてきました。
          </p>
        </div>
      </li>
      <li>
        <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Hanwha_pv_img2.jpg" alt="">
        <div class="text-area">
          <div class="title">2015年全国5拠点体制確立</div>
          <p>
            より多くのお客様に寄り添うため、<br>
            東京本社のみならず、仙台、名古屋、大阪、福岡に<br>
            全国の重要地域に拠点を設立しました。<br>
            2025年4月には札幌営業所を開設、北海道から沖縄まで日本全国に再生可能エネルギーの普及促進を目指しております。
          </p>
        </div>
      </li>
      <li>
        <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Hanwha_pv_img3.jpg" alt="">
        <div class="text-area">
          <div class="title">2018年国内出荷量No.1初達成</div>
          <p>
            太陽光発電市場に参入してからたった7年目で、<br>
            国内出荷量No.1という驚異的な記録を達成しました。<br>
            なお、現在まで国内太陽光発電市場で<br>
            常にトップレベルのマーケットシェアを占めてきました。
          </p>
        </div>
      </li>
      <li>
        <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Hanwha_pv_img4.jpg" alt="">
        <div class="text-area">
          <div class="title">2024年日本市場オリジナルブランド<br>Re.RISE®展開</div>
          <p>
            これまで蓄積した日本特有の環境と住宅に関する知識と<br>
            豊富な経験を生かして2024年、日本市場オリジナル<br>
            ブランドRe.RISE®をローンチングしました。<br>
            日本の住宅に最適化したRe.RISE®と<br>
            様々なラインナップで、<br>
            これからも国内の太陽光発電と<br>
            グリーンエネルギーの普及に貢献していきます。
          </p>
        </div>
      </li>
    </ul>
  </section>
  <!--========== END OF TRANSITION ==========-->

  <a href="<?= home_url(); ?>/pv" class="btn location-button">ハンファジャパンの太陽光発電について</a>

</main>
<?php get_footer(); ?>