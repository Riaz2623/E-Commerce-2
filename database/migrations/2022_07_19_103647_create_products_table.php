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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->float('offerprice');
            $table->float('regularprice');
            $table->text('photo');
            $table->text('eachfeature');
            $table->text('description');
            $table->text('weight');
            $table->text('bar_code');
            $table->float('offerdiscount');
            $table->integer('category_id');
            $table->integer('section_id');
            $table->integer('brand_id');
            $table->integer('manufacturer_id');
            $table->integer('uom_id');
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
        Schema::dropIfExists('products');
    }
};
