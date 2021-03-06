<?php 

// Define namespace
namespace Lakshmajim\Thumbnail;

// Include namespace
use Illuminate\Support\ServiceProvider;


/**
 * The Thumbnail Controller
 *
 * Thumbnail - ServicePrivider to support integration with 
 * Laravel framework , which Define all methods associated
 * with a Thumbnail. Each and Every video has to be processed 
 * to produce thumbnail image
 *
 * @author     lakshmaji <lakshmajee88@gmail.com>
 * @package    Thumbnail
 * @version    1.4.2
 * @since      Class available since Release 1.0.0
 */
class ThumbnailServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return  void
     * @author  lakshmaji <lakshmajee88@gmail.com>
     * @package Thumbnail
     * @version 1.4.2
     * @since   Method available since Release 1.0.0
     */
    public function register()
    {
        if (method_exists(\Illuminate\Foundation\Application::class, 'singleton')) {
            $this->app->singleton('thumbnail', function($app) {
                return new Thumbnail;
            });
        } else {
            $this->app['thumbnail'] = $this->app->share(function($app) {
                return new Thumbnail;
            });
        }
    }
}
// end of ThumbnailServiceProvider class
// end of file ThumbnailServiceProvider.php 

