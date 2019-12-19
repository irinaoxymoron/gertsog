<?php include 'core/blog_data.php'; ?>
<?php 
	if ($page<1 || $page>$maxPage) {
		header("HTTP/1.0 404 Not Found");
		return;
	}
 ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Статьи студии Герцог — первой вебкам студии Петербурга</title>
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" />
	<link href="../img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
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
				<h1 class="promo__title">Все о&nbsp;работе <br> в&nbsp;вебкам</h1>
			</div>
		</div>

		<div class="blog--wrap">
			<div class="blog">
				<div class="blog__content">
					
					<? if (isset($articles)): ?>
						<? foreach ($articles as $article) :?>
							<div class="blog__item">
								<img src="<?= $article['img'] ?>" alt="Статья" class="blog__img">
								<h2 class="blog__title"><a href="<?= $article['href'] ?>" class="blog__link"><?= $article['title'] ?></a></h2>
								<p class="blog__text"><?= $article['text'] ?></p>
							</div>
						<? endforeach; ?>
					<? endif; ?>
					<div class="breadcrumbs">
						<? if (isset($previous)): ?>
							<a href="<?= $previous ?>" class="breadcrumbs__nav">Назад</a>
						<? endif; ?>
						<ul class="breadcrumbs__list">
							<? foreach (range(1, $maxPage) as $pageNumber) :?>
								<li class="breadcrumbs__item"><a href="?page=<?= $pageNumber ?>" class="breadcrumbs__link <?php if($page==$pageNumber) echo 'breadcrumbs__link--active' ?>"><?= $pageNumber ?></a></li>
							<? endforeach; ?>
						</ul>
						<? if (isset($next)): ?>
							<a href="<?= $next ?>" class="breadcrumbs__nav">Вперед</a>
						<? endif; ?>											
					</div>
				</div>
			</div>

			<div class="tags">
				<div class="tags__content">
					<h2 class="tags__title">Тэги</h2>
					<ul class="tags__list">
						<li class="tags__item"><a href="#" class="tags__link">Вебкам</a></li>
						<li class="tags__item"><a href="#" class="tags__link">Парни</a></li>
						<li class="tags__item"><a href="#" class="tags__link tags__link--active">Чат</a></li>
						<li class="tags__item"><a href="#" class="tags__link">Девушки</a></li>
						<li class="tags__item"><a href="#" class="tags__link">Без опыта</a></li>
					</ul>
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
</body>
</html>

