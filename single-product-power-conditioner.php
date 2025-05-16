<?php get_header(); ?>
<?php
	/*
	Template Name: パワーコンディショナ
	Template Post Type: product
	*/

	//画像パス
	$img_path = get_stylesheet_directory_uri()."/images";
?>
<main class="single-products power_conditioner">


	<section class="top_product_logo">
		<div class="wrapper">
			<p class="logo-txt">パワーコンディショナ</p>
		</div>
	</section>
	<!-- //top_product_logo -->


	<section class="overview" id="overview" data-target="overview">
		<div class="wrapper">
			<div class="left">
				<p class="per_page" id="per_page"></p>
				<div class="gallery">
					<div class="splide" id="splide-L" role="group" aria-label="商品詳細メインスライダー">
						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide"><img src="" alt=""></li>
								<li class="splide__slide"><img src="" alt=""></li>
							</ul>
						</div>
					</div>
					<div class="splide" id="splide-S" aria-label="商品詳細サムネイルスライダー">
						<div class="splide__track">
							<div	div class="splide__list">
								<li class="splide__slide"><img src="" alt="">
								<li class="splide__slide"><img src="" alt="">
							</div>
						</div>
					</div>
					<div class="web-ar" id="web-ar">
						<img src="<?=$img_path?>/single-product/web-ar.svg" alt="3D">						
					</div>
				</div>
				<ul class="pcs_certification">
					<li class="pcs_ctf-item-1">
						<img src="<?=$img_path?>/single-product/guarantee_15year_icon_small.png" alt="最長15年保証">
					</li>
				</ul>
			</div>
			<div class="right">
				<p class="format">拡張型</p>
				<h2 class="product-name">QREADY-R59-1</h2>
				<h3 class="description">蓄電池やV2Hを後付けできる、優れた拡張性</h3>
				<ul class="tag">
					<li class="tag-item">拡張性</li>
					<li class="tag-item">電気ロスを最小化</li>
					<li class="tag-item">コンパクト・軽量</li>
				</ul>
				<ul class="spec01">
					<li class="spec01-item">
						<p class="txt"><span class="bold">変換効率</span><br>96％</p>
					</li>
					<li class="spec01-item">
						<p class="txt"><span class="bold">定格出力</span><br>5.9kW</p>
					</li>
				</ul>
				<ul class="spec02">
					<li class="spec02-item">
						<p class="label">型名</p>
						<p class="data">QREADY-R59-1</p>
					</li>
					<li class="spec02-item">
						<p class="label">重量</p>
						<p class="data">20kg ※1 取付金具含まず</p>
					</li>
				</ul>
				<div class="accordion typeA">
					<div class="accordion-content">
						<ul class="spec03">
							<li class="spec03-item">
								<p class="label">外形寸法（横×高さ×奥行）</p>
								<p class="data">444×530×192（mm）</p>
							</li>
							<li class="spec03-item">
								<p class="label">最大外形寸法（横×高さ×奥行）<br class="none-max-t"><span class="fs-10">※取付金具を含む</span></p>
								<p class="data">444×624×200（mm）</p>
							</li>
							<li class="spec03-item">
								<p class="label">入力電力</p>
								<p class="data">2.2kW（３回路合計6.6kW）</p>
							</li>
							<li class="spec03-item">
								<p class="label">入力回路数</p>
								<p class="data">３回路</p>
							</li>
							<li class="spec03-item">
								<p class="label">設置場所</p>
								<p class="data">屋外<span class="fs-10">※2</span></p>
							</li>
							<li class="spec03-item">
								<p class="label">動作温度</p>
								<p class="data">−20℃～＋40℃</p>
							</li>
							<li class="spec03-item">
								<p class="label">メーカー希望小売価格（税込）</p>
								<p class="data">￥880,000</p>
							</li>
						</ul>
						<p class="note">
							※1 取付金具を含む場合は21.8kg<br>
							※2 北海道・沖縄県には設置できません。<br>
							※掲載商品のデザイン、外観等は予告なく変更する場合がありますのでご了承ください。
						</p>
					</div>
					<div class="accordion-btn">
						<p class="txt">製品仕様を詳しく見る</p>
						<span class="icon"></span>
					</div>
				</div>
				<div class="info-links">
					<a href="#" class="link web">WEBカタログ<img src="<?=$img_path?>/single-product/book-open.svg" alt=""></a>
					<a href="#" class="link pdf">カタログPDF<img src="<?=$img_path?>/single-product/download-icon.svg" alt=""></a>
					<div href="#" class="share">シェアする<a href="#" class="round"><img src="<?=$img_path?>/single-product/share-icon.svg" alt=""></a></div>
				</div>
			</div>
		</div>
		<a href="" class="pcs-banner">
			<img src="<?= $img_path ?>/single-product/" alt="一目でわかるQREADY® 詳しくはこちら">
		</a>
	</section>
	<!-- //overview -->

	<section class="feature" data-target="feature">
		<div class="wrapper">
			<h2 class="sec-ttl" id="feature">特長</h2>
		</div>
		<ul class="feature_list">
			<li class="item">
				<div class="wrapper">
					<div class="feature-ttl">
						<span class="no">1</span>
						<h3 class="txt">好きな構成をいつでも導入できる拡張性</h3>
					</div>
					<p class="lead">最初からシステム構成を自由に選べるだけでなく、<br>ライフスタイルの変化に合わせて、必要な時いつでも蓄電池やV2Hをスムーズに増設することも可能です。</p>
					<div class="primary-2">
						<p class="primary-2-ttl">お好きなシステム構成をニーズに合わせて選択可能</p>
						<div class="primary-2-wrapper">
							<div class="img">
								<img src="" alt="">
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="item">
				<div class="wrapper">
					<div class="feature-ttl">
						<span class="no">2</span>
						<h3 class="txt">電気のロスを最小化</h3>
					</div>
					<p class="lead">将来蓄電池を増設するとき、太陽光発電システムと蓄電池を全部1台のパワーコンディショナで制御できます。<br>1台で変換するため、電気の変換ロスが少なくなり、家計にもお得です。</p>
					<div class="primary-2">
						<p class="primary-2-ttl">電気のロスが少なくてお得</p>
						<div class="primary-2-wrapper">
							<ul class="images">
								<div class="img">
									<img src="" alt="">
									<p class="note">※ 従来型太陽光発電システムを導入した場合</p>
								</div>
								<div class="img">
									<img src="" alt="">
									<p class="note">※ Q.READYを導入した場合</p>
									</div>
							</ul>
						</div>
					</div>
				</div>
			</li>
			<li class="item">
				<div class="wrapper">
					<div class="feature-ttl">
						<span class="no">3</span>
						<h3 class="txt">コンパクト・軽量</h3>
					</div>
					<p class="lead">一般分電盤にコンパクトにラクラク設置できる「自動切替開閉器」を採用し、省スペースでの設置を実現します。</p>
					<div class="primary-2">
						<p class="primary-2-ttl">省スペースでの設置を実現</p>
						<div class="primary-2-wrapper">
							<div class="img">
								<img src="" alt="">
							</div>
							<div class="note">※ 外部太陽光発電システムの併設時など配線によっては別途、分電盤ボックスが必要になります。</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</section>
	<!-- //feature -->


	<section class="warranty" data-target="warranty">
		<div class="wrapper">
			<h2 class="sec-ttl" id="warranty">保証</h2>
			<div class="w-content">
				<div class="img">
					<img src="<?=$img_path?>/single-product/guarantee_15year_icon.png" alt="25年製品保証">
				</div>
				<p class="heading">システム保証</p>
				<div class="graph">
					<img src="" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- //warranty -->


	<section class="component" data-target="component">
		<div class="wrapper">
			<h2 class="sec-ttl" id="component">構成品</h2>
			<ul class="component-list">
				<li class="component-item">
					<div class="img">
						<img src="" alt="">
					</div>
					<p class="item-name">蓄電池ユニットQREADY-B77-1<br>（オプション品）</p>
					<div class="accordion typeB">
						<div class="accordion-btn">
							<p class="txt">製品仕様を詳しく見る</p>
							<span class="icon"></span>
						</div>
						<div class="accordion-content">
							<ul class="spec03">
								<li class="spec03-item">
									<p class="label">型名</p>
									<p class="data">QREADY-B77-1</p>
								</li>
								<li class="spec03-item">
									<p class="label">タイプ</p>
									<p class="data">7.7kWhタイプ</p>
								</li>
								<li class="spec03-item">
									<p class="label">外形寸法（横×高さ×奥行）</p>
									<p class="data">458×608×268（mm）</p>
								</li>
								<li class="spec03-item">
									<p class="label">最大外形寸法（横×高さ×奥行）</p>
									<p class="data">444×530×192（mm）</p>
								</li>
								<li class="spec03-item">
									<p class="label">最大外形寸法（横×高さ×奥行）<br class="none-max-t"><span class="fs-10">※脚・背面カバーを含む</span></p>
									<p class="data">458×608×369（mm）</p>
								</li>
								<li class="spec03-item">
									<p class="label">質量</p>
									<p class="data">73kg</p>
								</li>
								<li class="spec03-item">
									<p class="label">定格質量</p>
									<p class="data">77kWh</p>
								</li>
								<li class="spec03-item">
									<p class="label">初期実効容量</p>
									<p class="data">6.8kWh<br class="none-max-t">（JEM1511による）</p>
								</li>
								<li class="spec03-item">
									<p class="label">出力（連系時／自立時）</p>
									<p class="data">4.0kW / 4.0kVA</p>
								</li>
								<li class="spec03-item">
									<p class="label">設置場所屋</p>
									<p class="data">屋外<span class="fs-10">※1</span></p>
								</li>
								<li class="spec03-item">
									<p class="label">動作温度</p>
									<p class="data">−10℃～＋40℃<span class="fs-8">※2</span></p>
								</li>
								<li class="spec03-item">
									<p class="label">メーカー希望小売価格（税込）</p>
									<p class="data">￥1,991,000</p>
								</li>
							</ul>
							<p class="note">
								※1 北海道・沖縄県には設置できません。<br>
								※2 動作温度範囲の上限もしくは下限付近になると、充放電電力が低下します。 <br>
								※ 掲載商品のデザイン、外観等は予告なく変更する場合がありますのでご了承ください。
							</p>
						</div>
					</div>
				</li>
				<li class="component-item">
					<div class="img">
						<img src="" alt="">
					</div>
					<p class="item-name">蓄電池ユニットQREADY-B97-1<br>（オプション品）</p>
					<div class="accordion typeB">
						<div class="accordion-btn">
							<p class="txt">製品仕様を詳しく見る</p>
							<span class="icon"></span>
						</div>
						<div class="accordion-content">
							<ul class="spec03">
								<li class="spec03-item">
									<p class="label">型名</p>
									<p class="data">QREADY-B97-1</p>
								</li>
								<li class="spec03-item">
									<p class="label">タイプ</p>
									<p class="data">9.7kWhタイプ</p>
								</li>
								<li class="spec03-item">
									<p class="label">外形寸法（横×高さ×奥行）</p>
									<p class="data">458×700×268（mm）</p>
								</li>
								<li class="spec03-item">
									<p class="label">最大外形寸法（横×高さ×奥行）</p>
									<p class="data">458×700×369（mm）</p>
								</li>
								<li class="spec03-item">
									<p class="label">最大外形寸法（横×高さ×奥行）<br class="none-max-t"><span class="fs-10">※脚・背面カバーを含む</span></p>
									<p class="data">458×608×369（mm）</p>
								</li>
								<li class="spec03-item">
									<p class="label">質量</p>
									<p class="data">87kg</p>
								</li>
								<li class="spec03-item">
									<p class="label">定格質量</p>
									<p class="data">9.7kWh</p>
								</li>
								<li class="spec03-item">
									<p class="label">初期実効容量</p>
									<p class="data">8.6kWh<br class="none-max-t">（JEM1511による）</p>
								</li>
								<li class="spec03-item">
									<p class="label">出力（連系時／自立時）</p>
									<p class="data">4.0kW / 4.0kVA</p>
								</li>
								<li class="spec03-item">
									<p class="label">設置場所屋</p>
									<p class="data">屋外<span class="fs-10">※1</span></p>
								</li>
								<li class="spec03-item">
									<p class="label">動作温度</p>
									<p class="data">−10℃～＋40℃<span class="fs-8">※2</span></p>
								</li>
								<li class="spec03-item">
									<p class="label">メーカー希望小売価格（税込）</p>
									<p class="data">￥2,651,000</p>
								</li>
							</ul>
							<p class="note">
								※1 北海道・沖縄県には設置できません。<br>
								※2 動作温度範囲の上限もしくは下限付近になると、充放電電力が低下します。 <br>
								※ 掲載商品のデザイン、外観等は予告なく変更する場合がありますのでご了承ください。
							</p>
						</div>
					</div>
				</li>
				<li class="component-item">
					<div class="img">
						<img src="" alt="">
					</div>
					<p class="item-name">EVパワー・ステーション®<br>（オプション品）</p>
					<div class="accordion typeB">
						<div class="accordion-btn">
							<p class="txt">製品仕様を詳しく見る</p>
							<span class="icon"></span>
						</div>
						<div class="accordion-content">
							<ul class="spec03">
								<li class="spec03-item">
									<p class="label">型名</p>
									<p class="data">VSG3-666CN7</p>
								</li>
								<li class="spec03-item">
									<p class="label">ユニット</p>
									<div class="data-1col">
										<p class="d1-data">パワーユニット（据置、壁掛）</p>
										<p class="d1-data">プラグホルダ（壁掛、ポール<span class="fs-10">※</span>）</p>
									</div>
								</li>
								<li class="spec03-item">
									<p class="label">外形寸法（横×高さ×奥行）</p>
									<div class="data-2cols">
										<p class="d2-label">パワーユニット</p>
										<p class="d2-data">470×620×200（mm）</p>
									</div>
									<div class="data-2cols">
										<p class="d2-label">プラグホルダ</p>
										<p class="d2-data">160×355×160（mm）</p>
									</div>
									<div class="data-2cols">
										<p class="d2-label">プラグホルダ（ポールを含む）</p>
										<p class="d2-data">160×1,356×160（mm）</p>
									</div>
								</li>
								<li class="spec03-item">
									<p class="label">質量</p>
									<div class="data-1col">
										<p class="d1-data">パワーユニット</p>
										<p class="d1-data">壁掛時29.4kg（パワーユニット：26.2kg、壁掛金具：3.2kg）</p>
										<p class="d1-data">据置時30.5kg（パワーユニット：26.2kg、据置金具：4.3kg）</p>
										<p class="d1-data">プラグホルダ</p>
										<p class="d1-data">壁掛時8.5kg（プラグホルダ：7.9kg、壁掛金具：0.6kg）</p>
										<p class="d1-data">自立時12.2kg（プラグホルダ：7.9kg、ポール：4.3kg）</p>
									</div>
								</li>								
								<li class="spec03-item">
									<p class="label">最大外形寸法（横×高さ×奥行）</p>
									<p class="data">444×530×192（mm）</p>
								</li>
								<li class="spec03-item">
									<p class="label">最大外形寸法（横×高さ×奥行）<br class="none-max-t"><span class="fs-10">※脚・背面カバーを含む</span></p>
									<p class="data">458×608×369（mm）</p>
								</li>
								<li class="spec03-item">
									<p class="label">出力（連系時／自立時）</p>
									<div class="data-2cols">
										<p class="d2-label">連系時</p>
										<p class="d2-data">6kW未満 / 4.0kVA</p>
									</div>
									<div class="data-2cols">
										<p class="d2-label">自立時</p>
										<p class="d2-data">6.0kVA未満<br>（片相3kVA未満）</p>
									</div>
								</li>
								<li class="spec03-item">
									<p class="label">設置場所屋</p>
									<p class="data">屋外</p>
								</li>
								<li class="spec03-item">
									<p class="label">動作温度</p>
									<p class="data">−20℃～＋50℃</p>
								</li>
								<li class="spec03-item">
									<p class="label">メーカー希望小売価格（税込）</p>
									<p class="data">￥1,991,000</p>
								</li>
							</ul>
							<p class="note">※ポールはオプション品です。</p>
						</div>
					</div>
				</li>
				<li class="component-item">
					<div class="img">
						<img src="" alt="">
					</div>
					<p class="item-name">室内リモコン<br>（オプション品）</p>
					<div class="accordion typeB">
						<div class="accordion-btn">
							<p class="txt">製品仕様を詳しく見る</p>
							<span class="icon"></span>
						</div>
						<div class="accordion-content">
							<ul class="spec03">
								<li class="spec03-item">
									<p class="label">型名</p>
									<p class="data">ES-R6</p>
								</li>
								<li class="spec03-item">
									<p class="label">寸法（横×高さ×奥行）</p>
									<p class="data">170×140×23（mm）</p>
								</li>
								<li class="spec03-item">
									<p class="label">本体質量</p>
									<p class="data">320g</p>
								</li>
								<li class="spec03-item">
									<p class="label">設置環境</p>
									<div class="data-2cols">
										<p class="d2-label">設置条件室内</p>
										<p class="d2-data">0～＋40℃、結露なきこと</p>
									</div>
									<div class="data-2cols">
										<p class="d2-label">動作温度</p>
										<p class="d2-data">0～＋40℃</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<!-- //component -->


	<section class="guide" data-target="guide">
		<div class="wrapper">
			<h2 class="sec-ttl" id="guide">安心導入ガイド</h2>
			<ul class="flow">
				<li class="step">
					<p class="no">STEP1</p>
					<h3 class="step-ttl">サイトでお見積り依頼</h3>
					<div class="imgc">
						<img src="<?=$img_path?>/single-product/guide-step-1.png" alt="">
					</div>
					<div class="accordion typeB">
						<div class="accordion-btn">
							<p class="txt">詳細を見る</p>
							<span class="icon"></span>
						</div>
						<div class="accordion-content">
							<p class="txt">
								ウェブサイトのお見積り依頼フォームをご記入ください。<br>
								担当者から確認後ご連絡します。<br>
								その後当社から販売店をご紹介します。
							</p>
						</div>
					</div>
				</li>
				<li class="step">
					<p class="no">STEP2</p>
					<h3 class="step-ttl">ヒアリング・ご提案</h3>
					<div class="imgc">
						<img src="<?=$img_path?>/single-product/guide-step-2.png" alt="">
					</div>
					<div class="accordion typeB">
						<div class="accordion-btn">
							<p class="txt">詳細を見る</p>
							<span class="icon"></span>
						</div>
						<div class="accordion-content">
							<p class="txt">
								ご紹介した販売店から具体的な状況（例：電気代のご使用状況）やご希望などヒアリングいたします。<br>
								ヒアリングの上、最適な内容をご提案いたします。
							</p>
						</div>
					</div>
				</li>
				<li class="step">
					<p class="no">STEP3</p>
					<h3 class="step-ttl">ご契約・施工</h3>
					<div class="imgc">
						<img src="<?=$img_path?>/single-product/guide-step-3.png" alt="">
					</div>
					<div class="accordion typeB">
						<div class="accordion-btn">
							<p class="txt">詳細を見る</p>
							<span class="icon"></span>
						</div>
						<div class="accordion-content">
							<p class="txt">
								ご契約の後、現地調査、施工を行います。（販売店によりご契約、現地調査は前後する場合がございます）
							</p>
						</div>
					</div>
				</li>
				<li class="step">
					<p class="no">STEP4</p>
					<h3 class="step-ttl">ご契約・施工</h3>
					<div class="imgc">
						<img src="<?=$img_path?>/single-product/guide-step-4.png" alt="">
					</div>
				</li>
			</ul>
		</div>
	</section>
	<!-- //guide -->


	<section class="support" data-target="support">
		<div class="wrapper">
			<h2 class="sec-ttl" id="support">ご検討から設置後のアフターまでも徹底サポートいたします。</h2>
			<div class="support_list">
				<a href="#" class="item">
					<div class="imgc">
						<img src="<?=$img_path?>/single-product/support_icon_1.svg" alt="">
					</div>
					<p class="txt txt-faq">購入前の製品に関するご質問</p>
				</a>
				<span class="border"></span>
				<a href="#" class="item">
					<div class="imgc">
						<img src="<?=$img_path?>/single-product/support_icon_2.svg" alt="">
					</div>
					<p class="txt txt-after">アフターフォロー</p>
				</a>
			</div>
		</div>
	</section>
	<!-- //support -->


	<section class="compare" data-target="compare">
		<div class="wrapper">
			<h2 class="sec-ttl" id="compare">製品を比較する</h2>
			<div class="product top">
				<div class="item">
					<div class="imgc">
						<img src="" alt="">
					</div>
					<div class="name">
						<select name="" id="" class="select-product-name">
							<option value="">QREADY-R59-1</option>
						</select>
					</div>
					<a href="#" class="more">詳しく見る</a>
				</div>
				<div class="item">
					<div class="imgc">
						<img src="" alt="">
					</div>
					<div class="name">
						<select name="" id="" class="select-product-name">
							<option value="">HQJPKA30-5 /KA40-5/KA55-5</option>
						</select>
					</div>
					<a href="#" class="more">詳しく見る</a>
				</div>
			</div>
			<div class="table table-visible">
				<div class="row row-t">
					<div class="heading">
						<div class="imgc">
							<img src="<?=$img_path?>/single-product/compare_icon_2.svg" alt="">
						</div>
						<p class="txt">変換効率</p>
					</div>
					<div class="product">
						<div class="item">
							<p class="data-txt">96%</p>
						</div>
						<div class="item">
							<p class="data-txt">96.5％（JIS C8961に準拠）</p>
						</div>
					</div>
				</div>
				<div class="row row-t">
					<div class="heading">
						<div class="imgc">
							<img src="" alt="">
						</div>
						<p class="txt">設置場所</p>
					</div>
					<div class="product">
						<div class="item">
							<p class="data-txt">屋外</p>
						</div>
						<div class="item">
							<p class="data-txt">屋内</p>
						</div>
					</div>
				</div>
				<div class="row row-t">
					<div class="heading">
						<div class="imgc">
							<img src="<?=$img_path?>/single-product/compare_icon_1.svg" alt="">
						</div>
						<p class="txt">定格出力</p>
					</div>
					<div class="product">
						<div class="item">
							<p class="data-txt">5.9kW / 5.9kVA</p>
						</div>
						<div class="item">
							<p class="data-txt">（KA30-5）3.0kW<br>（KA40-5）4.0kW<br>（KA55-5）5.5kW</p>
						</div>
					</div>
				</div>
				<div class="row row-t">
					<div class="heading">
						<div class="imgc">
							<img src="<?=$img_path?>/single-product/comparison_icon_size.svg" alt="">
						</div>
						<p class="txt">寸法（高さx横x奥行）</p>
					</div>
					<div class="product">
						<div class="item">
							<p class="data-txt">444×530×192（mm）<span class="fs-10">※取付金具含まず</span></p>
						</div>
						<div class="item">
							<p class="data-txt">550×270×190（mm）</p>
						</div>
					</div>
				</div>
				<div class="row row-t">
					<div class="heading">
						<div class="imgc">
							<img src="" alt="">
						</div>
						<p class="txt">質量</p>
					</div>
					<div class="product">
						<div class="item">
							<p class="data-txt">20kg <span class="fs-10">※取付金具含まず</span></p>
						</div>
						<div class="item">
							<p class="data-txt">（KA30-5）約17㎏<br>（KA40-5）約18㎏<br>（KA55-5）約18㎏</p>
						</div>
					</div>
				</div>
			</div>
			<div class="accordion typeA">
				<div class="accordion-content">
					<div class="table">
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">最大外形寸法（横×高さ×奥行）<br>※取付金具を含む</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">444×624×200（mm）</p>
								</div>
								<div class="item">
									<p class="data-txt">－</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">入力電力</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">2.2kW（３回路合計6.6kW）</p>
								</div>
								<div class="item">
									<p class="data-txt">－</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">入力回路数</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">3回路</p>
								</div>
								<div class="item">
									<p class="data-txt">－</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">動作温度</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">−20℃～＋40℃</p>
								</div>
								<div class="item">
									<p class="data-txt">－</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">直流入力</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">－</p>
								</div>
								<div class="item">
									<p class="data-txt">定格入力電圧:DC330V<br>運転可能電圧範囲:DC40～450V</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">定格力率</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">－</p>
								</div>
								<div class="item">
									<p class="data-txt">0.95</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">絶縁方式</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">－</p>
								</div>
								<div class="item">
									<p class="data-txt">トランスレス方式</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">電気方式（相数）</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">－</p>
								</div>
								<div class="item">
									<p class="data-txt">単相2線式（単相3線式配電線に接続）</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">自立運転時の定格出力</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">－</p>
								</div>
								<div class="item">
									<p class="data-txt">1.5kVA</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">使用周囲温</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">－</p>
								</div>
								<div class="item">
									<p class="data-txt">ー10～＋40℃（氷結・結露なきこと）</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">メーカー希望小売価格（税込）</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">￥880,000</p>
								</div>
								<div class="item">
									<p class="data-txt">OPEN</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-btn">
					<p class="txt">すべての仕様を比較</p>
					<span class="icon"></span>
				</div>
			</div>
			<a href="#" class="banner">
				<img src="" alt="パワーコンディショナ・モニター一覧ページへ">
			</a>
		</div>
	</section>
	<!-- //compare -->



	<div class="fixed-anchor">
		<a href="#overview" data-id="overview" class="link"><span class="txt">TOP</span></a>
		<a href="#feature" data-id="feature" class="link"><span class="txt">特長</span></a>
		<a href="#warranty" data-id="warranty" class="link"><span class="txt">保証</span></a>
		<a href="#component" data-id="component" class="link"><span class="txt">構成品</span></a>
		<a href="#guide" data-id="guide" class="link"><span class="txt">安心導入ガイド</span></a>
		<a href="#support" data-id="support" class="link"><span class="txt">徹底サポート</span></a>
		<a href="#compare" data-id="compare" class="link"><span class="txt">比較</span></a>
	</div>
	<!-- //fixed-anchor -->

	<div class="modal-window" id="modal-window">
		<div class="modal-wrap">
			<div class="frame">
				<div class="content"></div>
			</div>
			<div class="close">
				<div class="close-btn"></div>
				<p class="txt">閉じる</p>
			</div>
		</div>
	</div>
	<!-- //modal-window -->
</main>
<?php
get_footer();