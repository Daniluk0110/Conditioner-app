<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('currency');
            $table->string('char_code');
            $table->string('nominal');
            $table->string('value');
            $table->timestamps();
        });

        \DB::table('prices')->insert([
            'name' => 'Беларуский рубль',
            'currency' => 'BYN',
            'char_code' => 'BYN',
            'nominal' => '1',
            'value' => '2.55',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prices');
    }
};
