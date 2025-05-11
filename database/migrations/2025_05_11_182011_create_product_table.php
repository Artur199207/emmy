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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('titleRu');
            $table->string('titleEn');
            $table->string('price');
            $table->longText('image');
            $table->decimal('newPrice', 8, 2)->nullable();
            $table->json('images');
            $table->string('spaceNameRu');
            $table->string('spaceNameEn');
            $table->longText('descriptionRu');
            $table->longText('descriptionEn');
            $table->string('categoryRu');
            $table->string('categoryEn');
            $table->string('weigthRu');
            $table->string('weigthEn');
            $table->string('BoxRu');
            $table->string('BoxEn');
            $table->longText('informationRu');
            $table->longText('informationEn');
            $table->longText('payRu');
            $table->longText('payEn');
            $table->json('sizeRu');
            $table->longText('DeliveryRu');
            $table->longText('DeliveryEn');
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
        Schema::dropIfExists('product');
    }
};
