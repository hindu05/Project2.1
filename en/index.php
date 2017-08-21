<!DOCTYPE html>
<!-- Mikrodatamarkering tilføjet af Google Markeringsværktøj til strukturerede data.-->
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Oplev ægte street food i Aarhus med mad og drikke fra mere end 30 gadekøkkener og flere barer. Besøg Aarhus Street Food på rutebilstationen i hjertet af Aarhus.">
<meta name="keywords" content="Aarhus, street food, mad, drikke, spisested">
<meta name="author" content="Andreas Nielsen, Emma Schumacher, Mathilde Gladov, Michael Rønne">
<title>Restaurant and café | Aarhus Street Food</title>
<link rel="shortcut icon" type="image/ico" href="../da/img/favicon.ico">
<!-- Bootstrap -->

<link href="../da/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../da/css/slick.css"/>
<link rel="stylesheet" type="text/css" href="../da/css/slick-theme.css"/>
<link href="../da/css/style.css" rel="stylesheet">


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries-->
<!-- WARNING: Respond.js doesn't work if you view the page via file://-->
<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<body>

	<aside id="modal">
		<div id="close"><p>X</p></div>
		<a href="../da/index">
			<article>
				<h2>Ooops!</h2>
				<p>This is the english version of Aarhus Street Food. It is still under construction. Click here to switch to the danish version.</p>
			</article>
		</a>
		<img src="construction.png">
	</aside>

	<div id="language">
		<p><a href="../da/index">da </a>|<a href="../en/index"> en</a></p>
	</div>
<?php include 'header.php';?>

<header>
	<div class="slider">
	  <div class="slide">
	    <img src="../da/img/front2.jpg" alt="Carrousel image" class="img-responsive" />
	  </div>
	  <div class="slide">
	    <img src="../da/img/front1.jpg" alt="Carrousel image" class="img-responsive" />
	  </div>
	  <div class="slide">
	    <img src="../da/img/front3.jpg" alt="Carrousel image" class="img-responsive" />
	  </div>
	    <div class="slide">
	    <img src="../da/img/front4.jpg" alt="Carrousel image" class="img-responsive" />
	  </div>
	  <div class="slide">
	    <img src="../da/img/front5.jpg" alt="Carrousel image" class="img-responsive" />
	  </div>
	  <div class="slide">
	    <img src="../da/img/front.jpg" alt="Carrousel image" class="img-responsive" />
	  </div>
	    <div class="slide">
	    <img src="../da/img/front6.jpg" alt="Carrousel image" class="img-responsive" />
	  </div>
	</div>
