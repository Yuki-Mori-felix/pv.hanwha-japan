<?php
/* Template Name: 実績詳細 */
require get_stylesheet_directory() . '/include/my_variables.php';
?>
<?php get_header(); ?>

<main class="under-pv">
  <section class="mv">
    <div class="back-img" style="background-image: url(<?= get_field('fv_page_img'); ?>);">
      <h1 class="title">グローバルで認められた実績</h1>
    </div>
  </section>
  <!--========== END OF MV ==========-->

  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>

  <section class="achievement">
    <div class="wrap">
      <h2>日本と世界で選ばれ続ける圧倒的な実績</h2>
    </div>
    <ul class="under-pv-list">
      <li>
        <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Global_img1.jpg" alt="">
        <div class="text-area">
          <div class="title">2024年グローバル<br>総売り上げ約12,766億円※達成</div>
          <div class="annotation">※ハンファ・ソリューションズ全体の売上<br>※１KRW（大韓民国ウォン）：0.103で換算</div>
          <p>
            太陽光発電とグリーンエネルギーの<br>グローバルパイオニアとして<br>世界各地のお客様にご愛顧いただき、<br>圧倒的な実績を達成しました。
          </p>
        </div>
      </li>
      <li>
        <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Global_img2.jpg" alt="">
        <div class="text-area">
          <div class="title">2024年日本国内住宅用メーカー<br>トップシェア</div>
          <div class="annotation">※出典：月間スマートハウスNo.120（2025年2月号）</div>
          <p>
            日本で40年間培った豊富な経験と<br>日本特有のニーズの深い理解に基づき、<br>2024年国内住宅用メーカーシェアでトップに<br>選ばれる光栄にも預かりました。
          </p>
        </div>
      </li>
      <li>
        <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Global_img3.jpg" alt="">
        <div class="text-area">
          <div class="title">2年連続<br>国内新築シェアNo.1</div>
          <div class="annotation">※出典：月間スマートハウスNo.108（2024年2月号）<br>　月間スマートハウスNo.120（2025年2月号）</div>
          <p>
            日本の住宅環境の最適化した最上級のモジュールで<br>2023年と2024年、2年連続で<br>新築部門住宅用モジュール出荷でも1位を記録しました。
          </p>
        </div>
      </li>
      <li>
        <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Global_img4.jpg" alt="">
        <div class="text-area">
          <div class="title">住宅用販売棟数<br>180,000棟（2011~2024）</div>
          <p>
            約18万世帯、約45万人の方が毎日使える<br>クリーンなエネルギーを供給しております。
          </p>
          <div class="annotation">※日本の平均世帯人数の1世帯2.49人と仮定した場合</div>
        </div>
      </li>
    </ul>
  </section>
  <!--========== END OF ACHIEVEMENT ==========-->

  <a href="<?= home_url(); ?>/pv" class="btn location-button">ハンファジャパンの太陽光発電について</a>

</main>
<?php get_footer(); ?>