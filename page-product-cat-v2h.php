<?php
/*
Template Name: V2H製品一覧
*/
get_header();
$img_path = get_stylesheet_directory_uri() . "/images";
?>
<!-- 製品詳細 ターム(V2H) 一覧ページ -->
<main class="taxonomy-product-cat v2h single-products">
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
      <div class="prod-img"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/V2H_Lineup_FV.png" alt=""></div>
    </div>
  </section>
  <!-- // TOP -->
  <section class="intro bg-other">
    <div class="container">
      <div class="img intro-v2h"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/V2H_front.png" alt=""></div>
      <div class="ctt">
        <p class="txt">
          V2H（Vehicle to Home）は<br>太陽光発電や電力会社からの電気をEV（電気自動車）にため、EVにためた電気をお家で使う蓄電システムです。
        </p>
      </div>
    </div>
  </section>
  <!-- // INTRO -->
  <section class="power-station">
    <div class="container">
      <h2 class="sec-ttl">Q.READY <br>EVパワーステーション<sup>®</sup></h2>
      <h3 class="sub-ttl">EVへの充電も、家への給電もOK</h3>
      <div class="img"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Qready_EV_image01.png" alt=""></div>
      <div class="ps-detailc">
        <div class="ps-detail">
          <div class="img"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Qready_EV_01.jpg" alt=""></div>
          <ul class="com-list">
            <li class="com-item">
              <div class="com-icon"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/T3_V2H_icon02.svg" alt=""></div>
              <p class="com-txt">EVへの倍速充電も、<br>EVから家への給電も1台で可能</p>
            </li>
            <li class="com-item">
              <div class="com-icon"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Qready_EV_icon02.svg" alt=""></div>
              <p class="com-txt">EVを大きな蓄電池で活用可能</p>
            </li>
            <li class="com-item">
              <div class="com-icon"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Qready_EV_icon03.svg" alt=""></div>
              <p class="com-txt">系統連系によりEVから供給中でも、<br>電力会社・太陽光発電の電力を使える</p>
            </li>
          </ul>
        </div>
        <div class="accordion typeA">
          <div class="accordion-content">
            <table cellspacing="0" cellpadding="0">
              <tbody style="display: table-row-group;">
                <tr>
                  <td colspan="2"></td>
                  <td>パワーユニット（本体／壁掛、据置）</td>
                  <td class="separator">プラグホルダ（操作部／壁掛、ポール）</td>
                </tr>
                <tr class="b-text">
                  <td colspan="2">型番</td>
                  <td>VSG3-666CN7</td>
                  <td></td>
                </tr>
                <tr>
                  <td colspan="2">ケーブル</td>
                  <td>7.5m(5.1kg)</td>
                  <td></td>
                </tr>
                <tr>
                  <td colspan="2" rowspan="2">外形寸法<br>（横幅:Ｗ×高さ:Ｈ×奥行:Ｄ）</td>
                  <td rowspan="2">W 470㎜×H 620㎜×D 200㎜（突起部除く）</td>
                  <td rowspan="2" class="separator">W 160㎜×H 355㎜×D 160㎜（突起部除く）</td>
                </tr>
                <tr> </tr>
                <tr>
                  <td colspan="2" rowspan="3">重量</td>
                  <td>パワーユニット（本体／設置金具除く）：26.2kg</td>
                  <td class="separator">プラグホルダ（操作部／設置金具除く）：7.9kg</td>
                </tr>
                <tr>
                  <td>壁掛時合計：29.4kg</td>
                  <td class="separator">壁掛時合計：8.5kg</td>
                </tr>
                <tr>
                  <td>据置時合計：30.5kg</td>
                  <td class="separator">ポール時合計：12.2kg</td>
                </tr>
                <tr>
                  <td rowspan="4">充電部<br>（系統連系時）</td>
                  <td>電気方式</td>
                  <td colspan="2">単相2線式（接続は単相3線式）</td>
                </tr>
                <tr>
                  <td>定格電圧</td>
                  <td colspan="2">AC202V ± 12V</td>
                </tr>
                <tr>
                  <td>定格周波数</td>
                  <td colspan="2">50または60Hz</td>
                </tr>
                <tr>
                  <td>出力電力<sup>※1</sup></td>
                  <td colspan="2">6kW未満</td>
                </tr>
                <tr>
                  <td rowspan="4">放電部<br>
                      家庭への放電<br>
                      （系統連系時）</td>
                  <td>電気方式</td>
                  <td colspan="2">単相2線式（接続は単相3線式）</td>
                </tr>
                <tr>
                  <td>定格電圧</td>
                  <td colspan="2">AC202V ± 12V</td>
                </tr>
                <tr>
                  <td>定格周波数</td>
                  <td colspan="2">50または60Hz</td>
                </tr>
                <tr>
                  <td>AC出力電力<sup>※2</sup></td>
                  <td colspan="2">6kW未満</td>
                </tr>
                <tr>
                  <td rowspan="4">放電部<br>
                      家庭への放電<br>
                      （自立出力時）</td>
                  <td>電気方式</td>
                  <td colspan="2">単相3線式</td>
                </tr>
                <tr>
                  <td>定格電圧</td>
                  <td colspan="2">AC202V　/　AC101V</td>
                </tr>
                <tr>
                  <td>定格周波数</td>
                  <td colspan="2">50または60Hz</td>
                </tr>
                <tr>
                  <td>AC出力電力<sup>※2</sup></td>
                  <td colspan="2">6kVA未満(片相3kVA未満)</td>
                </tr>
                <tr>
                  <td rowspan="2">変換効率<br>
                      （系統連系時）</td>
                  <td rowspan="2">EV<br>
                      （放電時）<sup>※3</sup><sup>※4</sup></td>
                  <td colspan="2" rowspan="2">94％<br>
                      （定格出力時）</td>
                </tr>
                <tr> </tr>
                <tr>
                  <td colspan="2">待機電力</td>
                  <td colspan="2">15W以下</td>
                </tr>
                <tr>
                  <td colspan="2">EV側電圧範囲</td>
                  <td colspan="2">DC150V～DC450V</td>
                </tr>
                <tr>
                  <td colspan="2">不要輻射<sup>※5</sup></td>
                  <td colspan="2">VCCI Class B準拠</td>
                </tr>
                <tr>
                  <td colspan="2">IP等級</td>
                  <td colspan="2">IP55相当</td>
                </tr>
                <tr>
                  <td rowspan="4">設置環境</td>
                  <td>設置条件</td>
                  <td colspan="2">屋外、標高2000m以下/-20℃～+50℃</td>
                </tr>
                <tr>
                  <td>塩害地設置</td>
                  <td colspan="2">〇</td>
                </tr>
                <tr>
                  <td>重塩害地対応<sup>※6</sup></td>
                  <td colspan="2">オプション</td>
                </tr>
                <tr>
                  <td>動作温度<sup>※7</sup></td>
                  <td colspan="2">-20℃～+50℃</td>
                </tr>
                <tr>
                  <td colspan="2">周囲湿度</td>
                  <td colspan="2">30%～90%(結露なきこと)</td>
                </tr>
                <tr>
                  <td colspan="2">冷却方式</td>
                  <td colspan="2">自然空冷</td>
                </tr>
                <tr>
                  <td colspan="2">運転時騒音<sup>※8</sup></td>
                  <td colspan="2">40dB-A以下</td>
                </tr>
                <tr>
                  <td colspan="2">操作<sup>※9</sup></td>
                  <td colspan="2">本体ボタン/スマートフォンアプリ/室内リモコン(オプション品)</td>
                </tr>
                <tr>
                  <td colspan="2">保証期間<sup>※10</sup></td>
                  <td colspan="2">10年</td>
                </tr>
                <tr>
                  <td colspan="2">希望小売価格（税込価格）<sup>※11</sup></td>
                  <td colspan="2">¥1,408,000</td>
                </tr>
              </tbody>
            </table>
            <div class="note">
              <span class="txt">※1 機器の入力値であり、実際の充電出力を保証している数値ではありません。契約電力や家庭での使用状況および車両の充電率によって異なります。</span>
              <span class="txt">※2 車両の状況により電力が低下する場合があります。</span>
              <span class="txt">※3 電気自動車損失除く。</span>
              <span class="txt">※4 家庭の消費が1kW未満の場合、変換効率が低下します。</span>
              <span class="txt">※5 受信障害となる場合がありますので、ラジオ、テレビ、アマチュア無線等の電波を利用する機器はパワーユニット（本体）から3m以上離して設置してください。</span>
              <span class="txt">※6 希望小売価格1,408,000円（税込）</span>
              <span class="txt">※7 直射日光が当たる場合等の高温時、充放電電力量が抑制されることがあります。</span>
              <span class="txt">※8 JIS C1509-1で規定するA特性サウンドレベルを示します。製品正面中央から1m、高さ1mの距離での測定値です。</span>
              <span class="txt">※9 スマートフォンアプリは室内でのみご使用可能です。</span>
              <span class="txt">※10「 事前確認書」「設置完了報告書」が提出された場合の期間です。</span>
              <span class="txt">※11 自動切替開閉器を含みます。</span>
            </div>
          </div>
          <div class="accordion-btn">
            <p class="txt">製品仕様を詳しく見る</p>
            <span class="icon"></span>
          </div>
        </div>
      </div>
      <a href="" class="more-btn"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/Qready_banner_001.jpg" alt=""></a>
    </div>
  </section>
  <!-- // POWER_STATION -->
  <section class="tribrid">
    <div class="container">
      <h2 class="sec-ttl">トライブリッド<br>蓄電システム<sup>®</sup></h2>
      <h3 class="sub-ttl">EVに電気をためて、家庭で使うV2Hシステム</h3>
      <div class="img"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/T3_V2H_image01.jpg" alt=""></div>
      <ul class="list">
        <li class="item">
          <div class="tribrid-content">
            <div class="img"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/nichicon_PCS_ES-T3-01.jpg" alt=""></div>
            <div class="meta">
              <h3 class="name">トライブリッドパワコン<sup>®</sup></h3>
              <p class="type">ES-T3</p>
              <ul class="com-list">
                <li class="com-item">
                  <div class="com-icon"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/T3_PCS_icon01.svg" alt=""></div>
                  <p class="com-txt">高出力</p>
                </li>
                <li class="com-item">
                  <div class="com-icon"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/T3_PCS_icon02.svg" alt=""></div>
                  <p class="com-txt">全負荷200V標準搭載</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="accordion typeA">
            <div class="accordion-content">
              <table cellspacing="0" cellpadding="0">
                <tbody style="display: table-row-group;">
                  <tr class="b-text">
                    <td colspan="2">型名</td>
                    <td>ES-T3</td>
                  </tr>
                  <tr>
                    <td colspan="2">寸法（横×高さ×奥行）</td>
                    <td>685×648×239（mm）</td>
                  </tr>
                  <tr>
                    <td colspan="2">本体質量</td>
                    <td>44kg（取付金具含まず）</td>
                  </tr>
                  <tr>
                    <td rowspan="2">系統連系出力</td>
                    <td>電気方式</td>
                    <td>単相2線式（接続は単相3線式）</td>
                  </tr>
                  <tr>
                    <td>定格出力</td>
                    <td>5.9kW</td>
                  </tr>
                  <tr>
                    <td rowspan="2">自立出力</td>
                    <td>電気方式</td>
                    <td>単相3線式</td>
                  </tr>
                  <tr>
                    <td>定格出力</td>
                    <td>5.9kVA（片相：3.0kVA）</td>
                  </tr>
                  <tr>
                    <td rowspan="4">太陽光発電入力</td>
                    <td>制御方式</td>
                    <td>最大電力点追従制御（MPPT）</td>
                  </tr>
                  <tr>
                    <td>入力回路数</td>
                    <td>4回路</td>
                  </tr>
                  <tr>
                    <td>開放電圧（接続可能上限値）</td>
                    <td>DC50～DC450V／1回路<sup>※1</sup></td>
                  </tr>
                  <tr>
                    <td>MPPT制御可能電圧範囲</td>
                    <td>DC50～DC425V／1回路</td>
                  </tr>
                  <tr>
                    <td>変換効率（系統連系時）</td>
                    <td>太陽光（放電時）</td>
                    <td>95%（定格出力時）<sup>※2</sup></td>
                  </tr>
                  <tr>
                    <td colspan="2">絶縁方式</td>
                    <td>非絶縁トランスレス方式</td>
                  </tr>
                  <tr>
                    <td rowspan="2">設置環境</td>
                    <td>設置条件</td>
                    <td>屋外、高さ2,000m以下（-30℃～+45℃に一部制約対応（所定条件下））</td>
                  </tr>
                  <tr>
                    <td>動作温度</td>
                    <td>-20℃～+40℃</td>
                  </tr>
                </tbody>
              </table>
              <div class="note">
                <span class="txt">※1 モジュールの温度特性及び直並列接続も含めて満足するようにしてください。これらを満足しない太陽電池モジュールは本製品に接続できません。</span>
                <span class="txt">※2 JIS C 8961に基づく効率測定方法による定格負荷効率を示します。</span>
              </div>
            </div>
            <div class="accordion-btn">
              <p class="txt">製品仕様を詳しく見る</p>
              <span class="icon"></span>
            </div>
          </div>
        </li>
        <li class="item">
          <div class="tribrid-content">
            <div class="img"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/nichicon_ESS_4kwES-T3S1-L1-01.jpg" alt=""></div>
            <div class="meta">
              <h3 class="name">蓄電池ユニット・増設ユニット</h3>
              <p class="type">ES-T3M1/ES-T3X1｜ES-T3S1/ES-T3L1</p>
              <ul class="com-list">
                <li class="com-item">
                  <div class="com-icon"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/T3_ESS_icon01.svg" alt=""></div>
                  <p class="com-txt">室内、屋外両方に設置可能</p>
                </li>
                <li class="com-item">
                  <div class="com-icon"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/T3_ESS_icon02.svg" alt=""></div>
                  <p class="com-txt">後付けOK</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="accordion typeA">
            <div class="accordion-content">
              <table cellspacing="0" cellpadding="0">
                <tbody style="display: table-row-group;">
                  <tr class="b-text">
                    <td colspan="2">型名</td>
                    <td>ES-T3S1／ES-T3L1</td>
                    <td class="separator">ES-T3M1／ES-T3X1</td>
                  </tr>
                  <tr>
                    <td colspan="2">寸法（横×高さ×奥行）</td>
                    <td>540×418×230（mm）</td>
                    <td class="separator">540×418×230（mm）</td>
                  </tr>
                  <tr>
                    <td colspan="2">本体質量</td>
                    <td>50kg</td>
                    <td class="separator">61kg</td>
                  </tr>
                  <tr>
                    <td colspan="2">蓄電池公称容量</td>
                    <td>ES-T3S1：4.9kWh<br>ES-T3S1+ES-T3L1：9.9kWh</td>
                    <td class="separator">ES-T3M1：7.4kWh<br>ES-T3M1+ES-T3X1：14.9kWh</td>
                  </tr>
                  <tr>
                    <td colspan="2">電池種類</td>
                    <td>リチウムイオン蓄電池</td>
                    <td class="separator">リチウムイオン蓄電池</td>
                  </tr>
                  <tr>
                    <td rowspan="2">設置環境</td>
                    <td>設置条件</td>
                    <td>高さ2,000m以下<br>室内、-10～+45℃、結露なきこと<br>屋外<sup>※1※2</sup>、-10～+45℃、重塩害非対応</td>
                    <td class="separator">高さ2,000m以下<br>室内、-10～+45℃、結露なきこと<br>屋外<sup>※1※2</sup>、-10～+45℃、重塩害非対応</td>
                  </tr>
                  <tr>
                    <td>動作温度</td>
                    <td>-10～+40℃</td>
                    <td class="separator">-10～+40℃</td>
                  </tr>
                </tbody>
              </table>
              <div class="note">
                <span class="txt">※1 屋外設置のためには、蓄電池屋外用ケースが必要です。</span>
                <span class="txt">※2 蓄電池屋外用ケース利用時でも日光が当たる場所には設置できません。</span>
              </div>
            </div>
            <div class="accordion-btn">
              <p class="txt">製品仕様を詳しく見る</p>
              <span class="icon"></span>
            </div>
          </div>
        </li>
        <li class="item">
          <div class="tribrid-content">
            <div class="img">
              <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/nichicon_V2H_front_set.jpg" alt="">
              <p class="txt">※ポール<sup>※1</sup></p>
            </div>
            <div class="meta">
              <h3 class="name">V2Hスタンド</h3>
              <p class="type">ES-T3P1/ES-T3PL1｜ES-T3V1</p>
              <ul class="com-list">
                <li class="com-item">
                  <div class="com-icon"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/T3_V2H_icon01.svg" alt=""></div>
                  <p class="com-txt">最大３倍のハイスピード拡張充電可能</p>
                </li>
                <li class="com-item">
                  <div class="com-icon"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/T3_V2H_icon02.svg" alt=""></div>
                  <p class="com-txt">大容量化する電気自動車に対応</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="accordion typeA">
            <div class="accordion-content">
              <table cellspacing="0" cellpadding="0">
                <tbody style="display: table-row-group;">
                  <tr class="b-text">
                    <td colspan="2">型名</td>
                    <td>ES-T3P1</td>
                    <td class="separator">ES-T3PL1</td>
                    <td class="separator">ES-T3V1</td>
                  </tr>
                  <tr>
                    <td rowspan="2">寸法<br>（横×高さ×奥行）</td>
                    <td>V2Hスタンド</td>
                    <td>520×1,180×260（mm）<br>（突起部含まず）</td>
                    <td class="separator">520×1,180×260（mm）<br>（突起部含まず）</td>
                    <td class="separator">520×1,180×260（mm）<br>（突起部／充放電コネクタ含まず）</td>
                  </tr>
                  <tr>
                    <td>V2Hポッド</td>
                    <td>170×430×173（mm）<br>（突起部含まず）</td>
                    <td class="separator">170×430×173（mm）<br>（突起部含まず）</td>
                    <td class="separator">-</td>
                  </tr>
                  <tr>
                    <td rowspan="2">本体質量</td>
                    <td>V2Hスタンド</td>
                    <td>61kg</td>
                    <td class="separator">61kg</td>
                    <td class="separator">69kg</td>
                  </tr>
                  <tr>
                    <td>V2Hポッド</td>
                    <td>6.8kg</td>
                    <td class="separator">8.7kg</td>
                    <td class="separator">-</td>
                  </tr>
                  <tr>
                    <td colspan="2">充放電コネクタ<br>ケーブル長</td>
                    <td>3.5m</td>
                    <td class="separator">7.5m</td>
                    <td class="separator">7.5m</td>
                  </tr>
                  <tr>
                    <td rowspan="4">充電部<br>（系統連系時）</td>
                    <td>電気方式</td>
                    <td>単相2線式<br>（接続は単相3線式）</td>
                    <td class="separator">単相2線式<br>（接続は単相3線式）</td>
                    <td class="separator">単相2線式<br>（接続は単相3線式）</td>
                  </tr>
                  <tr>
                    <td>定格電圧</td>
                    <td>AC202V±12V</td>
                    <td class="separator">AC202V±12V</td>
                    <td class="separator">AC202V±12V</td>
                  </tr>
                  <tr>
                    <td>定格周波数</td>
                    <td>50または60Hz</td>
                    <td class="separator">50または60Hz</td>
                    <td class="separator">50または60Hz</td>
                  </tr>
                  <tr>
                    <td>出力電力</td>
                    <td>6kW未満<sup>※2</sup><br>（拡張充電時：最大9.9kW<sup>※3</sup>）</td>
                    <td class="separator">6kW未満<sup>※2</sup><br>（拡張充電時：最大9.9kW<sup>※3</sup>）</td>
                    <td class="separator">6kW未満<sup>※2</sup><br>（拡張充電時：最大9.9kW<sup>※3</sup>）</td>
                  </tr>
                  <tr>
                    <td rowspan="4">放電部<br>（系統連系時）</td>
                    <td>電気方式</td>
                    <td>単相2線式<br>（連系は単相3線式）</td>
                    <td class="separator">単相2線式<br>（連系は単相3線式）</td>
                    <td class="separator">単相2線式<br>（連系は単相3線式）</td>
                  </tr>
                  <tr>
                    <td>定格電圧</td>
                    <td>AC202V±12V</td>
                    <td class="separator">AC202V±12V</td>
                    <td class="separator">AC202V±12V</td>
                  </tr>
                  <tr>
                    <td>定格周波数</td>
                    <td>50または60Hz</td>
                    <td class="separator">50または60Hz</td>
                    <td class="separator">50または60Hz</td>
                  </tr>
                  <tr>
                    <td>AC出力電力</td>
                    <td>5.9kW<sup>※4</sup></td>
                    <td class="separator">5.9kW<sup>※4</sup></td>
                    <td class="separator">5.9kW<sup>※4</sup></td>
                  </tr>
                  <tr>
                    <td rowspan="4">放電部<br>（自立時）</td>
                    <td>電気方式</td>
                    <td>単相3線式</td>
                    <td class="separator">単相3線式</td>
                    <td class="separator">単相3線式</td>
                  </tr>
                  <tr>
                    <td>定格電圧</td>
                    <td>AC202V±12V</td>
                    <td class="separator">AC202V±12V</td>
                    <td class="separator">AC202V±12V</td>
                  </tr>
                  <tr>
                    <td>定格周波数</td>
                    <td>50または60Hz</td>
                    <td class="separator">50または60Hz</td>
                    <td class="separator">50または60Hz</td>
                  </tr>
                  <tr>
                    <td>AC出力電力</td>
                    <td>5.9kVA（片相：3.0kVA）<sup>※4</sup></td>
                    <td class="separator">5.9kVA（片相：3.0kVA）<sup>※4</sup></td>
                    <td class="separator">5.9kVA（片相：3.0kVA）<sup>※4</sup></td>
                  </tr>
                  <tr>
                    <td rowspan="2">設置環境</td>
                    <td>設置条件</td>
                    <td>屋外、標高2,000m以下<br>-30～+45℃、重塩害非対応</td>
                    <td class="separator">屋外、標高2,000m以下<br>-30～+45℃、重塩害非対応</td>
                    <td class="separator">屋外、標高2,000m以下<br>-30～+45℃、重塩害非対応</td>
                  </tr>
                  <tr>
                    <td>動作温度</td>
                    <td>-20～+40℃</td>
                    <td class="separator">-20～+40℃</td>
                    <td class="separator">-20～+40℃</td>
                  </tr>
                </tbody>
              </table>
              <div class="note">
                <span class="txt">※1 ポールは別売りです。</span>
                <span class="txt">※2 機器の入力値のため、実際の充電出力とは異なる場合があります。車両の状態（車種、充電率）、契約電力等により異なる場合があります。</span>
                <span class="txt">※3 車両の状態（車種、充電率）、蓄電池の有無、太陽光の発電電力等によって異なる場合があります。</span>
                <span class="txt">※4 車両の状態（車種、充電率）によっては異なる場合があります。</span>
              </div>
            </div>
            <div class="accordion-btn">
              <p class="txt">製品仕様を詳しく見る</p>
              <span class="icon"></span>
            </div>
          </div>
        </li>
        <li class="item">
          <div class="tribrid-content">
            <div class="img"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/nichicon_T3_remocon_ES-R6.jpg" alt=""></div>
            <div class="meta">
              <h3 class="name">室内リモコン</h3>
              <p class="type">ES-R6</p>
              <ul class="com-list">
                <li class="com-item">
                  <div class="com-icon"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/T3_remoconl_icon01.svg" alt=""></div>
                  <p class="com-txt">AI自動制御など<br>さまざまなサービスに対応</p>
                </li>
                <li class="com-item">
                  <div class="com-icon"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/T3_remoconl_icon02.svg" alt=""></div>
                  <p class="com-txt">カラータッチパネルで<br>直観的にコントロール</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="accordion typeA">
            <div class="accordion-content">
              <table cellspacing="0" cellpadding="0">
                <tbody style="display: table-row-group;">
                  <tr class="b-text">
                    <td colspan="2">型名</td>
                    <td>ES-R6</td>
                  </tr>
                  <tr>
                    <td colspan="2">寸法（横×高さ×奥行）</td>
                    <td>170×140×23（mm）</td>
                  </tr>
                  <tr>
                    <td colspan="2">本体質量</td>
                    <td>320g</td>
                  </tr>
                    <td rowspan="2">設置環境</td>
                    <td>設置条件</td>
                    <td>室内（0～+40℃、結露なきこと）</td>
                  </tr>
                  <tr>
                    <td>動作温度</td>
                    <td>0～+40℃</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="accordion-btn">
              <p class="txt">製品仕様を詳しく見る</p>
              <span class="icon"></span>
            </div>
          </div>
        </li>
      </ul>
      <a href="<?= home_url(); ?>/product-list/" class="btn">製品・システム 一覧</a>
    </div>
  </section>
  <!-- // TRIBRID -->
</main>
<?= get_footer(); ?>