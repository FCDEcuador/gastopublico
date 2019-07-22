<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;

class CreatePublicationDateFielsd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $output = new ConsoleOutput();
        $bar = new ProgressBar($output, 2);
        $bar->start();

        Schema::table('content_articles', function ($table) {
            $table->dateTime('publication_date')->nullable()->after('main_home');
            $table->dateTime('release_date')->nullable()->after('publication_date');
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
            $table->dropColumn(['publication_date', 'release_date']);
        });
        $bar->advance();

        $bar->finish();
        print("\n");
    }
}
