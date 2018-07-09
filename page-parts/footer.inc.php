		<div class="footer-section">
			<div class="container">
				<div class="row">
					<div class="col col-3">
						<a href="#" class="footer-logo">
							<img src="img/footer-logo.png" alt="">
						</a>
						<div class="copyright">Сервис платных опросов<br>© 2018</div>
					</div>
					<div class="col col-9">
						<ul class="footer-nav">
							<li>
								<a href="#">О проекте</a>
							</li>
							<li>
								<a href="#">Договор об участии</a>
							</li>
							<li>
								<a href="#">Создателям опросов</a>
							</li>
							<li>
								<a href="#">Правила</a>
							</li>
							<li>
								<a href="#">Новости</a>
							</li>
							<li>
								<a href="#">Реклама на сайте</a>
							</li>
							<li>
								<a href="#">Респондентам</a>
							</li>
							<li>
								<a href="#">Поддержка</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav id="menu" class="panel" role="navigation">
		<div class="panel-inner">
			<ul class="panel-nav">
				<?php foreach ($pages as $path => $name): ?>
					<li><a href="<?= $path ?>"><?= $name ?></a></li>
				<?php endforeach ?>
			</ul>
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