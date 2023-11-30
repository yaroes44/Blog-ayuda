<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        //filtro para rutas de administrador

        if(!session()->is_logged){
            return redirect()->route('login')->with('msg',[
                'type' => 'warning',
                'body' => 'Inicia sesion para continuar'
            ]);
        }

        $model = model('UsersModel');
        if(!$user = $model->getUserBy('id', session()->id_user)){
            session()->destroy();
            return redirect()->route('login')->with('msg', [
                'type' => 'danger',
                'body' => 'El usuario actualmente no esta disponible'
            ]);
        }

        if(!in_array($user->getRole()->name_group, $arguments)){
            throw PageNotFoundException:: forPageNotFound();
        }
        
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }   
    
}