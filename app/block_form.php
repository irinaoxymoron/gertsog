<div class="form" id="form-profile">
	<h2 class="form__title">Отправка анкеты</h2>
	<div class="form__content">
		<div class="form--wrap">
			<form class="form-part form-on" method="post" name="contactform" id="indexform" autocomplete="off">
				<input name="name" type="text" id="name" class="name-and-age required" size="30" placeholder="Имя, возраст" required>
				<input name="phone" type="text" id="phone" class="phone required" size="30" placeholder="Телефон" required>
				<!-- <input name="name" type="text" id="name" class="name-and-age required" size="30" placeholder="Имя, возраст"> -->
				<!-- <input name="phone" type="text" id="phone" class="phone required" size="30" placeholder="Телефон">				 -->
				<div class="button--wrap">
					<a href="#" class="button-photo">Загрузить фото</a>
					<input type="file" name="photos" id="hiddenPhotoLoader" hidden multiple accept="image/jpeg,image/png,image/gif">
					<span class="form-little">По&nbsp;закону &laquo;О&nbsp;персональных данных&raquo; студия обязуется <br>не&nbsp;распространять данные моделей и&nbsp;фото из&nbsp;анкет.</span>
					<div class="attached-photos"></div>
				</div>
				<div class="city-radio-block">
					<span class="p-r-r">
						<input type="radio" checked="" name="city" id="spbcity" value="Санкт-Петербург"><label for="spbcity">Санкт-Петербург</label>
					</span>
					<span class="p-r-r">
						<input type="radio" name="city" id="diffcity" value="Другой город"><label for="diffcity">Другой город</label>
					</span>
				</div>
				<div class="input-wrapper clearfix">
					<div class="button--wrap">
						<input type="submit" class="send-btn" value="Отправить &rarr;" id="submit" name="Отправить">
						<span class="form-little">Отправляя анкету, ты&nbsp;подтверждаешь, <br> что тебе исполнилось 18&nbsp;лет.</span>
					</div>
				</div>
			</form>
			<div class="form_sent" hidden>
				<h4>Спасибо, анкета отправлена</h4>
				<p></p>
				<a href="#" id="backToForm">Вернуться к анкете</a>
			</div>
			<div class="diffcity_notif" hidden>
				<p>К сожалению, мы не работаем с моделями из других городов</p>
			</div>
		</div>
		<div class="form__text--wrap">
			<p class="form__text">В&nbsp;течение дня с&nbsp;тобой свяжется администратор, расскажет про работу и&nbsp;пригласит на&nbsp;собеседование.</p>
		</div>
	</div>
</div>