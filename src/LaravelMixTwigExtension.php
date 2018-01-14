<?php
/**
 * Laravel Mix Cache Busting plugin for Craft CMS
 *
 * Twig extension
 */

namespace Wiejeben\LaravelMix;

use yii\web\HttpException;

class LaravelMixTwigExtension extends \Twig_Extension
{
    /**
     * Returns the name of the extension.
     *
     * @return string
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
        return [
            'mix' => new \Twig_SimpleFunction('mix', [$this, 'mix']),
        ];
    }

    /**
     * Get the path to a versioned Mix asset.
     *
     * @param  string $file
     *
     * @return string
     * @throws HttpException
     */
    public function mix(string $file)
    {
        static $manifest = null;

        if (is_null($manifest)) {
            $manifest = json_decode(file_get_contents('mix-manifest.json'), true);
        }

        if (isset($manifest[$file])) {
            return $manifest[$file];
        }

        throw new HttpException(500, "File '{$file}' not defined in asset manifest.");
    }
}