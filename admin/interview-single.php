<?php $page_title = "Название опроса" ?>
<?php include('page-parts/header.inc.php') ?>
<div class="main-content">
	<div class="sidebar">
		<?php include('page-parts/sidebar.inc.php') ?>
	</div>
	<div class="page-content">
		<div class="page-header sm-flex-column sm-align-stretch">
			<h1 class="margin-no sm-margin-bottom-small"><?= $page_title ?></h1>
			<a href="index.php" class="back-btn sm-margin-bottom-small">Назад к списку вопросов</a>
		</div>
		<p class="typ-caption">Категория: Транспорт</p>
		<div class="flex-container">
			<div class="flex-item margin-right-small">
				<div class="h3 color-blue">Вопросов пройдено: <strong>15</strong></div>
			</div>
			<div class="flex-item">
				<div class="h3 color-blue">Вопросов всего: <strong>45</strong></div>
			</div>
		</div>
		<div class="margin-bottom-large"></div>
		<div class="gray-section margin-bottom-big">
			<div class="question-card">
				<div class="typ-caption">Вопрос 16</div>
				<h2 class="margin-bottom-medium">Какой тип автомобиля используется вами для повседневных поездок?</h2>
				<div class="answers-list margin-bottom-huge">
					<div class="item">
						<div class="answer-inline-radio">
							<input type="radio" name="group_1" id="group_1_1">
							<label for="group_1_1">Вариант 1</label>
						</div>
					</div>
					<div class="item">
						<div class="answer-inline-radio">
							<input type="radio" name="group_1" id="group_1_2" checked>
							<label for="group_1_2">Вариант 2</label>
						</div>
					</div>
					<div class="item">
						<div class="answer-inline-radio">
							<input type="radio" name="group_1" id="group_1_3">
							<label for="group_1_3">Вариант 3</label>
						</div>
					</div>
				</div>
				<div class="flex-container align-center">
					<div class="flex-item flex-none margin-right-medium md-margin-right-no md-margin-bottom-medium">
						<a href="#" class="btn btn-default btn-lightblue">Следующий вопрос</a>
					</div>
					<div class="flex-item">
						<div class="typ-caption">Перейти к следующему вопросу вы сможете через</div>
						<div class="flex-container align-baseline">
							<div class="flex-item margin-right-medium">
								<div class="timer-block">
									<div class="timer-value typ-display-1">02:15:48</div>
								</div>
							</div>
							<div class="flex-item">
								<a href="#" class="font-bold">Ускорить переход</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<p class="font-bold">Отказаться от опроса</p>
		<div class="recaptcha margin-bottom-normal">
			<img src="img/recaptcha.png" alt="">
		</div>
		<a href="#" class="btn btn-light btn-lightblue">Отказаться</a>
		<div class="divider"></div>
		<h2 class="margin-bottom-medium">Хотите разместить рекламу?</h2>
		<div class="banner-block">Баннер 468х60</div>
		<div class="margin-bottom-small"></div>
		<div class="banner-block">Баннер 468х60</div>
	</div>
</div>
<?php include('page-parts/footer.inc.php') ?>