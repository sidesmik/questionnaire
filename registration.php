<?php $page_title = "Регистрация" ?>
<?php include('page-parts/header.inc.php') ?>
<div class="main-content">
	<div class="page">
		<div class="container">
			<div class="row">
				<div class="col col-12">
					<div class="auth-component">
						<div class="auth-text">
							<h1>Регистрация</h1>
							<p>После простой регистрации вы смодете использовать <br>все возможности нашего сервиса</p>
							<p><strong>Уже есть аккаунт? <a href="login.php">Входите!</a></strong></p>
						</div>
						<div class="auth-form form">
							<div class="auth-form-inner">
								<div class="form-row margin-bottom-large">
									<div class="flex-container justify-between">
										<div class="flex-item margin-right-normal">
											<div class="radio-block">
												<input type="radio" name="group_1" id="group_1_1" checked>
												<label for="group_1_1">Я заказчик</label>
											</div>
										</div>
										<div class="flex-item">
											<div class="radio-block">
												<input type="radio" name="group_1" id="group_1_2">
												<label for="group_1_2">Я респондент</label>
											</div>
										</div>
									</div>
								</div>
								<div class="form-row">
									<input type="text" placeholder="Имя">
								</div>
								<div class="form-row">
									<input type="email" placeholder="Email">
								</div>
								<div class="form-row">
									<input type="password" placeholder="Пароль">
								</div>
								<div class="form-row margin-bottom-big">
									<input type="password" placeholder="Повторить пароль">
								</div>
								<div class="form-row margin-bottom-big">
									<p>Нажимая кнопку “Зарегистрироваться” вы соглашаетесь <br>с нашими <a href="#">Правилами и условиями</a></p>
								</div>
								<div class="form-row margin-bottom-big flex-center">
									<a href="#" class="btn btn-default fullwidht" style="max-width: 265px">Зарегистрироваться</a>
								</div>
								<div class="form-row">
									<p>или входите, используя ваш аккаунт в социальной сети</p>
								</div>
								<div class="form-row flex-center">
									<ul class="socials-list">
										<li>
											<a href="#">
												<i class="icon icon-vk"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="icon icon-ok"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="icon icon-mailru"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="icon icon-fb"></i>
											</a>
										</li>
									</ul>
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