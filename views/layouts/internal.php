<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Internal Layout</title>
	<link rel="stylesheet" href="assets/stylesheets/application.css" media="all">
</head>
<body>

	<div class="page-container">

		<?php render('shared/header'); ?>

		<div class="content-main has-aside">

			<?php content(); ?>

			<aside class="content-aside">
				<h3>Aside Content</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum perspiciatis non sequi adipisci unde deleniti minus totam doloribus iste quia numquam delectus at cupiditate! In fugiat suscipit enim atque ipsam!</p>
			</aside>
		</div>

		<?php render('shared/footer'); ?>

	</div>

</body>
</html>
