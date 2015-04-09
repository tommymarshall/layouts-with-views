<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="<?= $this->asset('stylesheets/application.css'); ?>" media="all">
</head>
<body>

  <div class="page-container">

    <?= $this->render('shared/header'); ?>

    <div class="content-main">

      <?= $this->getContent(); ?>

    </div>

    <?= $this->render('shared/footer'); ?>

  </div>

</body>
</html>
