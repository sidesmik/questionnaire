<?php $page_title = "Новости" ?>
<?php include('page-parts/header.inc.php') ?>
<div class="main-content">
	<div class="page">
		<div class="container">
			<div class="row">
				<div class="col col-12">
					<ul class="breadcrumbs">
						<li><a href="index.php">Главная</a></li>
						<li><?= $page_title ?></li>
					</ul>
					<h1>Свежие новости</h1>
					<div class="filters-list">
						<div class="item">
							<a href="#" class="btn btn-light btn-small font-normal">Все новости</a>
						</div>
						<div class="item">
							<a href="#" class="btn btn-light btn-small btn-midgray font-normal">За сегодня</a>
						</div>
						<div class="item">
							<a href="#" class="btn btn-light btn-small btn-midgray font-normal">За неделю</a>
						</div>
						<div class="item">
							<a href="#" class="btn btn-light btn-small btn-midgray font-normal">За месяц</a>
						</div>
					</div>
					<div class="margin-bottom-large"></div>
					<div class="cards-list">
						<!-- News List -->
						<?php for ($i = 0; $i < 9; $i++): ?>
							<div class="item">
								<a href="news-single.php" class="news-block light">
									<div class="news-image" style="background-image: url(http://placeimg.com/350/350/any?v=<?= rand() ?>);"></div>
									<div class="block-content">
										<div class="news-caption h3">Значимость этих проблем настолько очевидна</div>
										<div class="news-date typ-note">30 мая 2018</div>
									</div>
								</a>
							</div>
						<?php endfor; ?>
					</div>
					<div class="margin-bottom-large"></div>
					<div class="pagination-section">
						<div class="item">
							<a href="#" class="pagination-btn prev disabled">
								<i class="fa fa-arrow-left"></i>
								<span>Назад</span>
							</a>
						</div>
						<div class="item">
							<ul class="pagination-list">
								<li class="current"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
							</ul>
						</div>
						<div class="item">
							<a href="#" class="pagination-btn next">
								<span>Вперед</span>
								<i class="fa fa-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('page-parts/footer.inc.php') ?>