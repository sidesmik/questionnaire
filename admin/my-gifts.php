<?php $page_title = "Мои подарки" ?>
<?php include('page-parts/header.inc.php') ?>
<div class="main-content">
	<div class="sidebar">
		<?php include('page-parts/sidebar.inc.php') ?>
	</div>
	<div class="page-content">
		<div class="page-header">
			<h1><?= $page_title ?></h1>
		</div>
		<p class="margin-bottom-large">Принимайте участие в акциях и получайте призы и бонусы на свой баланс</p>
		<div class="gift-block">
			<div class="text">
				<p class="caption">Приведи друга</p>
				<p>Приводи друзей и получай бонус 100 руб. за каждого.</p>
			</div>
			<div class="button">
				<a href="#" class="btn btn-default btn-green btn-small fullwidth">Принять участие</a>
			</div>
		</div>
		<div class="margin-bottom-small"></div>
		<div class="gift-block active">
			<div class="text">
				<p class="caption">Приведи друга</p>
				<p>Получайте призы за активные действия в системе.</p>
			</div>
			<div class="button">
				<p>Вы уже участвуете</p>
			</div>
		</div>
		<div class="margin-bottom-small"></div>
		<div class="gift-block">
			<div class="text">
				<p class="caption">Приведи друга</p>
				<p>Приводи друзей и получай бонус 100 руб. за каждого.</p>
			</div>
			<div class="button">
				<a href="#" class="btn btn-default btn-green btn-small fullwidth">Принять участие</a>
			</div>
		</div>
	</div>
</div>
<?php include('page-parts/footer.inc.php') ?>