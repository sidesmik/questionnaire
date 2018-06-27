<?php $page_title = "Личные данные" ?>
<?php include('page-parts/header.inc.php') ?>
<div class="main-content">
	<div class="sidebar">
		<?php include('page-parts/sidebar.inc.php') ?>
	</div>
	<div class="page-content">
		<div class="page-header">
			<h1><?= $page_title ?></h1>
		</div>
		<div class="form user-settings-form">
			<div class="form-row">
				<div class="form-label">Логин *</div>
				<div class="form-field">
					<input type="text">
				</div>
			</div>
			<div class="form-row">
				<div class="form-label">Пароль *</div>
				<div class="form-field">
					<input type="password">
				</div>
			</div>
			<div class="form-row">
				<div class="form-label">Повторить пароль *</div>
				<div class="form-field">
					<input type="password">
				</div>
			</div>
			<div class="form-row">
				<div class="form-label">Email *</div>
				<div class="form-field">
					<input type="email">
				</div>
			</div>
			<div class="form-row">
				<div class="form-label">Номер кошелька PAYEER</div>
				<div class="form-field">
					<input type="text">
				</div>
			</div>
			<div class="form-row">
				<div class="form-label">Пол</div>
				<div class="form-field">
					<div class="flex-container">
						<div class="flex-item margin-right-large">
							<div class="radio-block">
								<input type="radio" name="group_1" id="group_1_1" checked>
								<label for="group_1_1">Мужской</label>
							</div>
						</div>
						<div class="flex-item">
							<div class="radio-block">
								<input type="radio" name="group_1" id="group_1_2">
								<label for="group_1_2">Женский</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-row margin-bottom-huge">
				<div class="form-label">Дата рождения</div>
				<div class="form-field">
					<div class="date-select-block">
						<div class="day">
							<select placeholder="День">
								<option class="hideme" value="v0">День</option>
								<option value="v1">1</option>
								<option value="v2">2</option>
								<option value="v3">3</option>
							</select>
						</div>
						<div class="month">
							<select placeholder="Месяц">
								<option class="hideme" value="v0">Месяц</option>
								<option value="v1">Январь</option>
								<option value="v2">Февраль</option>
							</select>
						</div>
						<div class="year">
							<select placeholder="Год">
								<option class="hideme" value="v0">Год</option>
								<option value="v1">1990</option>
								<option value="v2">1991</option>
								<option value="v3">1992</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="form-row">
				<a href="#" class="btn btn-default btn-lightblue font-normal">Сохранить</a>
			</div>
		</div>
	</div>
</div>
<?php include('page-parts/footer.inc.php') ?>