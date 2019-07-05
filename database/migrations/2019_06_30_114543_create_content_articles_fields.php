<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;

class CreateContentArticlesFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        /*
        $output = new ConsoleOutput();
        $bar = new ProgressBar($output, 1);
        $bar->start();

        Schema::table('content_categories', function ($table) {
            $table->string('list_type')->nullable()->after('main_home');
        });
        $bar->advance();

        $bar->finish();
        print("\n");
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*
        $output = new ConsoleOutput();
        $bar = new ProgressBar($output, 1);
        $bar->start();

        Schema::table('content_categories', function ($table) {
            $table->dropColumn(['list_type']);
        });
        $bar->advance();

        $bar->finish();
        print("\n");
        */
    }
}
