<?php
?>

<div class="custom-header">

			<?php if ( is_page() ) : ?>
				<?php
				// 現在の投稿のIDを動的に取得
				$post_id = get_the_ID(); 

				// アイキャッチ画像のURLを取得
				$thumbnail_url = get_the_post_thumbnail_url($post_id);

				// アイキャッチ画像のURLを出力
				if (!empty($thumbnail_url)) {
				// アイキャッチ画像が設定されていれば表示
				echo '<img src="' . esc_url($thumbnail_url) . '" alt="">';
				} else {
				// アイキャッチ画像が設定されていなければ、代替のテキストや画像を表示
				echo 'アイキャッチ画像はありません。';
				}
				?>
			<?php elseif ( is_single() ) : ?>
				<?php
				// 現在の投稿のIDを動的に取得
				$post_id = get_the_ID(); 

				// アイキャッチ画像のURLを取得
				$thumbnail_url = get_the_post_thumbnail_url($post_id);

				// アイキャッチ画像のURLを出力
				if (!empty($thumbnail_url)) {
				// アイキャッチ画像が設定されていれば表示
				echo '<img src="' . esc_url($thumbnail_url) . '" alt="">';
				} else {
				// アイキャッチ画像が設定されていなければ、代替のテキストや画像を表示
				echo 'アイキャッチ画像はありません。';
				}
				?>
			<?php else:?>
				IDが1でも2でもない場合の処理を書く
			<?php endif;?>

<!--キャッチフレーズ
<div class="main-catchphrase">
	<p><?php bloginfo( 'description' ); ?></p>
</div>
キャッチフレーズ-->

</div><!-- .custom-header -->
