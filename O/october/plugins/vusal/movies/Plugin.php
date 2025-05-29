<?php namespace Vusal\Movies;

use System\Classes\PluginBase;

/**
 * Plugin class
 */
class Plugin extends PluginBase
{
    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return [
            'Vusal\Movies\components\Actors' => 'actors',
            'Vusal\Movies\components\ActorForm'=> 'actorform'
        ];
    }

    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }

    public function  registerFormWidgets()
    {
        return [
            'Vusal\Movies\FormWidgets\ActorBox' => [
                'label' => 'Actorbox field',
                'code' => 'actorbox'
            ]
        ];
    }
}
