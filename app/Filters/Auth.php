<?php

namespace App\Filters;


use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
public function before (RequestInterface $request, $arguments = null)
{
// si el usuario no esta logueado
        if(!session()->get('logged_in')){
// entonces redirecicona a la pagina de login page
        return redirect()->to('/ProT2_28250010/login');
}
}
public function after (RequestInterface $request, ResponseInterface $response, $arguments = null) 
{
// Do something here
}
}
