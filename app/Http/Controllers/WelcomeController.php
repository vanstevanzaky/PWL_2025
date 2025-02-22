<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello()
    {
        return 'Hello World';
    }
    public function index() 
    {
        return 'Selamat Datang';
    }
    public function about() 
    {
        return 'STEVAN ZAKY SETYANTO 2341720101';
    }
    public function articles($id) 
    {
        return 'Halaman Artikel dengan ID '.$id;
    }
    public function greeting(){
        return view ('blog.hello')
        ->with('name', 'Stevan Zaky')
        ->with('occupation', 'Informatics Engineering');
    }
}
