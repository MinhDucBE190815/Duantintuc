<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinController extends Controller
{
    function index()
    {
        return view("home");
    }
    function chitiet($id)
    {
        $chitiet = DB::table('tin')
            ->where('id', $id)
            ->first();
        $data = ['id' => $id, 'chitiet' => $chitiet];
        return view("chitiet", $data);
    }
    function tintrongloai($idLT)
    {
        $tinloai = DB::table('tin')
            ->join('loaitin', 'tin.Loaiid', '=', 'loaitin.id') 
            ->where('tin.Loaiid', $idLT)
            ->get(['tin.id', 'tin.Tieude', 'tin.Tomtat', 'tin.Noidung', 'loaitin.tenloai']);
    
        $data = ['id' => $idLT, 'tinloai' => $tinloai];
        return view("tintrongloai", $data);
    }

    


}
