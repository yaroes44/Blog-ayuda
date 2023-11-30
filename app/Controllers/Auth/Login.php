<?php namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index(){

        if(!session()->is_logged){
            return view('Auth/login');
        }
            return  redirect()->route('posts');
    }

    public function signin(){
        if(!$this->validate([
            'email' => 'required|valid_email',
            'password' => 'required'
        ])){
            return redirect()->back()
            ->with('errors',$this->validator->getErrors())
        ->withInput();
        }
        $email = trim($this->request->getVar('email')); //obtener el valor de emmail
        $password = trim($this->request->getVar('password')); //obtener el valor de emmail
        
        $model = model('UsersModel');

        if(!$user = $model->getUserBy('email', $email)){
            return redirect()->back()
            ->with('msg',[
        'type' => 'danger',
        'body' => 'Usuario no encontrado en el sistema'
    ]);
}
    if(password_verify($password, $user->password)){
        return redirect()->back()
        ->with('msg',[
            'type' => 'danger',
            'body' => 'Credenciales invalidas'
        ]);
    }

    session()->set([
        'id_user' => $user->id,
        'username' => $user->username,
        'is_logged' => true
    ]);

    return redirect()->route('posts')->with('msg',[
        'type' => 'success',
        'body' => 'Bienvenido de vuelta' . $user->username
    ]);
        
    }

    public function signout(){
        session()->destroy();
        return redirect()->route('login');
    }
}