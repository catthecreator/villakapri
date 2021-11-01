<?php namespace Catthecreator\BlogExtension;

use Backend;
use Event;
use System\Classes\PluginBase;

/**
 * BlogExtension Plugin Information File
 */
class Plugin extends PluginBase
{

  public $require = ['RainLab.Blog'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'BlogExtension',
            'description' => 'No description provided yet...',
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
      \RainLab\Blog\Models\Post::extend(function ($model) {
        $model->attachOne['preview_image_2'] = [
          'System\Models\File',
        ];
//        $model->addFillable('house_area');
      });

      Event::listen('backend.form.extendFields', function ($widget) {
        // Extend only the Blog\Posts controller & Extend only Blog\Post model
        if (!($widget->getController() instanceof \RainLab\Blog\Controllers\Posts
          && $widget->model instanceof \RainLab\Blog\Models\Post)
        ) {
          return;
        }

        if (!$widget->isNested) {
          $widget->addSecondaryTabFields([
            'preview_image_2' => [
              'label' => 'Планировка',
              'tab' => 'rainlab.blog::lang.post.tab_manage',
              'type' => 'fileupload',
            ],
            'house_area' => [
              'label' => 'Площадь',
              'tab' => 'rainlab.blog::lang.post.tab_manage',
              'type' => 'text',
            ],
            'plottage' => [
              'label' => 'Участок',
              'tab' => 'rainlab.blog::lang.post.tab_manage',
              'type' => 'text',
            ],
            'price' => [
              'label' => 'Цена',
              'tab' => 'rainlab.blog::lang.post.tab_manage',
              'type' => 'text',
            ],
          ]);
        }

      });
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Catthecreator\BlogExtension\Components\MyComponent' => 'myComponent',
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
            'catthecreator.blogextension.some_permission' => [
                'tab' => 'BlogExtension',
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
            'blogextension' => [
                'label'       => 'BlogExtension',
                'url'         => Backend::url('catthecreator/blogextension/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['catthecreator.blogextension.*'],
                'order'       => 500,
            ],
        ];
    }
}
