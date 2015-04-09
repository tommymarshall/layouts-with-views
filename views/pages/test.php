<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Test Page</title>
  <link rel="stylesheet" href="<?= $this->asset('stylesheets/application.css'); ?>" media="all">
</head>
<body>

  <div class="page-container">

    <div class="content-main">

      <h2>Test Page with No Layout</h2>

      <p>Throw <code>&lt;?php $this->layout(false); ?&gt;</code> anywhere in this view to not load a layout.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores consequuntur voluptatum amet repellendus mollitia expedita repellat quo quos ipsa ipsam sed dicta ipsum voluptatem eos sapiente nihil alias rerum doloremque.</p>

    </div>

  </div>

</body>
</html>
