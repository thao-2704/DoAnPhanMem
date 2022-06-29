<?php

namespace App\Http\Controllers;

use App\Models\nghidinh;
use Illuminate\Http\Request;

class NghidinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nghidinh = nghidinh::orderBy('id')->paginate(5);
        return view('admin.nghidinh.index', compact('nghidinh'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nghidinh = nghidinh::orderBy('id')->paginate(5);
        return view('admin.nghidinh.create', compact('nghidinh'));
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
        $nghidinh = new nghidinh();
        $nghidinh->so = $data['so'];
        $nghidinh->ten_nghidinhen = $data['ten_nghidinhen'];
        $nghidinh->ngay_banhanh = $data['ngay_banhanh'];
        $nghidinh->coquanbanhanh = $data['coquanbanhanh'];


       
        $nghidinh->save();
        return redirect()->back()->with('status', 'Thêm Nghị Định Thành Công');
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
        $nghidinh = nghidinh::find($id)->first();
        // dd($taikhoan);
        return view('admin.nghidinh.edit', compact('nghidinh'));
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
        $nghidinh = nghidinh::find($id);
        $nghidinh->so = $data['so'];
        $nghidinh->ten_nghidinhen = $data['ten_nghidinhen'];
        $nghidinh->ngay_banhanh = $data['ngay_banhanh'];
        $nghidinh->coquanbanhanh = $data['coquanbanhanh'];
       
        $nghidinh->save();
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
        
        $nghidinh = nghidinh::find($id)->delete();
        return redirect()->back()->with('status', 'Xoá thành công!!!');
    }
}
