<?php $page_title = "Расширение опросов" ?>
<?php include('page-parts/header.inc.php') ?>
<div class="main-content">
	<div class="sidebar">
		<?php include('page-parts/sidebar.inc.php') ?>
	</div>
	<div class="page-content">
		<div class="page-header">
			<h1><?= $page_title ?></h1>
		</div>
		<p>В данном разделе пользователю будет предоставлен ряд статусов, доступных для приобретения. Покупка статусов будет влиять на три главных для пользователя параметра:</p>
		<ul class="typ-ul margin-bottom-large">
			<li>Стоимость опроса / заработок</li>
			<li>Количество опросов, которые пользователь будет получать ежедневно</li>
			<li>Возможность расширения интересов</li>
		</ul>
		<table class="table">
			<tr>
				<th>Статус</th>
				<th>Заработок</th>
				<th>Опросов в сутки</th>
				<th>Количество интересов</th>
				<th>Цена</th>
				<th>&nbsp;</th>
			</tr>
			<tr>
				<td>Начинающий</td>
				<td>100 руб.</td>
				<td>2</td>
				<td>
					<div class="interests-count-block">
						<div class="count">5</div>
						<div class="change">
							<a href="#" class="border-dashed">Посмотреть</a>
						</div>
					</div>
				</td>
				<td><div class="nowrap">0 руб.</div></td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Продвинутый</td>
				<td>100 руб.</td>
				<td>2</td>
				<td>
					<div class="interests-count-block">
						<div class="count">5</div>
						<div class="change">
							<select multiple placeholder="Выбрать" class="small">
								<option value="v1">Авиа</option>
								<option value="v2" selected>Авто</option>
								<option value="v3">Транспорт</option>
								<option value="v4" selected>Образование</option>
								<option value="v5">Медицина</option>
								<option value="v6">Авиа</option>
								<option value="v7">Авто</option>
								<option value="v8">Транспорт</option>
								<option value="v9">Образование</option>
								<option value="v10">Медицина</option>
								<option value="v11">Авиа</option>
								<option value="v12">Авто</option>
								<option value="v13">Транспорт</option>
								<option value="v14">Образование</option>
								<option value="v15">Медицина</option>
							</select>
						</div>
					</div>
				</td>
				<td><div class="nowrap">500 руб.</div></td>
				<td>
					<a href="#" class="btn btn-default btn-small">Активировать</a>
				</td>
			</tr>
			<tr>
				<td>Специалист</td>
				<td>100 руб.</td>
				<td>2</td>
				<td>
					<div class="interests-count-block">
						<div class="count">5</div>
						<div class="change">
							<select multiple placeholder="Выбрать" class="small">
								<option value="v1">Авиа</option>
								<option value="v2" selected>Авто</option>
								<option value="v3">Транспорт</option>
								<option value="v4" selected>Образование</option>
								<option value="v5">Медицина</option>
								<option value="v6">Авиа</option>
								<option value="v7">Авто</option>
								<option value="v8">Транспорт</option>
								<option value="v9">Образование</option>
								<option value="v10">Медицина</option>
							</select>
						</div>
					</div>
				</td>
				<td><div class="nowrap">500 руб.</div></td>
				<td>
					<a href="#" class="btn btn-default btn-small">Активировать</a>
				</td>
			</tr>
			<tr>
				<td>Знаток</td>
				<td>100 руб.</td>
				<td>2</td>
				<td>
					<div class="interests-count-block">
						<div class="count">5</div>
						<div class="change">
							<select multiple placeholder="Выбрать" class="small">
								<option value="v1" selected>Авиа</option>
								<option value="v2">Авто</option>
								<option value="v3" selected>Транспорт</option>
								<option value="v4">Образование</option>
								<option value="v5">Медицина</option>
								<option value="v6">Авиа</option>
								<option value="v7">Авто</option>
								<option value="v8">Транспорт</option>
								<option value="v9">Образование</option>
								<option value="v10">Медицина</option>
							</select>
						</div>
					</div>
				</td>
				<td><div class="nowrap">500 руб.</div></td>
				<td>
					<a href="#" class="btn btn-default btn-small">Активировать</a>
				</td>
			</tr>
			<tr>
				<td>Мастер</td>
				<td>100 руб.</td>
				<td>2</td>
				<td>
					<div class="interests-count-block">
						<div class="count">5</div>
						<div class="change">
							<select multiple placeholder="Выбрать" class="small">
								<option value="v1">Авиа</option>
								<option value="v2" selected>Авто</option>
								<option value="v3">Транспорт</option>
								<option value="v4" selected>Образование</option>
								<option value="v5">Медицина</option>
								<option value="v6">Авиа</option>
								<option value="v7">Авто</option>
								<option value="v8">Транспорт</option>
								<option value="v9">Образование</option>
								<option value="v10">Медицина</option>
							</select>
						</div>
					</div>
				</td>
				<td><div class="nowrap">500 руб.</div></td>
				<td>
					<a href="#" class="btn btn-default btn-small">Активировать</a>
				</td>
			</tr>
			<tr>
				<td>Профессионал</td>
				<td>100 руб.</td>
				<td>2</td>
				<td>
					<div class="interests-count-block">
						<div class="count">5</div>
						<div class="change">
							<select multiple placeholder="Выбрать" class="small">
								<option value="v1">Авиа</option>
								<option value="v2" selected>Авто</option>
								<option value="v3">Транспорт</option>
								<option value="v4" selected>Образование</option>
								<option value="v5">Медицина</option>
								<option value="v6">Авиа</option>
								<option value="v7">Авто</option>
								<option value="v8">Транспорт</option>
								<option value="v9">Образование</option>
								<option value="v10">Медицина</option>
							</select>
						</div>
					</div>
				</td>
				<td><div class="nowrap">500 руб.</div></td>
				<td>
					<a href="#" class="btn btn-default btn-small">Активировать</a>
				</td>
			</tr>
			<tr>
				<td>Эксперт</td>
				<td>100 руб.</td>
				<td>2</td>
				<td>
					<div class="interests-count-block">
						<div class="count">5</div>
						<div class="change">
							<select multiple placeholder="Выбрать" class="small">
								<option value="v1">Авиа</option>
								<option value="v2" selected>Авто</option>
								<option value="v3">Транспорт</option>
								<option value="v4" selected>Образование</option>
								<option value="v5">Медицина</option>
								<option value="v6">Авиа</option>
								<option value="v7">Авто</option>
								<option value="v8">Транспорт</option>
								<option value="v9">Образование</option>
								<option value="v10">Медицина</option>
							</select>
						</div>
					</div>
				</td>
				<td><div class="nowrap">500 руб.</div></td>
				<td>
					<a href="#" class="btn btn-default btn-small">Активировать</a>
				</td>
			</tr>
			<tr>
				<td>Гуру</td>
				<td>100 руб.</td>
				<td>2</td>
				<td>
					<div class="interests-count-block">
						<div class="count">5</div>
						<div class="change">
							<select multiple placeholder="Выбрать" class="small">
								<option value="v1">Авиа</option>
								<option value="v2" selected>Авто</option>
								<option value="v3">Транспорт</option>
								<option value="v4" selected>Образование</option>
								<option value="v5">Медицина</option>
								<option value="v6">Авиа</option>
								<option value="v7">Авто</option>
								<option value="v8">Транспорт</option>
								<option value="v9">Образование</option>
								<option value="v10">Медицина</option>
							</select>
						</div>
					</div>
				</td>
				<td><div class="nowrap">500 руб.</div></td>
				<td>
					<a href="#" class="btn btn-default btn-small">Активировать</a>
				</td>
			</tr>
		</table>
	</div>
</div>
<?php include('page-parts/footer.inc.php') ?>