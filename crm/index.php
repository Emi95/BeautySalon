<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>CRM BEAUTY SALON</title>
	<meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="../libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="../libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="../libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="../libs/owl-carousel/owl.carousel.css" />
	<link rel="stylesheet" href="../libs/countdown/jquery.countdown.css" />
	<link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/media.css" />
</head>
<body>

<div class="container-fluid">
    <div class="row">
	    <header>
	        <div class="col-md-12 head">
	        	<span class="col-md-1 col-sm-2"> ADMIN CRM </span>
	        	<span class="col-md-push-8 col-sm-push-7 col-md-3 col-sm-3">
	        		 Aueskhan Elmira 
	        		<i class="fa fa-sort-desc"></i>
	        	</span>	
	        </div>
	    </header>
    </div>
    <div class="row">
    	<aside class="col-md-3 col-lg-2 panel">
    		<ul>
				<li><i class="fa fa-desktop"></i><a href="?inc="> Рабочий стол </a></li>
				<li><i class="fa fa-users"></i><a href="?inc="> Клиенты </a></li>
				<li><i class="fa fa-address-card"></i><a href="?inc=emp"> Персонал </a></li>
				<li><i class="fa fa-user-circle"></i><a href="?inc=admin"> Администрирование </a> </li>
				<li><i class="fa fa-eur"></i><a href="?inc="> Продажи и маркетинг</a> </li>
				<li><i class="fa fa-battery-quarter"></i><a href="?inc="> Запасы </a></li>
				<li><i class="fa fa-life-ring"></i><a href="?inc="> Справочная информация </a></li>
    		</ul>
    	</aside>
    	<main class="col-md-9 col-lg-10">
    		<?
    		if(isset($_GET['inc'])){
    			switch (($_GET['inc'])) {
    				case 'admin':
    					include('admin.php');
    					break;
    				case 'emp':
    					include('personal.php');
    					break;
    				default:
    					echo 'bye';
    					break;
    			}
    		}
    		?>
    	</main>
    </div>
</div>





	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
	<script src="libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
	<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="libs/waypoints/waypoints-1.6.2.min.js"></script>
	<script src="libs/scrollto/jquery.scrollTo.min.js"></script>
	<script src="libs/owl-carousel/owl.carousel.min.js"></script>
	<script src="libs/countdown/jquery.plugin.js"></script>
	<script src="libs/countdown/jquery.countdown.min.js"></script>
	<script src="libs/countdown/jquery.countdown-ru.js"></script>
	<script src="libs/landing-nav/navigation.js"></script>
	<script src="js/common.js"></script>
	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>