<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    public function hienthithongtin(){
        return ("<h1>Hien thi thong tin Sinh vien</h1>");
    }
    public function hienthiten($name){
        return ("<h1>Hien thi thong tin Sinh vien $name</h1>");
    }
    public function hienthiten1($name){
        return view ('show', ['ten' => $name]);
       }
    public function hienthisinhvien(){
        $danhsachsv = DB :: table('sinhvien') -> select('*') ->get();
        var_dump($danhsachsv);
    }
}
  