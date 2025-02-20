<?php
/**
 * Laravel Mix Cache Busting plugin for Craft CMS
 *
 * Twig extension
 */

namespace Mayocube\LaravelMix;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use yii\web\HttpException;

class LaravelMixTwigExtension extends AbstractExtension
{
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
            new TwigFunction('mix', [$this, 'mix']),
        ];
    }

    /**
     * Get the path to a versioned Mix asset.
     *
     * @param string $file
     *
     * @return string
     * @throws HttpException
     */
    public function mix(string $file)
    {
        static $manifest = null;

        if (file_exists('hot')) {
            return '//localhost:8080' . $file;
        }

        if (is_null($manifest)) {
            $manifest = json_decode(file_get_contents('mix-manifest.json'), true);
        }

        if (isset($manifest[$file])) {
            return $manifest[$file];
        }

        throw new HttpException(500, "File '{$file}' not defined in asset manifest.");
    }
}
