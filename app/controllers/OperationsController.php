<?php
use Illuminate\Support\Facades\Input;
use EtanNitram\FinanceApis\FinanceQuotes\AssetQuotes;

class OperationsController extends BaseController {

  public function buy()
  {
    $data = Input::all();
    dd($data);
  }

  public function wallet($id){

    //$id = Input::get('id');
    $data = DB::table('users')
    ->join('inversiones', 'users.id', '=', 'inversiones.user_id')
    ->join('empresas', 'empresas.idEmpresa', '=', 'inversiones.empresa_id')
    ->select('users.nombre', 'users.saldoTotal','users.saldoLibre', 'inversiones.saldoInvertidoEmpresa', 'empresas.nombreEmpresa')
    ->where('users.id', '=', $id)
    ->get();
    //dd($data);

    return Response::json(array(
        'error' => false,
        'data' => $data),
        200
    );

            /*DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.id', 'contacts.phone', 'orders.price')
            ->get();*/

  }

  public function saveDataGraph(){

    $symbols = Input::get('symbols');

        if ($symbols === null || $symbols === '')
            return array('status' => 400, 'message' => 'missing symbols paramater');

        $quotes = new AssetQuotes();

        // optional ability to set an API thirdparty vendor, like YAHOO, Markit, ect
        $vendor = Input::get('vendor');

        // set the vendor if an over ride was given
        if ($vendor !== null && ! $quotes->setVendor($vendor)) {
            return array('status' => 400, 'message' => 'invalid vendor');            
        }

         $array = (array)$quotes->getInfo($symbols);

        //return $array;
         

         //return gettype(json_encode($array));

        return $json  = Response::json(array(
        'data' => $array),
        200
        );

         //return (array)$quotes;
  }

  public function getData($name){
    $data = DB::table('bolsa')
      ->select('bolsa.nombreEmpresa', 'bolsa.valorEmpresa')
      ->where('bolsa.nombreEmpresa', '=', $name)
      ->get();
    return Response::json(array(
        'error' => false,
        'data' => $data),
        200
    );

  }

  public function saveFinance(){

    $nombreEmpresa = $_POST['nombreEmpresa'];
    $valorEmpresa = $_POST['valorEmpresa'];

    DB::table('bolsa')->insert(
    array('nombreEmpresa' => $nombreEmpresa, 'valorEmpresa' => $valorEmpresa )
    );
    /*$data = ;
    $bolsa->fill($data);
    $bolsa->save();*/
  }

  public function getFinance(){

  }



}
