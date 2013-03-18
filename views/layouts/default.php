<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="assets/stylesheets/application.css" media="all">
</head>
<body>

	<div class="page-container">

		<?php render('shared/header'); ?>

		<div class="content-main">
			<?php content(); ?>
		</div>

		<?php render('shared/footer'); ?>

	</div>

</body>
</html>
