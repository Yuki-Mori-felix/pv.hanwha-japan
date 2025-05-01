<?php

get_header(); ?>

<div class="wrap">

<!--pankuzu-->
<?php echo custom_breadcrumbs(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<div class="_product_details"><!--_product_details-->

	<div class="_inner"><!--_inner-->

		<div class="_left"><!--_left-->

<!--product_image-->

<style>
	.slider-container{
		width:80%;
		margin:0 auto;
		padding: 30px;
	}
	.slick-slide{
		padding:2px;
	}
	#thumbs .slick-current img{
		border:3px solid #000;
	}
	.slick-prev,.slick-next{z-index:2;}
	.slick-prev{left:0!important;}
	.slick-next{right:0!important;}
</style>

<div class="slider-container">
  <div id="slider">
    <div><img src="<?php the_field('_product_image1');?>"></div>
    <div><img src="<?php the_field('_product_image2');?>"></div>
    <div><img src="<?php the_field('_product_image3');?>"></div>
  </div>
  <div id="thumbs">
  	<div><img src="<?php the_field('_product_image1');?>"></div>
    <div><img src="<?php the_field('_product_image2');?>"></div>
    <div><img src="<?php the_field('_product_image3');?>"></div>
  </div>
</div>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script>
	$("#slider").slick({
		asNavFor:"#thumbs"
	})
	$("#thumbs").slick({
		slidesToShow: 3,
		asNavFor:"#slider",
	})
	$("#thumbs .slick-slide").on("click",function(){
		let index=$(this).attr("data-slick-index")
		$("#slider").slick("slickGoTo",index)
	})
</script>

<!--product_image-->
		</div><!--_left-->
		<div class="_right"><!--_right-->
			<div class="_new_icon">
				<!--条件分岐-->
				<?php if(get_field('on_off_new')): ?>
					<p class="new-post__pr">NEW</p>
				<?php endif; ?>
				<!--//条件分岐-->
			</div>
			<h2 class="_name"><?php the_title(); ?></h2>
			<div class="_explanation"><?php the_field('_product_text1');?></div>
			<div class="_point">
				<ul>
					<li>高効率N型モジュール</li>
					<li>厳格な品質管理</li>
					<li>25年長期保証</li>
				</ul>
			</div>
			<div class="_measured_value">
				<ul>
					<li><?php the_field('_product_name_title1');?>
					<br><?php the_field('_product_itext1');?></li>
					<li><?php the_field('_module_conversion_efficiency_name');?>
					<br><?php the_field('_module_conversion_efficiency_text1');?></li>
				</ul>
			</div>
			<div class="_size">
				<ul>
					<li>外形寸法</li>
					<li><?php the_field('_external_dimensions1');?></li>
				</ul>
			<div class="_weight">
				<ul>
					<li>質量</li>
					<li><?php the_field('_mass');?></li>
				</ul>
			</div>

<div class="dropdown">

<p><?php the_field('_contents_text1');?></p>

</div><!-- .dropdown -->

<div class="trigger">

  <div class="btn-more">製品仕様を詳しく見る</div>

</div><!-- .triger -->

<!--商品詳細ボタン-->
<div class="_pdf_bt">
	<ul>
		<li class="_01"><a href="#">WEBカタログ</a></li>
		<li class="_02"><a href="#">カタログPDF</a></li>
		<li class="_03"><a href="#">シェアする</a></li>
	</ul>
</div>
<!--商品詳細ボタン-->
		</div><!--_right-->
	</div><!--_inner-->
</div><!--_product_details-->

</div><!--/wrap-->

<?php the_content();?>

<!--_guarantee-->
<div class="_guarantee _qcells_features">

<!--_title-->
<div class="_title">
	<h2>保証</h2>
</div><!--_title-->

<!--_contents-->
<div class="_contents">

	<!--_left-->
	<div class="_left">
		<ul>
			<li><img src="/wp-content/uploads/2025/02/Re.RISE_Logo_Package_RGB_2024_v2.1_Re.RISE_Main.png"></li>
			<li><h3>出力保証</h3><br><p>太陽電池モジュール(太陽光パネル)の出力性能を、25年もの長期間保証いたします。</p></li>
		</ul>
	</div>

	<!--_right-->
	<div class="_right">
			<img src="/wp-content/uploads/2025/04/スクリーンショット-2025-04-04-163030.png">	
	</div>

</div><!--_contents-->


