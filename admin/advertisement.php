<?php $page_title = "Реклама на сайте" ?>
<?php include('page-parts/header.inc.php') ?>
<div class="main-content">
	<div class="sidebar">
		<?php include('page-parts/sidebar.inc.php') ?>
	</div>
	<div class="page-content">
		<div class="page-header">
			<h1><?= $page_title ?></h1>
		</div>
		<h2 class="margin-bottom-medium">Тарифные планы</h2>
		<div class="tarrif-plans-list">
			<div class="item">
				<div class="tarrif-plan-block">
					<div class="text">
						<div class="h2">1 сутки</div>
						<div class="typ-display-1 color-green font-bold">350 руб.</div>
					</div>
					<div class="button">
						<a href="#" class="btn btn-default btn-lightblue small-side-paddings fullwidth">Выбрать</a>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="tarrif-plan-block">
					<div class="text">
						<div class="h2">3 суток</div>
						<div class="typ-display-1 color-green font-bold">500 руб.</div>
						<div class="typ-note color-dark">Экономия 550 руб.</div>
					</div>
					<div class="button">
						<a href="#" class="btn btn-default btn-lightblue small-side-paddings fullwidth">Выбрать</a>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="tarrif-plan-block">
					<div class="text">
						<div class="h2">7 суток</div>
						<div class="typ-display-1 color-green font-bold">1500 руб.</div>
						<div class="typ-note color-dark">Экономия 950 руб.</div>
					</div>
					<div class="button">
						<a href="#" class="btn btn-default btn-lightblue small-side-paddings fullwidth">Выбрать</a>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="tarrif-plan-block">
					<div class="text">
						<div class="h2">30 суток</div>
						<div class="typ-display-1 color-green font-bold">3000 руб.</div>
						<div class="typ-note color-dark">Экономия 7500 руб.</div>
					</div>
					<div class="button">
						<a href="#" class="btn btn-default btn-lightblue small-side-paddings fullwidth">Выбрать</a>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="tarrif-plan-block">
					<div class="text">
						<div class="h2">90 суток</div>
						<div class="typ-display-1 color-green font-bold">8000 руб.</div>
						<div class="typ-note color-dark">Экономия 23500 руб.</div>
					</div>
					<div class="button">
						<a href="#" class="btn btn-default btn-lightblue small-side-paddings fullwidth">Выбрать</a>
					</div>
				</div>
			</div>
		</div>
		<div class="divider"></div>
		<h2 class="margin-bottom-large">Создание рекламы</h2>
		<p>Выберите баннер с Вашего устройства (468 х 60)</p>
		<a href="#" class="btn btn-light btn-lightblue font-normal" style="width: 100%; max-width: 200px;">Выбрать</a>
		<div class="margin-bottom-large"></div>
		<p>Вставить ссылку</p>
		<div class="narrow-form">
			<input type="text">
		</div>
		<div class="margin-bottom-large"></div>
		<div class="flex-container align-center xs-align-stretch xs-flex-column">
			<div class="flex-item margin-right-normal xs-margin-right-no xs-margin-bottom-normal">
				<a href="#" class="btn btn-default btn-lightblue small-side-paddings">Создать рекламу</a>
			</div>
			<div class="flex-item">
				<a href="#" class="btn btn-light btn-lightblue small-side-paddings">Предварительный просмотр</a>
			</div>
		</div>
		<div class="divider"></div>
		<h2 class="margin-bottom-medium">Моя реклама</h2>
		<div class="flex-container">
			<div class="flex-row">
				<div class="flex-col col-12 col-md-6 col-xs-12">
					<div class="advertisment-block margin-bottom-tiny">
						<div class="image">
							<div class="typ-note font-bold color-green margin-bottom-tiny">Дата создания: 01.01.2018</div>
							<img src="img/adv-preview.png" alt="">
						</div>
						<div class="plan">
							<div class="typ-note color-text-lightgray font-bold">Тарифный план</div>
							<p class="font-bold color-green margin-no">7 суток</p>
						</div>
						<div class="state">
							<div class="typ-note color-text-lightgray font-bold">Состояние</div>
							<p class="font-bold color-green margin-no">Активно</p>
						</div>
						<div class="action">
							<a href="#" class="btn btn-default fullwidth">+ Доплатить</a>
						</div>
					</div>
				</div>
				<div class="flex-col col-12 col-md-6 col-xs-12">
					<div class="advertisment-block margin-bottom-tiny">
						<div class="image">
							<div class="typ-note font-bold color-green margin-bottom-tiny">Дата создания: 01.01.2018</div>
							<img src="img/adv-preview.png" alt="">
						</div>
						<div class="plan">
							<div class="typ-note color-text-lightgray font-bold">Тарифный план</div>
							<p class="font-bold color-green margin-no">7 суток</p>
						</div>
						<div class="state">
							<div class="typ-note color-text-lightgray font-bold">Состояние</div>
							<p class="font-bold color-green margin-no">Активно</p>
						</div>
						<div class="action">
							<a href="#" class="btn btn-default fullwidth">+ Доплатить</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('page-parts/footer.inc.php') ?>