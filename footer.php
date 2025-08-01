<?php

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">

  <!--フッターの中身ここから-->

  <div class="_inner">
    <div class="_contenner">

      <div class="_contenner_inner">

        <div class="_logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="/wp-content/uploads/2025/03/footer_logo.png"></a></div>
        <div class="_sns">
          <ul>
            <li><a href="https://www.youtube.com/@hanwhajapan_pv" rel="nofollow noopener" target="_blank"><img src="/wp-content/uploads/2025/03/YouTube-icon@2x.png"></a></li>
            <li><a href="https://x.com/hanwhajapan_pv" rel="nofollow noopener" target="_blank"><img src="/wp-content/uploads/2025/03/X-logo@2x.png"></a></li>
            <li><a href="https://www.instagram.com/hanwhajapan_pv" rel="nofollow noopener" target="_blank"><img src="/wp-content/uploads/2025/03/Instagram_Glyph_Black@2x.png"></a></li>
          </ul>
        </div>

      </div>
    </div>
  </div>

  <div class="wrap_s">

    <div class="footer-buttom"><!--_footer_all_menu-->

      <div class="footer-menu products-menu">
        <?php the_field('footer-menu01', 75); ?>
      </div>

      <div class="footer-menu contents-menu">
        <?php the_field('footer-menu02', 75); ?>
      </div>

      <div class="footer-menu contents-menu">
        <?php the_field('footer-menu03', 75); ?>
      </div>

      <div class="footer-menu contents-menu">
        <?php the_field('footer-menu04', 75); ?>
      </div>
    </div><!--_footer_all_menu-->

    <div class="_backtop"><!--page top-->
      <a href="#">Page top</a>
    </div><!--page top-->

  </div><!-- .wrap -->


  <!--pc-->
  <div class="_fixed_button"><!--fixed_button-->

    <div class="btn-box btn1-box"><a href="/service-support/contact/" class="btn btn1">お問い合わせ</a></div>
    <div class="btn-box btn2-box"><a href="/service-support/contact-catalog/" class="btn btn2">カタログ請求</a></div>
    <div class="btn-box btn3-box"><a href="/service-support/contact-quotation/" class="btn btn3">お見積り依頼</a></div>

  </div>

  <!--sp-->
  <div class="_footer_fixed_bt"><!--fixed_button-->
    <ul>
      <li><a href="/service-support/contact/"><i class="fa-solid fa-envelope"></i><span class="_footer_text_01">お問い合わせ</span></a></li>
      <li><a href="/service-support/contact-catalog/"><i class="fa-solid fa-book-open"></i><span class="_footer_text_01">カタログ請求</span></a></li>
      <li><a href="/service-support/contact-quotation/"><i class="fa-solid fa-calculator"></i><span class="_footer_text_01">お見積り依頼</span></a></li>
    </ul>
  </div>


  <div class="_end">
    <div class="wrap_s">
      <div class="_left-contents">
        <ul>
          <li><a href="https://www.hanwha-japan.com/privacy-policy/" rel="nofollow noopener" target="_blank">プライバシーポリシー</a></li>
          <li><a href="https://www.q-cells.jp/qcells/sns_guideline" rel="nofollow noopener" target="_blank">SNSガイドライン</a></li>
        </ul>
      </div>

      <div class="_copyright">
        Copyright © <?php bloginfo('name'); ?> All Rights Reserved.
      </div>
    </div>
  </div>

</footer>



</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>


</body>
<script src="<?= get_stylesheet_directory_uri() ?>/js/script.js<?=get_last_modified("script.js", "js")?>"></script>
</html>