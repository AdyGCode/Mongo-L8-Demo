<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('manufacturer')->nullable();
            $table->string('model')->nullable();
            $table->decimal('price',12,2)->nullable();
            $table->string('image')->nullable();
            $table->timestamps();

            $table->index(['manufacturer','model'],'manufacturer_model');
            $table->index('model','model');
            $table->index('manufacturer','manufacturer');
            $table->index('price','price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
