<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!--favicon-->
<link rel="icon" type="image/vnd.microsoft.icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.ico">
<link rel="apple-touch-icon" sizes="128x128" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.png">

<!--font-->
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,600;1,500&family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap" rel="stylesheet">

<!--link-->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/js/slick/slick.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/js/slick/slick-theme.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/common.css">


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-73604777-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-73604777-1');
</script>

<?php wp_head(); ?>
<?php echo '<script type="text/javascript">var templatePath = "' . get_template_directory_uri() . '";</script>'; ?>