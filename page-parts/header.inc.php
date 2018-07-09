<?php
	if (!isset($page_title)) {
		$page_title = 'Page Title';
	}

	$pages = array(
		"about.php" => "О проекте",
		"rules.php" => "Правила",
		"news.php" => "Новости",
		"advertisment.php" => "Реклама на сайте",
		"customers.php" => "Заказчикам"
	);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?= $page_title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" href="css/jcf.css">
	<link rel="stylesheet" href="css/jquery.range.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="wrapper push">
		<?php
			if (!isset($header_class)) {
				$header_class = '';
			}
		?>
		<div class="header push <?= $header_class ?>">
			<div class="header-inner">
				<div class="logo-section">
					<a href="index.php" class="logo"></a>
				</div>
				<div class="header-main">
					<div class="header-section">
						<ul class="header-nav">
							<?php foreach ($pages as $path => $name): ?>
								<li><a href="<?= $path ?>"><?= $name ?></a></li>
							<?php endforeach ?>
						</ul>
					</div>
					<div class="header-section">
						<a href="registration.php" class="btn btn-light btn-small btn-azure">Регистрация</a>
						<a href="login.php" class="btn btn-light btn-small btn-azure">Вход</a>
					</div>
					<div class="header-section visible-sm flex-right">
						<div class="menu-opener">
							<i class="fa fa-bars"></i>
						</div>
					</div>
				</div>
			</div>
		</div>