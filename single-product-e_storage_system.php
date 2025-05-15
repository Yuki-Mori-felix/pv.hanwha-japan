<?php get_header(); ?>
<?php
	/*
	Template Name: 蓄電システム
	Template Post Type: product
	*/

	//画像パス
	$img_path = get_stylesheet_directory_uri()."/images";
?>
<main class="single-products e_storage_system">

	<section class="top_product_logo">
		<div class="wrapper">
			<p class="logo-txt">蓄電システム</p>
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
								<li class="splide__slide"><img src="<?=$img_path?>/single-product/image_POWER_DEPO_H_PDH-6000S01_01.png" alt=""></li>
								<li class="splide__slide"><img src="<?=$img_path?>/single-product/image_POWER_DEPO_H_PDH-6000S01_03.png" alt=""></li>
							</ul>
						</div>
					</div>
					<div class="splide" id="splide-S" aria-label="商品詳細サムネイルスライダー">
						<div class="splide__track">
							<div	div class="splide__list">
								<li class="splide__slide"><img src="<?=$img_path?>/single-product/image_POWER_DEPO_H_PDH-6000S01_02.png" alt="">
								<li class="splide__slide"><img src="<?=$img_path?>/single-product/image_POWER_DEPO_H_PDH-6000S01_03.png" alt="">
							</div>
						</div>
					</div>
					<div class="web-ar" id="web-ar">
						<img src="<?=$img_path?>/single-product/web-ar.svg" alt="3D">						
					</div>
				</div>
				<ul class="ess_certification">
					<li class="ess_ctf-item-1">
						<img src="<?=$img_path?>/single-product/guarantee_15year_icon_small.png" alt="最長15年保証">
					</li>
					<li class="ess_ctf-item-2">
						<p class="txt">全負荷型</p>
					</li>
					<li class="ess_ctf-item-3">
						<p class="txt">屋外設置</p>
					</li>
				</ul>
			</div>
			<div class="right">
				<p class="format">ハイブリッド型</p>
				<h2 class="product-name">POWER DEPO® H</h2>
				<p class="product-maker">住友電工製</p>
				<h3 class="description">高機能家庭用蓄電池ユニット</h3>
				<ul class="tag">
					<li class="tag-item">高機能集約</li>
					<li class="tag-item">安心の大容量</li>
					<li class="tag-item">AI制御</li>
				</ul>
				<ul class="spec01">
					<li class="spec01-item">
						<p class="txt"><span class="bold">蓄電地容量</span><br>12.8kWh</p>
					</li>
					<li class="spec01-item">
						<p class="txt"><span class="bold">寸法（横X高さX奥行）</span><br>840×380×1,200（mm）</p>
					</li>
				</ul>
				<ul class="spec02">
					<li class="spec02-item">
						<p class="label">型名</p>
						<p class="data">PDH-6000S01</p>
					</li>
					<li class="spec02-item">
						<p class="label">重量</p>
						<p class="data">約230kg</p>
					</li>
				</ul>
				<div class="accordion typeA">
					<div class="accordion-content">
						<ul class="spec03">
							<li class="spec03-item">
								<p class="label">蓄電池<span class="fs-8">※1</span></p>
								<p class="detail-label">種類</p>
								<p class="detail-data">リチウムイオン電池</p>
								<span class="blank"></span><!--空コマ-->
								<p class="detail-label">蓄電容量</p>
								<p class="detail-data">12.8kWh（初期実効容量11.9kWh）</p>
								<span class="blank"></span><!--空コマ-->
								<p class="detail-label">定格電圧</p>
								<p class="detail-data">DC約200V</p>
							</li>
							<li class="spec03-item">
								<p class="label">入力 5.9kVA<br class="none-max-t"><span class="fs-10">（最大需要電力AC5.9kVA）</span></p>
								<p class="detail-label">回路数<br class="none-max-t">（太陽光）</p>
								<p class="detail-data">4回路<br>1回路あたり2.2kW</p>
								<span class="blank"></span><!--空コマ-->
								<p class="detail-label">最大電流<br class="none-max-t">（太陽光）</p>
								<p class="detail-data">短絡耐量：15A<br>動作電流：14A</p>
							</li>
							<li class="spec03-item">
								<p class="label">出力 6.0kVA<br class="none-max-t"><span class="fs-10">（力率0.95のとき5.7kW）</span></p>
								<p class="detail-label">連携出力</p>
								<p class="detail-data">6.0kVA</p>
								<span class="blank"></span><!--空コマ-->
								<p class="detail-label">自立出力</p>
								<p class="detail-data">6.0kVA</p>
							</li>
							<li class="spec03-item">
								<p class="label">対応負荷容量</p>
								<p class="data">75A</p>
							</li>
							<li class="spec03-item">
								<p class="label">充電回復時間</p>
								<p class="data">最速約2時間</p>
							</li>
							<li class="spec03-item">
								<p class="label">環境</p>
								<p class="detail-label">動作温度<span class="fs-8">※2</span></p>
								<p class="detail-data">−20℃～＋45℃</p>
								<span class="blank"></span><!--空コマ-->
								<p class="detail-label">動作温度</p>
								<p class="detail-data">15～90%RH</p>
								<span class="blank"></span><!--空コマ-->
								<p class="detail-label">設置場所<span class="fs-8">※3</span></p>
								<p class="detail-data">屋外</p>
							</li>
							<li class="spec03-item">
								<p class="label">メーカー希望小売価格（税込）</p>
								<p class="data">¥4,598,000</p>
							</li>
						</ul>
						<p class="note">※100V/200Vで使用できる電力が異なります。</p>
						<p class="note">
							<br>
							※1 初期実行容量の50％以下になった場合、蓄電システムは安全上充放電等の動作を停止します。ただしパワーコンディショナは動作し、太陽光による発電を継続します。<br>
							※2 本体に内蔵された温度センサ計測値。周囲温度により出力を抑制する場合があります。<br>
							※3 屋外の場合は、重塩害・塩害地域や省エネルギー基準区分8地域を除く。
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
						<h3 class="txt">高性能を1台に集約した利便性</h3>
					</div>
					<p class="lead">必要な全ての機能を濃縮</p>
				</div>
				<div class="primary">
					<div class="primary-wrapper">
						<div class="left">
							<div class="point">
								<h4 class="ttl">一体型ボディに高機能を凝縮</h4>
								<div class="imgc">
									<img src="<?= $img_path ?>/single-product/POWER_DEPO_H_PDH-6000S0_1_1.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="right">
							<div class="right-wrap">
								<p class="outline">
									パワーコンディショナを別途購入しなくてもOK。また、電流センサや安全対策など必要な機能をワンボディにまるごと搭載して、さらに便利です。
								</p>
								<ul class="right_point_list">
									<li class="item">パワーコンディショナなどを別途設置不要で、手間をかからない利便性</li>
									<li class="item">一体型であるため、余計な機器や複雑な配線がなくすっきり設置</li>
									<li class="item">1台で単機能タイプ・ハイブリッドタイプどちらでも使用可能</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="item">
				<div class="wrapper">
					<div class="feature-ttl">
						<span class="no">2</span>
						<h3 class="txt">安心できる12.8kWの大容量</h3>
					</div>
					<p class="lead">停電時もお家まるごとバックアップ</p>
				</div>
				<div class="primary">
					<div class="primary-wrapper">
						<div class="left">
							<div class="point">
								<h4 class="ttl">停電時にはお家丸ごとバックアップ</h4>
								<div class="imgc">
									<img src="<?= $img_path ?>/single-product/POWER_DEPO_H_PDH-6000S0_2_2.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="right">
							<div class="right-wrap">
								<p class="outline">
									12.8kWhの大容量で長期間の停電にも安心。また、太陽光発電の電力をためて、電気の自給自足を可能にします。
								</p>
								<ul class="right_point_list">
									<li class="item">照明や冷蔵庫、エアコンなど、日常生活に必要な家電のほとんどをバックアップ</li>
									<li class="item">曇天・雨天時の発電の少ない時も貯まった電気を活用できて経済効果を最大化</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="item">
				<div class="wrapper">
					<div class="feature-ttl">
						<span class="no">3</span>
						<h3 class="txt">AI制御でお得に活用</h3>
					</div>
					<p class="lead">充電量を自動調整・停電に備えた緊急充電モード</p>
				</div>
				<div class="primary">
					<div class="primary-wrapper">
						<div class="left">
							<div class="point">
								<h4 class="ttl">出力性能</h4>
								<div class="imgc">
									<img src="<?= $img_path ?>/single-product/POWER_DEPO_H_PDH-6000S0_3_1.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="right">
							<div class="right-wrap">
								<p class="outline">
									AIがお得な夜間電力の充電量を自 動調整したり、災害時は停電に備 えて緊急充電モードに自動切換え して、かしこく活用できます。
								</p>
								<ul class="right_point_list">
									<li class="item">別途の操作なしでも、AIが自動で状況によって最適なモードを適用するから簡便</li>
									<li class="item">HEMS機器やサービス料を別途支払わなくてもインターネットに接続するだけでAI制御可能</li>
								</ul>
							</div>
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
			<ul class="warranty_list">
				<li class="item item-1">
					<div class="detail">
						<div class="imgc">
							<img src="<?=$img_path?>/single-product/guarantee_15year_icon.png" alt="25年製品保証">
						</div>
						<div class="heading">蓄電システム保証</div>
						<p class="txt">蓄電システムを15年にわたり保証いたします。</p>
					</div>
					<div class="graph">
						<img src="<?=$img_path?>/single-product/Product_details_graph_POWER_DEPO_H_PDH-6000S0__1.png" alt="">
					</div>
				</li>
			</ul>
		</div>
	</section>
	<!-- //warranty -->

	
	<section class="component" data-target="component">
		<div class="wrapper">
			<h2 class="sec-ttl" id="component">構成品</h2>
			<ul class="component-list">
				<li class="component-item wide">
					<div class="img">
						<img src="<?=$img_path?>/single-product/Components_PDH_PowerDepo4_RCS-6000SHB.png" alt="">
					</div>
					<p class="item-name">リモコン</p>
					<div class="accordion typeB">
						<div class="accordion-btn">
							<p class="txt">製品仕様を詳しく見る</p>
							<span class="icon"></span>
						</div>
						<div class="accordion-content">
							<ul class="spec03">
								<li class="spec03-item">
									<p class="label">型名</p>
									<p class="data">RCS-6000SHB</p>
								</li>
								<li class="spec03-item">
									<p class="label">外観</p>
									<p class="data">液晶（バックライト有り）、タッチパネル</p>
								</li>
								<li class="spec03-item">
									<p class="label">環境</p>
									<p class="detail-label">動作温度</p>
									<p class="detail-data">周囲温度　−10～＋40℃</p>
									<span class="blank"></span><!--空コマ-->
									<p class="detail-label">設置場所</p>
									<p class="detail-data">屋内</p>
								</li>
								<li class="spec03-item">
									<p class="label">寸法（横×高さ×奥行）</p>
									<p class="data">100×130×21（mm）</p>
								</li>
								<li class="spec03-item">
									<p class="label">重量</p>
									<p class="data">約180g（取付け部材を含む）</p>
								</li>
								<li class="spec03-item">
									<p class="label">外部通信</p>
									<p class="detail-label">通信機能</p>
									<p class="detail-data">無線LAN（IEEE802.11b/g/n） 2.4GHz</p>
									<span class="blank"></span><!--空コマ-->
									<p class="detail-label">通信プロトコル※</p>
									<p class="detail-data">ECHONET Lite（Ver.1.13、APPENDIX M）</p>
								</li>
								<li class="spec03-item">
									<p class="label">メーカー希望小売価格（税込）</p>
									<p class="data">¥4,598,000</p>
								</li>
							</ul>
							<p class="note">※ ECHONET、ECHONET Lite は、一般社団法人エコーネットコンソーシアムの商標または登録商標です。</p>
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
						<img src="<?=$img_path?>/single-product/comparison_POWER_DEPO_H_PDH-6000S0.png" alt="">
					</div>
					<div class="name">
						<select name="" id="" class="select-product-name">
							<option value="">POWER DEPO® H (住友電工製)</option>
						</select>
					</div>
					<a href="#" class="more">詳しく見る</a>
				</div>
				<div class="item">
					<div class="imgc">
						<img src="<?=$img_path?>/single-product/comparison_EIBS7.png" alt="">
					</div>
					<div class="name">
						<select name="" id="" class="select-product-name">
							<option value="">EIBS7 (ダイヤゼブラ電機製)</option>
						</select>
					</div>
					<a href="#" class="more">詳しく見る</a>
				</div>
			</div>
			<div class="table table-visible">
				<div class="row row-t">
					<div class="heading">
						<div class="imgc">
							<img src="<?=$img_path?>/single-product/PDH_comparison_icon_1.svg" alt="">
						</div>
						<p class="txt">蓄電容量</p>
					</div>
					<div class="product">
						<div class="item">
							<p class="data-txt">12.8kWh</p>
						</div>
						<div class="item">
							<p class="data-txt">7.04kWh</p>
						</div>
					</div>
				</div>
				<div class="row row-t">
					<div class="heading">
						<div class="imgc">
							<img src="<?=$img_path?>/single-product/PDH_comparison_icon_2.svg" alt="">
						</div>
						<p class="txt">寸法（高さx横x奥行）</p>
					</div>
					<div class="product">
						<div class="item">
							<p class="data-txt">840×380×1,200（mm）</p>
						</div>
						<div class="item">
							<p class="data-txt">580×1070×370（mm）</p>
						</div>
					</div>
				</div>
				<div class="row row-t">
					<div class="heading">
						<div class="imgc">
							<img src="<?=$img_path?>/single-product/PDH_comparison_icon_3.svg" alt="">
						</div>
						<p class="txt">蓄電池ユニット2台使用</p>
					</div>
					<div class="product">
						<div class="item">
							<p class="data-txt">－</p>
						</div>
						<div class="item">
							<p class="data-txt">〇</p>
						</div>
					</div>
				</div>
				<div class="row row-t">
					<div class="heading">
						<div class="imgc">
							<img src="<?=$img_path?>/single-product/PDH_comparison_icon_4.svg" alt="">
						</div>
						<p class="txt">保証</p>
					</div>
					<div class="product">
						<div class="item">
							<p class="data-txt">蓄電池本体（パワーコンディショナ一体型）15年・リモコン2年<br><span class="sm">※注釈テキストテキストテキストテキスト</span></p>
						</div>
						<div class="item">
							<p class="data-txt">蓄電池本体、パワーコンディショナ―など15年・モニター1年<br><span class="sm">※注釈テキストテキストテキストテキスト</span></p>
						</div>
					</div>
				</div>
				<div class="row row-t">
					<div class="heading">
						<div class="imgc">
							<img src="<?=$img_path?>/single-product/PDH_comparison_icon_5.svg" alt="">
						</div>
						<p class="txt">200V機器対応</p>
					</div>
					<div class="product">
						<div class="item">
							<p class="data-txt">〇</p>
						</div>
						<div class="item">
							<p class="data-txt">〇</p>
						</div>
					</div>
				</div>
			</div>
			<div class="accordion typeA">
				<div class="accordion-content">
					<div class="table">
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">型名</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">PDH-6000S01</p>
								</div>
								<div class="item">
									<p class="data-txt">EOF-LB70-TK</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">重量</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">約230kg</p>
								</div>
								<div class="item">
									<p class="data-txt">約130kg</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">蓄電池<span class="fs-8">※1</span></p>
							</div>
							<div class="product-table">
								<div class="product-table-row">
									<p class="detail-label">種類</p>
									<p class="detail-data">リチウムイオン電池</p>
									<p class="detail-data">リチウムイオン電池</p>
								</div>
								<div class="product-table-row">
									<p class="detail-label">蓄電容量</p>
									<p class="detail-data">12.8kWh（初期実効容量11.9kWh）</p>
									<p class="detail-data">－</p>
								</div>
								<div class="product-table-row">
									<p class="detail-label">定格電圧</p>
									<p class="detail-data">DC約200V</p>
									<p class="detail-data">－</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">入力 5.9kVA<br class="none-max-t"><span class="fs-10">（最大需要電力AC5.9kVA）</span></p>
							</div>
							<div class="product-table">
								<div class="product-table-row">
									<p class="detail-label">回路数<br class="none-max-t">（太陽光）</p>
									<p class="detail-data">4回路<br>1回路あたり2.2kW</p>
									<p class="detail-data">－</p>
								</div>
								<div class="product-table-row">
									<p class="detail-label">最大電流<br class="none-max-t">（太陽光）</p>
									<p class="detail-data">短絡耐量：15A<br>動作電流：14A</p>
									<p class="detail-data">－</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">出力 6.0kVA<br class="none-max-t"><span class="fs-10">（力率0.95のとき5.7kW）</span></p>
							</div>
							<div class="product-table">
								<div class="product-table-row">
									<p class="detail-label">連携出力</p>
									<p class="detail-data">6.0kVA</p>
									<p class="detail-data">－</p>
								</div>
								<div class="product-table-row">
									<p class="detail-label">自立出力</p>
									<p class="detail-data">6.0kVA</p>
									<p class="detail-data">－</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">対応負荷容量</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">75A</p>
								</div>
								<div class="item">
									<p class="data-txt">－</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">充電回復時間</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">最速約2時間</p>
								</div>
								<div class="item">
									<p class="data-txt">－</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">環境</p>
							</div>
							<div class="product-table">
								<div class="product-table-row">
									<p class="detail-label">動作温度<span class="fs-8">※2</span></p>
									<p class="detail-data">−20℃～＋45℃</p>
									<p class="detail-data">－10～＋45℃</p>
								</div>
								<div class="product-table-row">
									<p class="detail-label">動作温度</p>
									<p class="detail-data">15～90%RH</p>
									<p class="detail-data">－</p>
								</div>
								<div class="product-table-row">
									<p class="detail-label">設置場所<span class="fs-8">※3</span></p>
									<p class="detail-data">屋外</p>
									<p class="detail-data">－</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">メーカー希望小売価格（税込）</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">¥4,598,000</p>
								</div>
								<div class="item">
									<p class="data-txt">－</p>
								</div>
							</div>
						</div>
					</div>
					<p class="acc-note">※100V/200Vで使用できる電力が異なります。</p>
				</div>
				<div class="accordion-btn">
					<p class="txt">すべての仕様を比較</p>
					<span class="icon"></span>
				</div>
			</div>
			<a href="#" class="banner">
				<img src="<?=$img_path?>/single-product/PDH_HEMS_Product details_banner.png" alt="蓄電システム・HEMS製品一覧ページへ">
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