<div class="_contents _product_warranty">

	<!--_left-->
	<div class="_left">
		<ul>
			<li><img src="/wp-content/uploads/2025/02/Re.RISE_Logo_Package_RGB_2024_v2.1_Re.RISE_Main.png"></li>
			<li><h3>製品保証</h3><br><p>太陽電池モジュール(太陽光パネル)の出力性能を、25年もの長期間保証いたします。</p></li>
		</ul>
	</div>

</div><!--_contents-->

<p>※太陽電池モジュールのみ販売の場合。システムとして販売の場合と保証開始日と保証規定が異なります。</p>

</div><!--_guarantee-->



<!--安心導入ガイド-->
<div class="_safe_introduction_guide">

	<div class="_title">
		<h2>安心導入ガイド</h2>
	</div>	
<!--_guide-->
<div class="_qcells_features">
</div>


<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_forward_ios" />

<div class="_contents">
	<ul>
		<li>
			<span>step1</span>
			<h3>サイトでお見積り依頼</h3>
			<div class="_img"><img src="/wp-content/uploads/2025/02/Re.RISE_Logo_Package_RGB_2024_v2.1_Re.RISE_Main.png"></div>
			<div class="_text">
			<div class="dropdown1">
				<p>テキストテキストテキストテキスト<br>テキストテキストテキスト</p>
				</div><!-- .dropdown -->
				<div class="trigger1">
				<div class="btn-more1">詳細を見る</div>
				</div><!-- .triger -->
			</div>
		</li>
		<li>
			<span>step2</span>
			<h3>ヒヤリング・ご提案</h3>
			<div class="_img"><img src="/wp-content/uploads/2025/02/Re.RISE_Logo_Package_RGB_2024_v2.1_Re.RISE_Main.png"></div>
			<div class="_text">
			<div class="dropdown2">
				<p>テキストテキストテキストテキスト<br>テキストテキストテキスト</p>
				</div><!-- .dropdown -->
				<div class="trigger2">
				<div class="btn-more2">詳細を見る</div>
				</div><!-- .triger -->
			</div>
		</li>
		<li>
			<span>step3</span>
			<h3>ご契約・施工</h3>
			<div class="_img"><img src="/wp-content/uploads/2025/02/Re.RISE_Logo_Package_RGB_2024_v2.1_Re.RISE_Main.png"></div>
			<div class="_text">
			<div class="dropdown3">
				<p>テキストテキストテキストテキスト<br>テキストテキストテキスト</p>
				</div><!-- .dropdown -->
				<div class="trigger3">
				<div class="btn-more3">詳細を見る</div>
				</div><!-- .triger -->
			</div>
		</li>
		<li class="_li_last1">
			<span>step4</span>
			<h3>設置完了</h3>
			<div class="_img"><img src="/wp-content/uploads/2025/02/Re.RISE_Logo_Package_RGB_2024_v2.1_Re.RISE_Main.png"></div>
			<div class="_text">
			<div class="dropdown4">
				<p>テキストテキストテキストテキスト<br>テキストテキストテキスト</p>
				</div><!-- .dropdown -->
				<div class="trigger4">
				<div class="btn-more4">詳細を見る</div>
				</div><!-- .triger -->
			</div>
		</li>
	</ul>

</div>

</div><!--_guide-->


	</div>

	<!--<div class="_text"><p>&nbsp;</p></div>-->

</div>

<!--コンテンツ-->
<div class="_qcells_features">



</div>
</div>
<!--コンテンツ-->
<!--安心導入ガイド-->





<!--ご検討から設置後のアフターまでも徹底サポートいたします。-->
<div class="_qcells_features">

	<div class="_title">
		<h2>ご検討から設置後のアフターまでも徹底サポートいたします。</h2>

	</div>
	
	<!--<div class="_text"><p>&nbsp;</p></div>-->

</div>

<!--コンテンツ-->
<div class="_qcells_features">



</div>
<!--コンテンツ-->
<!--ご検討から設置後のアフターまでも徹底サポートいたします。-->


















		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->


<!--_left_navi-->
<div class="_left_navi">
	<ul>
		<li><a href="#top">TOP</a></li>
		<li><a href="#">特徴</a></li>
		<li><a href="#">保証</a></li>
		<li><a href="#">安心導入ガイド</a></li>
		<li><a href="#">徹底サポート</a></li>
		<li><a href="#">比較</a></li>
	</ul>
</div>
<!--left_navi-->






<!--ここから固定-->




<?php
get_footer();
