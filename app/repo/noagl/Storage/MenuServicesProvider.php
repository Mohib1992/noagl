<?php
/**
 * Created by PhpStorm.
 * User: Moinkhan
 * Date: 3/22/2015
 * Time: 2:56 PM
 */

namespace noagl\Storage;


use Illuminate\Support\ServiceProvider;

class MenuServicesProvider extends ServiceProvider{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // TODO: Implement register() method.
        $this->app->bind(
            'noagl\Storage\menu\MenuRepository',
            'noagl\Storage\menu\MenuEloquentRepository'
        );
    }
}