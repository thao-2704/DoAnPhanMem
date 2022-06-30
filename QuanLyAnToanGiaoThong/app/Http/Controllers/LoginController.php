<?php

namespace App\Http\Controllers;

use App\Models\chucvu;
use App\Models\taikhoan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function postLogin(Request $request, Response $response)
    {

        $rule = [
            'name' => 'required',
            'password' => 'required'
        ];
        $message = [
            'name.required' => 'Vui lòng nhập mã đăng nhập',
            'password.required' => 'Vui lòng nhập mật khẩu',
        ];
        $validator = Validator::make($request->all(), $rule, $message);
        if ($validator->failed()) {
            return view('error');
        } else {
            $userName = $request->input('name');
            $password = $request->input('password');

            $findUser = taikhoan::where('maDangNhap', $userName)->where('matkhau', md5($password))->first();
            if ($findUser) {
                $id = $findUser->maTaiKhoan;
                $name = $findUser->hoten;
                $chucvu = chucvu::where('id', $findUser->idchucvu)->first();
                if ($chucvu->ten == 'Cán bộ Cảnh sát giao thông') {
                    return redirect()->route('csgt', [$id]);
                } else if ($chucvu->ten == 'Đội trưởng') {
                    return 'UI for Đội trưởng';
                } else if ($chucvu->ten == 'Admin')
                    return redirect('/taikhoan');
                else {
                    return redirect('/home');
                }
            }
            return redirect()->back();
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'hello';
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ('');
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
