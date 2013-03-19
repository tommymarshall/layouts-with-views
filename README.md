# Layouts with Views (LwV)
A simple layout and view rendering engine built on PHP.

LwV emulates Rails and other popular framework view systems. Your markup and content is stored in the `views/` folder and layouts reside in `views/layouts`, though both of these values can be changed in `system/config.php`.

Since the rendering engine is PHP, you can utilize any control structures and operators you like.

## Getting Started

### Retrieving a View
Let's say you have an `about` page. Create `views/about.php`, navigation to `yourdomain.com/about`, and that view will be retrieved. The default view you see when visiting the root of LwS is `views/index.php`. This is customizable in `system/config.php`.

### Setting a Layout
The default layout is `views/layouts/default.php` and can be changed in `system/config.php`. You can also override the default layout by setting `$this->layout('example');` in a view, where `example` will reference `views/layouts/example.php`.

### Rendering Content
The main content of your view can be retrieved and displayed in the layout by calling `$this->getContent();`.

### Rendering Partials
You can render partials within views. Partials are stored in the `views/shared` and can be referenced from and saved in any view and layout. To render a view, use `$this->render('partial/file');`. All partials are referenced relative to the `views/` folder.

## For Example (layouts/default.php)
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Example</title>
    </head>
    <body>

        <header>
            <?php $this->render('shared/header'); ?>
        </header>

        <div class="content">
            <?php $this->getContent(); ?>
        </div>

        <footer>
            <?php $this->render('shared/header'); ?>
        </footer>

    </body>
    </html>
