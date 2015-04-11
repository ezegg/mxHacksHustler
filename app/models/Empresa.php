<?php
class Empresa extends Eloquent {

   public function inversiones(){
      return $this->belongsTo('Inversion');
   }

   public function compras(){
	   return $this->hasMany('Compra');
	}

	public function ventas(){
	   return $this->hasMany('Venta');
	}

	public function acciones(){
	   return $this->hasMany('Accion');
	}

}
?>