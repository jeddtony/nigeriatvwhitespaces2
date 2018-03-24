<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuchiTimeFrequenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auchi_time_frequencies', function (Blueprint $table) {
            $table->increments('id');
            $table->double('frequency');
            $table->double('channel_id');
            $table->double('12AM');
            $table->double('1AM');
            $table->double('2AM');
            $table->double('3AM');
            $table->double('4AM');
            $table->double('5AM');
            $table->double('6AM');
            $table->double('7AM');
            $table->double('8AM');
            $table->double('9AM');
            $table->double('10AM');
            $table->double('11AM');
            $table->double('12PM');
            $table->double('1PM');
            $table->double('2PM');
            $table->double('3PM');
            $table->double('4PM');
            $table->double('5PM');
            $table->double('6PM');
            $table->double('7PM');
            $table->double('8PM');
            $table->double('9PM');
            $table->double('10PM');
            $table->double('11PM');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auchi_time_frequencies');
    }
}
