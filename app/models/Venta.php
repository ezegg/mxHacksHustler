<?php
class Venta extends Eloquent {
   public function user(){
      return $this->belongsTo('User');
   }

   public function empresa(){
      return $this->belongsTo('Empresa');
   }

   public function accion(){
      return $this->belongsTo('Accion');
   }

}
?>