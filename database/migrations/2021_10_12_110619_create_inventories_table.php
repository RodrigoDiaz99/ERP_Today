<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_models_id')->constrained();
            $table->integer('minAlert')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('maxAlert')->nullable();
            $table->double('purchasePrice')->nullable();
            $table->double('salePrice')->nullable();
            $table->enum('type', ['sale', 'presale', 'only'])->default('sale');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}
