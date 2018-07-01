<?php
	if (!isset($page_title)) {
		$page_title = 'Page Title';
	}

	$pages = array(
		"index.php" => "Мои опросы",
		"interview-extention.php" => "Расширение опросов",
		"user-settings.php" => "Личные данные",
		"history.php" => "История активности",
		"order-polls.php" => "Заказать опросы",
		"my-referrals.php" => "Мои рефералы",
		"referrals-shop.php" => "Магазин рефералов",
		"advertisement.php" => "Реклама на сайте",
		"off-timer.php" => "OFF таймер",
		"my-gifts.php" => "Мои подарки",
		"my-finances.php" => "Мои финансы"
	);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?= $page_title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" href="../css/jcf.css">
	<link rel="stylesheet" href="../css/jquery.range.css">
	<link rel="stylesheet" href="../css/admin.css">
</head>
<body>
	<div class="wrapper push">
		<div class="header push">
			<div class="header-inner">
				<div class="logo-section">
					<a href="index.php" class="logo">
						<img src="img/logo.png" alt="">
					</a>
				</div>
				<div class="header-main">
					<div class="header-section hidden-sm">
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
					<div class="header-section hidden-sm">
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
					<div class="header-section visible-sm flex-right">
						<div class="menu-opener">
							<i class="fa fa-bars"></i>
						</div>
					</div>
				</div>
			</div>
		</div>