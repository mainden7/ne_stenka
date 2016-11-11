<?php
if(isset($data['title'])){
	$title = $data['title'];
}
if(isset($data['meta'])){
	$meta = $data['meta'];
}
if(isset($data['page'])){
	if($data['page'] == 'home') {
		$site_settings = Settings::load_main_settings();
		$title = $site_settings['title'];
		$meta = $site_settings['meta'];
	}
}
?>
<html class="no-js" lang="ru">
<head>

	<meta charset="utf-8">
	<title><?php echo isset($title) ? $title : 'Заголовок' ?></title>
	<?php echo isset($meta) ? $meta : '' ?>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta property="og:image" content="path/to/image.jpg">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo site_url(); ?>/application/resources/user_resources/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php echo site_url(); ?>/application/resources/user_resources/img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo site_url(); ?>/application/resources/user_resources/img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo site_url(); ?>/application/resources/user_resources/img/favicon/apple-touch-icon-114x114.png">
	<!-- Latest compiled and minified CSS -->

	<link rel="stylesheet" href="<?php echo site_url(); ?>/application/resources/user_resources/css/bootstrap.css" >
	<link rel="stylesheet" href="<?php echo site_url(); ?>/application/resources/user_resources/css/lightslider.css" >
	<link rel="stylesheet" href="<?php echo site_url(); ?>/application/resources/user_resources/libs/foundation/foundation.css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>/application/resources/user_resources/css/fonts.css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>/application/resources/user_resources/css/main.css">
<script type="text/javascript" src='<?php echo base_url() ?>application/resources/user_resources/js/sweetalert-dev.js'></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>application/resources/user_resources/css/sweetalert.css">

</head>

<!--[if lt IE 9]>
  <script src="libs/html5shiv/es5-shim.min.js"></script>
  <script src="libs/html5shiv/html5shiv.min.js"></script>
  <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
  <script src="libs/respond/respond.min.js"></script>
  <![endif]-->

  <body>