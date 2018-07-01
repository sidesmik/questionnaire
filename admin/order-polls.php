<?php $page_title = "Заказать опросы" ?>
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
				<a href="#" class="item current" data-tab="#create">Создание опроса</a>
				<a href="#" class="item" data-tab="#my-polls">Мои опросы</a>
			</div>
		</div>
		<div class="tabs-container">
			<div class="tab" id="create">
				<div class="form narrow-form">
					<div class="form-row">
						<div class="form-label">Название опроса</div>
						<div class="form-field">
							<input type="text">
						</div>
					</div>
					<div class="form-row">
						<div class="form-label">Дата рождения</div>
						<div class="form-field">
							<div class="flex-container align-center">
								<div class="flex-item margin-right-large">
									<div class="radio-block">
										<input type="radio" name="group_1" id="group_1_1" checked>
										<label for="group_1_1">Все</label>
									</div>
								</div>
								<div class="flex-item flex-container align-center">
									<div class="radio-block margin-right-normal">
										<input type="radio" name="group_1" id="group_1_2" checked>
										<label for="group_1_2">В диапазоне</label>
									</div>
									<div class="flex-container">
										<div class="flex-item margin-right-normal" style="width: 65px;">
											<input type="tel" placeholder="от">
										</div>
										<div class="flex-item" style="width: 65px;">
											<input type="tel" placeholder="до">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-label">Пол</div>
						<div class="form-field">
							<div style="width: 145px;">
								<select>
									<option class="hideme" value="v0">Выберите</option>
									<option value="v1">Мужской</option>
									<option value="v2">Женский</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-label">Количество аудитории</div>
						<div class="form-field">
							<div class="select-range">
								<input type="hidden" class="range-slider" value="2000, 8000" />
							</div>
						</div>
					</div>
				</div>
				<div class="margin-bottom-huge"></div>
				<div class="question-editor">
					<div class="editor-content">
						<div class="edit-question-section">
							<div class="editor opened">
								<div class="editor-header">
									<div class="title">Вопрос №1 (1 из списка)</div>
									<div class="actions-list">
										<div class="item minimizeBtn"><i class="fa fa-window-minimize"></i></div>
										<div class="item"><i class="fa fa-clone"></i></div>
										<div class="item"><i class="fa fa-trash-o"></i></div>
									</div>
								</div>
								<div class="editor-content form">
									<div class="editor-section">
										<div class="question-text">
											<input type="text">
										</div>
									</div>
									<div class="editor-section">
										<div class="editor-row align-center">
											<div class="left display-flex justify-content-end">
												<div class="icon">
													<i class="fa fa-arrows"></i>
												</div>
											</div>
											<div class="center">
												<input type="text" class="small">
											</div>
											<div class="right">
												<div class="icon">
													<i class="fa fa-trash-o"></i>
												</div>
											</div>
										</div>
										<div class="editor-row align-center">
											<div class="left display-flex justify-content-end">
												<div class="icon">
													<i class="fa fa-arrows"></i>
												</div>
											</div>
											<div class="center">
												<input type="text" class="small">
											</div>
											<div class="right">
												<div class="icon">
													<i class="fa fa-trash-o"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="margin-bottom-medium"></div>
				<div class="flex-center margin-bottom-large">
					<a href="#" class="btn btn-light btn-lightblue btn-bigger" style="width: 270px;">Добавить вопрос</a>
				</div>
				<div class="gray-section">
					<h2 class="margin-no">Стоимость создания опроса с выбранными параметрами</h2>
					<div class="typ-display-2 font-bold color-blue">500 руб.</div>
					<div class="margin-bottom-big"></div>
					<div class="flex-container align-center sm-flex-column sm-align-stretch">
						<div class="flex-item margin-right-large flex-none sm-margin-right-no sm-margin-bottom-normal" style="width: 165px;">
							<a href="#" class="btn btn-default btn-bigger fullwidth">Оплатить</a>
						</div>
						<div class="flex-item">
							<p class="margin-no">Необходимая сумма спишется с вашего баланса автоматически. <br>При недостатке средств, необходимо <a href="#" class="font-bold">пополнить баланс</a>.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="tab" id="my-polls">
				<div class="tabs-nav theme-green theme-light">
					<div class="tabs-nav-inner">
						<a href="#" class="item current">
							<span class="caption">Все</span>
							<span class="count">50</span>
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
				<div class="padding-bottom-small"></div>
				<div class="cards-list">
					<div class="item">
						<div class="card-block">
							<a href="interview-single.php" class="image" style="background-image: url(http://placeimg.com/510/250/any?v=<?= rand() ?>);"></a>
							<div class="card-content">
								<p class="margin-bottom-tiny font-bold color-green">Активный</p>
								<div class="caption">
									<a href="interview-single.php">Название опроса</a>
								</div>
								<ul class="card-info">
									<li><strong>Категория:</strong> Транспорт</li>
									<li><strong>Вопросов:</strong> 50</li>
								</ul>
							</div>
						</div>
					</div>
					<?php for ($i = 0; $i < 8; $i++): ?>
						<div class="item">
							<div class="card-block">
								<a href="interview-single.php" class="image" style="background-image: url(http://placeimg.com/510/250/any?v=<?= rand() ?>);"></a>
								<div class="card-content">
									<p class="margin-bottom-tiny font-bold color-green">Активный</p>
									<div class="caption">
										<a href="interview-single.php">Название опроса</a>
									</div>
									<ul class="card-info">
										<li><strong>Категория:</strong> Транспорт</li>
										<li><strong>Вопросов:</strong> 50</li>
									</ul>
								</div>
							</div>
						</div>
					<?php endfor; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('page-parts/footer.inc.php') ?>