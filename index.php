<?php $page_title = "Главная" ?>
<?php $header_class = "transparent" ?>
<?php include('page-parts/header.inc.php') ?>
<div class="main-content">
	<div class="slider-section">
		<div class="main-slider">
			<div class="slide" style="background-image: url(img/slider/slide-bg.jpg);">
				<div class="container">
					<div class="typ-display-3 color-white font-bold text-uppercase">Платные опросы</div>
					<div class="h2 color-white text-uppercase margin-bottom-large">Честный и проверенный сервис опросов</div>
					<a href="registration.php" class="btn btn-default">Стань участником проекта</a>
				</div>
			</div>
			<div class="slide" style="background-image: url(img/slider/slide-bg.jpg);">
				<div class="container">
					<div class="typ-display-3 color-white font-bold text-uppercase">Заголовок второго слайда</div>
					<div class="h2 color-white text-uppercase margin-bottom-large">Честный и проверенный сервис опросов</div>
					<a href="registration.php" class="btn btn-default">Стань участником проекта</a>
				</div>
			</div>
			<div class="slide" style="background-image: url(img/slider/slide-bg.jpg);">
				<div class="container">
					<div class="typ-display-3 color-white font-bold text-uppercase">Заголовок третьего слайда</div>
					<div class="h2 color-white text-uppercase margin-bottom-large">Честный и проверенный сервис опросов</div>
					<a href="registration.php" class="btn btn-default">Стань участником проекта</a>
				</div>
			</div>
		</div>
		<div class="slider-pagination">
			<div class="current"></div>
		</div>
	</div>
	<div class="why-we-section">
		<div class="container">
			<div class="section-caption sm-margin-bottom-large">
				<h2 class="h1 margin-no">Почему <br>выбирают нас?</h2>
			</div>
			<div class="features-list">
				<div class="item">
					<div class="item-icon">
						<i class="icon icon-tick-list"></i>
					</div>
					<div class="item-text">
						<p>500 <br>опросов <br><span>на различные тематики</span></p>
					</div>
				</div>
				<div class="item">
					<div class="item-icon">
						<i class="icon icon-peoples"></i>
					</div>
					<div class="item-text">
						<p>10 000 <br>участников <br><span>зарабатывающих на опросах</span></p>
					</div>
				</div>
				<div class="item">
					<div class="item-icon">
						<i class="icon icon-hand-with-money"></i>
					</div>
					<div class="item-text">
						<p>1 000 000 <br>рублей <br><span>успешно выплачено</span></p>
					</div>
				</div>
				<div class="item">
					<div class="item-icon">
						<i class="icon icon-24-hours"></i>
					</div>
					<div class="item-text">
						<p>24/7 <br>поддержка <span>ответим на любые вопросы</span></p>
					</div>
				</div>
			</div>
			<div class="why-we-button">
				<a href="registration.php" class="btn btn-default xs-fullwidth">Начать зарабатывать</a>
			</div>
		</div>
	</div>
	<div class="about-us-section">
		<div class="section-image">
			<div class="image-corner"></div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col col-6 col-sm-12">
					<div class="section-content">
						<h2 class="h1 margin-bottom-large">О проекте</h2>
						<p>Идейные соображения высшего порядка, а также сложившаяся структура организации обеспечивает широкому кругу (специалистов) участие в формировании направлений прогрессивного развития. Таким образом постоянный количественный рост и сфера нашей активности позволяет оценить значение направлений прогрессивного развития.</p>
						<p>Повседневная практика показывает, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании форм развития. Значимость этих проблем настолько очевидна, что консультация с широким активом позволяет оценить значение систем массового участия.</p>
						<div class="flex-container align-center fullwidth small-gutter">
							<div class="flex-row">
								<div class="flex-col col-6 col-lg-12 lg-margin-bottom-small">
									<a href="registration.php" class="btn btn-default fullwidth">Бесплатная регистрация</a>
								</div>
								<div class="flex-col col-6 col-lg-12">
									<a href="about.php" class="btn btn-light btn-midgray fullwidth">Узнать больше</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="news-section">
		<div class="container">
			<div class="row">
				<div class="col col-12">
					<div class="flex-container align-center justify-between margin-bottom-huge fullwidth sm-flex-column sm-align-stretch">
						<div class="flex-item margin-right-normal sm-margin-bottom-small">
							<h2 class="h1 margin-no">Свежие новости</h2>
						</div>
						<div class="flex-item">
							<a href="news.php" class="btn btn-light btn-small btn-midgray text-uppercase">Все новости</a>
						</div>
					</div>
				</div>
				<div class="col col-12">
					<div class="cards-list">
						<!-- News List -->
						<?php for ($i = 0; $i < 3; $i++): ?>
							<div class="item">
								<a href="news-single.php" class="news-block">
									<div class="news-image" style="background-image: url(http://placeimg.com/350/350/any?v=<?= rand() ?>);"></div>
									<div class="block-content">
										<div class="news-caption h3">Значимость этих проблем настолько очевидна</div>
										<div class="news-date typ-note">30 мая 2018</div>
									</div>
								</a>
							</div>
						<?php endfor; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('page-parts/footer.inc.php') ?>