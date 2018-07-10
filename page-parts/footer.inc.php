		<div class="footer-section">
			<div class="container">
				<div class="row">
					<div class="col col-3 col-sm-12">
						<a href="index.php" class="footer-logo">
							<img src="img/footer-logo.png" alt="">
						</a>
						<div class="copyright">Сервис платных опросов<br>© 2018</div>
					</div>
					<div class="col col-9 col-sm-12">
						<ul class="footer-nav sm-margin-top-normal">
							<li>
								<a href="about.php">О проекте</a>
							</li>
							<li>
								<a href="#">Договор об участии</a>
							</li>
							<li>
								<a href="customers.php">Создателям опросов</a>
							</li>
							<li>
								<a href="#">Правила</a>
							</li>
							<li>
								<a href="news.php">Новости</a>
							</li>
							<li>
								<a href="advertisment.php">Реклама на сайте</a>
							</li>
							<li>
								<a href="respondents.php">Респондентам</a>
							</li>
							<li>
								<a href="support.php">Поддержка</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav id="menu" class="panel" role="navigation">
		<div class="panel-inner">
			<ul class="panel-nav margin-bottom-small">
				<?php foreach ($pages as $path => $name): ?>
					<li><a href="<?= $path ?>"><?= $name ?></a></li>
				<?php endforeach ?>
			</ul>
			<a href="registration.php" class="btn btn-light btn-small btn-azure fullwidth margin-bottom-small">Регистрация</a>
			<a href="login.php" class="btn btn-light btn-small btn-azure fullwidth margin-bottom-small">Вход</a>
		</div>
	</nav>
	<script src="https://use.fontawesome.com/e6756a4761.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.range.min.js"></script>
	<script src="js/bigSlide.min.js"></script>
	<script src="js/jcf.js"></script>
	<script src="js/jcf.select.js"></script>
	<script src="js/jcf.scrollable.js"></script>
	<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="js/scripts.min.js"></script>
</body>
</html>