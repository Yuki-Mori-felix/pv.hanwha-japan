<?php
/*
Template Name: 架台・設置金具製品一覧
*/
require get_stylesheet_directory() . '/include/my_variables.php';
get_header();
$img_path = get_stylesheet_directory_uri() . "/images";
?>
<!-- 製品詳細 ターム(架台・設置金具) 一覧ページ -->
<main class="taxonomy-product-cat bracket single-products">
  <section class="mv" style="background-image: url(<?= get_field('fv_page_img'); ?>)">
    <div class="container">
      <div class="ttlc">
        <p class="prod-name"><?= get_field('title_main'); ?></p>
        <h2 class="ttl"><?= get_field('title_sub') ?></h2>
      </div>
    </div>
  </section>
  <!-- // MV -->
  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>
  <section class="top">
    <div class="container">
      <div class="prod-img"><img src="<?=get_field('top_product_img')['url'];?>" alt=""></div>
    </div>
  </section>
  <!-- // TOP -->
  <section class="intro bg-other">
    <div class="container">
      <div class="img intro-bracket"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/img_Q-ROBUST_02.png" alt=""></div>
      <div class="ctt">
        <p class="txt"><?= get_field('description'); ?></p>
      </div>
    </div>
  </section>
  <!-- // INTRO -->
  <!-- <section class="bracket-menu">
    <div class="container">
      <ul class="menu-list">
        <li class="menu-item"><a href="#general" class="menu-btn">一般架台・設置金具</a></li>
        <li class="menu-item">
          <p class="txt">積雪地域対応</p>
          <a href="#qrobust" class="menu-btn">Q.ROBUST®</a>
        </li>
        <li class="menu-item">
          <p class="txt">豪雪地帯も安心</p>
          <a href="#wall-surface" class="menu-btn">壁面設置架台</a>
        </li>
      </ul>
    </div>
  </section> -->
  <?= get_field('content_1', false, false) ?>
  <!-- // BRACKET_MENU -->
  <!-- <section class="general" id="general">
    <div class="container">
      <h2 class="sec-ttl">一般架台・設置金具</h2>
      <div class="table">
        <div class="headc">
          <p class="type head">屋根材タイプ</p>
          <p class="method head">設置方式</p>
          <p class="impression head">設置イメージ</p>
          <p class="module head">対応モジュール</p>
        </div>
        <div class="row">
          <div class="type">
            <img src="<?= $home_url; ?>/wp-content/uploads/2025/06/1_kinzoku-tate.jpg" alt="">
            <span class="name">金属縦葺板金</span>
          </div>
          <div class="method"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/1_sunlock_bracket.png" alt=""></div>
          <div class="impression modal-block">
            <div class="img"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/1_sunlock.png" alt=""></div>
            <div class="modal-open">
              <div class="modal-icon"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/zoom.svg" alt=""></div>
            </div>
            <div class="modal">
              <div class="bg">
                <div class="modal-ctt">
                  <div class="modal-img"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/1_sunlock.png" alt=""></div>
                  <div class="modal-close"><span class="close-btn"></span><span class="close-txt">閉じる</span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="module">
            <p class="txt">※Re.RISEは別途表記<br><br>※全てのQ.TRONモジュール</p>
          </div>
        </div>
        <div class="row">
          <div class="type">
            <img src="<?= $home_url; ?>/wp-content/uploads/2025/06/2_kinzoku-yoko.jpg" alt="">
            <span class="name">金属横葺板金</span>
          </div>
          <div class="method"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/2_DY5_bracket.png" alt=""></div>
          <div class="impression modal-block">
            <div class="img"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/2_DY5.png" alt=""></div>
            <div class="modal-open">
              <div class="modal-icon"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/zoom.svg" alt=""></div>
            </div>
            <div class="modal">
              <div class="bg">
                <div class="modal-ctt">
                  <div class="modal-img"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/2_DY5.png" alt=""></div>
                  <div class="modal-close"><span class="close-btn"></span><span class="close-txt">閉じる</span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="module">
            <p class="txt">※Re.RISEは別途表記<br><br>※全てのQ.TRONモジュール</p>
          </div>
        </div>
        <div class="row">
          <div class="type">
            <img src="<?= $home_url; ?>/wp-content/uploads/2025/06/3_slate.jpg" alt="">
            <span class="name">スレート</span>
          </div>
          <div class="method"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/3_Takashima_BK_bracket.png" alt=""></div>
          <div class="impression modal-block">
            <div class="img"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/3_Takashima_BK.png" alt=""></div>
            <div class="modal-open">
              <div class="modal-icon"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/zoom.svg" alt=""></div>
            </div>
            <div class="modal">
              <div class="bg">
                <div class="modal-ctt">
                  <div class="modal-img"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/3_Takashima_BK.png" alt=""></div>
                  <div class="modal-close"><span class="close-btn"></span><span class="close-txt">閉じる</span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="module">
            <p class="txt">※Re.RISEは別途表記<br><br>※全てのQ.TRONモジュール</p>
          </div>
        </div>
        <div class="row">
          <div class="type">
            <img src="<?= $home_url; ?>/wp-content/uploads/2025/06/4_hiraitagawara.jpg" alt="">
            <span class="name">平板瓦</span>
          </div>
          <div class="method"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/5_wagawara_bracket.png" alt=""></div>
          <div class="impression modal-block">
            <div class="img"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/4_Shijigawara.png" alt=""></div>
            <div class="modal-open">
              <div class="modal-icon"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/zoom.svg" alt=""></div>
            </div>
            <div class="modal">
              <div class="bg">
                <div class="modal-ctt">
                  <div class="modal-img"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/4_Shijigawara.png" alt=""></div>
                  <div class="modal-close"><span class="close-btn"></span><span class="close-txt">閉じる</span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="module">
            <p class="txt">※Re.RISEは別途表記<br><br>※全てのQ.TRONモジュール</p>
          </div>
        </div>
        <div class="row">
          <div class="type">
            <img src="<?= $home_url; ?>/wp-content/uploads/2025/06/5_wagawara_yane.jpg" alt="">
            <span class="name">和瓦</span>
          </div>
          <div class="method"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/5_wagawara_bracket.png" alt=""></div>
          <div class="impression modal-block">
            <div class="img"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/5_wagawara.png" alt=""></div>
            <div class="modal-open">
              <div class="modal-icon"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/zoom.svg" alt=""></div>
            </div>
            <div class="modal">
              <div class="bg">
                <div class="modal-ctt">
                  <div class="modal-img"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/5_wagawara.png" alt=""></div>
                  <div class="modal-close"><span class="close-btn"></span><span class="close-txt">閉じる</span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="module">
            <p class="txt">※Re.RISEは別途表記<br><br>※全てのQ.TRONモジュール</p>
          </div>
        </div>
        <div class="row">
          <div class="type">
            <img src="<?= $home_url; ?>/wp-content/uploads/2025/06/6_ishitukibankin_yane.jpg" alt="">
            <span class="name">石付板金</span>
          </div>
          <div class="method"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/6_ishitukibankin_bracket.png" alt=""></div>
          <div class="impression modal-block">
            <div class="img"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/6_ishitukibankin.png" alt=""></div>
            <div class="modal-open">
              <div class="modal-icon"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/zoom.svg" alt=""></div>
            </div>
            <div class="modal">
              <div class="bg">
                <div class="modal-ctt">
                  <div class="modal-img"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/6_ishitukibankin.png" alt=""></div>
                  <div class="modal-close"><span class="close-btn"></span><span class="close-txt">閉じる</span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="module">
            <p class="txt">※Re.RISEは別途表記<br><br>※全てのQ.TRONモジュール</p>
          </div>
        </div>
        <div class="sup-list">
          <p class="sup-item module">
            対応モジュール：<span class="circle rerise-g3"></span><span class="txt">Re.RISE-G3シリーズ<sup>※1</sup></span
            ><span class="circle rerise-g2"></span><span class="txt">Re.RISE-G2<sup>※2</sup></span
            ><span class="circle rerise-s"></span><span class="txt">Re.RISE S</span>
          </p>
          <p class="sup-item metal">
            金具：<span class="circle"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/bracket_icon_Y.svg" alt=""></span><span class="txt">（株）屋根技術研究所製</span><span class="line">／</span
            ><span class="circle"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/bracket_icon_E.svg" alt=""></span><span class="txt">（株）栄信製</span><span class="line">／</span
            ><span class="circle"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/bracket_icon_D.svg" alt=""></span><span class="txt">（株）ダイドーハント製</span><span class="line">／</span
            ><span class="circle"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/bracket_icon_T.svg" alt=""></span><span class="txt">高島（株）製</span><span class="line">／</span
            ><span class="circle"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/bracket_icon_S.svg" alt=""></span><span class="txt">スワロー工業（株）製</span>
          </p>
        </div>
        <div class="note">
          <span class="txt">※1 Re.RISE-G3とRe.RISE MS-G3は対応架台が一部異なります。</span>
          <span class="txt">※2 2025年4月見積分よりRe.RISE-G3と同じ設置方式となります。<br>詳しくは販売店または当社までお問い合わせください。</span>
        </div>
      </div>
    </div>
    <div class="standard">
      <div class="standard-wrap sec-wrap">
        <div class="cttc">
          <div class="ctt">
            <ul class="ctt-list">
              <li class="ctt-item">
                <div class="ctt-icon none-max-t"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/trestle_icon_weather.svg" alt=""></div>
                <div class="ctt-group">
                  <div class="ttlc">
                    <div class="ctt-icon none-min-t"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/trestle_icon_weather.svg" alt=""></div>
                    <h3 class="ttl">積雪荷重に対する設置基準</h3>
                  </div>
                  <div class="ctt-detail">
                    <p class="ctt-label">垂直積雪量：</p>
                    <div class="ctt-value">
                      <p class="txt">
                        Re.RISE-G3シリーズ最大250㎝まで設置可能。<sup>※1</sup><br>Re.RISE S 230 最大250㎝まで設置可能。<sup>※2</sup><br>Re.RISE-G2 435 最大200㎝まで設置可能。<sup>※3</sup>
                      </p>
                      <div class="note">
                        <span class="txt">※2 ダイドーハント　掴み金具（金属横葺板金用）</span>
                        <span class="txt">※1 高島スレート金具</span>
                        <span class="txt">※3 屋根技術研究所　アンカー金具</span>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="ctt-item">
                <div class="ctt-icon none-max-t"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/trestle_icon_wind.svg" alt=""></div>
                <div class="ctt-group">
                  <div class="ttlc">
                    <div class="ctt-icon none-min-t"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/trestle_icon_wind.svg" alt=""></div>
                    <h3 class="ttl">風圧荷重に対する設置基準</h3>
                  </div>
                  <div class="ctt-detail">
                    <p class="ctt-label">基準風速：</p>
                    <div class="ctt-value">
                      <p class="txt">最大40m/sまで設置可能。</p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <div class="note">
              <span class="txt">※ 屋根材の許容積雪量基準は屋根材メーカーにお問い合わせください。</span>
              <span class="txt">※ 建築基準法施行令第86条第3項に基づき規定された垂直積雪量は、現場を管轄している特定行政庁にお問い合わせください。<br>垂直積雪量は特定行政庁の判断により更新されることがあります。</span>
              <span class="txt">※ 設置地域、設置条件により異なります。詳しくは販売店または当社までお問い合わせください。</span>
              <span class="txt">※ JIS C 8955:2017に準拠。</span>
            </div>
          </div>
          <div class="img"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/snow-covered_module_01.jpg" alt=""></div>
        </div>
        <div class="note">
          <span class="txt">※ 画像、設置イメージ図はすべてイメージです。</span>
          <span class="txt">※ その他にも設置工法・金具をご用意しております。詳しくは販売店または当社までお問い合わせください。</span>
          <span class="txt">※ 最大13ｍ以下の建物に設置が可能です。詳しくは販売店または当社までお問い合わせください。</span>
          <span class="txt">※ 太陽電池モジュールの上に雪が積もると、一般の屋根と比べ雪が滑りやすく、周辺の器物等に損傷を与える恐れがあります。必要に応じ雪止め金具（オプション）を取り付けてください。</span>
          <span class="txt">※ 雪止め金具を設置できない場合があります。詳しくは販売店または当社までお問い合わせください。</span>
          <span class="txt">※ お住まいの地域、築年数、屋根材の状態などにより、設置できない場合があります。</span>
          <span class="txt">※ 設置周囲における汚れ、サビなどの不具合には対応できません。設置前に必ず販売店による設置対象屋根の状況確認をお願いします。</span>
        </div>
      </div>
    </div>
  </section> -->
  <?= get_field('content_2', false, false) ?>
  <!-- // GENERAL -->
  <!-- <section class="qrobust" id="qrobust">
    <h3 class="sub-ttl">積雪地域対応</h3>
    <h2 class="sec-ttl">Q.ROBUST®シリーズ</h2>
    <div class="mv">
      <div class="mv-wrap sec-wrap">
        <div class="mv-left"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/Sample_snow-covered_module_02.jpg" alt=""></div>
        <div class="mv-right"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/img_Q-ROBUST_01.png" alt=""></div>
      </div>
    </div>
    <div class="container">
      <p class="lead">Q.ROBUST®（キューロバスト）は<br>ハンファジャパンオリジナル多雪地域向け脱着式補強架台です。</p>
      <div class="img"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/img_Q.ROBUST_cont02.png" alt=""></div>
      <div class="sec-detail">
        <ul class="list">
          <li class="item">
            <div class="head">
              <div class="head-icon"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/SK_YCK02_icon01.svg" alt=""></div>
              <h3 class="ttl">垂直積雪量<br>最大210cmまで対応</h3>
            </div>
            <p class="txt">屋根に穴をあけず、垂直積雪量が最大210㎝までの地域に太陽光パネルを設置できます。</p>
          </li>
          <li class="item">
            <div class="head">
              <div class="head-icon"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/SK_YCK02_icon01.svg" alt=""></div>
              <h3 class="ttl">フレキシブルな<br>固定可能範囲</h3>
            </div>
            <p class="txt">脱着式補強架台であるため、固定可能範囲内で設置芭蕉を自在に変更できます。</p>
          </li>
          <li class="item">
            <div class="head">
              <div class="head-icon"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/SK_YCK01_icon03.svg" alt=""></div>
              <h3 class="ttl">屋根への負担を軽減</h3>
            </div>
            <p class="txt">積雪荷重を掴み金具とQ.ROBUSTに分散させ、屋根への負担を減らします。</p>
          </li>
        </ul>
        <div class="target-prod">
          <div class="target-label">対応製品</div>
          <div class="target-value">
            <p class="txt">Q.TRON M-G2.4+</p>
            <p class="txt">Re.RISE-G3 440</p>
            <div class="note">
              <span class="txt">※ Re.RISE S 230はQ.ROBUST Sで対応可能</span>
            </div>
          </div>
        </div>
        <div class="note">
          <span class="txt">※ 対応金具はダイドーハント製掴み金具（DT）、栄信製掴み金具（サンロックGripⅡ）となります。</span>
          <span class="txt">※ 屋根固定部材、屋根下地、ハゼピッチなどの条件があります。詳しくは販売店または当社までお問い合わせください。</span>
        </div>
      </div>
    </div>
  </section> -->
  <?= get_field('content_3', false, false) ?>
  <!-- // QROBUST -->
  <!-- <section class="wall-surface" id="wall-surface">
    <div class="container">
      <h3 class="sub-ttl">豪雪地帯も安心</h3>
      <h2 class="sec-ttl">壁面設置架台</h2>
      <ul class="list">
        <li class="item">
          <p class="head">角度90度架台</p>
          <div class="img"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/YCZ_rendering1.jpg" alt=""></div>
        </li>
        <li class="item">
          <p class="head">角度70度架台</p>
          <div class="img"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/YCZ_rendering2.jpg" alt=""></div>
        </li>
      </ul>
    </div>
    <div class="explanation">
      <div class="explanation-wrap container">
        <div class="img"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/YCZ_rendering2.jpg" alt=""></div>
        <div class="img"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/YCZ_rendering2.jpg" alt=""></div>
      </div>
    </div>
    <div class="container">
      <div class="sec-detail">
        <ul class="list">
          <li class="item">
            <div class="head">
              <div class="head-icon"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/SK_YCK02_icon01.svg" alt=""></div>
              <h3 class="ttl">豪雪地帯でも<br>年間を通して発電可能</h3>
            </div>
            <p class="txt">降雪があっても発電可能なため、豪雪地帯でも年間を通して安定した発電量が期待できます。</p>
          </li>
          <li class="item">
            <div class="head">
              <div class="head-icon"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/SK_YCK02_icon02.svg" alt=""></div>
              <h3 class="ttl">積雪による太陽光パネルの破損を防止</h3>
            </div>
            <p class="txt">壁面に太陽光パネルを設置するため、雪が積もりにくく、積雪による太陽光パネルの破損を防ぎます。</p>
          </li>
          <li class="item">
            <div class="head">
              <div class="head-icon"><img src="<?= $home_url; ?>/wp-content/uploads/2025/06/SK_YCK02_icon03.svg" alt=""></div>
              <h3 class="ttl">2種類の角度の<br>架台を用意</h3>
            </div>
            <p class="txt">角度70度（傾斜）と90度（垂直）の2種類の架台を用意。発電量優先、意匠性優先などの条件からお好みの架台を選択可能です。</p>
          </li>
        </ul>
        <div class="target-prod">
          <div class="target-label">対応製品</div>
          <div class="target-value">
            <p class="txt">Re.RISE-G4 440</p>
            <p class="txt">Re.RISE-G3 シリーズ</p>
            <p class="txt">Q.TRON G2.4+ シリーズ</p>
          </div>
        </div>
        <div class="note">
          <span class="txt">※ 画像、設置イメージ図はすべてイメージです。詳しくは当社までお問い合わせください。</span>
          <span class="txt">※ 最大10ｍ以下の建物に設置が可能です。詳しくは当社までお問い合わせください。</span>
          <span class="txt">※ 架台Ⓢはスワロー工業（株）製です。</span>
          <span class="txt">※ お住まいの地域、築年数、壁面や躯体の状態などにより、設置できない場合があります。</span>
          <span class="txt">※ 設置周囲における汚れ、サビなどの不具合には対応できません。設置前に必ず販売店による設置対象壁面の状況確認をお願いします。</span>
          <span class="txt">※ 躯体の強度については、設計施工側で設置に問題ないことを必ずご確認ください。</span>
        </div>
      </div>
      <a href="<?= home_url(); ?>/product-list/" class="btn">製品・システム 一覧</a>
    </div>
  </section> -->
  <?= get_field('content_4', false, false) ?>
  <!-- // WALL_SURFACE -->
</main>
<?= get_footer(); ?>