<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateCyclesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.cycle.data.cycle.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('started_at')->nullable();
            $table->string('started_status')->nullable();
            $table->datetime('ended_at')->nullable();
            $table->string('ended_status')->nullable();
            $table->string('cyclable_type');
            $table->integer('cyclable_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.cycle.data.cycle.table'));
    }
}
