<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TinTucController extends Controller
{
    function joinTable(){
        $dstt = DB::table('tin')->join('loaitin', 'tin.id', '=', 'loaitin.id') ->get(['tin.id', 'tin.Tieude', 'loaitin.Tenloai']);
            var_dump($dstt);
    }
    function themmoi(){
        DB :: table ('loaitin')-> insert(['Tenloai' => 'An Sinh', 'id'=> 4, 'Hinhanh'=> 'An Sinh.jpg']);
        return'Them moi thanh cong';
    }
    function update($id){
        DB :: table('loaitin')->where('id', '=', $id)->update(['Hinhanh' =>'hinhanhmacdinh.jpg']);
        return 'Update thanh cong';

    }
    function delete ($id){
    DB :: table('loaitin')->where('id', '=', $id)->delete();
    return 'Xoa thanh cong';
    }
}
