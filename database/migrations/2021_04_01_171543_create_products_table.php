<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('title');
            $table->string('auteur');
            $table->string('isbn');
            $table->string('categorie');
            $table->string('livre');
            $table->integer('prix');
            $table->integer('quantite');
            $table->string('description');
            $table->string('image');
            $table->string('livre_image_aws_storage_path')->nullable();
            $table->string('livre_content_aws_storage_path')->nullable();
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
}
