<?php
/**
 * covers.lc - functions.php
 * 
 * Initial version by: Viktor Melnikov
 * Initial version created on: 28.03.16
 */

use Illuminate\Contracts\Routing\UrlGenerator;

if ( !function_exists( 'asset' ) ) {
    /**
     * Generate an asset path for the application.
     *
     * @param  string $path
     * @param  bool   $secure
     *
     * @return string
     */
    function asset( $path, $secure = null )
    {
        $secure = env('APP_HTTPS');

        if ( file_exists( public_path( 'main/' . $path ) ) )
        {
            return app( 'url' )->asset( 'main/' . $path, $secure );
        }
        if ( file_exists( public_path( 'admin_panel/' . $path ) ) )
        {
            return app( 'url' )->asset( 'admin_panel/' . $path, $secure );
        }
        else if ( file_exists( public_path( 'vendor/' . $path ) ) )
        {
            return app( 'url' )->asset( 'vendor/' . $path, $secure );
        }
        else if ( file_exists( public_path( $path ) ) )
        {
            return app( 'url' )->asset( $path, $secure );
        }

        return false;
    }
}

if (! function_exists('admin_url')) {
    /**
     * Generate a url for the application.
     *
     * @param  string  $path
     * @param  mixed   $parameters
     * @param  bool    $secure
     * @return Illuminate\Contracts\Routing\UrlGenerator|string
     */
    function admin_url($path = null, $parameters = [], $secure = null)
    {
        $path = 'admin/' . $path;

        if (is_null($path)) {
            return app(UrlGenerator::class);
        }

        return app(UrlGenerator::class)->to($path, $parameters, $secure);
    }
}

if (! function_exists('catalog_url')) {
    /**
     * Generate a url for the application.
     *
     * @param  string  $path
     * @param  mixed   $parameters
     * @param  bool    $secure
     * @return Illuminate\Contracts\Routing\UrlGenerator|string
     */
    function catalog_url($path = null, $parameters = [], $secure = null)
    {
        $path = 'catalog/' . $path;

        if (is_null($path)) {
            return app(UrlGenerator::class);
        }

        return app(UrlGenerator::class)->to($path, $parameters, $secure);
    }
}