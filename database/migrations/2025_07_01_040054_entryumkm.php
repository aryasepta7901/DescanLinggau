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
        Schema::create('entryumkm', function (Blueprint $table) {
            // Primary key UUID
            $table->uuid('id')->primary();

            $table->char('r101', 10)->nullable();
            $table->char('r102', 10)->nullable();
            $table->text('r103')->nullable();
            $table->text('r104')->nullable();
            $table->text('r201a')->nullable();
            $table->char('r201b')->nullable();
            $table->char('r201c', 1)->nullable();
            $table->integer('r201d')->nullable();
            $table->string('r201e', 20)->nullable();
            $table->char('r201f', 1)->nullable();
            $table->text('r301a')->nullable();
            $table->text('r301b')->nullable();
            $table->char('r301c', 1)->nullable();
            $table->char('r301d', 5)->nullable();
            $table->char('r302', 1)->nullable();
            $table->char('r303', 1)->nullable();
            $table->char('r304')->nullable();
            $table->char('r305')->nullable();
            $table->char('r306')->nullable();
            $table->char('r307')->nullable();
            $table->char('r308')->nullable();

            // Integer kolom, tanpa panjang
            $table->integer('r309a3')->nullable();
            $table->integer('r309a4')->nullable();
            $table->integer('r309b3')->nullable();
            $table->integer('r309b4')->nullable();
            $table->integer('r310a3')->nullable();
            $table->integer('r310a4')->nullable();
            $table->integer('r310b3')->nullable();
            $table->integer('r310b4')->nullable();
            $table->integer('r310c3')->nullable();
            $table->integer('r310c4')->nullable();
            $table->integer('r310d3')->nullable();
            $table->integer('r310d4')->nullable();
            $table->integer('r310e3')->nullable();
            $table->integer('r310e4')->nullable();
            $table->integer('r311a3')->nullable();
            $table->integer('r311a4')->nullable();
            $table->integer('r311b3')->nullable();
            $table->integer('r311b4')->nullable();
            $table->integer('r311c3')->nullable();
            $table->integer('r311c4')->nullable();
            $table->integer('r311d3')->nullable();
            $table->integer('r311d4')->nullable();
            $table->integer('r312a')->nullable();
            $table->integer('r312b')->nullable();

            $table->char('user_id')->nullable();
            $table->char('status', 1)->nullable();


            $table->timestamps();

            // Foreign key (pastikan tipe sama persis)
            $table->foreign('r101')->references('id')->on('kelurahan')->onDelete('cascade');
            $table->foreign('r301d')->references('id')->on('kbli')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entryumkm');
    }
};
