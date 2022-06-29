<?php

namespace App\Http\Controllers;

use App\Models\danhmuc;
use App\Models\nghidinh;
use Illuminate\Http\Request;

class DanhmucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhmuc = danhmuc::orderBy('id')->paginate(5);
        return view('admin.danhmuc.index', compact('danhmuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nghidinh = nghidinh::all();
        return view('admin.danhmuc.create', compact('nghidinh'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $danhmuc = new danhmuc();
        $danhmuc->ten_dm = $data['tendanhmuc'];
        $danhmuc->noidung = $data['noidung'];
        $danhmuc->idnghidinh = $data['nghidinh'];
       
        $danhmuc->save();
        return redirect()->back()->with('status', 'Tạo Danh Mục Mới Thành Công');
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
        $nghidinh = nghidinh::all();
        $danhmuc = danhmuc::find($id);
        // dd($taikhoan);
        return view('admin.danhmuc.edit', compact('nghidinh', 'danhmuc'));
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
        $data = $request->all();
        $danhmuc = danhmuc::find($id);
        $danhmuc->ten_dm = $data['ten_dm'];
        $danhmuc->noidung = $data['noidung'];
        $danhmuc->idnghidinh = $data['idnghidinh'];
        $danhmuc->save();
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
         $danhmuc = danhmuc::find($id)->delete();
        return redirect()->back()->with('status', 'Xoá thành công!!!');
    }
}
