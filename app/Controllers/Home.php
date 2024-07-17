<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='index';
        echo view('front/head_view',$data);
        echo view("front/navbar_view");
        echo view("front/principal_ultimo");
        echo view("front/footer_view");
        
    }
    public function quienes_somos()
    {
        $data['titulo']='quienes_somos';
        echo view("front/head_view",$data);
        echo view("front/navbar_view");
        echo view("front/quienes_somos");
        echo view("front/footer_view");
        
    }
    public function acerca_de()
    {
        $data['titulo']='acerca_de';
        echo view("front/head_view",$data);
        echo view("front/navbar_view");
        echo view("front/acerca_de");
        echo view("front/footer_view");
        
    }
    public function registro()
    {
        
        $data['titulo']='registro';        
        echo view("front/head_view",$data);
        echo view("front/navbar_view");
        echo view("Back/usuario/registro");
        echo view("front/footer_view");
        
    }
    public function login()
    {
        $data['titulo']='login';
        echo view("front/head_view",$data);
        echo view("front/navbar_view");
        echo view("Back/usuario/login");
        echo view("front/footer_view");
        
    }
    public function productos()
    {
        $data['titulo']='productos';
        echo view("front/head_view", $data);
        echo view("front/navbar_view");
        echo view("front/productos");
        echo view("front/footer_view");
        
    }
}