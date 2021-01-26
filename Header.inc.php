<?php
/* --- Requirements ---*/
if($page == 4)
{
	session_start();
	$cryptinstall="_secF/cryptographp.fct.php";
	include $cryptinstall;
}
else if($page == 20)
{
	session_start();
}
else
{
}
/* --- Requirements ---*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-86657514-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-86657514-1');
</script>
<?php  require('inc/meta.inc.php'); ?>
<title><?php echo($page_title); ?></title>
<meta name="description" content="<?php echo($page_desc); ?>">
<meta name="author" content="The Sher Corporation">
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<!--======== CSS ========-->
<link href="inc/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="inc/rev-slider/css/settings.css" rel="stylesheet" type="text/css" />
<link href="inc/rev-slider/css/layers.css" rel="stylesheet" type="text/css" />
<link href="inc/rev-slider/css/navigation.css" rel="stylesheet" type="text/css" />
<link href="inc/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
<link href="inc/css/superslides.css" rel="stylesheet"  type="text/css" />
<link href="inc/css/core.css" rel="stylesheet" type="text/css">
<link href="inc/css/style.css" rel="stylesheet">
<?php /*PORTAL STYLESHEET*/ if($page == 20) { ?><link href="_access/portal.css" rel="stylesheet" type="text/css"/><?php } ?>
<!--======== JS ========-->
<script type="text/javascript" src="inc/js/jquery.min.js"></script>
<script type="text/javascript" src="inc/rev-slider/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="inc/rev-slider/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="inc/rev-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="inc/rev-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="inc/rev-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="inc/rev-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="inc/rev-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="inc/rev-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="inc/rev-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="inc/rev-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="inc/rev-slider/js/extensions/revolution.extension.video.min.js"></script>
<!-- END SLIDER REVOLUTION -->

</head>
<body>
<div class="wrapper animsition testClass">
<header class="tempMenu">
    <ul>
       	<?php /*<li class="menuItem5"><a href="register" <?php if($page == 4){ echo('class="selected"'); } ?> >register</a></li>*/?>
        <li class="menuItem4"><a href="developers" <?php if($page == 7){ echo('class="selected"'); } ?> >dream</a></li>
        <li class="menuItem3"><a href="media" <?php if($page == 8){ echo('class="selected"'); } ?> >media</a></li>
    	
        <li class="menuItem2"><a href="location" <?php if($page == 3){ echo('class="selected"'); } ?> >location</a></li>
        <li class="menuItem1"><a href="ivy" <?php if($page == 2){ echo('class="selected"'); } ?> >ivy</a></li>
    </ul>
</header>

