# Laravel Mix Cache Busting plugin for Craft CMS

Integrates Laravel Mix Cache Busting plugin with the Craft Twig template engine.

## Requirements

This plugin requires Craft CMS 5.0.0 or later.  
For Craft CMS 2, use [version 1.0.0](https://github.com/Wiejeben/craft-laravel-mix/releases/tag/1.0.0).  
For Craft CMS 3, use [version 2.1.0](https://github.com/Wiejeben/craft-laravel-mix/releases/tag/2.1.0).
For Craft CMS 4, use [version 2.1.0](https://github.com/Wiejeben/craft-laravel-mix/releases/tag/4.0.3).
For Craft CMS 5, use [version 5.1.0](https://github.com/mayocube/craft-laravel-mix/releases/tag/5.0.0).
## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require mayocube/craft-laravel-mix

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Laravel Mix Cache Busting Twig Extension.


## Introduction

Laravel Mix itself provides a fluent API for defining Webpack build steps for your Laravel application using several common CSS and JavaScript pre-processors.

If you've ever been confused and overwhelmed about getting started with Webpack and asset compilation, you will love Laravel Mix. However, you are not required to use it while developing your application. Of course, you are free to use any asset pipeline tool you wish, or even none at all.

## Official Documentation

Documentation for Laravel Mix Cache Busting can be found on the [Laravel website](https://laravel.com/docs/8.x/mix#versioning-and-cache-busting).

Brought to you by [Maarten de Graaf](http://maarten.co.uk)
