# Layouts with Views (LwV)
---
A simple layout and view rendering engine built on PHP.

## Description

LwV emulates Rails and other popular framework view systems. Your markup and content is
stored in the `views/` folder and layouts reside in `views/layouts`, though both of these
values can be changed in `system/config.php`.

All partial includes are loaded relative to the root of the application.

Since the rendering engine is PHP, you can utilize any control structures and operators.

## How To




## Getting Started

Retrieving a view is pretty simple. If you have an `about` page, create `views/about.php`, navigation to `yourdomain.com/about`, and that view will be rendered.

The default layout is `views/layouts/default.php`. You can override the layout by setting `$layout = 'whatever'` in the top of your view, where `whatever` will reference `views/layouts/whatever.php`.
