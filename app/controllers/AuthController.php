<?php
class AuthController extends BaseController {

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
      'email' => $_POST['email'],
      'password' => $_POST['password']
    ];

    if (Auth::attempt($data, Input::get('remember')))
    {
      return "hola";
      //return Redirect::to('dash');
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
