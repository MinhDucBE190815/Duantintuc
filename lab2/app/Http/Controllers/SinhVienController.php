<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SinhVienController extends Controller
{
    //
    function index()
    {
        $danhsachsv = DB::table('sinhvien')->select('*')->get();
        var_dump($danhsachsv);
    }
    function findById()
    {
        $sv = DB::table('sinhvien')->first('name');
        var_dump($sv);
    }

    function sum()
    {
        $sum = DB::table('sinhvien')->sum('id');
        return $sum;
    }
    function avg()
    {
        $avg = DB::table('sinhvien')->avg('id');
        return $avg;
    }
    function max()
    {
        $max = DB::table('sinhvien')->max('id');
        return $max;
    }
    function min()
    {
        $min = DB::table('sinhvien')->min('id');
        return $min;
    }
    function count()
    {
        $count = DB::table('sinhvien')->count();
        return $count;
    }
    function onestudent(){
        
    }
}
