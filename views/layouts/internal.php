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
			<h1>
				Layouts with Views
				<em>Internal Layout</em>
			</h1>

			<?php include 'views/partials/nav.php'; ?>

		</header>

		<div class="content-main has-aside">
			<?php echo $content; ?>

			<aside class="content-aside">
				<h3>Aside Content</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum perspiciatis non sequi adipisci unde deleniti minus totam doloribus iste quia numquam delectus at cupiditate! In fugiat suscipit enim atque ipsam!</p>
			</aside>
		</div>

		<footer class="global-footer">
			<p>Creating with <a href="https://github.com/tommymarshall/layouts-with-views">Layouts with Views</a> &copy; Tommy Marshall</p>
		</footer>

	</div>

</body>
</html>
