<?php
/**
 * Laravel Mix Cache Busting plugin for Craft CMS
 *
 * Twig extension
 *
 * @author    Maarten de Graaf
 * @copyright Copyright (c) 2017 Maarten de Graaf.
 * @link      http://maarten.co.uk
 * @package   Laravel Mix Cache Busting plugin for Craft CMS
 * @since     1.0.0
 */

namespace Craft;

class LaravelMixTwigExtension extends \Twig_Extension
{
    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'Laravel Mix Cache Busting Integration';
    }

    /**
     * Returns cache busted asset path:
     *
     *      {{ mix('/css/app.css') }}
     *
     * @return array
     */
    public function getFunctions()
    {
        return array(
            'mix' => new \Twig_Function_Method($this, 'mix'),
        );
    }

    /**
     * Get the path to a versioned Mix asset.
     *
     * @param  string $file
     *
     * @return string
     * @throws HttpException
     */
    public function mix($file)
    {
        static $manifest = null;

        if (is_null($manifest)) {
            $manifest = json_decode(file_get_contents('mix-manifest.json'), true);
        }

        if (isset($manifest[$file])) {
            return $manifest[$file];
        }

        throw new HttpException(500, "File {$file} not defined in asset manifest.");
    }
}