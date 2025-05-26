
<?php
get_header();
/*
Template Name: お客様インタビュー詳細（販売店なし）
Template Post Type: voice
*/
?>
	<div class="sv-breadcrumb">
		<?php custom_breadcrumb(); ?>
	</div>
	<!-- //breadcrumb -->

	<main id="main" class="single-voice template-v2">

		<section class="single-voice-top-title">
			<div class="sv-wrap">
				<h2 class="title-ja">お客様インタビュー</h2>
				<span class="title-en">USER INTERVIEW</span>
			</div>
		</section>
		<!-- //sv-top-title -->

		<section class="overview">
			<div class="overview-ttl">
				<h3 class="txt">電気代が約半分に！驚きの性能とデザイン性に家族も大満足</h3>
			</div>
			<div class="sv-wrap">
				<div class="overview-prof">
					<div class="overview-prof-img">
						<img src="<?= get_field('voice_img')['url'] ?>" alt="">
					</div>
					<p class="overview-prof-figure"><?= get_field('voice_address') ?></p>
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
							'kind_of_roof' => '屋根の種類',
							'storage_battery' => '蓄電池',
							'retailer' => '販売店',
						];
					?>
					<ul class="overview-status-list">
						<?php 
							foreach($overview_status_list as $key => $label){
								if(!empty(get_field($key))){
									echo '<li class="os-item">'.
													'<div class="os-label">'.$label.'</div>'.
													'<div class="os-data">'.get_field($key).'</div>'.
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
						<?=get_field('customer_concerns')?>
					</div>
					<div class="prob-arrow">
						<img src="" alt="">
					</div>
					<div class="prob-item solution">
						<div class="prob-ttl">ハンファジャパンで<br>解決しました</div>
						<div class="prob-img">
							<img src="" alt="">
						</div>
						<?=get_field('solution')?>
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
					<a href="" class="contact-link link-1">お問い合わせ</a>
					<a href="" class="contact-link link-2">お見積り依頼</a>
				</div>
			</div>
		</section>
		<!-- contact-us -->

		<section class="back-to-archive">
			<div class="sv-wrap">
				<a href="" class="to-archive-btn">
					<span class="to-archive-txt">インタビューの一覧へ戻る</span>
					<span class="to-archive-icon"></span></a>
			</div>
		</section>
		<!-- back-to-archive -->

		<?= the_field('sec_guide', $post_id, false); ?>
		<!-- //guide -->

		<?= the_field('sec_support', $post_id, false); ?>
		<!-- //support -->
		 
	</main>
	<!-- #main -->


<?php
get_footer();


