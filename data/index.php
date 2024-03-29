<?php
	#
	# Author : 03sunf
	#
	require_once './config.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Default Set. -->
		<title><?=__USERNAME__?></title>
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=1.0">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=1.0">
		<link rel="stylesheet" href="/css/index.css?v=1.0"/>
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet"/>

		<!-- Default Metatag. -->
		<meta charset="UTF-8"/>
		<meta name="description" content="<?=__USERNAME__?>'s personal homepage."/>
		<meta name="author" content="<?=__USERNAME__?>"/>
		<meta name="keyword" content="<?=__USERNAME__?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>	

		<!-- Metatag for Open Graph. -->
		<meta property="og:title" content="<?=__USERNAME__?>"/>
		<meta property="og:description" content="<?=__USERNAME__?>'s personal homepage."/>
		<meta property="og:image" content="/img/logo.png"/>
		<meta property="og:url" content="http://<?=__USERNAME__?>.com/"/>

		<!-- Metatag for Twitter. -->
		<meta name="twitter:title" content="<?=__USERNAME__?>"/>
		<meta name="twitter:description" content="<?=__USERNAME__?>'s personal homepage."/>
		<meta name="twitter:image" content="/img/logo.png"/>
		<meta name="twitter:card" content="summary_large_image"/>
	</head>
	<body>
		<!-- Just for fun :) -->
		<script src="/js/index.js?v=1"></script>
		<div class="center">
			<p style="font-family: 'Amatic SC'; font-weight: 800; font-size: 72px; height: 12px;"><?=__USERNAME__?></p>
			<p style="font-family: 'Amatic SC'; font-weight: 600; font-size: 18px;">
				<a href="mailto:<?=__EMAIL__?>" style="color: black; text-decoration: none">(<?=__EMAIL__?>)</a>
			</p>
			<p style="font-family: 'Amatic SC'; font-weight: 600; font-size: 32px;">
				<a href="<?=__FACEBOOK__?>" style="color: #EEB9A1; text-decoration: none;">Facebook</a> · 
				<a href="<?=__TWITTER__?>" style="color: #EEB9A1; text-decoration: none;">Twitter</a> · 
				<a href="<?=__BLOG__?>" style="color: #EEB9A1; text-decoration: none;">Blog</a> · 
				<a href="<?=__GITHUB__?>" style="color: #EEB9A1; text-decoration: none;">Github</a> · 
				<a href="<?=__DONATE__?>" style="color: #EEB9A1; text-decoration: none;">03sunf</a>
			</p>
			<!-- Bottom images -->
			<img src="/img/toga.png" class="ruka"/>
		</div>
	</body>
</html>	
