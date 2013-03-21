# Layouts with Views (LwV)
A simple layout and view rendering engine built on PHP.

LwV emulates Rails and other popular framework view systems. Your markup and content is stored in the `views/` folder and layouts reside in `views/layouts`, though both of these values can be changed in `system/config.php`.

Since the rendering engine is PHP, you can utilize any control structures and operators you like.

## Setup

Crack open `config/config.php` and review the settings. By default, LwV expects to be in the root of whatever URL it is being accessed from. If LwV is in a sub-directory (domain.com/layout), set the `base_dir` configuration to `layout`

## Getting Started

### Retrieving a View
Let's say you have an `about` page. Create `views/about.php`, navigation to `yourdomain.com/about`, and that view will be retrieved. The default view you see when visiting the root of LwS is `views/index.php`. This is customizable in `system/config.php`.

### Setting a Layout
The default layout is `views/layouts/default.php` and can be changed in `system/config.php`. You can also override the default layout by setting `$this->layout('example')` in a view, where `example` will reference `views/layouts/example.php`.

### Rendering Content
The main content of your view can be retrieved and displayed in the layout by calling `$this->getContent();`.

### Rendering Assets
Assets (images, javascript, stylesheets, etc) can be accessed by calling `$this->asset('images/example.jpg')` which then retrieves the given asset relative to the `assets` folder. And of course you can always add your own absolute or relative paths to the layouts, views, etc. For example:

    <img src="<?php $this->asset('images/example.jpg'); ?>">

### Rendering Partials
You can render partials within views. Partials are stored in the `views/shared` and can be referenced from and saved in any view and layout. To render a view, use `$this->render('shared/file')`. All partials are referenced relative to the `views/` folder. You can also have unlimited nested folders, so `$this->render('shared/some/nested/partial');`

### Passing Variables to Nested Views
You can pass variables to nested views by assigning an array as a second parameter. For example `$this->render('shared/file', array('title' => 'New Page Title'))`, that view can now access the value of `title` in the sent array as `$title` in that nested view.

## Basic Layout Example (layouts/default.php)
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
