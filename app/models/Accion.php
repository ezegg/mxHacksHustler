<?php
class Accion extends Eloquent {
		
   public function empresa(){
      return $this->belongsTo('Empresa');
   }

   public function venta(){
      return $this->belongsTo('Venta');
   }

}
?>