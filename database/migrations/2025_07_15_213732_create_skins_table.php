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
        Schema::create('skins', function (Blueprint $table) {
            $table->id();
             $table->boolean('available')->default(0);
            $table->string('titleRu');
            $table->string('titleEn');
            $table->string('priceRu');
            $table->string('articleRu');
            $table->string('articleEn');
            $table->longText('descriptionRu');
            $table->longText('descriptionEn');
            $table->json('color')->nullable();
            $table->json('sizeRu');
            $table->longText('DeliveryRu');
            $table->longText('DeliveryEn');
            $table->longText('informationRu');
            $table->longText('informationEn');
            $table->longText('payRu');
            $table->longText('payEn');
            $table->longText('annotationRu');
            $table->longText('annotationEn');
            $table->json('images');
            $table->longText('image');
            $table->boolean('shape1')->default(false);
            $table->boolean('shape2')->default(false);
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
        Schema::dropIfExists('skins');
    }
};
