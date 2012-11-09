<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS -->
<link rel="stylesheet" href="css/normalize.css"/>
<link rel="stylesheet" href="css/flexslider.css"/>
<link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css"/>
<link rel="stylesheet" href="css/tipTip.css"/>
<link rel="stylesheet" href="css/jqtransform.css"/>
<link rel="stylesheet" href="css/styles.css"/>

<!-- JAVASCRIPT -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript" src="js/libs/cssua.min.js"></script>
<script type="text/javascript" src="js/libs/modernizr.custom.35035.js"></script>

<!-- Favicons -->
<link rel="shortcut icon" href="img/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">

<?php
	/*
	 * Device Detection
	 */
	require_once('includes/Mobile_Detect.php');
	//Detect special conditions devices
	$detect = new Mobile_Detect();
	//do something with this information
	$isMobile = $detect->isMobile() ? true : false;
	//Detect special conditions devices
	$isTablet = $detect->isTablet() ? true : false;
?>