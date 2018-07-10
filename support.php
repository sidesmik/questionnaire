<?php $page_title = "Техническая поддержка" ?>
<?php include('page-parts/header.inc.php') ?>
<div class="main-content">
	<div class="page">
		<div class="container">
			<div class="row">
				<div class="col col-12">
					<ul class="breadcrumbs">
						<li><a href="index.php">Главная</a></li>
						<li>Техподдержка</li>
					</ul>
					<h1><?= $page_title ?></h1>
					<p>Служба технической поддержки работает специально для Вас 24/7 Мы всегда рады будем ответить на интересующие Вас вопросы! <br>Пожалуйста, описывайте проблему достаточно подробно! Не следует дублировать вопрос, если Вы ещё не получили ответ на предыдущий! <br>Спасибо что Вы с нами!</p>
					<div class="row">
						<div class="col col-10 col-xs-12">
							<div class="gray-section margin-bottom-huge">
								<div class="form support-form margin-no">
									<div class="form-row">
										<div class="form-label color-blue">Выберите тему</div>
										<div class="form-field">
											<select>
												<option class="hideme" value="v0">Выбрать...</option>
												<option value="v1">Вопрос</option>
												<option value="v2">Сообщение об ошибке</option>
												<option value="v3">Жалоба</option>
											</select>
										</div>
									</div>
									<div class="form-row">
										<div class="form-label color-blue">Ваше сообщение</div>
										<div class="form-field">
											<textarea></textarea>
										</div>
									</div>
									<div class="form-row">
										<div class="form-field">
											<a href="#" class="btn btn-default" style="width: 100%; max-width: 180px;">Отправить</a>
										</div>
									</div>
								</div>
							</div>
							<h2>История обращений</h2>
							<div class="gray-section padding-tiny">
								<div class="scrollable-container">
									<table class="table">
										<tr>
											<th>Дата</th>
											<th>Тема обращения</th>
											<th>Статус</th>
											<th style="width: 165px;">&nbsp;</th>
										</tr>
										<tr>
											<td>01.01.2018</td>
											<td>Работа системы</td>
											<td>Закрыт</td>
											<td>
												<a href="#" class="btn btn-light btn-tiny fullwidth">Удалить</a>
											</td>
										</tr>
										<tr>
											<td>01.01.2018</td>
											<td>Вывод средств</td>
											<td>В обработке</td>
											<td></td>
										</tr>
										<tr>
											<td>01.01.2018</td>
											<td>Реферальные начисления</td>
											<td>Есть ответ</td>
											<td>
												<a href="#" class="btn btn-light btn-tiny fullwidth">Просмотр ответов</a>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('page-parts/footer.inc.php') ?>