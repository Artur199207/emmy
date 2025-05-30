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
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->longText('image');
            $table->string('dataRu');
            $table->string('dataEn');
            $table->string('titleRu','50');
            $table->string('titleEn','50');
            $table->text('descriptionRu');
            $table->text('descriptionEn');
            $table->longText('informationRu');
            $table->longText('informationEn');
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
        Schema::dropIfExists('blog');
    }
};
