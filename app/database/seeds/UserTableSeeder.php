<?php


class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			
			'nombre' => 'Ezequiel',
			'email'      => 'ezeezegg@gmail.com',
			//'password'   =>  Hash::make('admin')
			'password'   =>  'admin',
			'numeroEmpresas'  => '3',
			'saldoTotal'  => '1000.0',
			'saldoLibre'  => '90.0'
			]);
		}

	}
