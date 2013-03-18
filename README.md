# Layouts with Views (LwV)
A simple layout and view rendering engine built on PHP.

LwV emulates Rails and other popular framework view systems. Your markup and content is stored in the `views/` folder and layouts reside in `views/layouts`, though both of these values can be changed in `system/config.php`.

Since the rendering engine is PHP, you can utilize any control structures and operators you like.

## Getting Started

Retrieving a view is simple. If you have an `about` page, create `views/about.php`, navigation to `yourdomain.com/about`, and that view will be rendered. The default layout is `views/layouts/default.php` but can be changed in `system/config.php`.

You can also override the default layout by setting `$this->layout('example');` in a view, where `example` will reference `views/layouts/example.php`.

### Rendering Content and Partials within Views

You can render partials within views. Partials are stored in the `views/shared` but can be referenced from and saved in any view and layout. To render a view, use `$this->render('partial/file');`.

The main content of your view can be retrieved and displayed in the layout by calling `$this->getContent();`.

#### For Example

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

