<?php
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

  public function showLogin()
  {
    if (Auth::check())
    {
      return Redirect::to('dash');
    }
    return View::make('login');
  }

  public function postLogin()
  {
    $data = [
      'email' => Input::get('email'),
      'password' => Input::get('password')
    ];

    if (Auth::attempt($data, Input::get('remember')))
    {
      return Redirect::to('dash');
    }
    else{
      return Redirect::back()->with('error_message', 'Invalid data')->withInput();
    }

  }

  public function logout()
  {
    Auth::logout();
    return Redirect::to('login')->with('error_message', 'Logged out correctly');
  }

  public function showWelcome()
  {
    return View::make('auth/dash');
  }

  public function registerUser()
  {
    return View::make('register');
  }
}
