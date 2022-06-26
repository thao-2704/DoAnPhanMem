<?php

namespace App\Http\Controllers;

use App\Models\chucvu;
use Illuminate\Http\Request;

class ChucvuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chucvu = chucvu::orderBy('id')->paginate(5);
        return view('admin.chucvu.index', compact('chucvu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chucvu = chucvu::orderBy('id')->paginate(5);
        return view('admin.chucvu.create', compact('chucvu'));
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
          $chucvu = new chucvu();
          $chucvu->ten = $data['tenchucvu'];
          $chucvu->mota = $data['mota'];
         
          $chucvu->save();
          return redirect()->back()->with('status', 'Thêm Chức vụ Thành Công');
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
        $chucvu = chucvu::find($id)->first();
        // dd($taikhoan);
        return view('admin.chucvu.edit', compact('chucvu'));
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
         $chucvu = chucvu::find($id);
         $chucvu->ten = $data['tenchucvu'];
         $chucvu->mota = $data['mota'];
        
         $chucvu->save();
         return redirect()->back()->with('status', 'Cập Nhật Thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chucvu = chucvu::find($id)->delete();
        return redirect()->back()->with('status', 'Xoá thành công!!!');
    }
}
