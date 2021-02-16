<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipeKasDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipe_kas_details', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->timestamps();
			$table->string('name');
			$table->decimal('subtotal');
			$table->foreignId('tipe_kas_id')->constrained('tipe_kas');
			$table->foreignId('users_id')->constrained('users');
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipe_kas_details');
    }
}
