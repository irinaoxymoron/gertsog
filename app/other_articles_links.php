<?php 

	include("../../vendor/autoload.php");	

	use KubAT\PhpSimple\HtmlDomParser;


	function getArticlesLinks($file) {
		

		$dirfiles = array_diff(scandir($_SERVER['DOCUMENT_ROOT'].'/articles'), array('..', '.'));

		$position = array_search($file, $dirfiles);

		if ($position) {
			if ($position < count($dirfiles)-1) {
				$nextPosition = $position + 1;
			} else {
				$nextPosition = 2;
			}
			if ($position == 2) {
				$prevPosition = count($dirfiles)-1;
			} else {
				$prevPosition = $position - 1;
			}

			$prevFile = $dirfiles[$prevPosition];
			$nextFile = $dirfiles[$nextPosition];

			$html = HtmlDomParser::file_get_html($_SERVER['DOCUMENT_ROOT'].'/articles/'.$prevFile);
			$prevTitle = $html->find('h1.promo__title',0)->plaintext;
			$html = HtmlDomParser::file_get_html($_SERVER['DOCUMENT_ROOT'].'/articles/'.$nextFile);
			$nextTitle = $html->find('h1.promo__title',0)->plaintext;		
	
			if (!$nextTitle || !$prevTitle) return; 

			echo '
				<div class="article-nav">
					<div class="article-nav__content">
						<div class="article-nav__link--wrap">
							<a href="/articles/'.$prevFile.'" class="article-nav__link article-nav__link--left">'.$prevTitle.'</a>
							<a href="/articles/'.$nextFile.'" class="article-nav__link article-nav__link--right">'.$nextTitle.'</a>
						</div>
					</div>
				</div>
			';
		}

	}

 ?>
