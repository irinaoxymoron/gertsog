<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Герцог — первая вебкам студия Петербурга</title>
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" />
	<link href="../img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/calculator.css"/>
	<!-- Fotorama from CDNJS, 19 KB -->
	<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/YouTubePopUp.css">
	<link href='css/style.css' media='screen, projection' rel='stylesheet' type='text/css' />
</head>
<body>
	
	<?php include 'header.php'; ?>

	<div class="content">
		<div class="promo">
			<div class="promo__content">
				<h1 class="promo__title">Первая вебкам <br> студия Петербурга</h1>
				<div class="promo__slider center">
					<a href="#" class="promo__link">
						<img src="img/promo__img1.png" alt="slider" class="promo__img">
					</a>
					<a href="#" class="promo__link">
						<img src="img/promo__img2.png" alt="slider" class="promo__img">
					</a>
					<a href="#" class="promo__link">
						<img src="img/promo__img1.png" alt="slider" class="promo__img">
					</a>
					<a href="#" class="promo__link">
						<img src="img/promo__img3.png" alt="slider" class="promo__img">
					</a>
				</div>
			</div>
		</div>

		<div class="about">
			<h2 class="about__title">О&nbsp;студии</h2>
			<div class="about__content">
				<div class="about__text--wrap">
					<div class="about__subtitle">В&nbsp;вебкам студии 10&nbsp;изолированных рабочих комнат с&nbsp;дизайнерскими интерьерами, кондиционерами и&nbsp;профессиональным освещением. Все компьютеры подключены к&nbsp;скоростному интернету и&nbsp;оснащены</div>
					<div class="about__text">
						<p>В&nbsp;вебкам студии 10&nbsp;изолированных рабочих комнат с&nbsp;дизайнерскими интерьерами, кондиционерами и&nbsp;профессиональным освещением. Все компьютеры подключены к&nbsp;скоростному интернету и&nbsp;оснащены мобильными веб-камерами, обеспечивающими&nbsp;HD качество.</p>
						<p>После работы можно перекусить на&nbsp;уютной кухне, принять душ или пообщаться с&nbsp;друзьями в&nbsp;курилке. Мы&nbsp;обучаем работе: рассказываем о&nbsp;правилах сайтов, советуем, как себя вести, чтобы понравиться собеседникам и&nbsp;лучше выглядеть.</p>
					</div>
				</div>
				<div class="about__slider--wrap multiple-items">
					<img src="img/about__img1.png" alt="slider" class="about__slider">
					<img src="img/about__img2.png" alt="slider" class="about__slider">
					<img src="img/about__img3.png" alt="slider" class="about__slider">
				</div>
			</div>
		</div>

		<div class="advantages">
			<div class="advantages__content">
				<div class="advantages__block--wrap">
					<div class="advantages__block">
						<h3 class="advantages__title">Весомые преимущества</h3>
						<p class="advantages__text">Мы&nbsp;отличаемся внимательным отношением к&nbsp;любой детали работы студии</p>
						<a href="#" class="advantages__btn">Больше о&nbsp;студии &rarr;</a>
					</div>
					<div class="advantages__block">
						<img src="img/advantages__img1.jpg" alt="Деньги каждый день" class="advantages__img">
						<h3 class="advantages__subtitle">Деньги каждый день</h3>
						<p class="advantages__text">Первую неделю работа оплачивается ежедневно, потом раз в&nbsp;неделю без задержек.</p>
					</div>
					<div class="advantages__block">
						<img src="img/advantages__img2.jpg" alt="Надёжность" class="advantages__img">
						<h3 class="advantages__subtitle">Надёжность</h3>
						<p class="advantages__text">Мы&nbsp;всегда выполняем&nbsp;то, что обещаем: это подтверждает 12-летний опыт работы.</p>
					</div>
				</div>
				<div class="advantages__block--wrap">
					<div class="advantages__block">
						<img src="img/advantages__img3.jpg" alt="Гибкий график" class="advantages__img">
						<h3 class="advantages__subtitle">Гибкий график</h3>
						<p class="advantages__text">Модель самостоятельно выстраивает график работы: утром, днём, вечером или ночью.</p>
					</div>
					<div class="advantages__block">
						<img src="img/advantages__img4.jpg" alt="Конфиденциальность" class="advantages__img">
						<h3 class="advantages__subtitle">Конфиденциальность</h3>
						<p class="advantages__text">Студия никогда не&nbsp;раскрывает личности моделей, а&nbsp;всё общение проходит с&nbsp;собеседниками из&nbsp;США и&nbsp;Европы.</p>
					</div>
				</div>
			</div>
		</div>

		<?php include 'block_calculator.php'; ?>

		<div class="explore">
			<div class="explore__content">
				<h2 class="explore__title">Больше о&nbsp;нас</h2>
				<p class="explore__text">В&nbsp;вебкам студии 10&nbsp;изолированных рабочих комнат с&nbsp;дизайнерскими интерьерами, кондиционерами и&nbsp;профессиональным освещением. Все компьютеры подключены к&nbsp;скоростному интернету и&nbsp;оснащены мобильными веб-камерами, обеспечивающими&nbsp;HD качество. После работы можно перекусить на&nbsp;уютной кухне, принять душ или пообщаться с&nbsp;друзьями в&nbsp;курилке.</p>
				<p class="explore__subtitle">Лучшее предложение на&nbsp;рынке</p>
				<p class="explore__info">Узнай больше про работу в&nbsp;студии для <a href="#" class="explore__link">девушек</a> и&nbsp;для <a href="#" class="explore__link">парней</a></p>
			</div>
		</div>

		<div class="articles">
			<div class="articles__content">
				<div class="articles__text--wrap">
					<p class="articles__subtitle">Работа в&nbsp;чате</p>
					<h2 class="articles__title"><a href="#" class="articles__link">Онлайн моделинг. Как устроена работа в&nbsp;вебкам чате</a></h2>
					<p class="articles__text">10 сентября 2019</p>
				</div>
				<div class="articles__text--wrap">
					<p class="articles__subtitle">Для новичков</p>
					<h2 class="articles__title"><a href="#" class="articles__link">Кто такая вебкам модель</a></h2>
					<p class="articles__text">10 сентября 2019</p>
				</div>
				<div class="articles__text--wrap">
					<p class="articles__subtitle">Секреты вебкама</p>
					<h2 class="articles__title"><a href="#" class="articles__link">Секреты работы вебкам моделью: как позировать перед камерой</a></h2>
					<p class="articles__text">1 сентября 2019</p>
				</div>
			</div>
		</div>

		<?php include 'block_reviews.php'; ?>

		<div class="gallery">
			<div class="gallery__content">
				<div class="fotorama" data-nav="thumbs" data-loop="true" data-keyboard="true">
  					<a href="img/gallery__img1--big.jpg" data-caption="Комната «Санта-Моника»"><img src="img/gallery__img1--small.jpg" width="131" height="89"></a>
  					<a href="img/gallery__img1--big.jpg" data-caption="Комната «Санта-Моника»"><img src="img/gallery__img1--small.jpg" width="131" height="89"></a>
  					<a href="img/gallery__img1--big.jpg" data-caption="Комната «Санта-Моника»"><img src="img/gallery__img1--small.jpg" width="131" height="89"></a>
  					<a href="img/gallery__img1--big.jpg" data-caption="Комната «Санта-Моника»"><img src="img/gallery__img1--small.jpg" width="131" height="89"></a>
  					<a href="img/gallery__img1--big.jpg" data-caption="Комната «Санта-Моника»"><img src="img/gallery__img1--small.jpg" width="131" height="89"></a>
  					<a href="img/gallery__img1--big.jpg" data-caption="Комната «Санта-Моника»"><img src="img/gallery__img1--small.jpg" width="131" height="89"></a>
  					<a href="img/gallery__img1--big.jpg" data-caption="Комната «Санта-Моника»"><img src="img/gallery__img1--small.jpg" width="131" height="89"></a>
				</div>
			</div>
		</div>

		<?php include 'block_fill_profile.php'; ?>

	</div>

	<?php include 'footer.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!-- Fotorama from CDNJS, 19 KB -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
<script type="text/javascript" src="js/YouTubePopUp.jquery.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.pack.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/js-main.js"></script>
<script src="js/calculator.js"></script>
</body>
</html>

