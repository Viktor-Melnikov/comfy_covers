<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->integer('category_id');
            $table->boolean('new')->nullable();
            $table->integer('amount')->default(0);
            $table->integer('sum');
            $table->text('picture');
            $table->float('percentage')->nullable();
            $table->float('rating')->nullable();
            $table->text('description')->nullable();
            $table->integer('code')->nullable();
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
}
