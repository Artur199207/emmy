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
        Schema::create('bath', function (Blueprint $table) {
            $table->id();
            $table->boolean('available')->default(0);
            $table->string('titleRu');
            $table->string('titleEn');
            $table->string('priceRu');
            $table->string('priceEn');
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
              $table->json('images');
              $table->longText('image');
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
        Schema::dropIfExists('bath');
    }
};
