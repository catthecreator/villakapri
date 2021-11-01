<?php namespace Catthecreator\BlogExtension\Components;

use Cms\Classes\ComponentBase;
use RainLab\Blog\Components\Post as RainLabPost,
  RainLab\Blog\Models\Post as BlogPost;

class Post extends RainLabPost
{
    public function componentDetails()
    {
        return [
            'name'        => 'Post Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
}
