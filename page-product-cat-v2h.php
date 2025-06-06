<?php
/*
Template Name: V2H製品一覧
*/
get_header();
$img_path = get_stylesheet_directory_uri() . "/images";
?>
<!-- 製品詳細 ターム(V2H) 一覧ページ -->
<main class="taxonomy-product-cat single-products">
  <section class="mv" style="background-image: url(<?= get_field('fv_page_img'); ?>)">
    <div class="container">
      <div class="ttlc">
        <p class="prod-name"><?= get_field('title_main'); ?></p>
        <h2 class="ttl"><?= get_field('title_sub') ?></h2>
      </div>
    </div>
  </section>
  <!-- // MV -->
  <table cellspacing="0" cellpadding="0" class="table03">
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
        <td colspan="2" rowspan="2">外形寸法<br>
            （横幅:Ｗ×高さ:Ｈ×奥行:Ｄ）</td>
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
        <td rowspan="4">充電部<br>
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
    <tfoot style="display: table-footer-group;">
      <tr>
        <td colspan="4">
          ※1機器の入力値であり、実際の充電出力を保証している数値ではありません。契約電力や家庭での使用状況および車両の充電率によって異なります。<br>
          ※2 車両の状況により電力が低下する場合があります。<br>
          ※3 電気自動車損失除く。<br>
          ※4 家庭の消費が1kW未満の場合、変換効率が低下します。<br>
          ※5 受信障害となる場合がありますので、ラジオ、テレビ、アマチュア無線等の電波を利用する機器はパワーユニット（本体）から3m以上離して設置してください。<br>
          ※6 希望小売価格1,408,000円（税込）<br>
          ※7 直射日光が当たる場合等の高温時、充放電電力量が抑制されることがあります。<br>
          ※8 JIS C1509-1で規定するA特性サウンドレベルを示します。製品正面中央から1m、高さ1mの距離での測定値です。<br>
          ※9 スマートフォンアプリは室内でのみご使用可能です。<br>
          ※10「 事前確認書」「設置完了報告書」が提出された場合の期間です。<br>
          ※11 自動切替開閉器を含みます。
        </td>
      </tr>
    </tfoot>
  </table>
</main>
<?= get_footer(); ?>