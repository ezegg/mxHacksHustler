<?php
class Inversion extends Eloquent {
   
   public function user(){
      return $this->belongsTo('User');
   }

   public function empresa(){
      return $this->belongsTo('Empresa');
   }

}
?>