# OCHA Basic starter theme

A minimal starter theme for OCHA sites.

## This theme contains

* Common Header
* Common Footer
* Grid (simplified version of Bootstrap v4 grid, https://v4-alpha.getbootstrap.com/layout/overview/)
* Typography
* Mixins for clearfix, REM font sizes and media queries
* Variables for breakpoints, colours, font-sizes, fonts, measurements and z-index
* Icons
* Basic table styles
* Basic form styles
* Favicons
* Sass
* Autoprefixer
* Bootstrap dropdowns (requires jQuery 1.9.1 or higher)
* Optional: gulp.js workflow for frontend development

## Integrations with other Drupal modules

* [jquery_update](https://www.drupal.org/project/jquery_update) — supports out Bootstrap library
* [Modernizr](https://www.drupal.org/project/modernizr) — centralized D7 API for modular Modernizr builds
* [PWA](https://www.drupal.org/project/pwa) — basic offline support and centralized API for manifest.json files

## Getting started

1. Copy this theme into your `sites/all/themes/custom` folder
2. If you want to renamne the theme, change the folder name, the filename of the .info file and find and replace for `ocha_basic` in the theme folder.
3. In the theme folder:
4. Install the dependencies: `npm install`
5. Copy `localConfig.example.json` to `localConfig.json` and specify the URL of your local Drupal environment.
6. Run the simple gulp task to build the CSS: `gulp build`
7. In the Drupal Admin, go to Appearance, find 'OCHA Basic Starter Theme' (or whatever you've renamed it to), and select 'Enable and set default'

## CSS

This project uses [Sass](http://sass-lang.com/). To make changes edit the `.scss` files in the `sass/` folder, do NOT edit the files in `css/` directly.

Run `gulp dev` in the theme folder to have gulp watch for changes and automatically rebuild the CSS.

Preferably use Jenkins to run the Gulp task on build to generate the CSS. If this is possible on your project, add the `css/` folder to the `.gitignore` file and delete generated CSS from the repo.

## JS

Javascript files should be added to `js/` and to the scripts section of `ocha_basic.info`

## Icons

This site uses a subset of the OCHA icon set as an icon font.

Follow the instructions at https://un-ocha.github.io/styleguide/icons/ to add more icons to the set.

## Logo

Two versions of your logo are required, in SVG format with PNG for fallback.

1. Mobile version: 40x40px
2. Desktop version: height 60px, width will depend on your logo design

## Browser support

See https://un-ocha.github.io/styleguide/common-design/

## Favicons

OCHA default favicons are provided. Update these with your logo.

http://realfavicongenerator.net/ is a good tool for generating favicons.

## Modernizr

We support the [Modernizr Drupal module](https://www.drupal.org/project/modernizr) and the `ocha_basic.info` file contains the Modernizr tests we require.

After enabling the theme, go to `admin/configuration/development/modernizr` to rebuild Modernizr including the theme's feature detects: `svg`, `cssgrid`, `cssgridlegacy` and `mediaqueries`.

## Add to Homescreen / manifest.json

We support the [PWA Drupal module](https://www.drupal.org/project/pwa) instead of providing our own manifest.json file. The `hook_pwa_manifest_alter()` hook is implemented in `template.php` with our default colors/icons, which can be overridden using the normal PWA admin UI.

## Using with panels

Use with the Omega base theme to enable panels:

* Add `base theme = omega` to ocha_basic.info
* Create your layouts using page.tpl.php as a basis

## Styleguide

See https://un-ocha.github.io/styleguide/ocha/ for documentation and examples of the styles used.
