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
        Schema::create('gadik', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->integer('Nrp')->unique();
            $table->string('Pangkat');
            $table->string('Jabatan');
            // $table->foreignId('mapel_id');
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
        //
    }
};
