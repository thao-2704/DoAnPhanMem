<?php

namespace App\Http\Controllers;

use App\Models\chucvu;
use App\Models\donvi;
use App\Models\taikhoan;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = taikhoan::orderBy('maTaiKhoan')->paginate(5);
        return view('admin.taiKhoan.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $donvi = donvi::all();
        $chucvu = chucvu::all();
        return view('admin.taiKhoan.create', compact('donvi', 'chucvu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $taikhoan = new taikhoan();
        $taikhoan->hoten = $data['hoten'];
        $taikhoan->ngaysinh = $data['ngaysinh'];
        $taikhoan->madangnhap = $data['madangnhap'];
        $taikhoan->diachi = $data['diachi'];
        $taikhoan->iddonvi = $data['maDonVi'];
        $taikhoan->idchucvu = $data['maChucVu'];
        $taikhoan->matkhau = md5('123456');
        $taikhoan->sodienthoai = $data['sdt'];
        $taikhoan->save();
        return redirect()->back()->with('status', 'Tạo Tài Khoản Thành Công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $donvi = donvi::all();
        $chucvu = chucvu::all();
        $taikhoan = taikhoan::find($id)->first();
        // dd($taikhoan);
        return view('admin.taiKhoan.edit', compact('donvi', 'chucvu', 'taikhoan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->all();
        $taikhoan = taikhoan::find($id);
        $taikhoan->hoten = $data['hoten'];
        $taikhoan->ngaysinh = $data['ngaysinh'];
        $taikhoan->madangnhap = $data['madangnhap'];
        $taikhoan->diachi = $data['diachi'];
        $taikhoan->iddonvi = $data['maDonVi'];
        $taikhoan->idchucvu = $data['maChucVu'];
        $taikhoan->matkhau = md5('123456');
        $taikhoan->sodienthoai = $data['sdt'];
        $taikhoan->save();
        Return redirect()->back()->with('status', 'Cập Nhật Thành Công!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taikhoan = taikhoan::find($id)->delete();
        return redirect()->back()->with('status', 'Xoá thành công!!!');
    }
}
