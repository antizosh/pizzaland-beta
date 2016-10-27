<?php namespace Samat\Pizzas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSamatPizzas extends Migration
{
    public function up()
    {
        Schema::create('samat_pizzas_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->boolean('available');
            $table->string('image')->nullable();
            $table->integer('price');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('samat_pizzas_');
    }
}