</header>
<div class="clearfix"></div>
<section id="køkkener" class="kitchen col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10">
	<div id="sortingarea">
		<h1>Authentic food inspired by the world</h1>
		<select id="sorting">
			<option value="1">Foods & Drinks</option>
			<option value="drikke">Drinks</option>
			<option value="mad">Food</option>
			<option value="vegetar">Vegetarian</option>
			<option value="vegan">Vegan</option>
			<option value="laktosefri">Lactose Free</option>		
		</select>
	</div>
	<div class="kitchenitem mad col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/americanstreetkitchen.php" title="American Street Kitchen" target="_self">
			<img alt="American Street Kitchen" src="../da/img/kitchens/american1.jpg">
			<h3>American Street Kitchen</h3>
			<p>All american street food!</p>
		</a>
	</div>
	<div class="kitchenitem mad col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/bahnmibandits.php" title="bahnmi bandits" target="_self">
		<img alt="Banh Mi Bandits" src="../da/img/kitchens/bahnmi.jpg">
		<h3>Bánh Mi Bandits</h3>
		<p>Freestyle vietnamese<span class="hidden-md hidden-lg"> street food</span></p>
		</a>
	</div>
	<div class="kitchenitem mad col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/cheesecaken.php" title="Cheesecaken" target="_self">
		<img alt="kitchen profile image" src="../da/img/kitchens/cheesecaken1.jpg">
		<h3>Cheesecaken</h3>
		<p>Citys #1 cheesecake</p>
		</a>
	</div>
	<div class="kitchenitem mad col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/danyarfishandchips.php" title="danyar fish and chips" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/danyar.jpg">
		<h3>Danyar</h3>
		<p>Fish and chips</p>
		</a>
	</div>
	<div class="kitchenitem drikke col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/dash.php" title="Dash cocktails" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/dashcocktail.jpg">
		<h3>Dash</h3>
		<p>Cocktail bar</p>
		</a>
	</div>
	<div class="kitchenitem mad col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/duckit.php" title="Duck It" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/duckit1.jpg">
		<h3>Duck It</h3>
		<p>Juicy pulled duck<span class="hidden-md hidden-lg"> burger & fries</span></p>
		</a>
	</div>
	<div class="kitchenitem mad col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/E45.php" title="E45" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/e45.jpg">
		<h3>E45</h3>
		<p>Drinks</p>
		</a>
	</div>
	<div class="kitchenitem mad vegan vegetar col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/expatmeal.php" title="Expat Meal Indian Cousine" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/expatmeal.jpg">
		<h3>Expat Meal Indian Cousine</h3>
		<p>Authentic indian food</p>
		</a>
	</div>
	
	<div class="kitchenitem mad col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/Foodsteps.php" title="foodsteps" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/foodsteps1.jpg">
		<h3>Food Steps</h3>
		<p>American streetfood</p>
		</a>
	</div>
		<div class="kitchenitem vegetar mad col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/thefrenchcorner.php" title="thefrenchcorner" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/frenchcorner1.jpg">
		<h3>The French Corner</h3>
		<p>Traditional galettes <span class="hidden-md hidden-lg">and sweet crepes</span></p>
		</a>
	</div>
	<div class="kitchenitem vegetar mad col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/grilledcheese.php" title="Grilledcheese" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/grilledcheese.jpg">
		<h3>Grilled Cheese</h3>
		<p>Toast - made even better</p>
		</a>
	</div>
	<div class="kitchenitem mad col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/lapastafrasca.php" title="La pasta fresca" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/lapastafresca.jpg">
		<h3>La Pasta Fresca</h3>
		<p>U good B good</p>
		</a>
	</div>
	<div class="kitchenitem mad vegetar col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/larossa.php" title="La Rossa" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/larossa1.jpg">
		<h3>La Rossa</h3>
		<p>Sprøde pizzaer</p>
		</a>
	</div>
		<div class="kitchenitem vegetar mad col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/themexicandonkey.php" title="The Mexican Donkey" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/mexicandonkey1.jpg">
		<h3>The Mexican Donkey</h3>
		<p>Autentisk mexicansk mad</p>
		</a>
	</div>
	<div class="kitchenitem drikke col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/milkshakeogjuice.php" title="milkogjuice" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/milkshakeogjuice.jpg">
		<h3>Milkshakes og Juice</h3>
		<p>Juice i verdensklasse</p>
		</a>
	</div>
	<div class="kitchenitem drikke col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/mokkahouse.php" title="MokkaHouse" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/mokkahouse.jpg">
		<h3>Mokka house</h3>
		<p>Vi laver virkelig god kaffe</p>
		</a>
	</div>
	<div class="kitchenitem mad col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/mormorskoekken.php" title="Mormors Køkken" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/mormors1.jpg">
		<h3>Mormors Køkken</h3>
		<p>Dansk mad</p>
		</a>
	</div>
		<div class="kitchenitem vegetar vegan laktosefri mad col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/NORD.php" title="NORD" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/nord1.jpg">
		<h3>NORD</h3>
		<p>Fastfood i ny klæder</p>
		</a>
	</div>
	<div class="kitchenitem vegan vegetar drikke col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/Oelfred.php" title="Ølfred" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/oelfred1.jpg">
		<h3>Ølfred</h3>
		<p>Øl til alt og alle</p>
		</a>
	</div>
	<div class="kitchenitem mad vegetar col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/pitacorner.php" title="Pita Corner" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/pitacorner.jpg">
		<h3>Pita Corner</h3>
		<p>U good B pita</p>
		</a>
	</div>
		<div class="kitchenitem mad col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/stegenogdellen.php" title="Stegen og Dellen" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/stegen1.jpg">
		<h3>Stegen og Dellen</h3>
		<p>Flæskesteg & frikadelle<span class="hidden-md hidden-lg">sandwich</span></p>
		</a>
	</div>
	<div class="kitchenitem mad col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/streetshawarma.php" title="Street Shawarma" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/streetshawarma1.jpg">
		<h3>Street Shawarma</h3>
		<p>Muuuuums!</p>
		</a>
	</div>
	<div class="kitchenitem mad vegetar vegan col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/superbao.php" title="Super Bao" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/superbao1.jpg">
		<h3>Super Bao</h3>
		<p>Dampet og dejligt</p>
		</a>
	</div>
		<div class="kitchenitem mad col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/tatashe.php" title="Tatashe" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/tatashe1.jpg">
		<h3>Tatashe</h3>
		<p>Caribisk / Vestafrikansk grill</p>
		</a>
	</div>
	<div class="kitchenitem mad col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/tuktuk.php" title="tuktuk" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/tuktuk.jpg">
		<h3>Tuk Tuk</h3>
		<p>Autentisk Thai mad</p>
		</a>
	</div>
	<div class="kitchenitem mad col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/ugood.php" title="Ugood" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/ugood.jpg">
		<h3>Ugood</h3>
		<p>U good B good</p>
		</a>
	</div>
	<div class="kitchenitem drikke col-md-4 col-lg-3 col-sm-6">
		<a href="Kitchens/vinoes.php" title="Ugood" target="_self"><img alt="kitchen profile image" src="../da/img/kitchens/vinoes.jpg">
		<h3>Vinøs</h3>
		<p>Vin til alle</p>
		</a>
	</div>

	<button id="showmore">Vis alle køkkener</button>

	
</section>

<?php include 'footer.php';?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins)--> 
<script src="../da/js/jquery-3.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed--> 
<script src="../da/js/bootstrap.js"></script>
<script src="../da/js/slick.min.js"></script>
<script src="../da/js/custom.js"></script>
<script>
	  $('a[href*="#"]:not([href="#"])').click(function() {
	  	 $("#popupnav").toggle(200);
	  	 //burger normaliser
	  	    $(".burgerline").toggleClass('absolute');
		    $(".burgerline:nth-child(1)").delay(500).toggleClass('rotateright');
		    $(".burgerline:nth-child(2)").delay(500).toggleClass('rotateleft');
		    $(".burgerline:nth-child(3)").delay(500).toggleClass('rotateleft');

	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top - 10,
	        }, 600);
	        return false;
	      }
	    }

	});
</script>

</body>
</html>