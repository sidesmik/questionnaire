<?php $page_title = "Мои рефералы" ?>
<?php include('page-parts/header.inc.php') ?>
<div class="main-content">
	<div class="sidebar">
		<?php include('page-parts/sidebar.inc.php') ?>
	</div>
	<div class="page-content">
		<div class="page-header">
			<h1><?= $page_title ?></h1>
		</div>
		<div class="tabs-nav">
			<div class="tabs-nav-inner">
				<a href="#" class="item current" data-tab="#main">Главная</a>
				<a href="#" class="item" data-tab="#referrals-1-lvl">Рефералы 1 ур.</a>
				<a href="#" class="item" data-tab="#referrals-2-lvl">Рефералы 2 ур.</a>
				<a href="#" class="item" data-tab="#referrals-3-lvl">Рефералы 3 ур.</a>
				<a href="#" class="item" data-tab="#statistics">Статистика</a>
				<a href="#" class="item" data-tab="#bannes">Баннеры</a>
			</div>
		</div>
		<div class="tabs-container">
			<div class="tab" id="main">
				<h2>Процент отчислений:</h2>
				<p>Рефералы 1 уровня — 5%</p>
				<p class="h3 color-blue">Рефералы 2 уровня — 15%</p>
				<p class="typ-display-1 color-green">Рефералы 3 уровня — 20%</p>
				<div class="margin-bottom-large"></div>
				<div class="gray-section">
					<h2 class="margin-bottom-medium">Как работает система?</h2>
					<div class="flex-container">
						<div class="flex-row">
							<div class="flex-col col-3 col-md-6 col-xs-12 md-margin-bottom-large">
								<div class="referral-step-block">
									<div class="image">
										<img src="img/icons/ref-1.png" alt="">
									</div>
									<div class="text">
										<p>Скопируйте персональную реферальную ссылку</p>
									</div>
								</div>
							</div>
							<div class="flex-col col-3 col-md-6 col-xs-12 md-margin-bottom-large">
								<div class="referral-step-block">
									<div class="image">
										<img src="img/icons/ref-2.png" alt="">
									</div>
									<div class="text">
										<p>Отправьте ее Вашим знакомым</p>
									</div>
								</div>
							</div>
							<div class="flex-col col-3 col-md-6 col-xs-12 xs-margin-bottom-large">
								<div class="referral-step-block">
									<div class="image">
										<img src="img/icons/ref-3.png" alt="">
									</div>
									<div class="text">
										<p>Зарегистрированные по ссылке пользователи стают Вашими рефералами</p>
									</div>
								</div>
							</div>
							<div class="flex-col col-3 col-md-6 col-xs-12">
								<div class="referral-step-block">
									<div class="image">
										<img src="img/icons/ref-4.png" alt="">
									</div>
									<div class="text">
										<p>Получайте отчисления от действий всех Ваших рефералов</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="margin-bottom-large"></div>
				<div class="referral-link-form">
					<p>Ваша реферальная ссылка</p>
					<div class="flex-container align-center xs-flex-column xs-align-stretch">
						<div class="flex-item margin-right-normal sm-margin-right-no sm-margin-bottom-normal" style="max-width: 350px; width: 100%;">
							<input type="text" value="http://test.com/Y3W3N6Q2D9L7J6K9X" class="color-blue">
						</div>
						<div class="flex-item">
							<a href="#" class="btn btn-default btn-lightblue font-normal">Скопировать</a>
						</div>
					</div>
				</div>
			</div>
			<div class="tab" id="referrals-1-lvl">
				<div class="scrollable-container">
					<table class="table">
						<tr>
							<th>Логин пользователя</th>
							<th>Дата регистрации</th>
							<th>Заработок</th>
						</tr>
						<tr>
							<td>User123</td>
							<td>01.01.2018</td>
							<td><div class="nowrap">10 руб.</div></td>
						</tr>
						<tr>
							<td>User123</td>
							<td>01.01.2018</td>
							<td><div class="nowrap">10 руб.</div></td>
						</tr>
						<tr>
							<td>User123</td>
							<td>01.01.2018</td>
							<td><div class="nowrap">10 руб.</div></td>
						</tr>
						<tr>
							<td>User123</td>
							<td>01.01.2018</td>
							<td><div class="nowrap">10 руб.</div></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="tab" id="referrals-2-lvl">
				<div class="scrollable-container">
					<table class="table">
						<tr>
							<th>Логин пользователя</th>
							<th>Дата регистрации</th>
							<th>Заработок</th>
						</tr>
						<tr>
							<td>User123</td>
							<td>01.01.2018</td>
							<td><div class="nowrap">10 руб.</div></td>
						</tr>
						<tr>
							<td>User123</td>
							<td>01.01.2018</td>
							<td><div class="nowrap">10 руб.</div></td>
						</tr>
						<tr>
							<td>User123</td>
							<td>01.01.2018</td>
							<td><div class="nowrap">10 руб.</div></td>
						</tr>
						<tr>
							<td>User123</td>
							<td>01.01.2018</td>
							<td><div class="nowrap">10 руб.</div></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="tab" id="referrals-3-lvl">
				<div class="scrollable-container">
					<table class="table">
						<tr>
							<th>Логин пользователя</th>
							<th>Дата регистрации</th>
							<th>Заработок</th>
						</tr>
						<tr>
							<td>User123</td>
							<td>01.01.2018</td>
							<td><div class="nowrap">10 руб.</div></td>
						</tr>
						<tr>
							<td>User123</td>
							<td>01.01.2018</td>
							<td><div class="nowrap">10 руб.</div></td>
						</tr>
						<tr>
							<td>User123</td>
							<td>01.01.2018</td>
							<td><div class="nowrap">10 руб.</div></td>
						</tr>
						<tr>
							<td>User123</td>
							<td>01.01.2018</td>
							<td><div class="nowrap">10 руб.</div></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="tab" id="statistics">
				<div class="tab-switcher">
					<div class="item" data-tab="#registrations">Регистрации</div>
					<div class="item" data-tab="#earnings">Заработок</div>
				</div>
				<div class="margin-bottom-huge"></div>
				<div class="tabs-container">
					<div class="tab" id="registrations">
						<img src="img/chart-bars.jpg" alt="" style="max-width: 100%; display: block;">
					</div>
					<div class="tab" id="earnings">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, commodi illo voluptatum voluptatem consequatur ipsa vero porro adipisci aut magnam.</p>
					</div>
				</div>
			</div>
			<div class="tab" id="bannes">
				<div class="big-banner-block">
					<div class="banner-block margin-bottom-normal">Баннер 468х60</div>
					<p class="font-bold">Код для вставки на сайт</p>
					<p class="typ-note" style="max-width: 260px;">&lt;a href="http://www.domen.com/?ref=Link" target="_blank"&gt;&lt;img src= "http://www.domen.com/banner.gif"&gt;&lt;/a&gt;</p>
					<a href="#" class="btn btn-default btn-small btn-blue">Копировать</a>
				</div>
				<div class="margin-bottom-large"></div>
				<div class="big-banner-block">
					<div class="banner-block squared margin-bottom-normal">Баннер 255х255</div>
					<p class="font-bold">Код для вставки на сайт</p>
					<p class="typ-note" style="max-width: 260px;">&lt;a href="http://www.domen.com/?ref=Link" target="_blank"&gt;&lt;img src= "http://www.domen.com/banner.gif"&gt;&lt;/a&gt;</p>
					<a href="#" class="btn btn-default btn-small btn-blue">Копировать</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('page-parts/footer.inc.php') ?>