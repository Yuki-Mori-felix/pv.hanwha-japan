<?php
/* Template Name: 拠点詳細 */
require get_stylesheet_directory() . '/include/my_variables.php';
?>
<?php get_header(); ?>

<main class="under-pv">
  <section class="mv">
    <div class="back-img" style="background-image: url(<?= get_field('fv_page_img'); ?>);">
      <h1 class="title">国内拠点ネットワーク</h1>
    </div>
  </section>
  <!--========== END OF MV ==========-->

  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>

  <nav class="location-menu">
    <div class="nav-title">ネットワーク一覧</div>
    <a href="#sales-support" class="parent-link">セールスサポート</a>
    <ul>
      <li><a href="#tokyo" class="child-link">東京本社</a></li>
      <li><a href="#sendai" class="child-link">仙台支店</a></li>
      <li><a href="#sapporo" class="child-link">札幌営業所</a></li>
      <li><a href="#nagoya" class="child-link">名古屋支店</a></li>
      <li><a href="#oosaka" class="child-link">大阪支店</a></li>
      <li><a href="#hukuoka" class="child-link">福岡支店</a></li>
      <li><a href="#q" class="child-link">Q.PARTNERS</a></li>
    </ul>
    <a href="#distribution" class="parent-link">物流拠点</a>
    <a href="#service-support" class="parent-link">サービスサポート</a>
  </nav>

  <section class="location-top">
    <div class="wrap_s">
      <div class="location-wrap">
        <div class="location-top-img">
          <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/net-work_img1.png" alt="">
        </div>
      </div>
    </div>
  </section>
  <!--========== END OF SUPPORT  ==========-->

  <section id="sales-support" class="sales-support">
    <div class="wrap_s">
      <div class="location-wrap">
        <h2>セールスサポート</h2>
        <ul class="sales-content">
          <li id="tokyo" class="sales-item">
            <h3>東京本社</h3>
            <div class="sales-item-flex">
              <div class="sales-item-img">
                <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/net-work_hanwha_building_img.jpg" alt="">
              </div>
              <div class="sales-item-text">
                <h4>所在地</h4>
                <p>
                  〒108-0014 東京都港区芝4丁目10番1号ハンファビル9階（本社）<br>
                  〒108-0014 東京都港区芝4丁目10番1号ハンファビル7階（東京支店）<br>
                  TEL：03-5441-5900 (代表)<br>
                  FAX：03-5441-5920 (代表)
                </p>
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.1650246363047!2d139.7514524!3d35.6483056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bb6094b4f11%3A0x9b9013b6855acbb0!2z44OP44Oz44OV44Kh44OT44Or!5e0!3m2!1sja!2sjp!4v1748850930654!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </li>
          <li id="sendai" class="sales-item">
            <h3>仙台支店</h3>
            <div class="sales-item-flex">
              <div class="sales-item-img"></div>
              <div class="sales-item-text">
                <h4>所在地</h4>
                <p>
                  〒980-6119 宮城県仙台市青葉区中央1丁目3番1号AER(アエル)19階<br><br>
                  TEL：022-217-6950<br>
                  FAX：022-217-6951
                </p>
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3132.735501092922!2d140.8784745758625!3d38.26244008391937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8a28222db8b71b%3A0xa3486f274eab1f46!2zQUVS77yI44Ki44Ko44Or77yJ!5e0!3m2!1sja!2sjp!4v1748852514813!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </li>
          <li id="sapporo" class="sales-item">
            <h3>札幌営業所</h3>
            <div class="sales-item-flex">
              <div class="sales-item-img"></div>
              <div class="sales-item-text">
                <h4>所在地</h4>
                <p>
                  〒060-0042 北海道札幌市中央区大通西1丁目14-2 桂和大通ビル50 9F<br>
                  TEL：011-806-1461<br>
                </p>
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d306.4118164839928!2d141.35632343614034!3d43.0604295580827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z44CSMDYwLTAwNDIg5YyX5rW36YGT5pyt5bmM5biC5Lit5aSu5Yy65aSn6YCa6KW_MeS4geebrjE0LTIg5qGC5ZKM5aSn6YCa44OT44OrNTAgOUY!5e0!3m2!1sja!2sjp!4v1748852682430!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </li>
          <li id="nagoya" class="sales-item">
            <h3>名古屋支店</h3>
            <div class="sales-item-flex">
              <div class="sales-item-img"></div>
              <div class="sales-item-text">
                <h4>所在地</h4>
                <p>
                  〒450－0003 愛知県名古屋市中村区名駅南一丁目 17-23 ニッタビル 2階<br>
                  TEL：052-571-8851<br>
                  FAX：052-571-8852
                </p>
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.55725580676!2d136.88461127573578!3d35.16766105801502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600376dedf0274c3%3A0x83f71cbc7eedb11c!2z44CSNDUwLTAwMDMg5oSb55-l55yM5ZCN5Y-k5bGL5biC5Lit5p2R5Yy65ZCN6aeF5Y2X77yR5LiB55uu77yR77yX4oiS77yS77yTIOODi-ODg-OCv-ODk-ODqyAy6ZqO!5e0!3m2!1sja!2sjp!4v1748852739077!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </li>
          <li id="oosaka" class="sales-item">
            <h3>大阪支店</h3>
            <div class="sales-item-flex">
              <div class="sales-item-img"></div>
              <div class="sales-item-text">
                <h4>所在地</h4>
                <p>
                  〒541-0056 大阪府大阪市中央区久太郎町三丁目6番8号 御堂筋ダイワビル8階<br>
                  TEL：06-4963-8006<br>
                  FAX：06-4963-8007
                </p>
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.979982277329!2d135.49853487571664!3d34.680454684298994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e71c1a225f11%3A0x6723609d21e9e6fc!2z44CSNTQxLTAwNTYg5aSn6Ziq5bqc5aSn6Ziq5biC5Lit5aSu5Yy65LmF5aSq6YOO55S677yT5LiB55uu77yW4oiS77yYIEpSReW-oeWggueti-ODgOOCpOODr-ODk-ODqyA46ZqO!5e0!3m2!1sja!2sjp!4v1748852778661!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </li>
          <li id="hukuoka" class="sales-item">
            <h3>福岡支店</h3>
            <div class="sales-item-flex">
              <div class="sales-item-img"></div>
              <div class="sales-item-text">
                <h4>所在地</h4>
                <p>
                  〒812-0011　福岡県福岡市博多区博多駅前1丁目6番16号西鉄博多駅前ビル8階<br>
                  TEL：092-433-8310<br>
                  FAX：092-433-8311
                </p>
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d403.60321867202754!2d130.41568065882296!3d33.59395013589306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3541910aa83115f3%3A0x5fb87c84da582fbf!2z6KW_6YmE5Y2a5aSa6aeF5YmN44OT44Or!5e0!3m2!1sja!2sjp!4v1748852878758!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </li>
          <li id="q" class="sales-item">
            <h3>Q.PARTNERS （販売店支援プログラム）</h3>
            <div class="sales-item-flex">
              <div class="sales-item-img">
                <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Q.PARTNERS_img.jpg" alt="">
              </div>
              <div class="sales-item-text">
                <p class="only-text">全国1,800社</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!--========== END OF   ==========-->

  <section id="distribution" class="distribution">
    <div class="wrap_s">
      <div class="location-wrap">
        <h2>物流拠点</h2>
        <ul class="distribution-list">
          <li>札幌DC</li>
          <li>仙台DC</li>
          <li>太田DC</li>
          <li>横浜DC</li>
          <li>岐阜DC</li>
          <li>大坂DC</li>
          <li>広島DC</li>
          <li>小倉DC</li>
          <li>沖縄DC</li>
        </ul>
        <div class="distribution-text">全国9カ所</div>
      </div>
    </div>
  </section>
  <!--========== END OF DISTRIBUTION  ==========-->

  <section id="service-support" class="service-support">
    <div class="wrap_s">
      <div class="location-wrap">
        <h2>サービスサポート</h2>
        <div class="service-support-text">全国450カ所<br>（関連協力会社サービスネットワーク）</div>
      </div>
    </div>
  </section>
  <!--========== END OF SERVICE SUPPORT  ==========-->

  <a href="<?= home_url(); ?>/pv" class="btn location-button">ハンファジャパンの太陽光発電について</a>

</main>
<?php get_footer(); ?>