<?php get_header(); ?>
<?php
	/*
	Template Name: Re.RISE
	Template Post Type: product
	*/

	//画像パス
	$img_path = get_stylesheet_directory_uri()."/images";
?>
<main class="single-products rerise">

	<section class="top_product_logo">
		<div class="wrapper">
			<img src="" alt="Re.RISE">
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
								<li class="splide__slide"><img src="<?=$img_path?>/single-product/module_Re.RISE-G3_440_01.jpg" alt=""></li>
								<li class="splide__slide"><img src="<?=$img_path?>/single-product/module_Re.RISE-G3_440_03.png" alt=""></li>
							</ul>
						</div>
					</div>
					<div class="splide" id="splide-S" aria-label="商品詳細サムネイルスライダー">
						<div class="splide__track">
							<div	div class="splide__list">
								<li class="splide__slide"><img src="<?=$img_path?>/single-product/module_Re.RISE-G3_440_02.png" alt="">
								<li class="splide__slide"><img src="<?=$img_path?>/single-product/module_Re.RISE-G3_440_03.png" alt="">
							</div>
						</div>
					</div>
					<div class="web-ar" id="web-ar">
						<img src="<?=$img_path?>/single-product/web-ar.svg" alt="3D">						
					</div>
				</div>
				<ul class="certification">
					<li class="ctf-item-1">
						<img src="<?=$img_path?>/single-product/product_details_top_No-1.png" alt="太陽光発電システム 新築住宅シェア2年連続NO.1">
					</li>
					<li class="ctf-item-2">
						<img src="<?=$img_path?>/single-product/product_details_top_Re.RISE-G3_440_25Years_2-Warranty_Primary_JP.png" alt="25年製品・出力保証">
					</li>
				</ul>
			</div>
			<div class="right">
				<p class="new">NEW</p>
				<h2 class="product-name">Re.RISE-G3 440</h2>
				<h3 class="description">新世代バックコンタクト技術で さらに高効率・高出力</h3>
				<ul class="tag">
					<li class="tag-item">バックコンタクト技術</li>
					<li class="tag-item">2種混合設置OK<span class="fs-10">※</span></li>
					<li class="tag-item">25年長期保証</li>
				</ul>
				<ul class="spec01">
					<li class="spec01-item">
						<p class="txt"><span class="bold">公称最大出力<span class="sm">（+3%/-0W）</span></span><br>440W</p>
					</li>
					<li class="spec01-item">
						<p class="txt"><span class="bold">モジュール変換効率</span><br>22.5％</p>
					</li>
				</ul>
				<ul class="spec02">
					<li class="spec02-item">
						<p class="label">外形寸法（長さ×幅×厚み）</p>
						<p class="data">1,722×1,134×30（mm）</p>
					</li>
					<li class="spec02-item">
						<p class="label">質量</p>
						<p class="data">20.8kg</p>
					</li>
				</ul>
				<div class="accordion typeA">
					<div class="accordion-content">
						<ul class="spec03">
							<li class="spec03-item">
								<p class="label">公称短絡電流（Isc）</p>
								<p class="data">14.30A</p>
							</li>
							<li class="spec03-item">
								<p class="label">公称開放電圧（Voc）</p>
								<p class="data">39.53V</p>
							</li>
							<li class="spec03-item">
								<p class="label">公称最大出力動作電流（Imp）</p>
								<p class="data">13.24A</p>
							</li>
							<li class="spec03-item">
								<p class="label">公称最大出力動作電圧（Vmp）</p>
								<p class="data">33.24V</p>
							</li>
							<li class="spec03-item">
								<p class="label">フレーム材料</p>
								<p class="data">アルミニウム合金（アルマイト処理）、黒色</p>
							</li>
							<li class="spec03-item">
								<p class="label">セル</p>
								<p class="data">6×18(単結晶ハーフセル）</p>
							</li>
							<li class="spec03-item">
								<p class="label">端子ボックス防水特性</p>
								<p class="data">保護クラスIP68(バイパスダイオード内蔵）</p>
							</li>
							<li class="spec03-item">
								<p class="label">保証</p>
								<p class="data">製品保証25年・出力保証25年</p>
							</li>
							<li class="spec03-item">
								<p class="label">最大圧風荷重 / 最大表面荷重</p>
								<p class="data">3,600Pa / 5,400Pa</p>
							</li>
							<li class="spec03-item">
								<p class="label">メーカー希望小売価格（税込）</p>
								<p class="data">￥324,280</p>
							</li>
						</ul>
						<p class="note">※G3シリーズ同士に限ります。</p>
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
		<div class="rerise-video">
			<img src="<?=$img_path?>/single-product/Re.RISE_top_video.jpg" alt="">
		</div>
		<a href="" class="rerise-banner">
			<img src="<?=$img_path?>/single-product/Re.RISE_banner.jpg" alt="">
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
						<h3 class="txt">さらに高出力・高効率実現</h3>
					</div>
					<p class="lead">新世代バックコンタクト技術搭載</p>
				</div>
				<div class="primary">
					<div class="primary-wrapper">
						<div class="left">
							<div class="point">
								<h4 class="ttl">バックコンタクト技術</h4>
								<div class="imgc">
									<img src="<?=$img_path?>/single-product/Re.RISE-G3_440_1_1.jpg" alt="">
								</div>
							</div>
							<p class="note">※ 従来品：Re.RISE 415、バックコンタクトセル：Re.RISE-G3 440</p>
						</div>
						<div class="right">
							<div class="right-wrap">
								<p class="outline">
									Re.RISE-G3 440は裏面に配線を集約したバックコンタクト技術採用で、受光面（表面）に光を丸ごと受け入れることができます。
								</p>
								<ul class="right_point_list">
									<li class="item">表面に配線がなく、最大限の光を受けこんで発電量を極大化</li>
									<li class="item">配線の陰で発生する発電ロス無しで効率をさらにアップ</li>
									<li class="item">低照度でも従来品より発電性能約2％向上</li>
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
						<h3 class="txt">2種設置可能※で設置容量が最大23.4％増加※</h3>
					</div>
					<p class="note">IEC規格：国際電気標準会議が定めた電気及び電子技術分野の国際標準規格／※従来品対比、従来品：Re.RISE-G2 435</p>
					<p class="lead">サイズが違う2種の組み合わせでスペースを最大活用</p>
				</div>
				<div class="primary">
					<div class="primary-wrapper">
						<div class="left">
							<div class="point">
								<h4 class="ttl">設置例</h4>
								<div class="imgc">
									<img src="<?=$img_path?>/single-product/Re.RISE-G3_440_2_2.jpg" alt="">
								</div>
							</div>
							<div class="note">※ 上記配置例はイメージです。屋根の面積、形状などにより組み合わせの枚数、配置は異なります。</div>
						</div>
						<div class="right">
							<div class="right-wrap">
								<p class="outline">
									サイズの小さいRe.RISE-G3 290との混合設置が可能で、屋根をムダなところなく有効活用できます。
								</p>
								<p class="note">※Re.RISE-G3 440単体の設置も可能です。</p>
								<ul class="right_point_list">
									<li class="item">屋根の限られた設置スペースを最大活用し、設置容量の増加により、発電量もさらに増加</li>
									<li class="item">両方ともバックコンタクトセルを採用し、混合設置でさらなる高効率・高出力実現</li>
									<li class="item">設置容量アップで、長期運用時経済メリットもアップ</li>
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
						<h3 class="txt">安心の25年長期保証</h3>
					</div>
					<p class="lead">優れた技術力と厳格な品質管理、手厚いアフターフォロー</p>
				</div>
				<div class="primary">
					<div class="primary-wrapper">
						<div class="left">
							<div class="point">
								<h4 class="ttl">出力性能</h4>
								<div class="imgc">
									<img src="<?=$img_path?>/single-product/Re.RISE-G3_440_3_1.jpg" alt="">
								</div>
							</div>
							<div class="point">
								<h4 class="ttl">品質テスト一例</h4>
								<div class="imgc">
									<img src="<?=$img_path?>/single-product/Re.RISE-G3_440_3_2.jpg" alt="">
								</div>
							</div>
							<div class="point">
								<h4 class="ttl">日本各地に広がるハンファジャパンのネットワーク</h4>
								<div class="imgc">
									<img src="<?=$img_path?>/single-product/Re.RISE-G3_440_3_3.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="right">
							<div class="right-wrap">
								<p class="outline">
									最高レベルの25年製品・出力保証をお届けします。また、長期保証から25年間発生する約44万円のお得もご期待いただけます。
								</p>
								<ul class="right_point_list">
									<li class="item">屋根の限られた設置スペースを最大活用し、設置容量の増加により、発電量もさらに増加</li>
									<li class="item">全国拠点に広がっているネットワークからアフターフォローにも即時対応可能</li>
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
							<img src="<?=$img_path?>/single-product/Product_details_warranty_Re.RISE-G3_440_25Years_Warranty_Primary_JP.png" alt="25年製品保証">
						</div>
						<div class="heading">出力保証</div>
						<p class="txt">太陽電池モジュール（太陽光パネル）の出力性能を、25年もの長期間保証いたします。</p>
					</div>
					<div class="graph">
						<img src="<?=$img_path?>/single-product/Product_details_warranty_Re.RISE-G3_440_1.png" alt="">
					</div>
				</li>
				<li class="item item-2">
					<div class="detail">
						<div class="imgc">
							<img src="<?=$img_path?>/single-product/Product_details_warranty_Re.RISE-G3_440_25Years_Products_Warranty_Primary_JP.png" alt="25年製品保証">
						</div>
						<div class="heading">製品保証</div>
						<p class="txt">Q.TRONシリーズは高い品質管理とともに、25年の製品保証を提供して長く安心してご使用いただけます。</p>
					</div>
					<p class="note">※太陽電池モジュールのみ販売の場合。システムとして販売の場合と保証開始日と保証規定が異なります。</p>
				</li>
			</ul>
		</div>
	</section>
	<!-- //warranty -->


	<section class="simulator" data-target="simulator">
		<div class="wrapper">
			<h2 class="sec-ttl" id="simulator">発電量シミュレーター</h2>
			<div class="simulator-content">
				<div class="img">
					<img src="<?=$img_path?>/single-product/Power_generation_simulator.png" alt="">
				</div>
				<div class="txt">
					簡単な操作で年間発電量と<br>年間電気料金の削減見込みをご確認いただけます。
				</div>
				<a href="" class="simulator-link">発電量シミュレーター</a>
			</div>
		</div>
	</section>
	<!-- //simulator -->

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
						<img src="<?=$img_path?>/single-product/comparison_module_Re.RISE-G3_440.jpg" alt="">
					</div>
					<div class="name">
						<select name="" id="" class="select-product-name">
							<option value="">Re.RISE-G3 440</option>
						</select>
					</div>
					<a href="#" class="more">詳しく見る</a>
				</div>
				<div class="item">
					<div class="imgc">
						<img src="<?=$img_path?>/single-product/comparison_module_Re.RISE-S_230.jpg" alt="">
					</div>
					<div class="name">
						<select name="" id="" class="select-product-name">
							<option value="">Re.RISE S 230</option>
						</select>
					</div>
					<a href="#" class="more">詳しく見る</a>
				</div>
			</div>
			<div class="table table-visible">
				<div class="row row-t">
					<div class="heading">
						<div class="imgc">
							<img src="<?=$img_path?>/single-product/compare_icon_1.svg" alt="">
						</div>
						<p class="txt">公称最大出力<span class="sm">（+5W / -0W）</span></p>
					</div>
					<div class="product">
						<div class="item">
							<p class="data-txt">440W</p>
						</div>
						<div class="item">
							<p class="data-txt">230W</p>
						</div>
					</div>
				</div>
				<div class="row row-t">
					<div class="heading">
						<div class="imgc">
							<img src="<?=$img_path?>/single-product/compare_icon_2.svg" alt="">
						</div>
						<p class="txt">最大変換効率</p>
					</div>
					<div class="product">
						<div class="item">
							<p class="data-txt">22.5%</p>
						</div>
						<div class="item">
							<p class="data-txt">20.8%</p>
						</div>
					</div>
				</div>
				<div class="row row-t">
					<div class="heading">
						<div class="imgc">
							<img src="<?=$img_path?>/single-product/compare_icon_3.svg" alt="">
						</div>
						<p class="txt">外形寸法<span class="sm">（横×高さ×奥行）</span></p>
					</div>
					<div class="product">
						<div class="item">
							<p class="data-txt">1,722mm×1,134mm×30mm</p>
						</div>
						<div class="item">
							<p class="data-txt">1,134×977×30（mm）</p>
						</div>
					</div>
				</div>
				<div class="row row-t">
					<div class="heading">
						<div class="imgc">
							<img src="<?=$img_path?>/single-product/compare_icon_4.svg" alt="">
						</div>
						<p class="txt">保証</p>
					</div>
					<div class="product">
						<div class="item">
							<p class="data-txt">出力保証25年・製品保証25年</p>
						</div>
						<div class="item">
							<p class="data-txt">出力保証25年・製品保証12年<span class="fs-10">※<br>※太陽電池モジュールのみ販売の場合製品保証12年、システムとして販売の場合は製品保証15年となります。</span></p>
						</div>
					</div>
				</div>
				<div class="row row-t">
					<div class="heading">
						<div class="imgc">
							<img src="<?=$img_path?>/single-product/compare_icon_5.svg" alt="">
						</div>
						<p class="txt">メーカー希望小売価格<span class="sm">（税込）</span></p>
					</div>
					<div class="product">
						<div class="item">
							<p class="data-txt">￥324,280</p>
						</div>
						<div class="item">
							<p class="data-txt">￥239,338</p>
						</div>
					</div>
				</div>
			</div>
			<div class="accordion typeA">
				<div class="accordion-content">
					<div class="table">
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">公称短絡電流（Isc）</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">14.30A</p>
								</div>
								<div class="item">
									<p class="data-txt">－</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">公称開放電圧（Voc）</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">39.53V</p>
								</div>
								<div class="item">
									<p class="data-txt">ー</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">公称最大出力動作電流（Imp）</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">13.24A</p>
								</div>
								<div class="item">
									<p class="data-txt">ー</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">公称最大出力動作電圧（Vmp）</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">33.24V</p>
								</div>
								<div class="item">
									<p class="data-txt">ー</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">質量</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">20.8kg</p>
								</div>
								<div class="item">
									<p class="data-txt">13.0kg</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">フレーム材料</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">アルミニウム合金（アルマイト処理）、黒色</p>
								</div>
								<div class="item">
									<p class="data-txt">アルミニウム合金（アルマイト処理）、黒色</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">セル</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">6×18（単結晶Q.ANTUM NEOハーフセル）</p>
								</div>
								<div class="item">
									<p class="data-txt">6×10(単結晶ハーフセル）</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">端子ボックス防水特性</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">保護クラスIP68(バイパスダイオード内蔵）</p>
								</div>
								<div class="item">
									<p class="data-txt">保護クラスIP67以上(バイパスダイオード内蔵）</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">最大圧風荷重 / 最大表面荷重</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">3,600Pa / 5,400Pa</p>
								</div>
								<div class="item">
									<p class="data-txt">2,400Pa / 5,400Pa</p>
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
				<img src="<?=$img_path?>/single-product/Re.RISE_Product details_banner.png" alt="Re.RISE太陽光パネル製品一覧ページへ">
			</a>
		</div>
	</section>
	<!-- //compare -->

	<div class="fixed-anchor">
		<a href="#overview" data-id="overview" class="link"><span class="txt">TOP</span></a>
		<a href="#feature" data-id="feature" class="link"><span class="txt">特長</span></a>
		<a href="#warranty" data-id="warranty" class="link"><span class="txt">保証</span></a>
		<a href="#simulator" data-id="simulator" class="link"><span class="txt">発電量シミュレーター</span></a>
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