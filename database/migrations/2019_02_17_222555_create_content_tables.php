<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;

class CreateContentTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $output = new ConsoleOutput();
        $bar = new ProgressBar($output, 5);
        $bar->start();

        if( ! Schema::hasTable('indicators')){
            Schema::create('indicators', function (Blueprint $table) {
                $table->uuid('id');
                $table->string('title')->unique();
                $table->string('slug')->unique();
                $table->text('summary')->nullable();
                $table->string('type');
                $table->string('indicator');
                $table->string('unity');
                $table->string('value');
                $table->timestamps();
                $table->primary('id');
            });
        }
        $bar->advance();


        if( ! Schema::hasTable('content_categories')){
            Schema::create('content_categories', function (Blueprint $table) {
                $table->uuid('id');
                $table->string('name')->unique();
                $table->string('slug')->unique();
                $table->string('title');
                $table->string('subtitle')->nullable();
                $table->text('tags')->nullable();
                $table->text('list_type')->default('listado1');
                $table->text('meta_description')->nullable();
                $table->text('meta_keywords')->nullable();
                $table->text('extra_headers')->nullable();
                $table->uuid('content_category_id')->nullable();
                $table->timestamps();
                $table->primary('id');
                $table->foreign('content_category_id')->references('id')->on('content_categories');
            });
        }
        $bar->advance();


        if(!Schema::hasTable('content_articles')){
            Schema::create('content_articles', function (Blueprint $table) {
                $table->uuid('id');
                $table->string('title')->unique();
                $table->string('slug')->unique();
                $table->text('summary');
                $table->text('content')->nullable();
                $table->string('author')->nullable();
                $table->string('author_email')->nullable();
                $table->string('source')->nullable();
                $table->text('tags')->nullable();
                $table->text('main_multimedia')->nullable();
                $table->text('meta_description')->nullable();
                $table->text('meta_keywords')->nullable();
                $table->text('extra_headers')->nullable();
                $table->boolean('outstanding')->default(0);
                $table->boolean('main_category')->default(0);
                $table->boolean('main_home')->default(0);
                $table->uuid('content_category_id')->nullable();
                $table->timestamps();
                $table->primary('id');
                $table->foreign('content_category_id')->references('id')->on('content_categories');
            });
        }
        $bar->advance();

        if(!Schema::hasTable('menus')){
            Schema::create('menus', function (Blueprint $table) {
                $table->uuid('id');
                $table->string('name')->unique();
                $table->string('position');
                $table->boolean('active')->default(1);
                $table->timestamps();
                $table->primary('id');
            });
        }
        $bar->advance();

        if(!Schema::hasTable('menu_items')){
            Schema::create('menu_items', function (Blueprint $table) {
                $table->uuid('id');
                $table->string('name');
                $table->string('title')->nullable();
                $table->string('summary')->nullable();
                $table->string('image')->nullable();
                $table->string('icon')->nullable();
                $table->text('link');
                $table->char('type', 1)->default('I');
                /*
                    I -> interno
                    E -> externo
                */
                $table->string('target')->default('_self');
                /*
                    _self
                    _blank
                */
                $table->integer('level')->default(0);
                $table->integer('order')->default(0);
                $table->boolean('active')->default(1);
                $table->uuid('menu_item_id')->nullable();
                $table->uuid('menu_id');
                $table->timestamps();
                $table->primary('id');
                $table->foreign('menu_item_id')->references('id')->on('menu_items');
                $table->foreign('menu_id')->references('id')->on('menus');
            });
        }
        $bar->advance();

        $bar->finish();
        print("\n");

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        $output = new ConsoleOutput();
        $bar = new ProgressBar($output, 5);
        $bar->start();
        
        Schema::dropIfExists('menu_items');
        $bar->advance();
        Schema::dropIfExists('menus');
        $bar->advance();
        Schema::dropIfExists('content_articles');
        $bar->advance();
        Schema::dropIfExists('content_categories');
        $bar->advance();
        Schema::dropIfExists('indicators');
        $bar->advance();

        $bar->finish();
        print("\n");
    }
}
