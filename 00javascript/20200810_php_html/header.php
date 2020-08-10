<!DOCTYPE html>
<html lang="ko">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="UTF-8">
	<title>php</title>
	<style>
		/*reset*/
		*{padding:0;margin:0;}
		li{list-style:none;}
		a:link,a:visited{color:#000; text-decoration:none;}
		.clearfix:after{content:"";display:block;clear:both;}

		/*header*/
		#header{width: 960px;margin:0 auto;background:skyblue;}
		#header h1{width: 150px; margin:0 auto; text-align:center; background:#f00;}
		.gnb{}
		.gnb>ul>li{float:left; width: 20%;}
		.gnb>ul>li>a{display:block;line-height:40px;text-align:center;}
		.gnb>ul>li>a:hover{background:#ddd;}

		/*visual slider*/
		.visual{height: 300px; background:green;}

		/*section*/
		section#container_wr{width: 960px; height:1000px; margin:0 auto; background:#555;}

		/*footer*/
		footer#footer{height:200px; background:skyblue;}
	</style>
</head>
<body>
	<header id="header">
		<h1>LOGO</h1>
		<nav class="gnb">
			<ul class="clearfix">
				<li><a href="#">MENU1</a></li>
				<li><a href="#">MENU2</a></li>
				<li><a href="#">MENU3</a></li>
				<li><a href="#">MENU4</a></li>
				<li><a href="#">MENU5</a></li>
			</ul>
		</nav>
	</header>