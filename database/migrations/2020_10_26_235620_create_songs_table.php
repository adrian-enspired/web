<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('artist')->nullable();
            $table->string('composer')->nullable();
            $table->string('lyrics')->nullable();
            $table->string('genre')->nullable();
            $table->string('language')->default('English');
            $table->boolean('instrumental')->default(false);
            $table->boolean('explicit')->default(false);
            $table->string('file');
            $table->longText('id3')->nullable();
            $table->foreignId('release_id')->nullable()->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('songs');
    }
}
