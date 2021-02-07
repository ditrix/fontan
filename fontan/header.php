<!DOCTYPE html>
<html>
<head>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-PDDL2SH');</script><meta charset="utf-8" />
<?php
	$tpl_root = get_template_directory_uri();	
	//$tpl_root =  home_url()."/wp-content/themes/fontan";
?>
<link rel='stylesheet' href='<?=$tpl_root?>/css/normalize.css' type='text/css' media='all'>
<link rel='stylesheet' href='<?=$tpl_root?>/css/bootstrap.min.css' type='text/css' media='all'>


<script src="/wp-content/themes/fontan/js/jquery-1.4.3.min.js"></script>
<script src="/wp-content/themes/fontan/js/contact.js"></script>

<?php if(is_front_page()):?>
<style type="text/css">

.container { width: 100%; padding: 0; }
.content-img { overflow: hidden; margin: 0 auto; max-width: 1920px; }
.content-img img { margin: 0 -400px; }
.content-img-sect-4 { overflow: hidden; margin: 0 auto; max-width: 1920px; }
.content-img-sect-4 img { margin: 0; }

.header_flow {padding-top: 25px;}

.home-section_1 img {
 margin-top: 45px; margin-bottom: -50px; z-index: 2; position: relative;
}
.header-bg > video { width: 1920px; /*z-index: -100;*/}



.home-section_1 { z-index: -1; margin-top: -50px; position: relative;  }
.home-section-service {z-index: 1; margin-top: -200px; position: relative; }
.home-section_2 { z-index: 2; margin-top: -158px; position: relative; }
.home-section_3 { z-index: 3; margin-top: -300px; position: relative;  }
.home-section_4 { z-index: 4; position: relative;  }
.home-section_5 { z-index: 5; margin-top: -140px; position: relative;  }
.home-section_6 { z-index: 6; margin-top: -185px; position: relative;  }
.home-section_7 { z-index: 7; margin-top: -185px; position: relative;  }
.section-fonta { z-index: 4;  margin-top: -150px; position: relative;}

</style>
<?php else: ?>

<style type="text/css">

.container { width: 100%; padding: 0; }
.content-img { overflow: hidden; margin: 0 auto; max-width: 1920px; }
.content-img img { margin: 0 -400px; }
.content-img-sect-4 { overflow: hidden; margin: 0 auto; max-width: 1920px; }
.content-img-sect-4 img { margin: 0; }

.header_flow {padding-top: 25px;}

.contacts-section { z-index: 8; margin-top: -195px; position: relative; margin-bottom: 50px; }

.addres p { font-size: 1.2em; line-height: 0.8; font-family: MyriadPro-Regular;} 


.pages_header {background: url('<?=$tpl_root?>/img/header_wave_bg.png') bottom no-repeat; height: 275px;}
/*
.gallery_page h2 { color: white; text-shadow: #003399 1px 1px 0, #003399 -1px -1px 0, #003399 -1px 1px 0, #003399 1px -1px 0; }

*/
.hide { display: none; }

  </style>


<?php endif; ?>	
<style>
	
.contacts-section { z-index: 8; margin-top: -195px; position: relative; margin-bottom: 50px; }
.addres p { font-size: 1.2em; line-height: 0.8; font-family: MyriadPro-Regular;} 


 .header_flow { /*z-index: 100500;*/} 
 
.nivo-caption {background: #003399 !important;}
</style>

<title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<link rel='stylesheet' href='<?=$tpl_root?>/css/style.css' type='text/css' media='all'>
<link rel='stylesheet' href='<?=$tpl_root?>/css/responsive.css' type='text/css' media='all'>


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123967728-1"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-123967728-1');
</script>  
  
</head>
<body>