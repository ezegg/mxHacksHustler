<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ventas', function(Blueprint $table)
		{
			$table->increments('idVenta');
			$table->integer('user_id')->unsigned();
			$table->integer('empresa_id')->unsigned();
			$table->integer('accion_id')->unsigned();
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
		Schema::drop('ventas');
	}

}
