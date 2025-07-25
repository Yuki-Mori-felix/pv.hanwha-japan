
<?php
get_header();
/*
Template Name: お客様インタビュー詳細（一般）
Template Post Type: voice
*/
?>
	<div class="sv-breadcrumb">
		<?php custom_breadcrumb(); ?>
	</div>
	<!-- //breadcrumb -->

	<main id="main" class="single-voice template-general">

		<section class="single-voice-top-title">
			<div class="sv-wrap">
				<h2 class="title-ja">お客様インタビュー</h2>
				<span class="title-en">USER INTERVIEW</span>
			</div>
		</section>
		<!-- //sv-top-title -->

		<section class="overview">
			<div class="overview-ttl">
				<h3 class="txt"><?= the_field('voice_title') ?></h3>
			</div>
			<div class="sv-wrap">
				<div class="overview-prof">
					<div class="overview-prof-img">
						<img src="<?= get_field('voice_img')['url'] ?>" alt="">
					</div>
					<p class="overview-prof-figure"><?= get_field('voice_address', $post_id, false) ?></p>
				</div>
				<div class="overview-status">
					<div class="overview-status-head">
						<img src="<?= get_stylesheet_directory_uri() ?>/images/voice/voice-head.png" alt="">
						<div class="os-ttl">
							<div class="os-ttl-ja">設置状況</div>
							<span class="os-ttl-en">installation status</span>
						</div>
					</div>
					<?php 
						$overview_status_list = [
							'solar_panel' => '太陽光パネル',
							'installation_capacity' => '設置容量',
							'storage_battery' => '蓄電池',
							'kind_of_roof' => '屋根の種類',
							'retailer' => '販売店',
						];
					?>
					<ul class="overview-status-list">
						<?php 
							foreach($overview_status_list as $key => $label){
								if(!empty(get_field($key))){
									echo '<li class="os-item">'.
													'<div class="os-label">'.$label.'</div>'.
													'<div class="os-data">'.get_field($key, $post_id, false).'</div>'.
												'</li>';
								}
							}
						?>
					</ul>
				</div>
			</div>
		</section>
		<!-- single-voice -->


		<section class="problem">
			<div class="sv-wrap">
				<div class="prob-content">
					<div class="prob-item customer">
						<div class="prob-ttl">お客様の悩み</div>
						<div class="prob-img">
							<img src="" alt="">
						</div>
						<?=get_field('customer_concerns', $post_id, false)?>
					</div>
					<div class="prob-arrow">
						<p class="prob-arrow-part part-1"></p>
						<p class="prob-arrow-part part-2"></p>
					</div>
					<div class="prob-item solution">
						<div class="prob-ttl">ハンファジャパンで<br>解決しました</div>
						<div class="prob-img">
							<img src="" alt="">
						</div>
						<?=get_field('solution', $post_id, false)?>
					</div>
				</div>
			</div>
		</section>
		<!-- problem -->

		
		<?= the_field('main_content', $post_id, false); ?>
		<!-- //メインコンテンツ -->


		<section class="contact-us">
			<div class="sv-wrap">
				<h2 class="sec-ttl">お問い合わせ・お見積り依頼はこちらから</h2>
				<div class="contact-links">
					<a href="https://pv.hanwha-japan.com/service-support/contact/" class="contact-link link-1">お問い合わせ</a>
					<a href="https://pv.hanwha-japan.com/service-support/contact-quotation/" class="contact-link link-2">お見積り依頼</a>
				</div>
			</div>
		</section>
		<!-- contact-us -->

		<section class="back-to-archive">
			<div class="sv-wrap">
				<a href="https://pv.hanwha-japan.com/voice/interview/" class="to-archive-btn">
					<span class="to-archive-txt">インタビューの一覧へ戻る</span>
					<span class="to-archive-icon"></span></a>
			</div>
		</section>
		<!-- back-to-archive -->

		<!-- <?= the_field('sec_guide', $post_id, false); ?> -->
    <section class="guide" data-target="guide">
      <div class="wrapper">
        <h2 class="sec-ttl" id="guide">安心導入ガイド</h2>
        <ul class="flow">
          <li class="step">
            <p class="no">STEP1</p>
            <h3 class="step-ttl">サイトでお見積り依頼</h3>
            <div class="imgc">
              <img decoding="async" src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/guide-step-1.png" alt="">
            </div>
            <div class="accordion typeB">
              <div class="accordion-btn">
                <p class="txt">詳細を見る</p>
                <p> <span class="icon"></span>
                </p>
              </div>
              <div class="accordion-content">
                <p class="txt">
                  ・ウェブサイトのお見積り依頼フォームをご記入ください。<br />
                  ・担当者から確認後ご連絡します。<br />
                  その後当社から販売店をご紹介します。
                </p>
              </div>
            </div>
          </li>
          <li class="step">
            <p class="no">STEP2</p>
            <h3 class="step-ttl">ヒアリング・ご提案</h3>
            <div class="imgc">
              <img decoding="async" src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/guide-step-2.png" alt="">
            </div>
            <div class="accordion typeB">
              <div class="accordion-btn">
                <p class="txt">詳細を見る</p>
                <p> <span class="icon"></span>
                </p>
              </div>
              <div class="accordion-content">
                <p class="txt">
                  ・ご紹介した販売店から具体的な状況（例：電気代のご使用状況）やご希望などヒアリングいたします。<br />
                  ・ヒアリングの上、最適な内容をご提案いたします。
                </p>
              </div>
            </div>
          </li>
          <li class="step">
            <p class="no">STEP3</p>
            <h3 class="step-ttl">ご契約・施工</h3>
            <div class="imgc">
              <img decoding="async" src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/guide-step-3.png" alt="">
            </div>
            <div class="accordion typeB">
              <div class="accordion-btn">
                <p class="txt">詳細を見る</p>
                <p> <span class="icon"></span>
                </p>
              </div>
              <div class="accordion-content">
                <p class="txt">
                  ・ご契約の後、現地調査、施工を行います。（販売店によりご契約、現地調査は前後する場合がございます）
                </p>
              </div>
            </div>
          </li>
          <li class="step">
            <p class="no">STEP4</p>
            <h3 class="step-ttl">設置完了</h3>
            <div class="imgc">
              <img decoding="async" src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/guide-step-4.png" alt="">
            </div>
          </li>
        </ul>
      </div>
    </section>
		<!-- //guide -->

		<!-- <?= the_field('sec_support', $post_id, false); ?> -->
    <section class="support" data-target="support">
      <div class="wrapper">
        <h2 class="sec-ttl" id="support">丁寧な導入サポート、充実な保証制度でご安心いただけます。</h2>
        <div class="support_list">
          <p class="item"><a href="https://pv.hanwha-japan.com/service-support/contact/"><span class="imgc"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/support_icon_1.svg" alt=""></span><span class="txt txt-faq">導入・製品に関するご質問</span></a></p>
          <p class="border">
          <p class="item"><a href="https://pv.hanwha-japan.com/service-support/after-follow/"><span class="imgc"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/support_icon_2.svg" alt=""></span><span class="txt txt-after">充実した保証</span></a></p>
        </div>
      </div>
    </section>
		<!-- //support -->

	</main>
	<!-- #main -->


<?php
get_footer();


