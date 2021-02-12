<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grpeduli', function (Blueprint $table) {
            $table->id();
			$table->integer('pertemuan');
			$table->decimal('subtotal');
            $table->timestamps();
        });
		Schema::create('grseribu',function(Blueprint $table){
			$table->id();
			$table->integer('pengumpulan');
			$table->integer('quantity');
			$table->decimal('subtotal');
			$table->timestamps();
			$table->foreignId('users_id')->constrained();
			
		});
		Schema::create('grseragam',function(Blueprint $table){
			$table->id();
			$table->integer('pengumpulan');
			$table->decimal('subtotal');
			$table->timestamps();
			
		});
		Schema::create('grrefresing',function(Blueprint $table){
			$table->id();
			$table->integer('pengumpulan');
			$table->decimal('subtotal'):
			$table->timestamps();
		})
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kas');
    }
}
