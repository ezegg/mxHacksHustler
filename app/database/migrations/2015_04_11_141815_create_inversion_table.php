<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInversionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inversiones', function(Blueprint $table)
		{
			$table->increments('idInversion');
			$table->double('saldoInvertidoEmpresa');	
			$table->integer('user_id')->unsigned();
			$table->integer('empresa_id')->unsigned();
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
		Schema::drop('inversiones');
	}

}
