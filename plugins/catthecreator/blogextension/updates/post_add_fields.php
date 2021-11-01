<?php namespace Catthecreator\BlogExtension\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class PostAddFields extends Migration
{

  public function up()
  {
    if (Schema::hasColumn('rainlab_blog_posts', 'house_area') == false) {
      Schema::table('rainlab_blog_posts', function ($table) {
        $table->mediumText('house_area')->nullable();
      });
    }
    if (Schema::hasColumn('rainlab_blog_posts', 'plottage') == false) {
      Schema::table('rainlab_blog_posts', function ($table) {
        $table->mediumText('plottage')->nullable();
      });
    }
    if (Schema::hasColumn('rainlab_blog_posts', 'price') == false) {
      Schema::table('rainlab_blog_posts', function ($table) {
        $table->mediumText('price')->nullable();
      });
    }
  }

  public function down()
  {
    if (Schema::hasColumn('rainlab_blog_posts', 'house_area')) {
      Schema::table('rainlab_blog_posts', function ($table) {
        $table->dropColumn('house_area');
      });
    }
    if (Schema::hasColumn('rainlab_blog_posts', 'plottage')) {
      Schema::table('rainlab_blog_posts', function ($table) {
        $table->dropColumn('plottage');
      });
    }
    if (Schema::hasColumn('rainlab_blog_posts', 'price')) {
      Schema::table('rainlab_blog_posts', function ($table) {
        $table->dropColumn('price');
      });
    }
  }

}
