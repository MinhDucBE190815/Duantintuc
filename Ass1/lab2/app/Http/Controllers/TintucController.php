<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TintucController extends Controller
{
    function hienthitintuc()
    {
        $tintuc = DB :: table('tin') -> select('*')->get();
        var_dump($tintuc);
    }
}
