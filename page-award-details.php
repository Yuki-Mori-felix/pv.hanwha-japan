<?php
/* Template Name: 受賞詳細 */
require get_stylesheet_directory() . '/include/my_variables.php';
$img_path = get_stylesheet_directory_uri() . "/images";
?>
<?php get_header(); ?>

<main class="under-pv">
  <section class="mv">
    <div class="back-img" style="background-image: url(<?= get_field('fv_page_img'); ?>);">
      <h1 class="title">受賞・実績</h1>
    </div>
  </section>
  <!--========== END OF MV ==========-->

  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>

  <section class="award">
    <div class="wrap">
      <h2>これまでのハンファジャパンの<br>太陽光発電関連受賞・実績をご紹介します。</h2>
      <ul class="award-list">
        <li>
          <div class="list-wrap">
            <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/award_2024_logo_01.png" alt="">
            <div class="text-area">
              <div class="title">2024国内新築住宅<br>メーカーシェア　1位</div>
              <div class="annotation">※出典：月間スマートハウスNo.120 (2025年2月号）</div>
            </div>
          </div>
        </li>
        <li>
          <div class="list-wrap">
            <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/award_2024_logo_02.png" alt="">
            <div class="text-area">
              <div class="title">2024国内住宅向けメーカー<br>トップシェア</div>
              <div class="annotation">※出典：月間スマートハウスNo.120 (2025年2月号）</div>
            </div>
          </div>
        </li>
        <li>
          <div class="list-wrap">
            <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/award_2024_logo_01.png" alt="">
            <div class="text-area">
              <div class="title">2024国内既築住宅<br>メーカーシェア　トップ2</div>
              <div class="annotation">※出典：月間スマートハウスNo.120 (2025年2月号）</div>
            </div>
          </div>
        </li>
        <li>
          <div class="list-wrap">
            <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/award_2024_logo_01.png" alt="">
            <div class="text-area">
              <div class="title">2023国内新築住宅<br>メーカーシェア　1位</div>
              <div class="annotation">※出典：月間スマートハウスNo.108 (2024年2月号）</div>
            </div>
          </div>
        </li>
        <li>
          <div class="list-wrap">
            <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/award_2024_logo_01.png" alt="">
            <div class="text-area">
              <div class="title">2023国内住宅向け<br>メーカーシェア　トップ2</div>
              <div class="annotation">※出典：月間スマートハウスNo.108 (2024年2月号）</div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!--========== END OF AWARD ==========-->

  <section class="us-market">
    <div class="wrap">
      <div class="us-market-top">
        <div class="text-area">
          <div class="title">米国マーケットシェア　No.1</div>
          <p>
            住宅用トップ市場シェア5年連続獲得※<br>
            産業用トップ市場シェア4年連続獲得※<br>
            ※出典：Wood Mackenzie US PV Leaderboard Q1 2024
          </p>
        </div>
        <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/US-market-share.png" alt="">
      </div>
      <ul class="us-market-list">
        <li>
          <div class="item title">TOP BRAND</div>
          <div class="item">
            <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/EUPD_Research_Siegel_Modules_EU_2025.png" alt="">
            <div class="text-area">
              <div class="item-title">TOP BRAND PV</div>
              <div class="text-blue">12年連続選定（EU）</div>
            </div>
          </div>
          <div class="item">
            <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/ntv-2023.png" alt="">
            <div class="text-area">
              <div class="item-title">Life&Living Award</div>
              <div class="text-blue">4年連続</div>
            </div>
          </div>
          <div class="item">
            <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Highest-Reputation-21.png" alt="">
            <div class="text-area">
              <div class="item-title">Highest Reputation Award</div>
              <div class="text-blue">2年連続</div>
            </div>
          </div>
        </li>
        <li>
          <div class="item title">TOP QUALITY</div>
          <div class="item">
            <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/PVEL-2023-Top-Performer-Mark.png" alt="">
            <div class="text-area">
              <div class="item-title">TOP PERFORMER</div>
              <div class="text-blue">8年連続</div>
            </div>
          </div>
          <div class="item">
            <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Quality-Controlled-PV.png" alt="">
            <div class="text-area">
              <div class="item-title">Quality Controlled PV</div>
              <div class="text-blue">業界初認定</div>
            </div>
          </div>
          <div class="item"></div>
        </li>
        <li>
          <div class="item title">TOP TECHNOLOGY</div>
          <div class="item">
            <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Intersolar_AWARD_2017_2018.png" alt="">
            <div class="text-area">
              <div class="item-title">Intersolar Award</div>
              <div class="text-blue">Q.REAK RSF L-G4.2（2017）<br>Q.REAK DUO-G5（2018）</div>
            </div>
          </div>
          <div class="item">
            <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/SP-Awards-WINNER-Logo_2017_2018.png" alt="">
            <div class="text-area">
              <div class="item-title">Solar+Power Award</div>
              <div class="text-blue">Q.REAK DUO-G5（2017）<br>Q.FLAT-G5（2018）</div>
            </div>
          </div>
          <div class="item"></div>
        </li>
        <li>
          <div class="item title">TOP TCHNOLOGY</div>
          <div class="item">
            <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/BloombergNEF.png" alt="">
            <div class="text-area">
              <div class="item-title">BNEF TOP-tier Bankability</div>
              <div class="text-blue">Top-tier company since 2012</div>
            </div>
          </div>
          <div class="item"></div>
          <div class="item"></div>
        </li>
      </ul>
    </div>
  </section>
  <!--========== END OF US MARKET ==========-->

  <section class="award-area">
    <div class="wrap_s">
      <h2>受賞・実績一覧</h2>
      <div class="award-area-wrap">
        <div class="award-area-item">
          <div class="year">2024</div>
          <div class="title">2024国内新築住宅　メーカーシェア　1位</div>
          <p class="annotation">※出典：月間スマートハウスNo.120 (2025年2月号）</p>
          <div class="title">2024国内住宅向けメーカートップシェア</div>
          <p class="annotation">※出典：月間スマートハウスNo.120 (2025年2月号）</p>
          <div class="title">2024国内既築住宅　メーカーシェア トップ２</div>
          <p class="annotation">※出典：月間スマートハウスNo.120 (2025年2月号）</p>
        </div>

        <div class="award-area-item">
          <div class="year">2023</div>
          <div class="title">2023国内新築住宅　メーカーシェア　1位</div>
          <p class="annotation">※出典：月間スマートハウスNo.108 (2024年2月号）</p>
          <div class="title">2023国内住宅向け　メーカーシェア　トップ2</div>
          <p class="annotation">※出典：月間スマートハウスNo.108 (2024年2月号）</p>
        </div>

        <div class="award-area-item">
          <div class="year">2022</div>
          <div class="title">2022海外メーカーのうち　国内住宅用シェア 1位</div>
          <p class="annotation">※出典：月間スマートハウスNo.96 (2023年2月号）</p>
        </div>

        <div class="award-area-item">
          <div class="year">2021</div>
          <div class="title">2021海外メーカーのうち　国内新築住宅シェア 1位</div>
          <p class="annotation">※出典：月間スマートハウスNo.84 (2022年2月号）</p>
          <div class="title">2021国内総出荷量　シェア　トップ３</div>
          <p class="annotation">※出典：月間スマートハウスNo.84 (2022年2月号）</p>
        </div>

        <div class="award-area-item">
          <div class="year">2020</div>
          <div class="title">2020国内総出荷量　シェア　トップ３</div>
          <p class="annotation">※出典：月間スマートハウスNo.72 (2021年2月号）</p>
        </div>

        <div class="award-area-item">
          <div class="year">2017</div>
          <div class="title">2017国内出荷量　シェア　1位</div>
          <p class="annotation">※出典：株式会社富士経済『2018年版太陽電池関連技術・市場の現状と将来展望』</p>
        </div>
      </div>
    </div>
  </section>
  <!--========== END OF  ==========-->

  <a href="<?= home_url(); ?>/pv" class="btn location-button">ハンファジャパンの太陽光発電について</a>

</main>
<?php get_footer(); ?>