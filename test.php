<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="http://www.traviswaelbroeck.com"/>
  <meta property="og:image" content="http://www.traviswaelbroeck.com/images/preview.png" />
  <meta property="og:title" content="Travis Waelbroeck"/>
  <meta property="og:site_name" content="Travis Waelbroeck"/>
  <title>Travis Waelbroeck</title>
  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400|Open+Sans' rel='stylesheet' type='text/css'>
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/test.css" rel="stylesheet">
	<link href="css/test-queries.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="images/x-icon.ico" >
  <!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script><script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  
</head>
<body style="background-image: url('img/mtn2.jpg');">
	<a href="#menu">
		<div id="menu" class="menu text-center valign-parent">
			<i class="fa fa-bars fa-4 valign-child"></i>
			<i class="fa fa-times fa-4 valign-child hidden"></i>
		</div>
	</a>
	<div id="navigation" class="navigation valign-parent hidden">
		<ul class="valign-child text-center">
			<a href="#home" onclick="loadContent('.content','home.html')"><li class="nav-choice">Home</li></a>
			<a href="#about" onclick="loadContent('.content','about.html')"><li class="nav-choice">About</li></a>
			<a href="#contact" onclick="loadContent('.content','contact.html')"><li class="nav-choice">Contact</li></a>
			<a href="#blog" onclick="loadContent('.content','blog.html')"><li class="nav-choice">Blog</li></a>
		</ul>
	</div>
	<div id="main" class="main">
		<div id="main-height" class="valign-parent">
			<div class="valign-child content text-center home">
				<h1 class="title">Travis Waelbroeck</h1>
				<h3 class="tagline">Making the web a better place, one site at a time.</h3>
				<button class="btn-about" onclick="loadContent('.content','about.html')">About</button>
				<button class="btn-about" onclick="loadContent('.content','blog.html')">Blog</button>
				<button class="btn-about" onclick="loadContent('.content','contact.html')">Contact</button>
			</div>
		</div>
	</div>
<!-- Scripts -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/custom.js"></script>
  <script>
  	if($.browser.name == 'chrome' || $.browser.name == 'chromium') {
  		$('#main-height').height('100%');
  	}
  </script>
</body>
</html>