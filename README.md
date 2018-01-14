# Laravel Mix Cache Busting plugin for Craft CMS

Integrates Laravel Mix Cache Busting plugin with the Craft CMS Twig template engine.

## Installation

To install Laravel Mix Cache Busting, follow these steps:

1. Download & unzip the file and place the `laravelmix` directory into your `craft/plugins` directory
2. Install plugin in the Craft Control Panel under Settings > Plugins
3. The plugin folder should be named `laravelmix` for Craft to see it.

To setup Laravel Mix:
1. First of all, make sure you understand how Laravel Mix is build up and how to maintain it: [Official documentation](https://laravel.com/docs/5.4/mix)
2. Copy `package.json` and `webpack.mix.js` to the root of your Craft CMS installation
3. Create predefined `resources/assets/js/app.js` and `resources/assets/sass/app.scss`
4. Run `npm install` to gather the required node dependencies
5. Specify the public path in `webpack.mix.js` to be `public`: `mix.setPublicPath('public')`
6. See [Running Mix]https://laravel.com/docs/5.4/mix#running-mix to learn about how to get webpack to run

Laravel Mix works on Craft 2.4.x and Craft 2.5.x.

## Introduction

Laravel Mix itself provides a fluent API for defining Webpack build steps for your Laravel application using several common CSS and JavaScript pre-processors.

If you've ever been confused and overwhelmed about getting started with Webpack and asset compilation, you will love Laravel Mix. However, you are not required to use it while developing your application. Of course, you are free to use any asset pipeline tool you wish, or even none at all.

## Official Documentation

Documentation for Laravel Mix Cache Busting can be found on the [Laravel website](https://laravel.com/docs/5.4/mix#versioning-and-cache-busting).

## Laravel Mix Cache Busting Changelog

### 1.0.0 -- 2017.07.13

* Initial release

Brought to you by [Maarten de Graaf](http://maarten.co.uk)
