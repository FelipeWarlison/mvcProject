<?php
namespace src\handlers;
use \src\models\Usuario;

class LoginHandler {

public static function checkLogin() {

 if(!empty($_SESSION['token'])) {
      $token = $_SESSION['token'];
      $data = Usuario::select()->where('token',$token)->execute();
      $dat = $data[0]; 
 
      if($dat && count($dat) > 0) {
          $loggedUser = new Usuario();
          $loggedUser->id = $dat['id'];
          $loggedUser->name = $dat['name'];
          $loggedUser->email = $dat['email'];
 
          return $loggedUser;
       } 
   }
   return false;
 }

	public static function verifyLogin($email, $password) {

		$usuario = Usuario::select()->where('email', $email)->one();

		if($usuario) {
			if(password_verify($password, $usuario['password'])) {
				$token = md5(time().rand(0,9999).time());
                
                Usuario::update()
                    ->set('token', $token)
                    ->where('email', $email)
                ->execute();

			    return $token;
			}
		}

		return false;
	}

	public function emailExist($email) {
		$usuario = Usuario::select()->where('email', $email)->one();
		return $usuario ? true : false;
	}

	public static function addUsuario($name, $email, $password) {
		$hash = password_hash($password, PASSWORD_DEFAULT);
		$token = md5(time().rand(0,9999).time());

		Usuario::insert([
			'name' => $name,
			'email' => $email,
			'password' => $hash,
			'token' => $token
		])->execute();

		return $token;
	}

}








