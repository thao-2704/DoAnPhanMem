<?php

namespace App\Http\Controllers;
use App\Models\taikhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CsgtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('canh-sat-giao-thong.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    public function show($id)
    {
        $findUser = taikhoan::where('maTaiKhoan', $id)->first();
        return view('canh-sat-giao-thong.index', ['id' => $id, 'name' => $findUser->hoten]);
    }
    public function showHistory($id)
    {
        $findUser = taikhoan::where('maTaiKhoan', $id)->first();
        return view('canh-sat-giao-thong.lich-su-menu', ['id' => $id, 'name' => $findUser->hoten]);
    }
    public function showDocumentHistory($id)
    {
        $findUser = taikhoan::where('maTaiKhoan', $id)->first();
        return view('canh-sat-giao-thong.lich-su-van-ban', ['id' => $id, 'name' => $findUser->hoten]);
    }
    public function showHandledHistory($id)
    {
        $findUser = taikhoan::where('maTaiKhoan', $id)->first();
        return view('canh-sat-giao-thong.lich-su-xu-li-vi-pham', ['id' => $id, 'name' => $findUser->hoten]);
    }
    public function showHandleView($id) 
    {
        $findUser = taikhoan::where('maTaiKhoan', $id)->first();
        return view('canh-sat-giao-thong.xu-ly-vi-pham-menu', ['id' => $id, 'name' => $findUser->hoten]);
    }
    public function showHandlingView($id) 
    {
        $findUser = taikhoan::where('maTaiKhoan', $id)->first();
        return view('canh-sat-giao-thong.vi-pham-dang-xu-ly', ['id' => $id, 'name' => $findUser->hoten]);
    }
    public function showNewHandlingView($id) 
    {
        $findUser = taikhoan::where('maTaiKhoan', $id)->first();
        return view('canh-sat-giao-thong.xu-ly-vi-pham-tao-moi', ['id' => $id, 'name' => $findUser->hoten]);
    }
    public function showSearchView($id) 
    {
        $findUser = taikhoan::where('maTaiKhoan', $id)->first();
        return view('canh-sat-giao-thong.tra-cuu', ['id' => $id, 'name' => $findUser->hoten]);
    }
    
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
