<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return 'STEVAN ZAKY SETYANTO 2341720101';
    }

        public function user($name='Belum diisi')
    {
        return 'Nama Saya '.$name;
    }

}
