<?php

namespace App\Http\Controllers;
use App\Models\TinTucModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Tin;

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
    function admin(){
        return view("layoutadmin");
    }
    public function quanly()
    {
        $tinList = TinTucModel::orderBy('Ngaydang', 'desc')->get();
        return view('quanly', compact('tinList'));
    }

    public function create()
    {
        return view('themtin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Tieude' => 'required',
            'Noidung' => 'required',
            'Tomtat' => 'required',
            'Ngaydang' => 'required|date',
            'Loaiid' => 'required|integer',
        ]);

        TinTucModel::create($request->all());

        return redirect()->route('quanly')->with('success', 'Thêm tin thành công!');
    }

    public function edit($id)
    {
        $tin = TinTucModel::findOrFail($id);
        return view('suatin', compact('tin'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Tieude' => 'required',
            'Noidung' => 'required',
            'Tomtat' => 'required',
            'Ngaydang' => 'required|date',
            'Loaiid' => 'required|integer',
        ]);

        $tin = TinTucModel::findOrFail($id);
        $tin->update($request->all());

        return redirect()->route('quanly')->with('success', 'Cập nhật tin thành công!');
    }

    public function destroy($id)
    {
        TinTucModel::destroy($id);

        return redirect()->route('quanly')->with('success', 'Xóa tin thành công!');
    }
    public function dashboard()
    {
        // Lấy tổng số lượng tin
        $totalTin = DB::table('tin')->count();

        // Lấy danh sách tin có nhiều lượt xem (giới hạn 5 tin)
        $topTin = DB::table('tin')
            ->orderBy('Luotxem', 'desc')
            ->limit(5)
            ->get();

        return view('dashboard', compact('totalTin', 'topTin'));
    }
}
