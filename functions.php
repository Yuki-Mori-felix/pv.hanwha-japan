<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style(
    'child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array('parent-style')
  );
}

/*【表示カスタマイズ】アイキャッチ画像の有効化 */
add_theme_support('post-thumbnails');


/* カスタム投稿タイプ */
/* サイトパーツ */

function add_custom_post()
{
  register_post_type(
    'sitr-parts',
    array(
      'label' => 'サイトパーツ',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
        'excerpt',
        'custom-fields',
      )
    )
  );

  register_taxonomy(
    'sitr-parts-cat',
    'sitr-parts',
    array(
      'label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

  /* TOPページ */
  register_post_type(
    'top',
    array(
      'label' => 'TOPページ',
      'public' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'excerpt',
        'custom-fields',
      )
    )
  );


  /* 商品 */

  register_post_type(
    'product',
    array(
      'label' => '商品',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'thumbnail',
        'revisions',
        'excerpt',
        'custom-fields',
      )
    )
  );

  register_taxonomy(
    'product-cat',
    'product',
    array(
      'label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );


  /* お客様インタビュー */

  register_post_type(
    'voice',
    array(
      'label' => 'お客様インタビュー',
      'public' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'rewrite' => array('slug' => 'voice/interview'), // URL「voice」の下層に表示
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
        'excerpt',
        'custom-fields',
			),
			'taxonomies'=> ['voice-cat', 'voice-post-format'],
    )
  );

  register_taxonomy(
    'voice-cat',
    'voice',
    array(
      'label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

	register_taxonomy(
    'voice-post-format',
    'voice',
    array(
      'label' => '投稿ジャンル',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );


	/* ニュース */

	register_post_type(
		'news',
		array(
			'label' => 'ニュース',
			'public' => true,
			'has_archive' => true,
			'show_in_rest' => true,
			'menu_position' => 5,
			'supports' => array(
				'title',
				'thumbnail',
				'revisions',
				'excerpt',
				'custom-fields',
			)
		)
	);

	register_taxonomy(
    'news-post-format',
    'news',
    array(
      'label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

  /* ブログ */
	register_post_type(
		'blog-post',
		array(
			'label' => 'ブログ',
			'public' => true,
      'rewrite' => ['slug' => 'blog', 'with_front' => false],
			'show_in_rest' => true,
			'menu_position' => 5,
			'supports' => array(
				'title',
				'thumbnail',
        'editor',
				'revisions',
				'excerpt',
				'custom-fields',
			)
		)
	);

	register_taxonomy(
    'blog-cat',
    'blog-post',
    array(
      'label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

  register_taxonomy(
    'blog-tag',
    'blog-post',
    array(
      'label' => 'タグ',
      'hierarchical' => false,  //階層構造
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count', // タグのように使いたい場合に追加
    )
  );
}
add_action('init', 'add_custom_post');

function customize_menus(){
global $menu;
$menu[19] = $menu[10];  //メディアの移動
unset($menu[10]);
}
add_action( 'admin_menu', 'customize_menus' );

/*------------------------------------------
  固定ページでぺージネーション有効
------------------------------------------*/
function add_custom_pagination_rewrite() {
  // blogページのページネーション
  add_rewrite_rule(
    '^blog/page/([0-9]+)/?$',
    'index.php?pagename=blog&paged=$matches[1]',
    'top'
  );

  // voice/interviewページのページネーション
  add_rewrite_rule(
    '^voice/interview/page/([0-9]+)/?$',
    'index.php?pagename=voice/interview&paged=$matches[1]',
    'top'
  );
}
add_action('init', 'add_custom_pagination_rewrite');


/*========================== パンくずリスト表示設定 ==========================*/
if (! function_exists('custom_breadcrumb')) {
  function custom_breadcrumb()
  {

    // トップページでは何も出力しないように
    if (is_front_page()) return false;

    //そのページのWPオブジェクトを取得
    $wp_obj = get_queried_object();

    //JSON-LD用のデータを保持する変数
    $json_array = array();

    echo '<div id="breadcrumb">' . //id名などは任意で
      '<ul>' .
      '<li>' .
      '<i class="fas fa-home"></i>' .
      '<a href="' . esc_url(home_url()) . '"><span>HOME</span></a> / ' .
      '</li>';

    if (is_attachment()) {

      //添付ファイルページ ( $wp_obj : WP_Post )
      $post_title = apply_filters('the_title', $wp_obj->post_title);
      echo '<li><span>' . esc_html($post_title) . '</span></li>';
    } elseif (is_single() && get_post_type() === 'voice') { // お客様インタビュー(個別ページ) パンくず表示調整

      // 固定ページ "page-voice.php" を追加
      $page_voice = get_page_by_path('voice');
      if ($page_voice) {
        echo '<li><a href="' . get_permalink($page_voice) . '"><span>' . esc_html($page_voice->post_title) . '</span></a> / </li>';
      }

      // 固定ページ "page-voice-interview.php" を追加
      $page_voice_interview = get_page_by_path('voice/interview');
      if ($page_voice_interview) {
        echo '<li><a href="' . get_permalink($page_voice_interview) . '"><span>' . esc_html($page_voice_interview->post_title) . '</span></a> / </li>';
      }

      // 個別ページの投稿タイトルを表示
      echo '<li><span>' . esc_html(get_the_title()) . '</span></li>';
    } elseif (is_single()) {

      //投稿ページ ( $wp_obj : WP_Post )
      $post_id = $wp_obj->ID;
      $post_type = $wp_obj->post_type;
      $post_title = apply_filters('the_title', $wp_obj->post_title);

      // カスタム投稿タイプかどうか
      if ($post_type !== 'post') {

        $the_tax = ""; //そのサイトに合わせて投稿タイプごとに分岐させて明示的に指定してもよい

        // 投稿タイプに紐づいたタクソノミーを取得 (投稿フォーマットは除く)
        $tax_array = get_object_taxonomies($post_type, 'names');
        foreach ($tax_array as $tax_name) {
          if ($tax_name !== 'post_format') {
            $the_tax = $tax_name;
            break;
          }
        }

        $post_type_link = esc_url(get_post_type_archive_link($post_type));
        $post_type_label = esc_html(get_post_type_object($post_type)->label);

        //カスタム投稿タイプ名の表示
        echo '<li>' .
          '<a href="' . $post_type_link . '">' .
          '<span>' . $post_type_label . '</span>' .
          '</a>' .
          '</li>';

        //JSON-LDデータ
        $json_array[] = array(
          'id' => $post_type_link,
          'name' => $post_type_label
        );
      } else {
        $the_tax = 'category'; //通常の投稿の場合、カテゴリーを表示
      }

      // 投稿に紐づくタームを全て取得
      $terms = get_the_terms($post_id, $the_tax);

      // タクソノミーが紐づいていれば表示
      if ($terms !== false) {

        $child_terms = array(); // 子を持たないタームだけを集める配列
        $parents_list = array(); // 子を持つタームだけを集める配列

        //全タームの親IDを取得
        foreach ($terms as $term) {
          if ($term->parent !== 0) {
            $parents_list[] = $term->parent;
          }
        }

        //親リストに含まれないタームのみ取得
        foreach ($terms as $term) {
          if (! in_array($term->term_id, $parents_list)) {
            $child_terms[] = $term;
          }
        }

        // 最下層のターム配列から一つだけ取得
        $term = $child_terms[0];

        if ($term->parent !== 0) {

          // 親タームのIDリストを取得
          $parent_array = array_reverse(get_ancestors($term->term_id, $the_tax));

          foreach ($parent_array as $parent_id) {
            $parent_term = get_term($parent_id, $the_tax);
            $parent_link = esc_url(get_term_link($parent_id, $the_tax));
            $parent_name = esc_html($parent_term->name);
            echo '<li>' .
              ' <a href="' . $parent_link . '">' .
              '<span>' . $parent_name . '</span>' .
              '</a> / ' .
              '</li>';
            //JSON-LDデータ
            $json_array[] = array(
              'id' => $parent_link,
              'name' => $parent_name
            );
          }
        }

        $term_link = esc_url(get_term_link($term->term_id, $the_tax));
        $term_name = esc_html($term->name);
        // 最下層のタームを表示
        echo '<li>' .
          ' <a href="' . $term_link . '">' .
          // '<span>' . $term_name . '</span>' .
          '</a> / ' .
          '</li>';
        //JSON-LDデータ
        $json_array[] = array(
          'id' => $term_link,
          'name' => $term_name
        );
      }

      // 投稿自身の表示
      echo '<li><span> ' . esc_html(strip_tags($post_title)) . '</span></li>';
    } elseif (is_page() || is_home()) {

      //固定ページ ( $wp_obj : WP_Post )
      $page_id = $wp_obj->ID;
      $page_title = apply_filters('the_title', $wp_obj->post_title);

      // 親ページがあれば順番に表示
      if ($wp_obj->post_parent !== 0) {
        $parent_array = array_reverse(get_post_ancestors($page_id));
        foreach ($parent_array as $parent_id) {
          $parent_link = esc_url(get_permalink($parent_id));
          $parent_name = esc_html(get_the_title($parent_id));
          echo '<li>' .
            '<a href="' . $parent_link . '">' .
            '<span>' . $parent_name . '</span>' .
            '</a> / ' .
            '</li>';
          //JSON-LDデータ
          $json_array[] = array(
            'id' => $parent_link,
            'name' => $parent_name
          );
        }
      }
      // 投稿自身の表示
      echo '<li><span>' . esc_html(strip_tags($page_title)) . '</span></li>';
    } elseif (is_post_type_archive()) {
      // カスタム投稿タイプのアーカイブ（例：archive-news.php）

      $post_type = get_post_type_object(get_post_type());
      $slug = $post_type->rewrite['slug']; // スラッグ取得（例: news）

      // 固定ページをスラッグで取得
      $linked_page = get_page_by_path($slug);
      if ($linked_page) {
        $title = get_the_title($linked_page);
        $link = get_permalink($linked_page);

        echo '<li><a href="' . esc_url($link) . '"><span>' . esc_html($title) . '</span></a></li>';

        $json_array[] = array(
          'id' => $link,
          'name' => $title
        );
      } else {
        // 固定ページがなければ投稿タイプのラベルを表示
        echo '<li><span>' . esc_html($post_type->labels->name) . '</span></li>';
      }
    } elseif (is_archive()) {

      //タームアーカイブ ( $wp_obj : WP_Term )
      $term_id = $wp_obj->term_id;
      $term_name = $wp_obj->name;
      $tax_name = $wp_obj->taxonomy;

      // 親ページがあれば順番に表示
      if ($wp_obj->parent !== 0) {

        $parent_array = array_reverse(get_ancestors($term_id, $tax_name));
        foreach ($parent_array as $parent_id) {
          $parent_term = get_term($parent_id, $tax_name);
          $parent_link = esc_url(get_term_link($tax_name));
          $parent_name = esc_html($parent_term->name);
          echo '<li>' .
            ' <a href="' . $parent_link . '">' .
            '<span>' . $parent_name . '</span>' .
            '</a> / ' .
            '</li>';
          //JSON-LDデータ
          $json_array[] = array(
            'id' => $parent_link,
            'name' => $parent_name
          );
        }
      }

      // ターム自身の表示
      echo '<li>' .
        ' <span>' . esc_html($term_name) . '</span>' .
        '</li>';
    } else {

      //その他のページ
      echo '<li><span>' . esc_html(get_the_title()) . '</span></li>';
    }
    echo '</ul>';

    //JSON-LDの出力（２階層以上であれば）
    if (!empty($json_array)) :
      $pos = 1;
      $json = '';
      foreach ($json_array as $data) :
        $json .= '{
  "@type": "ListItem",
  "position": ' . $pos++ . ',
  "item": {
  "@id": "' . $data['id'] . '",
  "name": "' . $data['name'] . '"
  }
  },';
      endforeach;

      echo '<script type="application/ld+json">{
  "@context": "http://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [' . rtrim($json, ',') . ']
  }</script>';
    endif;

    echo '</div>'; // 冒頭に合わせた閉じタグ

  }
}
/*============================ パンくずリスト表示設定 ここまで ============================*/


/*------------------------------------------
  お客様の声ページ カテゴリごとに記事表示
------------------------------------------*/
function filter_voice_posts()
{
  $term_id = isset($_GET['term_id']) ? $_GET['term_id'] : 'all';

  $args = array(
    'post_type'      => 'voice',
    'posts_per_page' => -1,
    'orderby'        => 'date',
    'order'          => 'DESC',
  );

  if ($term_id !== 'all') {
    $args['tax_query'] = array(
      array(
        'taxonomy' => 'voice-cat',
        'field'    => 'term_id',
        'terms'    => intval($term_id),
      ),
    );
  }

  $voice_query = new WP_Query($args);

  if ($voice_query->have_posts()) :
    while ($voice_query->have_posts()) : $voice_query->the_post();
      $terms = get_the_terms(get_the_ID(), 'voice-cat'); // カテゴリを取得
?>
      <li class="voice-item">
        <a href="<?php the_permalink(); ?>">
          <div class="voice-item-textarea">
            <div class="voice-item-title"><?php the_field('voice_title'); ?></div>
            <div class="voice-item-address"><?= the_title(); ?></div>
          </div>
          <div class="voice-item-img"><img src="<?= get_field('voice_img')['url'] ?>" alt="<?= get_field('voice_img')['alt'] ?>"></div>
          <div class="voice-item-cat">
            <?php
            // 任意のクラス名を対応付けるためのマッピング配列
            $category_classes = array(
              '太陽光発電システム' => 'solar',
              '太陽光発電システム+蓄電システム' => 'solar-storage', // この行を追加
            );

            // カテゴリを取得
            $terms = get_the_terms(get_the_ID(), 'voice-cat');

            if (!empty($terms)) {
              foreach ($terms as $term) {
                // タクソノミー名から対応するクラス名を取得
                $class_name = isset($category_classes[$term->name]) ? $category_classes[$term->name] : 'class-default';
                echo '<span class="' . esc_attr($class_name) . ' category-link">' . esc_html($term->name) . '</span>';
              }
            } else {
              echo '<span class="no-category">カテゴリなし</span>';
            }
            ?>

          </div>
        </a>
      </li>

<?php endwhile;
    wp_reset_postdata();
  else :
    echo '<p>該当する投稿がありません。</p>';
  endif;

  die(); // Ajax終了
}

add_action('wp_ajax_filter_voice', 'filter_voice_posts');
add_action('wp_ajax_nopriv_filter_voice', 'filter_voice_posts');

/*------------------------------------------
  NEWSページ カテゴリごとに記事表示
------------------------------------------*/
function filter_news_posts() {
  $term_id = isset($_GET['term_id']) ? $_GET['term_id'] : 'all';
  $paged = isset($_GET['paged']) ? intval($_GET['paged']) : 1;

  // 「すべて」のときだけページネーションを有効に
  $args = array(
    'post_type'      => 'news',
    'orderby'        => 'date',
    'order'          => 'DESC',
    'paged'          => $paged,
    'posts_per_page' => ($term_id === 'all') ? 21 : -1, // デフォルト18件表示、絞り込み時全件表示
  );

  if ($term_id !== 'all') {
    $args['tax_query'] = array(
      array(
        'taxonomy' => 'news-post-format',
        'field'    => 'term_id',
        'terms'    => intval($term_id),
      ),
    );
  }

  $news_query = new WP_Query($args);

  if ($news_query->have_posts()) :
    while ($news_query->have_posts()) : $news_query->the_post();
      $terms = get_the_terms(get_the_ID(), 'news-post-format');
      $term_name = ($terms && !is_wp_error($terms)) ? esc_html($terms[0]->name) : '';
?>
      <li>
        <a href="<?php the_permalink(); ?>">
          <div class="img"><?php the_post_thumbnail('full'); ?></div>
          <div class="post-info">
            <span class="date"><?php the_time('Y.m.d'); ?></span>
            <span class="cat"><?= $term_name; ?></span>
          </div>
          <p><?php the_title(); ?></p>
        </a>
      </li>
<?php
    endwhile;
    wp_reset_postdata();
  else :
    echo '<li><p>該当する投稿がありません。</p></li>';
  endif;

  wp_die();
}

add_action('wp_ajax_filter_news', 'filter_news_posts');
add_action('wp_ajax_nopriv_filter_news', 'filter_news_posts');

/*------------------------------------------
  製品詳細ページ 製品比較機能
------------------------------------------*/
function add_custom_meta_to_rest($response, $post, $request)
{
  $meta_fields = array();

  // product_detail_1 から product_detail_30 を取得
  for ($i = 1; $i <= 30; $i++) {
    $meta_fields[] = "product_detail_$i";
  }

  // image1 も追加
  $meta_fields[] = "image1";

  foreach ($meta_fields as $field) {
    $response->data['meta'][$field] = get_field($field, $post->ID);
  }

  return $response;
}

add_filter('rest_prepare_product', 'add_custom_meta_to_rest', 10, 3);

// ACF WYSIWYGエディタにTinyMCE テンプレート連携
add_filter('tinymce_templates_enable_media_buttons', function () {
  return true;
});

function allow_glb_upload($mimes) {
	//非標準ファイルをメディアにアップロードできるように設定
	if (current_user_can('manage_options')) {
		$mimes['glb'] = 'model/gltf-binary';
	}
	return $mimes;
}
add_filter('upload_mimes', 'allow_glb_upload');

### 汎用関数
function get_theme_path() {
  return get_stylesheet_directory_uri();
}

function get_img_path() {
  return get_stylesheet_directory_uri() . "/images";
}

function get_my_home_url($text = "") {
	if(!empty($text)){
		return esc_url(home_url('/'.$text));
	}else{
		return esc_url(home_url());
	}
	return $text;
}

function is_public_server() {
  return $_SERVER["HTTP_HOST"] === "pv.hanwha-japan.com";
}

/*------------------------------------------
  製品一覧ページ AJAX フィルタリング処理
------------------------------------------*/
function ajax_filter_products() {
  $filter1 = isset($_POST['filter1']) ? sanitize_text_field($_POST['filter1']) : '';
  $filter2 = isset($_POST['filter2']) ? sanitize_text_field($_POST['filter2']) : '';
  $term_slug = isset($_POST['term_slug']) ? sanitize_text_field($_POST['term_slug']) : '';

  $meta_query = array('relation' => 'AND');

  if ($filter1 !== '') {
    $meta_query[] = array(
      'key'     => 'filter1',
      'value'   => $filter1,
      'compare' => '='
    );
  }

  if ($filter2 !== '') {
    $meta_query[] = array(
      'key'     => 'filter2',
      'value'   => $filter2,
      'compare' => '='
    );
  }

  $args = array(
    'post_type'      => 'product',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'tax_query'      => array(
      array(
        'taxonomy' => 'product-cat',
        'field'    => 'slug',
        'terms'    => $term_slug,
      ),
    ),
    'meta_query' => $meta_query,
    'fields' => 'ids', // 投稿IDだけ取得
  );

  $query = new WP_Query($args);

  if ($query->have_posts()) {
    foreach ($query->posts as $post_id) {
      $title = get_the_title($post_id);
      $permalink = get_permalink($post_id);
      $image_id = get_post_meta($post_id, 'lineup', true);
      $image_url = wp_get_attachment_url($image_id);

      $new_switch = get_post_meta($post_id, 'new_switch', true);

      echo '<a class="prod-item" href="' . esc_url($permalink) . '">';
      echo '  <div class="img"><img src="' . esc_url($image_url) . '" alt=""></div>';
      echo '  <div class="ttl">';
      if ($new_switch === '1') {
        echo '    <p class="new">NEW</p>';
      }
      echo '    <h3 class="name">' . esc_html($title) . '</h3>';
      echo '  </div>';
      echo '</a>';
    }
  } else {
    echo '<p>該当する商品がありません</p>';
  }

  wp_reset_postdata();
  die();
}

// AJAX アクションを追加
add_action('wp_ajax_filter_products', 'ajax_filter_products');
add_action('wp_ajax_nopriv_filter_products', 'ajax_filter_products');

// `storage-system` 専用の処理
function ajax_filter_products_storage_system() {
  $filter1   = isset($_POST['filter1'])   ? sanitize_text_field($_POST['filter1'])   : '';
  $filter2   = isset($_POST['filter2'])   ? sanitize_text_field($_POST['filter2'])   : '';
  $term_slug = isset($_POST['term_slug']) ? sanitize_text_field($_POST['term_slug']) : '';

  $meta_query = array('relation' => 'AND');

  if (!empty($filter1)) {
    $meta_query[] = array(
      'key'     => 'filter1',
      'value'   => $filter1,
      'compare' => '=',
    );
  }

  if (!empty($filter2)) {
    $meta_query[] = array(
      'key'     => 'filter2',
      'value'   => $filter2,
      'compare' => '=',
    );
  }

  $args = array(
    'post_type'      => 'product',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'tax_query'      => array(
      array(
        'taxonomy' => 'product-cat',
        'field'    => 'slug',
        'terms'    => $term_slug,
      ),
    ),
    'meta_query' => $meta_query,
    'fields'     => 'ids', // 投稿IDのみ取得
  );

  $query = new WP_Query($args);

  $ready_items  = '';
  $hybrid_items = '';

  if ($query->have_posts()) {
    foreach ($query->posts as $post_id) {
      $title         = get_the_title($post_id);
      $permalink     = get_permalink($post_id);
      $image_id      = get_post_meta($post_id, 'lineup', true);
      $filter2_value = get_post_meta($post_id, 'filter2', true);

      $image_url = is_numeric($image_id)
        ? wp_get_attachment_url($image_id)
        : (is_array($image_id) && isset($image_id['url']) ? $image_id['url'] : '');

      $html  = '<a class="prod-item" href="' . esc_url($permalink) . '">';
      $html .= '<div class="img"><img src="' . esc_url($image_url) . '" alt=""></div>';
      $html .= '<div class="ttl"><h3 class="name">' . esc_html($title) . '</h3></div>';
      $html .= '</a>';

      if ($filter2_value === 'レディ型') {
        $ready_items .= $html;
      } elseif ($filter2_value === 'ハイブリッド型') {
        $hybrid_items .= $html;
      }
    }
  }

  echo '<div id="ready-list">' . (!empty($ready_items) ? $ready_items : '<p>該当する商品がありません</p>') . '</div>';
  echo '<div id="hybrid-list">' . (!empty($hybrid_items) ? $hybrid_items : '<p>該当する商品がありません</p>') . '</div>';

  die();
}

add_action('wp_ajax_filter_products_storage_system', 'ajax_filter_products_storage_system');
add_action('wp_ajax_nopriv_filter_products_storage_system', 'ajax_filter_products_storage_system');

/*------------------------------------------
	クラシックエディタ 独自ボタン追加
------------------------------------------*/
add_action('admin_print_footer_scripts', 'add_btn_admin_editor', 100);

function add_btn_admin_editor() {	?>
		<script type="text/javascript">
		//QTags.addButton('ID', 'ボタンのラベル', '開始タグ', '終了タグ');
		QTags.addButton('br', '改行', '<br>', '');
		</script>
<?php	}

/*------------------------------------------
	デバッグ用
------------------------------------------*/
function my_output_log($data){
	$file_path =  __DIR__ ."/my-log.txt";
	file_put_contents($file_path, print_r($data, true));
}

add_action('after_setup_theme', 'my_remove_admin_bar');

function my_remove_admin_bar() {
	$user_name = wp_get_current_user()->user_login;
	if ($user_name === 'dev' && !is_admin()) {
			show_admin_bar(false);
	}
}

/*------------------------------------------
	ショートコード
------------------------------------------*/

if (!function_exists('my_header_news_shortcode')) {
	//ヘッダー内ニュース用
	function my_header_news_shortcode(){
		$result = "";

		$args = array(
			'post_type'      => 'news',
			'posts_per_page' => 3,
			'post_status' => 'publish',
			'orderby', ['date' => 'ASC'],
		);
	
		$news_query = new WP_Query($args);

		if ($news_query->have_posts()){
			while($news_query->have_posts()) : $news_query->the_post();

			$terms = get_the_terms(get_the_ID(), 'news-post-format');
			$result .= '<a href="'.get_the_permalink().'" class="my-news-link">
									<div class="my-news-img">
										'.get_the_post_thumbnail().'
									</div>
									<p class="my-news-date">'.get_the_date('Y.m.d').'　'.$terms[0]->name.'</p>
									<p class="my-news-title">'.get_the_title().'</p>
								</a>';

			endwhile; wp_reset_postdata();
		}

		return $result;
	}
	add_shortcode( 'header-news', 'my_header_news_shortcode' );
}

/*------------------------------------------
	カタログ請求 フォーム内のカタログ部数選択
  バリデーション一部カスタム
------------------------------------------*/

add_filter('wpcf7_validate_number', 'custom_validate_catalog_group', 20, 2);

function custom_validate_catalog_group($result, $tag) {
  $tag_name = $tag['name'];
  $catalog_fields = ['cat-noc-1', 'cat-noc-2', 'cat-noc-3']; // カタログ部数の全項目

  // 初回だけ、全体チェックを走らせる
  if ($tag_name === $catalog_fields[0]) {
    $filled = false;
    foreach ($catalog_fields as $field) {
      $val = isset($_POST[$field]) ? trim($_POST[$field]) : '';
      if ($val !== '' && is_numeric($val)) {
        $filled = true;
        break;
      }
    }
    if (!$filled) { // グループ内に1つも値が入ってなければ、cat-noc-1にエラーが出るようにする
      $result->invalidate($tag, '');
    }
  }

  return $result;
}

/*------------------------------------------
	お見積り依頼 選択によって必須項目が変わる
  バリデーション一部カスタム
------------------------------------------*/

add_filter('wpcf7_validate_select', 'custom_validate_est_fields', 20, 2);
add_filter('wpcf7_validate_radio', 'custom_validate_est_fields', 20, 2);

function custom_validate_est_fields($result, $tag) {
  $tag_name = $tag->name;

  // POSTデータ取得（念のため全部チェック）
  $uhousing = isset($_POST['est-uhousing']) ? sanitize_text_field($_POST['est-uhousing']) : '';
  $uyoc = isset($_POST['est-uyoc']) ? sanitize_text_field($_POST['est-uyoc']) : '';
  $umaterial = isset($_POST['est-umaterial']) ? sanitize_text_field($_POST['est-umaterial']) : '';
  $ushape = isset($_POST['est-ushape']) ? sanitize_text_field($_POST['est-ushape']) : '';
  $uconstruction = isset($_POST['est-uconstruction']) ? sanitize_text_field($_POST['est-uconstruction']) : '';

  if ($uhousing === '既築住宅') { // 「既築住宅」の場合だけ以下の3つを必須にする
    if ($tag_name === 'est-uyoc' && ($uyoc === '' || $uyoc === '---')) {
      $result->invalidate($tag, '築年数を選択してください。');
    }

    if ($tag_name === 'est-umaterial' && ($umaterial === '' || $umaterial === '---')) {
      $result->invalidate($tag, '屋根材を入力してください。');
    }

    if ($tag_name === 'est-ushape' && ($ushape === '' || $ushape === '---')) {
      $result->invalidate($tag, '屋根形状を入力してください。');
    }
  } elseif ($uhousing === '新築住宅') { // 「新築住宅」の場合だけ着工予定日が未選択の場合エラーを出す
    if ($tag_name === 'est-uconstruction' && $uconstruction === '未選択') {
      $result->invalidate($tag, '着工予定日を選択してください。');
    }
  }

  return $result;
}

/*------------------------------------------
	カタログ請求 お見積依頼 
  管理者側の自動返信メールの宛先に
  エリアごとに振り分けられた支店のアドレスを追加
------------------------------------------*/

add_action('wpcf7_before_send_mail', 'add_branch_email_by_pref', 1);

function add_branch_email_by_pref($contact_form) {
  $submission = WPCF7_Submission::get_instance();
  if (!$submission) return;

  // 都道府県を取得
  $posted_data = $submission->get_posted_data();
  $pref_raw = isset($posted_data['upref']) ? $posted_data['upref'] : '';
  $pref = is_array($pref_raw) ? $pref_raw[0] : $pref_raw;

  // 各支店に振り分ける都道府県のグループ
  $group_housing_sales = ['茨城県', '栃木県', '群馬県', '千葉県', '神奈川県', '東京都', '埼玉県', '山梨県', '長野県']; // 住宅営業課
  $group_sendai = ['北海道', '青森県', '秋田県', '岩手県', '宮城県', '山形県', '福島県', '新潟県']; // 仙台支店
  $group_nagoya = ['富山県', '岐阜県', '愛知県', '静岡県', '石川県', '福井県', '三重県']; // 名古屋支店
  $group_osaka = ['大阪府', '京都府', '奈良県', '兵庫県', '和歌山県', '滋賀県']; // 大阪支店
  $group_fukuoka = ['鳥取県', '岡山県', '広島県', '島根県', '香川県', '徳島県', '高知県', '愛媛県', '山口県', '福岡県', '大分県', '宮崎県', '佐賀県', '長崎県', '熊本県', '鹿児島県', '沖縄県']; // 福岡支店

  // 支店ごとのメールアドレス
  $branch_emails = [
     // 'group_housing_sales' => 'murayama.a@qcells.com',
     // 'group_sendai' => 'dept10021607@qcells.com',
     // 'group_nagoya' => 'dept10021606@qcells.com',
     // 'group_osaka' => 'dept10021605@qcells.com',
     // 'group_fukuoka' => 'dept10021604@qcells.com',
    'group_housing_sales' => 'okura@felixjapan.net',
    'group_sendai' => 'mori@felixjapan.net',
    'group_nagoya' => 'a.takeshita@felixjapan.net',
    'group_osaka' => 'pikaran721@gmail.com',
    'group_fukuoka' => 'y.okura.721@gmail.com',
  ];

  $additional_email = '';

  // 選ばれた都道府県がどのグループに属しているか判定
  if (in_array($pref, $group_housing_sales)) {
    $additional_email = $branch_emails['group_housing_sales'];
  } elseif (in_array($pref, $group_sendai)) {
    $additional_email = $branch_emails['group_sendai'];
  } elseif (in_array($pref, $group_nagoya)) {
    $additional_email = $branch_emails['group_nagoya'];
  } elseif (in_array($pref, $group_osaka)) {
    $additional_email = $branch_emails['group_osaka'];
  } elseif (in_array($pref, $group_fukuoka)) {
    $additional_email = $branch_emails['group_fukuoka'];
  }

  if ($additional_email) {
    $mail_prop = $contact_form->get_properties();
    $mail = $mail_prop['mail'];
    // 既存の送信先に追加（カンマ区切り）
    $mail['recipient'] .= ', ' . $additional_email;
    // 追加後に書き戻す
    $mail_prop['mail'] = $mail;
    $contact_form->set_properties($mail_prop);
  }
}

/*------------------------------------------
	カスタム投稿「商品」「ニュース」「ブログ」カテゴリ選択をラジオボタンに
------------------------------------------*/
function convert_taxonomy_checkboxes_to_radio() {
  $screen = get_current_screen();
  if ( ! $screen ) return;
  
  // 対象にしたい投稿タイプとタクソノミーの組み合わせ
  $targets = [
    'product' => ['product-cat'],
    'blog-post' => ['blog-cat'],
    'news'      => ['news-post-format'],
    // 必要があればここに追加
  ];
  
  $post_type = $screen->post_type;
  
  if ( ! isset( $targets[ $post_type ] ) ) return;
  
  ?>
  <script type="text/javascript">
  jQuery(function($) {
    <?php foreach ( $targets[ $post_type ] as $taxonomy ) : ?>
      var $checkboxes = $('#taxonomy-<?php echo esc_js( $taxonomy ); ?> input[type="checkbox"]');
      $checkboxes.each(function() {
        $(this).replaceWith($(this).clone().attr('type', 'radio'));
      });
      
      $(document).on('change', '#taxonomy-<?php echo esc_js( $taxonomy ); ?> input[type="radio"]', function() {
        $('#taxonomy-<?php echo esc_js( $taxonomy ); ?> input[type="radio"]').not(this).prop('checked', false);
      });
    <?php endforeach; ?>
  });
  </script>
  <?php
}
add_action( 'admin_print_footer_scripts', 'convert_taxonomy_checkboxes_to_radio' );


/*------------------------------------------
	ブログ記事の閲覧数をカウント
------------------------------------------*/
function set_post_views($postID) {

  // ログインユーザの閲覧はカウントしない
  if (is_user_logged_in()) return;

  $ip = $_SERVER['REMOTE_ADDR'];
  $meta_key_time = 'view_block_time_' . md5($ip);
  $meta_key_count = 'post_views_count';
  $interval = 3600; // 同一IPアドレスからの再訪問をカウントするインターバル（秒）

  $last_view_time = get_post_meta($postID, $meta_key_time, true);
  $now = time();

  if (!$last_view_time || ($now - $last_view_time) > $interval) { //初回訪問かインターバルを超えた再訪問の場合
    // カウント更新
    $count = get_post_meta($postID, $meta_key_count, true);
    $count = $count ? intval($count) + 1 : 1;
    update_post_meta($postID, $meta_key_count, $count);

    // 最終アクセス時間を記録
    update_post_meta($postID, $meta_key_time, $now);
  }
}

/*------------------------------------------
	各ファイル共通キャッシュクリア
------------------------------------------*/
function get_last_modified($file_name, $path) {
  $file_path = get_stylesheet_directory() . "/{$path}/{$file_name}";

  if (!file_exists($file_path)) return;

  return "?ver=" . date('YmdHis', filemtime($file_path));
}