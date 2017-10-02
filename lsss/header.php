<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Life Style Shop Summary</title>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/reset.css">
    <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>">
    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/img/house.ico">
    <link href="https://fonts.googleapis.com/css?family=Cantarell" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/myscript.js" type="text/javascript"></script>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
  	(adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-1848260684975170",
    enable_page_level_ads: true
  	});
	</script>
    <?php wp_head(); ?>
</head>

<body>
<div id="wrapper"><!--footer固定用-->
    
<?php ini_set('opcache.enable', 0); ?>
<?php include_once("svg-defs.svg"); ?><!--svgファイル読み込み-->

<header id="site_header" class="clearfix" role="banner">
   
     <div class="hamburger">
          <i></i>
          <i></i>
          <i></i>
     </div>
   
    <a href="<?= home_url(); ?>">
        <h1>Life style shop summary</h1>
    </a>
    
    <div id="pc_searchform"><?php get_search_form(); ?></div><!--PC用検索フォーム-->
  
  <div id="sp_navArea">
      
      <div class="x_mark">
      </div>
       
        <nav id="menu" role="navigation"> 
            <?php wp_nav_menu(); ?>
        </nav>
        
        <div id="sp_searchform"><?php get_search_form(); ?></div><!--SP用検索フォーム-->
        
  </div>
    
</header>

<div class="navOpen_hideArea">

<div class="wrap">
　<!--パンくずリスト-->
<div class="breadcrumbs wrap_col">
    <?php if(function_exists('bcn_display'))
    {
    bcn_display();
    }?>
</div>

</div>
