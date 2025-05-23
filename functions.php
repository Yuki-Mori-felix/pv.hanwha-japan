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
      )
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
}
add_action('init', 'add_custom_post');




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
          '<span>' . $term_name . '</span>' .
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
    'posts_per_page' => 5,
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