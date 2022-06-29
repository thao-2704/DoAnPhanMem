<?php

namespace App\Http\Controllers;

use App\Models\donvi;
use Illuminate\Http\Request;

class DonviController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donvi = donvi::orderBy('id')->paginate(5);
        return view('admin.donvi.index', compact('donvi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $donvi = donvi::orderBy('id')->paginate(5);
        return view('admin.donvi.create', compact('donvi'));
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
        $donvi = new donvi();
        $donvi->ten = $data['ten'];
        $donvi->cap = $data['cap'];
       
        $donvi->save();
        return redirect()->back()->with('status', 'Thêm Đơn Vị Thành Công');
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
        $donvi = donvi::find($id);
        // dd($taikhoan);
        return view('admin.donvi.edit', compact('donvi'));
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
        $donvi = donvi::find($id);
        $donvi->ten = $data['ten'];
        $donvi->cap = $data['cap'];
       
        $donvi->save();
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
        
        $donvi = donvi::find($id)->delete();
        return redirect()->back()->with('status', 'Xoá thành công!!!');
    }
}
