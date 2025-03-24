<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TinTucController extends Controller
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
    function footer()
    {
        return view("footer");
    }
    function menu()
    {
        $menu = DB::table('loaitin')
            ->select('id', 'tenloai')
            ->orderBy('id', 'asc')
            ->where('id', '>', 0)
            ->limit(5)
            ->get();

        // Chia sẻ $menu cho tất cả các view
        return view('menu', $menu);

    }

    public function tangLuotXem($id)
    {
        // Kiểm tra bài viết có tồn tại không
        $baiViet = DB::table('tin')->where('id', $id)->first();

        if ($baiViet) {
            // Tăng lượt xem lên 1
            DB::table('tin')->where('id', $id)->increment('Luotxem');

            return response()->json(['message' => 'Lượt xem đã được cập nhật']);
        }

        return response()->json(['message' => 'Bài viết không tồn tại'], 404);
    }
    public function topBaiViet()
    {
        $baiVietTop = DB::table('tin')
            ->orderBy('Luotxem', 'desc')
            ->limit(10)
            ->get();
        dump($baiVietTop);
        return view('topbaiviet', compact('baiVietTop'));

    }
    public function baivietmoi()
    {
      $baivietmoi = DB::table('tin')->orderBy('Ngaydang', 'desc')->get();
      dump($baivietmoi);
      return view('baivietmoi', compact('baivietmoi'));

    }
}
