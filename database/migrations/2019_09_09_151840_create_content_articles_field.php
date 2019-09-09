<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;

class CreateContentArticlesField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $output = new ConsoleOutput();
        $bar = new ProgressBar($output, 1);
        $bar->start();

        Schema::table('content_articles', function ($table) {
            $table->text('multimedia_caption')->nullable()->after('main_multimedia');
        });
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
        $bar = new ProgressBar($output, 1);
        $bar->start();

        Schema::table('content_articles', function ($table) {
            $table->dropColumn(['multimedia_caption']);
        });
        $bar->advance();

        $bar->finish();
        print("\n");
    }
}
