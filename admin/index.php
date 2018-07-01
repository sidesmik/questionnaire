<?php $page_title = "Мои опросы" ?>
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
				<a href="#" class="item current">
					<span class="caption">Все</span>
					<span class="count">50</span>
				</a>
				<a href="#" class="item">
					<span class="caption">Новые</span>
					<span class="count">10</span>
				</a>
				<a href="#" class="item">
					<span class="caption">Активные</span>
					<span class="count">30</span>
				</a>
				<a href="#" class="item">
					<span class="caption">Завершенные</span>
					<span class="count">10</span>
				</a>
			</div>
		</div>
		<div class="cards-list">
			<div class="item">
				<div class="card-block">
					<a href="interview-single.php" class="image" style="background-image: url(http://placeimg.com/510/250/any?v=<?= rand() ?>);"></a>
					<div class="card-content">
						<div class="caption">
							<a href="interview-single.php">Название опроса</a>
						</div>
						<ul class="card-info">
							<li><strong>Категория:</strong> Транспорт</li>
							<li><strong>Вопросов:</strong> 50</li>
						</ul>
						<div class="earn">Вы заработаете <br><span>100 руб.</span></div>
						<a href="#" class="btn btn-default btn-gray disabled">Пройти опрос</a>
					</div>
				</div>
			</div>
			<?php for ($i = 0; $i < 8; $i++): ?>
				<div class="item">
					<div class="card-block">
						<a href="interview-single.php" class="image" style="background-image: url(http://placeimg.com/510/250/any?v=<?= rand() ?>);"></a>
						<div class="card-content">
							<div class="caption">
								<a href="interview-single.php">Название опроса</a>
							</div>
							<ul class="card-info">
								<li><strong>Категория:</strong> Транспорт</li>
								<li><strong>Вопросов:</strong> 50</li>
							</ul>
							<div class="earn">Вы заработаете <br><span>100 руб.</span></div>
							<a href="#" class="btn btn-default fullwidth">Пройти опрос</a>
						</div>
					</div>
				</div>
			<?php endfor; ?>
		</div>
	</div>
</div>
<?php include('page-parts/footer.inc.php') ?>