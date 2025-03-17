<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TinTucController extends Controller
{
    public function hienthitintuc(){
        $tintuc = DB::table('tin')->select('id','Tieude','Noidung')->orderBy('Noidung','desc')->limit('5');
        $data = $tintuc -> get();
        Foreach ($data as $tin) echo "<p>{$tin->Tieude}</p>";
    }
    public function tintucmoi(){
    $tintucmoi = DB :: table('tin') -> select('id','Tieude','Noidung','Ngaydang')->orderBy('Ngaydang','desc')->limit('5');
    $data = $tintucmoi -> get();
    return view('tinmoi' ,['data'=>$data]);
    }
    public function tintucid($id){
        $tinid = DB :: table('tin') -> select('id','Tieude','Noidung','Ngaydang')->where('id', '=', $id) ->orderBy('Ngaydang','desc');
        $data = $tinid -> get();
        return view('tintrongloai' ,['data'=>$data]);
    }
    public function tinid($id){
        $tinid = DB :: table('tin') ->where('id', '=', $id) ->first();
        return view('chitiettin' ,['tin'=>$tinid]);
    }
}
