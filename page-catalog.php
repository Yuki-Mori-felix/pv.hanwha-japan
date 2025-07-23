<?php
/*
Template Name: WEBカタログ・ダウンロード
*/
get_header();
?>
<main class="contact catalog-dl">
  <section class="mv" style="background-image: url(<?= get_field('fv_page_img'); ?>)">
    <h2 class="ttl"><?= the_title(); ?></h2>
  </section>
  <!-- // MV -->
  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>
  <section class="top">
    <div class="container">
      <p class="lead">WEBカタログをご用意しております。</p>
      <p class="txt">ご希望のカタログをすぐに閲覧いただけます。</p>
      <div class="links">
        <a href="<?=get_my_home_url("/service-support/catalog")?>" class="link catalog-c"><span class="inner">カタログ請求はこちら</span></a>
      </div>
    </div>
  </section>
  <!-- // TOP -->
  <section class="download">
    <div class="container">
      <ul class="cat-list">
        <li class="cat-item">
          <h3 class="name">Qcells住宅用カタログ</h3>
          <p class="year">2024年版</p>
          <div class="img"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/catalog-qcells-2024.png" alt=""></div>
          <p class="module">メインパネル</p>
          <p class="series">Q.TRON-G2.4+シリーズ</p>
          <a href="" class="link web" target="_blank" rel="noopener noreferrer">WEBカタログ</a>
          <a href="" class="link pdf" target="_blank" rel="noopener noreferrer"><span class="inner">PDF</span></a>
        </li>
        <li class="cat-item">
          <h3 class="name">Re.RISE®住宅用カタログ</h3>
          <p class="year">2024年版</p>
          <div class="img"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/catalog-rerise-2024.png" alt=""></div>
          <p class="module">メインパネル</p>
          <p class="series">Re.RISE-G3シリーズ</p>
          <a href="" class="link web" target="_blank" rel="noopener noreferrer">WEBカタログ</a>
          <a href="" class="link pdf" target="_blank" rel="noopener noreferrer"><span class="inner">PDF</span></a>
        </li>
        <li class="cat-item">
          <h3 class="name">Q.READYカタログ</h3>
          <p class="year">2024年版</p>
          <div class="img"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/catalog-qready-2024.png" alt=""></div>
          <a href="" class="link web" target="_blank" rel="noopener noreferrer">WEBカタログ</a>
          <a href="" class="link pdf" target="_blank" rel="noopener noreferrer"><span class="inner">PDF</span></a>
        </li>
      </ul>
      <ul class="cat-list">
        <li class="cat-item">
          <h3 class="name">産業用カタログ</h3>
          <p class="year">2021年版</p>
          <div class="img"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/catalog-industrial-2021.png" alt=""></div>
          <a href="" class="link web" target="_blank" rel="noopener noreferrer">WEBカタログ</a>
          <a href="" class="link pdf" target="_blank" rel="noopener noreferrer"><span class="inner">PDF</span></a>
        </li>
      </ul>
      <div class="cat-note">
        <p class="txt txt-bol">
          ※各種資料ダウンロードは<a href="https://q-partners.q-cells.jp/?_gl=1*db2q4w*_gcl_aw*R0NMLjE3NTAxMzg4ODQuRUFJYUlRb2JDaE1JdjVtS3VxYmpqUU1WRjhvV0JSM2huaG0wRUFBWUFTQUFFZ0tpQ19EX0J3RQ..*_gcl_au*OTE2MzgwNDQyLjE3NDUxOTQyNTc." class="link" rel="nofollow noopener" target="_blank">Q.PARTNERS</a>ページにてダウンロードできます。お探しの資料がない場合は、お問い合わせを通じてご申請ください。
        </p>
        <p class="txt">
          いただきましたお問い合わせは、確認後、担当者より連絡いたします。<br>
          なお、土日祝日および弊社休業日は翌営業日以降の回答となりますのでご了承ください。
        </p>
      </div>
    </div>
  </section>
  <!-- // DOWNLOAD -->
  <section class="system">
    <div class="container">
      <h2 class="ttl">電子カタログ動作環境</h2>
      <div class="ctt">
        <ul class="list">
          <li class="item">
            <p class="ttl">Windows</p>
            <ul class="list">
              <li class="item">
                <p class="name">OS</p>
                <p class="txt">Microsoft Windows10、Windows8.1、Windows7</p>
              </li>
              <li class="item">
                <p class="name">CPU</p>
                <p class="txt">Pentium III 600MHz 以上のプロセッサ等</p>
              </li>
              <li class="item">
                <p class="name">メモリ</p>
                <p class="txt">1GB以上</p>
              </li>
              <li class="item">
                <p class="name">ブラウザ</p>
                <p class="txt">Internet Explorer 11以上、Microsoft Edge(最新)、Mozilla Firefox(最新)、Google Chrome(最新)</p>
              </li>
              <li class="item">
                <p class="name">モニター解像度</p>
                <p class="txt">1280×768以上</p>
              </li>
              <li class="item">
                <p class="name">モニター</p>
                <p class="txt">16ビット以上を表示可能なカラーモニター</p>
              </li>
              <li class="item">
                <p class="name">通信環境</p>
                <p class="txt">ADSLなどのブロードバンド環境</p>
              </li>
            </ul>
          </li>
          <li class="item">
            <p class="ttl">Apple</p>
            <ul class="list">
              <li class="item">
                <p class="name">OS</p>
                <p class="txt">Macintosh 10.9 ～ 10.14 日本語版</p>
              </li>
              <li class="item">
                <p class="name">CPU</p>
                <p class="txt">PowerPC G3 500MHz 以上のプロセッサ</p>
              </li>
              <li class="item">
                <p class="name">メモリ</p>
                <p class="txt">1GB以上</p>
              </li>
              <li class="item">
                <p class="name">ブラウザ</p>
                <p class="txt">Safari(最新)、Mozilla Firefox(最新)、Google Chrome(最新)</p>
              </li>
              <li class="item">
                <p class="name">モニター解像度</p>
                <p class="txt">1280×768以上</p>
              </li>
              <li class="item">
                <p class="name">モニター</p>
                <p class="txt">16ビット以上を表示可能なカラーモニター</p>
              </li>
              <li class="item">
                <p class="name">通信環境</p>
                <p class="txt">ADSLなどのブロードバンド環境</p>
              </li>
            </ul>
          </li>
          <li class="item">
            <p class="ttl">iOS</p>
            <ul class="list">
              <li class="item">
                <p class="name">OS</p>
                <p class="txt">iOS9.0 ～ 12.x</p>
              </li>
              <li class="item">
                <p class="name">メモリ</p>
                <p class="txt">1GB以上 （2GB以上推奨）</p>
              </li>
              <li class="item">
                <p class="name">ブラウザ</p>
                <p class="txt">Mobile Safari(最新)</p>
              </li>
              <li class="item">
                <p class="name">モニター解像度</p>
                <p class="txt">Mobile Safari(最新)</p>
              </li>
              <li class="item">
                <p class="name">モニター</p>
                <p class="txt">iPhone6／iPad Air2／iPad mini3／iPad Pro 以降</p>
              </li>
              <li class="item">
                <p class="name">通信環境</p>
                <p class="txt">LTEまたはWi-Fi環境</p>
              </li>
            </ul>
          </li>
          <li class="item">
            <p class="ttl">Android</p>
            <ul class="list">
              <li class="item">
                <p class="name">OS</p>
                <p class="txt">Android 5.1.1 ～ 9</p>
              </li>
              <li class="item">
                <p class="name">メモリ</p>
                <p class="txt">1GB以上（2GB以上推奨）</p>
              </li>
              <li class="item">
                <p class="name">ブラウザ</p>
                <p class="txt">Mobile Google Chrome(最新)</p>
              </li>
              <li class="item">
                <p class="name">モニター解像度</p>
                <p class="txt">1920×1080、2560×1440 、2960×1440、1920×1200、2048×1536</p>
              </li>
              <li class="item">
                <p class="name">モニター</p>
                <p class="txt">GalaxyS5～S8、XperiaZ4～Z5、Nexus7(2013)、Nexus9</p>
              </li>
              <li class="item">
                <p class="name">通信環境</p>
                <p class="txt">ADSLなどのブロードバンド環境</p>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- // SYSTEM -->
  <section class="common-info">
    <div class="container">
      <div class="ctt customer">
        <div class="img"><img src="<?=get_img_path()?>/contact/icon-customer.svg" alt=""></div>
        <div class="detail">
          <p class="head">お問い合わせはこちらまで</p>
          <p class="txt">
            番号 0120-322-001<br>
            受付時間 09：00～17：00<br class="none-min-ml">（12：00～13：00を除く）<br>
            ※土日・祝日および年末年始を除く
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- // INFO -->
</main>
<!-- // CONTACT CATALOG_DL -->
<?=get_footer();?>