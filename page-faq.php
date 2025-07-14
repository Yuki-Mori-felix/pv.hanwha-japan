<?php
/* Template Name: よくある質問 */
require get_stylesheet_directory() . '/include/my_variables.php';
?>
<?php get_header(); ?>

<main>
  <section class="mv">
    <div class="back-img" style="background-image: url(<?= get_field('fv_page_img'); ?>);">
      <h1 class="title"><?= the_title(); ?></h1>
    </div>
  </section>
  <!--========== END OF MV ==========-->

  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>

  <section class="faq-links">
    <div class="wrap_s">
      <h2>お客様より、よくいただくご質問を掲載しております。</h2>
      <ul class="faq-nav">
        <li><a href="#cat_01"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/solar-power-icon.svg" alt="太陽光発電">太陽光発電</a></li>
        <li><a href="#cat_02"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/Installation-icon.svg" alt="設置">設置</a></li>
        <li><a href="#cat_03"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/power-generation-icon.svg" alt="発電">発電</a></li>
        <li><a href="#cat_04"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/maintenance-icon.svg" alt="メンテナンス">メンテナンス</a></li>
        <li><a href="#cat_05"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/cost-icon.svg" alt="お申込み・費用">お申込み・費用</a></li>
        <li><a href="#cat_06"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/weather-icon.svg" alt="天候の影響">天候の影響</a></li>
        <li><a href="#cat_07"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/disaster-icon.svg" alt="災害時の対応">災害時の対応</a></li>
        <li><a href="#cat_08"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/pc-soft-icon.svg" alt="PCソフト">PCソフト</a></li>
      </ul>
    </div>
  </section>
  <!--========== END OF FAQ LINKS  ==========-->

  <!-- <section class="faq-contents">
    <div class="wrap_s">
      <h5 id="cat_01">太陽光発電について</h5>
      <ul class="accordian_ty faq">
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>太陽光発電システムとは？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>住宅用であれば、屋根などに取り付けた「太陽電池モジュール（パネル）」が太陽光で発電し、その電気を「接続箱」に集め、「パワーコンディショナ」を通じて電気を直流から交流に変換し、屋内で使用できるようにするシステムを指します。そのほかにも「屋内分電盤」、太陽電池モジュールを固定する「架台」、送電線との連結の時に経由させる「電力量計」などによって構成されています。また、発電状況を確認できるモニタも同時に設置するのが一般的です。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>太陽電池モジュールの寿命はどのくらいですか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>太陽電池モジュールは、可動部がないので故障が少なく、寿命は20年～30年と言われています（太陽光発電システム全体ではパワーコンディショナや架台なども含むため、一概には言えません）。Qセルズでは太陽電池モジュールに対して25年間の出力保証制度および15年間の長期安心システム保証制度を設けることにより、長期に渡ってお客さまに安心してお使いいただけます。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>単結晶と多結晶の違いはなんですか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>太陽電池モジュールで最も歴史が古く実績のあるものが単結晶シリコン太陽電池です。純度の高いひとつのシリコン（半導体の一種）の原子が規則正しく並んでいて安定しているため一定で、最大限の能力を発揮できる状態となっています。価格は高価となりますが、高効率で耐用年数も高くなります。 多結晶シリコン太陽電池は、単結晶が不規則に結合しているため、不安定な状態であり、単結晶シリコン系ほど発電効率は高くないとされてきましたが、加工がしやすく大量生産に向いているため、価格が抑えられます。また、近年の技術変化により、変換効率も高くなってきています。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>変換効率とはなんですか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>変換効率とは、太陽電池が受けた光エネルギーを電気エネルギーに変換する割合を示した数字です。例えば、変換効率が10%とは太陽光は晴天時において、日射強度の標準として地上で最大1kW/1平方メートルのエネルギーがあり、このエネルギーを1平方メートルの太陽電池に照射したとき、太陽電池の発電電力が100Wとなることを示しています。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>kW（キロワット）とkWh（キロワットアワー）の違いはなんですか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>”kW”とは瞬時の電力を示し、”kWh”とは一定時間あたりの積算電力量、つまりは時間の単位であるh(アワー）を積算した単位がkWh（キロワットアワー）で、1時間あたりの電力量を表します。例えば、5kWの発電を3時間続けた場合、発電電力量は5kW×3h=15kWhとなります。</p>
            </div>
          </div>
        </li>
      </ul>

      <h5 id="cat_02">設置について</h5>
      <ul class="accordian_ty faq">
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span><span>申込から設置完了まで、何日くらいかかりますか？</span></div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>ご契約時の条件（容量、場所、季節など）により異なります。 ご契約から運転開始まで2カ月程度が目安となりますが、詳しくはご検討いただく際に販売店にご確認ください。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>設置工事期間は何日くらいですか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>通常、住宅用の屋根への設置で１～２日間ですが、設置条件や当日の天候などにより時間を要する場合もあります。 詳しくはご検討いただく際に販売店にご確認ください。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>設置に適した方角や角度はありますか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>なるべく遮るものがなく、南に向いている屋根が一番のおすすめです。 ただし東側・西側に設置した場合、発電量は南側よりは若干下がるものの、ご利用いただく電力としては十分可能です。太陽の位置やモジュール設置の角度によっては、反射光が近隣住宅に当たってしまうことがあります。事前に周囲に反射光の影響をご確認の上、トラブルのないようにご検討されることをおすすめします。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>設置できない地域はありますか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>積雪量が1.5m以上の地域、塩害地域等、条件により設置できない場合があります。 実際の設置につきましては、販売店とご確認の上、ご検討されることをおすすめします。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>設置できない屋根はありますか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>特殊な形状で取り付けできない場合がございます。 詳しくは販売店までお問合せ下さい。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>屋根以外に設置できますか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>屋根に限らずモジュールを設置する面積や環境、方角など諸条件が揃えば屋根以外への設置も可能な場合がございます。 <br>屋根以外に設置をご検討の方はまずお問い合わせください。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>パネルの重みで屋根へ負担がかかりませんか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>屋根の構造や築年数などの諸条件を、販売店とご確認の上、ご検討することをおすすめします。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>一軒あたりどの程度の太陽電池容量が必要ですか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>個々の家庭における電力消費量は、その地域も含めた生活形態等により大きく異なりますが、標準的な例としましては一般家庭の平均年間消費電力量は 5,156kWh（（一社）太陽光発電協会　表示ガイドライン平成27年度版より）という統計値も有り、この場合には4kW程度の太陽電池を設置することで、使用電気の量の7〜8割程度をまかなうことが可能です。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>設置後に太陽電池容量を増やすことはできますか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>お客様の現在の設置状況により異なるため、ご購入された販売店にお問い合わせください。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>設置時に何か届け出は必要ですか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>設置前に、経済産業省に「設備認定」を受ける必要があります。また、「15年長期安心システム保証」など弊社サービスを受ける場合、お申し込みが必要となります。必要な届け出につきましては、契約時に、販売店から説明いたします。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>電力会社との手続きは必要ですか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>電力会社に対して、系統への接続に関する申込書を提出する必要があります。販売店がお申し込みから契約の成立までサポートさせていただきます。</p>
            </div>
          </div>
        </li>
      </ul>

      <h5 id="cat_03">発電について</h5>
      <ul class="accordian_ty faq">
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>曇りや雨、雪の日も発電しますか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>発電する電力量は、太陽電池モジュールがどれだけ光のエネルギーを取り込めるかに比例します。しかし雨の日や雪の日であっても、まったく光（日射）がないということではありません。Qセルズの太陽光パネルは、曇りや雨の日のわずかな光も電力に変えることができる性能で、晴天でない日でも多く発電することが最大の特徴です。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>発電量は地域や季節によって変わりますか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>発電量は日射量や気温等に影響されるため、季節や地域によって発電量に差があります。また、わずかですが緯度による太陽の昇る角度の差も影響します。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>影の影響はありますか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>影の影響を受けた場合、発電量は低下します。また、影の影響を受けている面積分だけの低下ではないため、太陽電池モジュールには影がかからないように設置する必要があります。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>ごみやほこりによる発電量の影響はありますか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>太陽電池にごみやほこりが付着することもありますが、雨風で洗い流されるとほぼ元の能力に回復します。一般の住宅地区では塵などの汚れは降雨で流されるので、日常的な掃除の必要はあまりありません。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>鳥の糞等で汚れたときどうすればよいですか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>鳥の糞等が付着した場合は、清掃の必要があるため、販売店にご相談下さい。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>発電した電気が余った場合はどうするのですか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>昼間に電気を発電し、家庭で使って余った分を電力会社に売ることができます（売電）。逆に、夜は発電することができないので、電力会社から電気を買って使います（買電）。住宅用の太陽光発電システムでは「太陽光発電の余剰電力買取制度」により、昼間に家庭で使いきれずに余った電力を10年間一定の価格で電力会社に売ることができます。また、蓄電システムを導入することにより、余った電気を貯めて夜間でも使うことができます。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>電圧は100V、200Vどちらでも使用できますか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>住宅用システムは単相3線100/200V、公共産業システムの場合、3相3線200V出力が標準です。また、特別に単相3線105/200V回路用に製作することも可能です。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>停電したときはどうなりますか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>停電時には自動的に運転を停止しますが、手動で自立運転に切り替えれば、発電した電気を最大1,500Wまでご家庭内で使うことができます（夜間はご利用いただけません）。また、天候や日射量によっては発電量に応じて使用可能な電力は変動します。操作をする時は必ず太陽光発電ブレーカをOFFにして操作を行うようご注意ください。</p>
            </div>
          </div>
        </li>
      </ul>

      <h5 id="cat_04">メンテナンスについて</h5>
      <ul class="accordian_ty faq">
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>システムの保証期間はどのくらいですか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>太陽光発電システムを長く安心してお使いいただくために、「15年長期安心システム保証」をご用意しております。（※）単相システムのみ三相システムの保証期間は10年です。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>保証書の再発行はできますか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>事由によっては再発行は可能です。お買い上げの販売店までご連絡下さい。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>日常のメンテナンスは必要ですか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>日常のメンテナンスは特に必要はありません。電力モニターをご確認いただき、きちんと発電ができていれば問題ありません。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>故障時の対応はどのようになっていますか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>ご購入頂いた販売店にまずご一報いただき、内容により弊社がサポートさせていただきます。</p>
            </div>
          </div>
        </li>
      </ul>


      <h5 id="cat_05">お申込み・費用に関するご質問</h5>
      <ul class="accordian_ty faq">
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>見積から申し込みまでの流れを教えてください。</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>お見積りをご覧いただきました後、内容にご納得いただけましたら各種申請手続きをご確認いただき、すべてクリアになった後、正式なお申込みをいただく流れとなっております。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>初期費用はどれくらいかかりますか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>太陽光発電システムを設置するには、機器一式、設置架台、電気・設置工事費などの費用がかかります。これらの費用は、設置条件（新築、既築）やモジュールのタイプ（屋根置き型、屋根建材型）、あるいは屋根材の種類や形状、面積などによって異なります。詳しくはお近くの販売店へご相談ください。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>余剰電力の買い取り料金はいくらですか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>余剰電力買い取り料金は変更される場合があります。資源エネルギー庁　再生可能エネルギー推進室のWebサイトをご確認下さい。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>余剰電力の買い取り料金は、電気料金から差し引かれますか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>買電と売電は相殺されず、別々に扱われます。（2013年5月現在）</p>
            </div>
          </div>
        </li>
      </ul>

      <h5 id="cat_06">天候の影響について</h5>
      <ul class="accordian_ty faq">
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>雷が落ちやすいということはありませんか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>屋根や屋上にある設備同様、太陽電池だからといって、雷が落ちやすいということはありません。ただし、建築基準法では、高さ20mを越える場合には、避雷針（避雷設備）の設置義務が原則あります（建築基準法第33条、JIS A4201）。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>雹（ひょう）が降ってもだいじょうぶですか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>モジュールのガラス面はJIS規格（1mの高さから227g直径38mmの鋼球を落下させて、これに耐えること）に適合した強化ガラスを使用しております。耐衝撃性能は通常の屋根と同等と考えていただけます。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>積雪による影響はありますか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>太陽電池モジュール全面に雪が積もりまったく光が射し込まない状態では発電しません。日が射してくると雪が溶けやすくなり、すぐ発電が開始します。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>塩害についてはどうですか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>海水や海水の飛沫が直接かかる場所は設置出来ません。海岸に近い地域等につきましては、販売店にご相談下さい。</p>
            </div>
          </div>
        </li>
      </ul>

      <h5 id="cat_07">災害時の対応について</h5>
      <ul class="accordian_ty faq">
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>地震など災害時には使えますか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>停電になってもパワーコンディショナの自立運転機能により、太陽光が当たっていれば系統と完全に切り離した上で、自立運転コンセントで電気機器を使用できるシステムもあります。使用できる機器や電力量には制限があります。詳しくは、自立運転モードの切り替え方法をご参照下さい。
                また、蓄電池システムを追加していただくことで、普段は太陽光で発電した電気を貯めて、雨の日や夜間の電気としてお使いいただき、停電時は蓄電池から自宅の照明や家電製品に電力供給ができます。（製品の仕様により供給量が異なりますので、詳しくは販売店にお問合せください。）</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>「自立運転」使用時の注意点はありますか？</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>操作をする時は必ず太陽光発電ブレーカをオフにして操作を行うようにしてください。尚、天候や日射量によっては発電量に応じて使用可能な電力は変動しますのでご注意ください。</p>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>自立運転切り替え方法を教えてください。</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <p>自動運転切り替えについては「<a href="https://www.q-cells.jp/individual_customer/attention">災害時/停電時の製品取り扱いについて</a>」ページをご確認ください。</p>
            </div>
          </div>
        </li>
      </ul>

      <h5 id="cat_08">PCソフト</h5>
      <ul class="accordian_ty faq">
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>KP-CM2-SET-HQ PCツール 動作環境</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <div>
                <p>このPCツールは、表示ユニットとお手持ちのパソコンを使用して、表示ユニットに保存されている過去実績データのダウンロードや、背景画像の変更をするアプリケーションソフトです。 PCツールは、以下の環境で動作します。</p>
                <p class="mt"><a href="/wp-content/themes/qcells2018/resources/file/jp/manual/SetupPCTool.zip" class="btn_s btn_ty02" target="_blank" download="">KP-CM2-SET-HQ PCツール ダウンロード</a></p>
                <dl class="txt">
                  <dt>パソコン</dt>
                  <dd>パソコン本体にUSB ポートを装備したPC/AT 互換機</dd>
                </dl>
                <dl class="txt">
                  <dt>OS</dt>
                  <dd>Windows 10(32bit/64bit) / Windows Vista(SP2) / Windows 7(32bit/64bit) / Windows 8(32bit/64bit) / Windows 8.1(32bit/64bit)の各OS[日本語版]<br>
                  （OS をアップグレードしてご使用になる場合は、上記のOS に該当しても動作保証外となりますのでご了承ください。）</dd>
                </dl>
                <dl class="txt">
                  <dt>CPU</dt>
                  <dd>600MHz 以上</dd>
                </dl>
                <dl class="txt">
                  <dt>メモリ</dt>
                  <dd>上記OS が動作する環境</dd>
                </dl>
                <dl class="txt">
                  <dt>必要なハードディスクの<br>空き容量</dt>
                  <dd>40MB 以上(.NET Framework3.5 の容量を除く。)<br>
                  (.NET Framework3.5 に必要なハードディスク容量はMicrosoft のホームページを参照してください。)</dd>
                </dl>
                <dl class="txt">
                  <dt>ディスプレイ</dt>
                  <dd>解像度1024×768 ピクセル以上</dd>
                </dl>
                <dl class="txt">
                  <dt>インターフェース</dt>
                  <dd>USB×1 ポート(プロトコル：USB COM インターフェース) (USB 1.1 以上)</dd>
                </dl>
                <dl class="txt">
                  <dt>文字フォント</dt>
                  <dd>各OS に標準搭載のフォントを使用(主にMS P ゴシック/MS UI Gothic)</dd>
                </dl>
                <dl class="txt">
                  <dt>その他</dt>
                  <dd>
                    CSV ファイルを読み込める表計算ソフト「Excel 等」が必要です。
                    <p class="mt">※ソフトのご使用前に、取扱説明書を必ずお読みください。</p>
                  </dd>
                </dl>
              </div>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>KP-CM2-SET-HQ メンテナンスツール 動作環境</div>
          <div class="view">
            <div class="view-flex">              
              <span class="a-icon">A.</span>
              <div>
                <p>このメンテナンスツールは、表示ユニットや計測ユニットとお手持ちのパソコンを使用して、ユニットに保存されているデータの読み出し、新たなユニットへのデータの移植、ソフトのバージョンアップ、設定変更、初期化をする アプリケーションソフトです。メンテナンスツールは、以下の環境で動作します。</p>
                <p class="mt"><a href="/wp-content/themes/qcells2018/resources/file/jp/manual/SetupMainteTool.zip" class="btn_s btn_ty02" target="_blank" download="">KP-CM2-SET-HQ メンテナンスツール ダウンロード </a></p>
                <dl class="txt">
                  <dt>パソコン</dt>
                  <dd>パソコン本体にUSB ポートを装備したPC/AT 互換機</dd>
                </dl>
                <dl class="txt">
                  <dt>OS</dt>
                  <dd>Windows Vista(SP2) / Windows 7(32bit/64bit) / Windows 8(32bit/64bit) / Windows 8.1(32bit/64bit)の各OS[日本語版]<br>
                  （OS をアップグレードしてご使用になる場合は、上記のOS に該当しても動作保証外となりますのでご了承ください。）</dd>
                </dl>
                <dl class="txt">
                  <dt>CPU</dt>
                  <dd>600MHz 以上</dd>
                </dl>
                <dl class="txt">
                  <dt>メモリ</dt>
                  <dd>上記OS が動作する環境</dd>
                </dl>
                <dl class="txt">
                  <dt>必要なハードディスクの<br>空き容量</dt>
                  <dd>40MB 以上(.NET Framework3.5 の容量を除く。)<br>
                  (.NET Framework3.5 に必要なハードディスク容量はMicrosoft のホームページを参照してください。)</dd>
                </dl>
                <dl class="txt">
                  <dt>ディスプレイ</dt>
                  <dd>解像度1024×768 ピクセル以上</dd>
                </dl>
                <dl class="txt">
                  <dt>インターフェース</dt>
                  <dd>USB×1 ポート(プロトコル：USB COM インターフェース) (USB 1.1 以上)</dd>
                </dl>
                <dl class="txt">
                  <dt>文字フォント</dt>
                  <dd>
                    各OS に標準搭載のフォントを使用(主にMS P ゴシック/MS UI Gothic)
                    <p class="mt">※ソフトのご使用前に、取扱説明書を必ずお読みください。</p>
                  </dd>
                </dl>
              </div>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>KP-MU1P-SET-HQ ソフトウェア更新ツール (出力制御対応)</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <div>
                <p>このツールは、USBメモリーを使用してソフトウェアを更新いたします。</p>
                <p class="mt"><a href="/wp-content/uploads/2018/09/KP-MU1P-SET-HQ20180823.zip" class="btn_s btn_ty02" target="_blank" download="">KP-MU1P-SET-HQ ダウンロード </a></p>
                <dl class="txt">
                  <dt>ソフトウェア更新用<br>USBメモリ</dt>
                  <dd>
                    256MB～32GB、USB2.0準拠、FAT16/FAT32形式でフォーマットされたUSBメモリを使用してください。<br>
                    セキュリティ機能搭載のUSBメモリは使用できません。<br>
                    USBメモリに以下の手順でアップデートファイルを保存してください。<br>
                    1 .USBメモリ内に「Firm」 ※フォルダを作成する。<br>
                    2.「Firm」 ※フォルダ内にアップデートファイル「kp-mu1p-hq-x.x.x_x.x.x.tar.gz.gpg」だけを保存する。<br>
                    ※ フォルダ名は、半角／全角／大文字／小文字を区別します。先頭だけ半角大文字、その後は半角小文字を使用してください。
                  </dd>
                </dl>
                <dl class="txt">
                  <dt>パソコン</dt>
                  <dd>「Firm」フォルダ内に「kp-mu1p-hq-x.x.x_x.x.x.tar.gz.gpg」 以外のデータがあると作業ができません。<br>
                  ほかのデータがあるときは、パソコンに移動してください。</dd>
                </dl>
              </div>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>KP-MU1P/F・MU1/2B-SET 表示モニターセット (出力制御ユニットセット) 出力制御設定マニュアル</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <div>
                <p>このマニュアルは、型式KP-MU1P/F・MU1/2B-SET 専用の出力制御設定マニュアルです。</p>
                <p class="mt"><a href="/wp-content/themes/qcells2018/resources/file/jp/manual/KP-MU1Pf_MU12B-SET_manual.pdf" class="btn_s btn_ty02" target="_blank" download="">KP-MU1P/F・MU1/2B-SET ダウンロード </a></p>
              </div>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>全量用 HQJP-MTST-A□ (HQJP-MC-A□/HQJP-MTU-A□) 更新方法</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <div>
                <p>この更新ツールは、全量用の表示モニターセットの専用ツールです。<br>SDカード（SD-XCは使用不可）をご用意いただき、パソコンを使用してSDカードの中に、以下3つのファイルを格納してください。<br>
                  ・【tcBoot.rom】【MonitorUpdate】【z_TxUnitUpdate】で始まるファイル</p>
                <p class="mt"><a href="/wp-content/themes/qcells2018/resources/file/jp/manual/ZENRYU_＿HQJP-MTST-A□.zip" class="btn_s btn_ty02" target="_blank" download="">全量用 HQJP-MTST-A□ ダウンロード </a></p>
              </div>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>余剰用/新バージョン：モニターのバージョンが「03.00D」の場合 HQJP-MSET-A□ (HQJP-MC-A□/HQJP-MU-A□) 更新方法</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <div>
                <p>この更新ツールは、余剰用の表示モニターセットの新バージョン専用ツールです。<br>SDカード（SD-XCは使用不可）をご用意いただき、パソコンを使用してSDカードの中に、以下3つのファイルを格納してください。<br>
                  ・【tcBoot.rom】【MonitorUpdate】【Tx_UnitUpdate】で始まるファイル</p>
                <p class="mt"><a href="/wp-content/themes/qcells2018/resources/file/jp/manual/YOJOU_＿HQJP-MSET-A□_＿NEW_VER.zip" class="btn_s btn_ty02" target="_blank" download="">余剰用 HQJP-MSET-A□(新) ダウンロード </a></p>
                <p class="mt">※必ず、カラーモニターにてバージョンをご確認いただき、それに適したファイルにてアップデートを実施してください。</p>
              </div>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>余剰用/旧バージョン：モニターのバージョンが「02.00D」の場合 HQJP-MSET-A□ (HQJP-MC-A□/HQJP-MU-A□) 更新方法</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <div>
                <p>この更新ツールは、余剰用の表示モニターセットの旧バージョン専用ツールです。<br>SDカード（SD-XCは使用不可）をご用意いただき、パソコンを使用してSDカードの中に、以下3つのファイルを格納してください。<br>
                  ・【tcBoot.rom】【MonitorUpdate】【Tx_UnitUpdate】で始まるファイル</p>
                <p class="mt"><a href="/wp-content/themes/qcells2018/resources/file/jp/manual/YOJOU_＿HQJP-MSET-A□_＿OLD_VER.zip" class="btn_s btn_ty02" target="_blank" download="">余剰用 HQJP-MSET-A□(旧) ダウンロード </a></p>
                <p class="mt">※必ず、カラーモニターにてバージョンをご確認いただき、それに適したファイルにてアップデートを実施してください。</p>
              </div>
            </div>
          </div>
        </li>
        <li class="list">
          <div class="question"><span class="q-icon">Q.</span>HQJP-M□□□-A□ 表示モニターセット (出力制御ユニットセット) 出力制御設定マニュアル</div>
          <div class="view">
            <div class="view-flex">
              <span class="a-icon">A.</span>
              <div>
                <p>このマニュアルは、型式HQJP-M□□□-A□　専用の出力制御設定マニュアルです。<br>サービスマンコードの4桁は弊社へお問い合わせください。</p>
                <p class="mt"><a href="/wp-content/themes/qcells2018/resources/file/jp/manual/【発電所ＩＤ設定マニュアル-設定方法】　-20190314.pdf" class="btn_s btn_ty02" target="_blank" download="">HQJP-M□□□-A□ ダウンロード </a></p>
              </div>
            </div>
          </div>
        </li>
      </ul>

    </div>
  </section> -->
  <?= get_field('sec_faq', false, false); ?>
  <!--========== END OF FAQ CONTENTS  ==========-->

</main>
<?php get_footer(); ?>