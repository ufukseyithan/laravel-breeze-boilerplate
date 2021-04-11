# Laravel Breeze Boilerplate
This is my boilerplate for Laravel Breeze. I am cloning this project whenever I start a new Laravel project. This might be too specific use for your case but I just wanted to share it anyway. This simply tries to find inelegant stuff in Breeze and fix them and adds a few must-to-haves in any project.

## Installation
Installation is quite easy, just follow these steps here: https://stackoverflow.com/a/39913449/9145193

## What It Does?
* Moves `views/layouts` folder into `views/components`, since layouts are components as well.
* Creates admin folders both in views and `views/components` folders which will contain only admin related files. For example, `dashboard.blade.php`.
* Seperates `guest.blade.php` from admin specific layouts.
* Creates Layouts folder in the directory where view component classes are located and puts the layout component view classes in it. This way we won't have Layout suffix for our classes.
* Creates admin route group and a single-action `DashboardController`.
* Removes `welcome.blade.php` and adds `home.blade.php`, also with an app layout.
* Changes `HOME` const in `RouteServiceProvider` to "/".
* Removed unneeded elements from `dashboard.blade.php`, `navigation.blade.php` and `admin/layouts/app.blade.php`.

### Tailwind Config
* Made `container` class always to be centered and have paddings.
