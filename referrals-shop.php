<?php $page_title = "Магазин рефераллов" ?>
<?php include('page-parts/header.inc.php') ?>
<div class="main-content">
	<div class="sidebar">
		<?php include('page-parts/sidebar.inc.php') ?>
	</div>
	<div class="page-content">
		<div class="page-header">
			<h1><?= $page_title ?></h1>
		</div>
		<p>В данном разделе можно купить определенное количество активных рефералов <br>для получения отчислений от их действий.</p>
		<table class="table">
			<tr>
				<th>Количество рефералов</th>
				<th style="width: 95px;">Цена</th>
				<th style="width: 125px;">&nbsp;</th>
			</tr>
			<tr>
				<td>25 рефералов</td>
				<td><div class="nowrap">100 руб.</div></td>
				<td><a href="#" class="btn btn-default btn-small fullwidth">Купить</a></td>
			</tr>
			<tr>
				<td>100 рефералов</td>
				<td><div class="nowrap">500 руб.</div></td>
				<td><a href="#" class="btn btn-default btn-small fullwidth">Купить</a></td>
			</tr>
			<tr>
				<td>1000 рефералов</td>
				<td><div class="nowrap">1000 руб.</div></td>
				<td><a href="#" class="btn btn-default btn-small fullwidth">Купить</a></td>
			</tr>
		</table>
		<div class="padding-bottom-small"></div>
		<h2>Мои покупки</h2>
		<table class="table">
			<tr>
				<th>Дата</th>
				<th>Количество рефералов</th>
				<th style="width: 220px;">Цена</th>
			</tr>
			<tr>
				<td>15.02.2018</td>
				<td>25 рефералов</td>
				<td><div class="nowrap">100 руб.</div></td>
			</tr>
			<tr>
				<td>01.01.2018</td>
				<td>25 рефералов</td>
				<td><div class="nowrap">100 руб.</div></td>
			</tr>
		</table>
	</div>
</div>
<?php include('page-parts/footer.inc.php') ?>