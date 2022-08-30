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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            // $table->string('imi');
            $table->string('slug')->unique();
            // $table->enum('time_status', ['2N1D', '3N2D']);

            $table->string('short_descripsition')->nullable();
            $table->text('descripsition');
            $table->date('departure_date')->nullable();;
            $table->decimal('regular_price');
            $table->decimal('sale_price')->nullable();
            $table->boolean('featured')->default(false);
            $table->string('image')->nullable();
            $table->text('images')->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
};
