<?php $page_title = "Вход" ?>
<?php include('page-parts/header.inc.php') ?>
<div class="main-content">
	<div class="page">
		<div class="container">
			<div class="row">
				<div class="col col-12">
					<div class="auth-component">
						<div class="auth-text">
							<h1>Вход</h1>
							<p>Войдите для использования всех возможностей сервиса</p>
							<p><strong>Нет аккаунта? <a href="registration.php">Зарегистрируйтесь!</a></strong></p>
						</div>
						<div class="auth-form form">
							<div class="auth-form-inner">
								<div class="form-row">
									<input type="text" placeholder="Имя">
								</div>
								<div class="form-row">
									<input type="password" placeholder="Пароль">
								</div>
								<div class="form-row margin-bottom-large">
									<div class="flex-container align-baseline justify-between">
										<div class="flex-item">
											<div class="checkbox">
												<input type="checkbox" id="checkbox1">
												<label for="checkbox1">Запомнить меня</label>
											</div>
										</div>
										<div class="flex-item">
											<a href="#" class="color-azure">Я не помню пароль</a>
										</div>
									</div>
								</div>
								<div class="form-row margin-bottom-big flex-center">
									<a href="#" class="btn btn-default fullwidht" style="max-width: 265px">Войти</a>
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