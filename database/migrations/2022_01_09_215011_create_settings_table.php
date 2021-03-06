<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('skills', 255);
            $table->string('moto', 255);
            $table->string('about', 255);
            $table->string('about_description', 255);
            $table->timestamps();
        });

        DB::table('settings')->insert(
            array(
                'title' => 'Saturn',
                'skills' => 'Java | C#',
                'moto' => 'Once I had a dream to serve people in-need',
                'about' => 'ABOUT ME',
                'about_description' => 'description here'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
