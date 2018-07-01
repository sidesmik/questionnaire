<?php $page_title = "Мои финансы" ?>
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
				<a href="#" class="item current" data-tab="#refill">Пополнение</a>
				<a href="#" class="item" data-tab="#withdraw">Вывод средств</a>
			</div>
		</div>
		<div class="tabs-container">
			<div class="tab" id="refill">
				<p class="font-bold">Введите сумму и нажмите кнопку <span class="font-bold color-blue">«Пополнить баланс»</span></p>
				<p>Пополнение баланса происходит через кассу FreeKassa. <br>Введите нужную сумму, нажмите кнопку “Пополнить” и вы автоматически будете перенаправлены <br>на сайт платежной сиситемы.</p>
				<div class="margin-bottom-medium"></div>
				<div class="flex-container align-center xs-align-stretch xs-flex-column">
					<div class="flex-item margin-right-normal sm-margin-right-no sm-margin-bottom-normal" style="max-width: 300px; width: 100%;">
						<input type="text">
					</div>
					<div class="flex-item">
						<a href="#" class="btn btn-default btn-lightblue">Пополнить баланс</a>
					</div>
				</div>
			</div>
			<div class="tab" id="withdraw">
				<h2 class="color-green">Доступно для вывода: 1500 руб.</h2>
				<p class="color-text-lightgray">Минимальная сумма вывода: 500 руб. <br>Вывод средств доступен только на счет в платежной системе PAYEER. <br>Вывод средств осуществляется в течение 24 часов.</p>
				<div class="margin-bottom-medium"></div>
				<div class="flex-container align-end md-flex-column md-align-stretch">
					<div class="flex-item margin-right-large md-margin-bottom-medium md-margin-right-no" style="width: 160px;">
						<p>Сумма для вывода</p>
						<input type="text">
					</div>
					<div class="flex-item flex-auto margin-right-large md-margin-bottom-medium md-margin-right-no">
						<p>Номер кошелька PAYEER</p>
						<input type="text">
					</div>
					<div class="flex-item" style="width: 160px;">
						<a href="#" class="btn btn-default btn-lightblue fullwidth small-side-paddings">Заказать вывод</a>
					</div>
				</div>
				<div class="margin-bottom-huge"></div>
				<p class="font-bold margin-bottom-medium">История операций</p>
				<div class="scrollable-container">
					<table class="table">
						<tr>
							<th>Дата</th>
							<th>Операция</th>
							<th style="width: 160px;">Статус</th>
						</tr>
						<tr>
							<td>15.02.2018</td>
							<td>Заявка на вывод 500 руб.</td>
							<td>
								<div class="status-block">
									<div class="icon">
										<img src="img/icons/proceed.png" alt="">
									</div>
									<span>В обработке</span>
								</div>
							</td>
						</tr>
						<tr>
							<td>15.02.2018</td>
							<td>Заявка на вывод 2500 руб.</td>
							<td>
								<div class="status-block status-green">
									<div class="icon">
										<img src="img/icons/done.png" alt="">
									</div>
									<span>Выполнено</span>
								</div>
							</td>
						</tr>
						<tr>
							<td>15.02.2018</td>
							<td>Заявка на вывод 500 руб.</td>
							<td>
								<div class="status-block status-red">
									<div class="icon">
										<img src="img/icons/cancelled.png" alt="">
									</div>
									<span>Отменено</span>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('page-parts/footer.inc.php') ?>