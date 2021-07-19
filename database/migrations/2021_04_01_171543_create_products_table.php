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
            $table->string('mode');
            $table->string('categorie');
            $table->string('livre');
            $table->integer('prix');
            $table->integer('quantite')->nullable();
            $table->longtext('description');
            $table->string('image');
            $table->longtext('sommaire1')->nullable();
            $table->longtext('sommaire2')->nullable();
            $table->longtext('sommaire3')->nullable();
            $table->longtext('sommaire4')->nullable();
            $table->longtext('sommaire5')->nullable();
            $table->longtext('sommaire6')->nullable();
            $table->longtext('sommaire7')->nullable();
            $table->longtext('sommaire8')->nullable();
            $table->longtext('sommaire9')->nullable();
            $table->longtext('sommaire10')->nullable();
            // $table->string('sommaire_image1');
            // $table->string('sommaire_image2')->nullable();
            // $table->string('sommaire_image3')->nullable();
            $table->string('livre_image_aws_storage_path')->nullable();
            // $table->string('livre_sommaire_image1_aws_storage_path')->nullable();
            // $table->string('livre_sommaire_image2_aws_storage_path')->nullable();
            // $table->string('livre_sommaire_image3_aws_storage_path')->nullable();
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
