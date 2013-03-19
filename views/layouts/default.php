<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="<?php $this->asset('stylesheets/application.css'); ?>" media="all">
</head>
<body>

	<div class="page-container">

		<?php $this->render('shared/header'); ?>

		<div class="content-main">

			<?php $this->getContent(); ?>

		</div>

		<?php $this->render('shared/footer'); ?>

	</div>

</body>
</html>
