	</div>
	<nav id="menu" class="panel" role="navigation">
		<div class="panel-inner">
			<div class="user-widget column-view">
				<div class="avatar">
					<img src="img/user-avatar.png" alt="">
				</div>
				<div class="descr">
					<div class="name">Иванов Иван</div>
					<div class="info">
						<div class="status">Профессионал</div>
						<a href="#">Повысить статус</a>
					</div>
				</div>
			</div>
			<div class="margin-bottom-medium"></div>
			<div class="balance-widget column-view">
				<div class="text">Ваш баланс: <strong>500 руб.</strong></div>
				<div class="buttons">
					<div class="item">
						<a href="#" class="btn btn-default btn-small fullwidht">+ Пополнить</a>
					</div>
					<div class="item">
						<a href="#" class="btn btn-default btn-small fullwidht">Вывести</a>
					</div>
				</div>
			</div>
			<div class="margin-bottom-medium"></div>
			<ul class="panel-nav">
				<?php foreach ($pages as $path => $name): ?>
					<li><a href="<?= $path ?>"><?= $name ?></a></li>
				<?php endforeach ?>
			</ul>
		</div>
	</nav>
	<script src="https://use.fontawesome.com/e6756a4761.js"></script>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/jquery.range.min.js"></script>
	<script src="../js/bigSlide.min.js"></script>
	<script src="../js/jcf.js"></script>
	<script src="../js/jcf.select.js"></script>
	<script src="../js/jcf.scrollable.js"></script>
	<script src="../js/admin.min.js"></script>
</body>
</html>