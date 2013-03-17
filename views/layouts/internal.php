<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Internal Layout</title>
	<link rel="stylesheet" href="assets/stylesheets/application.css" media="all">
</head>
<body>

	<div class="page-container">

		<header class="global-header">
			<h1>Layouts with Views</h1>

			<?php include 'views/partials/nav.php'; ?>

		</header>

		<div class="content-main">
			<?php echo $content; ?>
		</div>

		<footer class="global-footer">
			<p>Creating with <a href="https://github.com/tommymarshall/layouts-with-views">Layouts with Views</a> &copy; Tommy Marshall</p>
		</footer>

	</div>

</body>
</html>
