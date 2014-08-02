<!DOCTYPE html>
<html class=" js csstransforms3d" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>classiclike</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="classiclike.com">
<meta name="author" content="classiclike.com">





<!-- Bootstrap CSS Files -->
<link href="startpage/bootstrap.css" rel="stylesheet">
<link href="startpage/bootstrap-theme.css" rel="stylesheet">
<!-- Home Page Styles -->
<link href="startpage/home07.css" rel="stylesheet">
<!-- Main Template Styles -->
<link href="startpage/main.css" rel="stylesheet">


 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="startpage/bootstrap/js/html5shiv.js"></script>
      <script src="startpage/bootstrap/js/respond.min.js"></script>
    <![endif]-->


<style>

	#ad{
		width: 90%;
		margin-left: auto;
		margin-right: auto;
		padding-top: 120px;
		padding-bottom: 80px;
	}
	article{
		margin: 25px;
		width: 350px;
		float: left;
		display: inline-block;
	-webkit-transition: all .8s linear;
	   -moz-transition: all .8s linear;
		-ms-transition: all .8s linear;
		 -o-transition: all .8s linear;
			transition: all .8s linear;
	}
	p{
		font-size: 16px;
		line-height: 23px;
		color: #000;
		padding: 7px;
		text-align: center;
		margin-top: 4px;
	-webkit-transition: all .8s linear;
	   -moz-transition: all .8s linear;
		-ms-transition: all .8s linear;
		 -o-transition: all .8s linear;
			transition: all .8s linear;
	}
	p.highs{
		background: #FFDB01;
		color: #000;
	-webkit-transition: all .8s linear;
	   -moz-transition: all .8s linear;
		-ms-transition: all .8s linear;
		 -o-transition: all .8s linear;
			transition: all .8s linear;
	}
	#masthead{
		margin-bottom: 20px;
		margin-top: 20px;
		position: absolute;
	}
	.logo{
		color: #000;
		font-weight: 100;
		font-size: 36px;
	}
	.logo > span{
		font-size: 18px;
		font-family: "NexaLight";
	}
	@media (max-width: 450px) {

		article{
			margin: 15px;
			width: 280px;
			float: left;
			display: inline-block;
		}
		.logo{
		font-size: 22px;
		margin-left: 0px !important;
		}
		.logo > span{
			font-size: 14px;
		}

	}
</style>
</head>


<body>



<!-- Master Wrap : starts -->
<section id="mastwrap" class="sliding">


<!-- masthead : starts -->
<header id="masthead" class="clearfix trans-header">
	<h1 class="logo">classiclike  / <span>your music site</span></h1>
</header>
<!-- masthead : ends -->

<!-- top-banner (variant2 only) : starts -->
<div id="ad">
	
		<div class="row">
			<article style="opacity: 1;" class="text-center auge">
				<a href="http://www.classiclike.com/">
					<img class="img-responsive" alt="" title="" src="startpage/auge-red.gif">
					<p>Klassikforum:<br />sagen Sie's uns, fragen Sie uns</p>
				</a>
			</article>
			<article style="opacity: 1;" class="text-center auge">
				<a href="http://www.classiclike.com/">
					<img class="img-responsive" alt="" title="" src="startpage/auge-gelb.gif">
					<p>Freizeit mit Klassik:<br />wer, mit wem, wohin?</p>
				</a>
			</article>
			<article style="opacity: 1;" class="text-center auge">
				<a href="http://www.classiclike.com/">
					<img class="img-responsive" alt="" title="" src="startpage/auge-green.gif">
					<p>Musikunterricht:<br />schräge Töne adé</p>
				</a>
			</article>

			<article style="opacity: 1;" class="text-center auge">
				<a href="http://www.classiclike.com/">
					<img class="img-responsive" alt="" title="" src="startpage/auge-darkblue.gif">
					<p>Tickets:<br /> tauschen Sie, kaufen Sie</p>
				</a>
			</article>
			<article style="opacity: 1;" class="text-center auge">
				<a href="http://www.classiclike.com/">
					<img class="img-responsive" alt="" title="" src="startpage/auge-pink.gif">
					<p>Musikgeschäfte:<br />rund um die Musik</p>
				</a>
			</article>
		</div>
</div>
<!-- top-banner : ends -->



<div id="footer">
    Dieses Forum ist noch in der Entwicklung. Anfang August 2014 können Sie classiclike.com benutzen.	
</div>










</section>
<!-- Master Wrap : ends -->


<!-- Core JS Libraries -->
<script src="startpage/jquery.js" type="text/javascript"></script>
<script src="startpage/jquery_002.js" type="text/javascript"></script>
<!-- JS Plugins -->
<script>
	$(document).ready(function(){
		$('article.auge').mouseenter(function(){
			$('article.auge').css('opacity','0.3');
			$(this).css('opacity','1');
			$(this).find('p').addClass('highs');
      var img_name =   $(this).find('img').attr("src");
      img_name = img_name.substring(0, img_name.length-4);
      $(this).find('img').attr("src", img_name + "-anim.gif");
		})
		$('article.auge').mouseleave(function(){
			$('article.auge').css('opacity','1');
			$('p').removeClass('highs');
      var img_name =   $(this).find('img').attr("src");
      img_name = img_name.substring(0, img_name.length-9);
      $(this).find('img').attr("src", img_name + ".gif");
      $('#beehtoven_img').attr('src','startpage/beethoven-1.jpg');
		})
    $('#beehtoven_img').mouseenter(function(){
      $('#beehtoven_img').attr('src','startpage/beethoven-3.jpg');
    })
    $('#beehtoven_img').mouseleave(function(){
      $('#beehtoven_img').attr('src','startpage/beethoven-1.jpg');
    })

	})
</script>




</body></html>
