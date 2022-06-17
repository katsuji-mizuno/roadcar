


<!-- /page_wrapper -->
<?php wp_footer(); ?>



<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/colorbox/1.6.4/jquery.colorbox-min.js"></script>
<?php if(is_page('entry_form')):?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/entry.js"></script>
<?php endif;?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>

<?php if(is_home()) : ?>
  <script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/4-12/js/4-12.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/rellax.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/top.js"></script>
<?php elseif(is_page('recruit')):?>
  <script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/4-12/js/4-12.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/recruit.js"></script>
<?php elseif ( is_page('volvo') || is_page('upohs') ):?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/volvo.js"></script>
<?php elseif ( is_page('question') || is_page('upohs') ):?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/smoothScroll.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/question.js"></script>
<?php elseif ( is_page('contact_form') ):?>
  <!--郵便番号から住所自動入力-->
  <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
  <script type="text/javascript">
    //<![CDATA[
      jQuery(function(){
        jQuery('#zip').keyup(function(event){
          AjaxZip3.zip2addr(this,'','pref','address','city');
        })
      })
    //]]>
  </script>
<?php elseif ( is_page('offers')):?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/offers.js"></script>
<?php endif;?>
</body>
</html>


