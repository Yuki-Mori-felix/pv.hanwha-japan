<?php get_header(); ?>
<?php
	/*
	Template Name: HEMS
	Template Post Type: product
	*/

	//画像パス
	$img_path = get_stylesheet_directory_uri()."/images";
?>
<main class="single-products hems">

	<section class="top_product_logo">
		<div class="wrapper">
			<p class="logo-txt">HEMS</p>
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
								<li class="splide__slide"><img src="<?=$img_path?>/single-product/image_Cube J_01.png" alt=""></li>
								<li class="splide__slide"><img src="<?=$img_path?>/single-product/image_Cube J_03.png" alt=""></li>
							</ul>
						</div>
					</div>
					<div class="splide" id="splide-S" aria-label="商品詳細サムネイルスライダー">
						<div class="splide__track">
							<div	div class="splide__list">
								<li class="splide__slide"><img src="<?=$img_path?>/single-product/image_Cube J_01.png" alt="">
								<li class="splide__slide"><img src="<?=$img_path?>/single-product/image_Cube J_03.png" alt="">
							</div>
						</div>
					</div>
					<div class="web-ar" id="web-ar">
						<img src="<?=$img_path?>/single-product/web-ar.svg" alt="3D">						
					</div>
				</div>
				<a href="#" class="eneconnect-banner">
					<img src="<?=$img_path?>/single-product/ENECONECT_banner_01.png" alt="エネコネクトの節電サポート 詳しくはこちら">
				</a>
			</div>
			<div class="right">
				<p class="new">NEW</p>
				<h2 class="product-name">Cube J</h2>
				<p class="product-maker">NEXT DRIVE製</p>
				<h3 class="description">1台で電気の見える化を実現</h3>
				<ul class="tag">
					<li class="tag-item">電気代削減</li>
					<li class="tag-item">家電の操作可能</li>
					<li class="tag-item">簡単設置・操作</li>
				</ul>
				<ul class="spec01">
					<li class="spec01-item">
						<p class="txt"><span class="bold">データ通信方式</span><br>Wi-SUN:ROHM BP35 C0<br>Wi-Fi:802.11（a/b/g/n/ac）</p>
					</li>
					<li class="spec01-item">
						<p class="txt"><span class="bold">寸法（横X高さX奥行）</span><br>48×48×43（mm）</p>
					</li>
				</ul>
				<ul class="spec02">
					<li class="spec02-item">
						<p class="label">型名</p>
						<p class="data">Cube J</p>
					</li>
					<li class="spec02-item">
						<p class="label">重量</p>
						<p class="data">80ｇ</p>
					</li>
				</ul>
				<div class="accordion typeA">
					<div class="accordion-content">
						<ul class="spec03">
							<li class="spec03-item">
								<p class="label">携帯</p>
								<p class="data">iOS 13以上、Android 6以上</p>
							</li>
							<li class="spec03-item">
								<p class="label">対応家電</p>
								<p class="data">
									スマートメーター<br>
									住宅用太陽光発電<br>
									蓄電池<br>
									EV充電器<br>
									EV充放電器（V2H）<br>
									家庭用エアコン<br>
									エコキュート（ヒートポンプ<br>
									瞬間式給湯器<br>
									床暖房<br>
									分電盤<br>
									燃料電池
								</p>
							</li>
							<li class="spec03-item">
								<p class="label">電源</p>
								<p class="data">100V～240V 50/60Hz</p>
							</li>
							<li class="spec03-item">
								<p class="label">設置方式</p>
								<p class="data">屋内（ 一般家庭用コンセント）</p>
							</li>
							<li class="spec03-item">
								<p class="label">メーカー希望小売価格（税込）</p>
								<p class="data">OPEN</p>
							</li>
						</ul>
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
						<h3 class="txt">手軽に電気料金を削減</h3>
					</div>
					<p class="lead">専用アプリ「エネコネクト」で楽に電気代を削減できます。</p>
					<div class="primary-2">
						<p class="primary-2-ttl">「エネコネクト」の5つの電気のエネルギーマネジメント</p>
						<div class="primary-2-wrapper eneconnect">
							<ul class="eneconnect-list">
								<li class="eneconnect-item active">
									<div class="img">
										<img src="<?=$img_path?>/single-product/ENECONECT_Apps_icon_1.png" alt="">
									</div>
									<p class="txt">わたしの電気代</p>
								</li>
								<li class="eneconnect-item">
									<div class="img">
										<img src="<?=$img_path?>/single-product/ENECONECT_Apps_icon_2.png" alt="">
									</div>
									<p class="txt">スマートメーターレポート</p>
								</li>
								<li class="eneconnect-item">
									<div class="img">
										<img src="<?=$img_path?>/single-product/ENECONECT_Apps_icon_3.png" alt="">
									</div>
									<p class="txt">そらマネ</p>
								</li>
								<li class="eneconnect-item">
									<div class="img">
										<img src="<?=$img_path?>/single-product/ENECONECT_Apps_icon_4.png" alt="">
									</div>
									<p class="txt">太陽光発電レポート</p>
								</li>
								<li class="eneconnect-item">
									<div class="img">
										<img src="<?=$img_path?>/single-product/ENECONECT_Apps_icon_5.png" alt="">
									</div>
									<p class="txt">蓄電池レポート</p>
								</li>
							</ul>
							<ul class="eneconnect-detail-list">
								<li class="eneconnect-detail-item active">
									<div class="img">
										<img src="<?=$img_path?>/single-product/ENECONECT_Apps_image_1.png" alt="">
									</div>
									<p class="detail-label">わたしの電気代</p>
									<p class="detail-description">選んだ料金プランに合わせて毎日の使用料金を確認</p>
								</li>
								<li class="eneconnect-detail-item">
									<div class="img">
										<img src="<?=$img_path?>/single-product/ENECONECT_Apps_image_2.png" alt="">
									</div>
									<p class="detail-label">スマートメーターレポート</p>
									<p class="detail-description">日・週・月の使用量と売電量を確認</p>
								</li>
								<li class="eneconnect-detail-item">
									<div class="img">
										<img src="<?=$img_path?>/single-product/ENECONECT_Apps_image_3.png" alt="">
									</div>
									<p class="detail-label">そらマネ</p>
									<p class="detail-description">設定した条件に合わせて発電量と売電量をガード</p>
								</li>
								<li class="eneconnect-detail-item">
									<div class="img">
										<img src="<?=$img_path?>/single-product/ENECONECT_Apps_image_4.png" alt="">
									</div>
									<p class="detail-label">太陽光発電レポート</p>
									<p class="detail-description">太陽光発電システムの発電量を日・週・月毎に確認</p>
								</li>
								<li class="eneconnect-detail-item">
									<div class="img">
										<img src="<?=$img_path?>/single-product/ENECONECT_Apps_image_5.png" alt="">
									</div>
									<p class="detail-label">蓄電池レポート</p>
									<p class="detail-description">蓄電池の日々の稼働状況を確認</p>
								</li>
							</ul>
						</div>
						<div class="eneconnect-banner">
							<img src="<?=$img_path?>/single-product/ENECONECT_banner_02.png" alt="">
						</div>
					</div>
				</div>
			</li>
			<li class="item">
				<div class="wrapper">
					<div class="feature-ttl">
						<span class="no">2</span>
						<h3 class="txt">遠隔操作でどこからでも節電可能</h3>
					</div>
					<p class="lead">電気の見える化で、室外でも家電の操作ができます。</p>
					<div class="primary-2">
						<p class="primary-2-ttl">1台で宅内の電気を可視化、家の外から家電の操作。</p>
						<div class="primary-2-wrapper">
							<div class="img">
								<img src="<?=$img_path?>/single-product/Cube J-2.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="item">
				<div class="wrapper">
					<div class="feature-ttl">
						<span class="no">3</span>
						<h3 class="txt">コンセントに挿すだけでOK</h3>
					</div>
					<p class="lead">あとはインターネットに接続して簡単に使えます。</p>
					<div class="primary-2">
						<p class="primary-2-ttl">コンセントに挿すだけ！インターネットと繋げて操作</p>
						<div class="primary-2-wrapper">
							<div class="img">
								<img src="<?=$img_path?>/single-product/Cube J-3.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</section>
	<!-- //feature -->


	<section class="guide" data-target="guide">
		<div class="wrapper">
			<h2 class="sec-ttl" id="guide">安心導入ガイド</h2>
			<ul class="flow">
				<li class="step">
					<p class="no">STEP1</p>
					<h3 class="step-ttl">エネコネクトサイトで申し込み</h3>
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
							エネコネクトのウェブサイトのお問い合わせフォームをご記入ください。 ・担当者から確認後ご連絡します。
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
							ご紹介した販売店から具体的な状況（例：電気代のご使用状況）やご希望などヒアリングいたします。<br>ヒアリングの上、最適な内容をご提案いたします。
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
						<img src="<?=$img_path?>/single-product/comparison_module_Cube J.png" alt="">
					</div>
					<div class="name">
						<select name="" id="" class="select-product-name">
							<option value="">Cube J (NEXT DRIVE製)</option>
						</select>
					</div>
					<a href="#" class="more">詳しく見る</a>
				</div>
				<div class="item">
					<div class="imgc">
						<img src="<?=$img_path?>/single-product/comparison_module_Atto.png" alt="">
					</div>
					<div class="name">
						<select name="" id="" class="select-product-name">
							<option value="">Atto (NEXT DRIVE製)</option>
						</select>
					</div>
					<a href="#" class="more">詳しく見る</a>
				</div>
			</div>
			<div class="table table-visible">
				<div class="row row-t">
					<div class="heading">
						<div class="imgc">
							<img src="<?=$img_path?>/single-product/comparison_icon_Data_communication_method.svg" alt="">
						</div>
						<p class="txt">データ通信方式</p>
					</div>
					<div class="product">
						<div class="item">
							<p class="data-txt">Wi-SUN:ROHM BP35 C0<br>Wi-Fi:802.11（a/b/g/n/ac）</p>
						</div>
						<div class="item">
							<p class="data-txt">Wi-SUN:ROHM BP35 C0<br>Wi-Fi:802.11（a/b/g/n/ac）</p>
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
							<p class="data-txt">48×43×48（mm）</p>
						</div>
						<div class="item">
							<p class="data-txt">122×122×38.6（mm）<br><span class="sm">※壁掛けベース部を含む</span></p>
						</div>
					</div>
				</div>
				<div class="row row-t">
					<div class="heading">
						<div class="imgc">
							<img src="<?=$img_path?>/single-product/comparison_icon_Compatible appliances.svg" alt="">
						</div>
						<p class="txt">対応家電</p>
					</div>
					<div class="product">
						<div class="item">
							<p class="data-txt">
								スマートメーター<br>
								住宅用太陽光発電<br>
								蓄電池<br>
								EV充電器<br>
								EV充放電器（V2H）<br>
								家庭用エアコン<br>
								エコキュート（ヒートポンプ<br>
								瞬間式給湯器<br>
								床暖房<br>
								分電盤<br>
								燃料電池
							</p>
						</div>
						<div class="item">
							<p class="data-txt">ー</p>
						</div>
					</div>
				</div>
				<div class="row row-t">
					<div class="heading">
						<div class="imgc">
							<img src="<?=$img_path?>/single-product/comparison_icon_Installation_Method.svg" alt="">
						</div>
						<p class="txt">設置方式</p>
					</div>
					<div class="product">
						<div class="item">
							<p class="data-txt">屋内（ 一般家庭用コンセント）</p>
						</div>
						<div class="item">
							<p class="data-txt">ー</p>
						</div>
					</div>
				</div>
				<div class="row row-t">
					<div class="heading">
						<div class="imgc">
							<img src="<?=$img_path?>/single-product/comparison_icon_Operation_check.svg" alt="">
						</div>
						<p class="txt">作動確認</span></p>
					</div>
					<div class="product">
						<div class="item">
							<p class="data-txt">ー</p>
						</div>
						<div class="item">
							<p class="data-txt">ー</p>
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
									<p class="data-txt">Cube J</p>
								</div>
								<div class="item">
									<p class="data-txt">Atto</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">重量</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">80ｇ</p>
								</div>
								<div class="item">
									<p class="data-txt">214g</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">携帯</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">iOS 13以上、Android 6以上</p>
								</div>
								<div class="item">
									<p class="data-txt">ー</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">電源</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">100V～240V 50/60Hz</p>
								</div>
								<div class="item">
									<p class="data-txt">入力：AC100-240V、50/60Hz<br>出力：DC5V (±5％)</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">使用周囲温度</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">ー</p>
								</div>
								<div class="item">
									<p class="data-txt">-10 ～ +60℃</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">保存温度</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">ー</p>
								</div>
								<div class="item">
									<p class="data-txt">-30 ～ +70℃</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">保存湿度</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">ー</p>
								</div>
								<div class="item">
									<p class="data-txt">相対湿度 10 ～ 90％（ただし、結露なきこと）</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">I/O ポート</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">ー</p>
								</div>
								<div class="item">
									<p class="data-txt">RS485 (1 ポート)、USB2.0 Type A (2 ポート)</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">最大消費電力</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">ー</p>
								</div>
								<div class="item">
									<p class="data-txt">14.2W</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">ACアダプタ<span class="sm">※ｺﾝｾﾝﾄﾌﾟﾗｸﾞ方向</span></p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">ー</p>
								</div>
								<div class="item">
									<p class="data-txt">70 × 29 × 40.3 mm<br>ケーブル長 2 m<br>プラグ 外形 3.5mm、内径 1.35 mm</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">認証</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">ー</p>
								</div>
								<div class="item">
									<p class="data-txt">技術基準適合証明<br>VCCI クラス B<br>ECHONET Lite AIF 認証</p>
								</div>
							</div>
						</div>
						<div class="row row-acc">
							<div class="heading">
								<p class="txt-acc">メーカー希望小売価格（税込）</p>
							</div>
							<div class="product">
								<div class="item">
									<p class="data-txt">OPEN</p>
								</div>
								<div class="item">
									<p class="data-txt">ー</p>
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
				<img src="<?=$img_path?>/single-product/Product details_banner.png" alt="蓄電システム・HEMS 製品一覧ページへ">
			</a>
		</div>
	</section>
	<!-- //compare -->


	<div class="fixed-anchor">
		<a href="#overview" data-id="overview" class="link"><span class="txt">TOP</span></a>
		<a href="#feature" data-id="feature" class="link"><span class="txt">特長</span></a>
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