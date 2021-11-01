<?php namespace Catthecreator\Bitrix24Leads;

use Backend;
use System\Classes\PluginBase;

/**
 * Bitrix24Leads Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Bitrix24Leads',
            'description' => 'Форма лидов в Bitrix24',
            'author'      => 'catthecreator',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Catthecreator\Bitrix24Leads\Components\LeadForm' => 'LeadForm',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'catthecreator.bitrix24leads.some_permission' => [
                'tab' => 'Bitrix24Leads',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'bitrix24leads' => [
                'label'       => 'Bitrix24Leads',
                'url'         => Backend::url('catthecreator/bitrix24leads/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['catthecreator.bitrix24leads.*'],
                'order'       => 500,
            ],
        ];
    }
}
