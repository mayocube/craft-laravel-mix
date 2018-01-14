<?php
/**
 * Laravel Mix Cache Busting plugin for Craft CMS
 *
 * Integrates Laravel Mix Cache Busting plugin with the Craft CMS Twig template engine.
 *
 * @author    Maarten de Graaf
 * @package   Laravel Mix Cache Busting plugin for Craft CMS
 */

namespace Wiejeben\LaravelMix;

class Plugin extends \craft\base\Plugin
{
    public function init()
    {
        parent::init();

        // Register mix() Twig Extension
        \Craft::$app->view->registerTwigExtension(new LaravelMixTwigExtension());
    }
}