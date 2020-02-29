<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',100);
            $table->float('precio', 6,2);
            $table->integer('stock');
            $table->string('imagen')->default('img/articulos/default.jpg');

            $table->bigInteger('categoria_id')->unsigned()->nullable();

            $table->timestamps();
            $table->foreign('categoria_id')
            ->references('id')
            ->on('categorias')
            ->onDelete('set null')
            ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
