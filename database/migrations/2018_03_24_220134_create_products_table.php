<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->text('desc');
			$table->integer('qty');
			$table->integer('maxqty')->nullable();
			$table->integer('price');
			$table->string('img1');
			$table->string('img2')->nullable();
			$table->string('img3')->nullable();
			$table->string('img4')->nullable();			
			$table->string('uom');
			$table->integer('weight')->nullable();	
			$table->string('color')->nullable();	
			$table->integer('sub_id')->unsigned()->index();
			$table->integer('brand_id')->unsigned()->index();
            $table->timestamps();
			
			$table->foreign('sub_id')->references('id')->on('sub_categories')->onDelete('cascade');	
			$table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
