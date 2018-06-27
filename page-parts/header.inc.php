<?php
	if (!isset($page_title)) {
		$page_title = 'Page Title';
	}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?= $page_title ?></title>
	<link rel="stylesheet" href="css/jcf.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<div class="header-inner">
				<div class="logo-section">
					<a href="index.php" class="logo">
						<img src="img/logo.png" alt="">
					</a>
				</div>
				<div class="header-main">
					<div class="header-section">
						<div class="balance-widget">
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
					</div>
					<div class="header-section">
						<div class="user-widget">
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
					</div>
				</div>
			</div>
		</div>