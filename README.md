# Layouts with Views (LwV)
---
A simple layout and view rendering engine built on PHP.

### Getting Started

LwV emulates Rails and other popular framework view systems. Your markup and content is
stored in the `views/` folder and layouts reside in `views/layouts`, though both of these
values can be changed in `index.php`.

All partial includes are loaded relative to the root of the application.

### Current Limitations

Since the current rendering engine is PHP, you can utilize any control structures and operators (like `include()`, `foreach()`, etc). I plan to add [.erb](http://guides.rubyonrails.org/layouts_and_rendering.html) and [.blade](http://laravel.com/docs/views/templating#blade-template-engine) mimicing-engines in the future.
