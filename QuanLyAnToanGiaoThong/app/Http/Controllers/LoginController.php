<?php

namespace App\Http\Controllers;

use App\Models\taikhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Session;

class LoginController extends Controller
{
    public function postLogin(Request $request)
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
            // return redirect('/')->withErrors($validator)->withInput();
            return 'vc failded nha';
        } else {
            $userName = $request->input('name');
            $password = $request->input('password');

            // $findUser = taikhoan::orderBy('madangnhap')->first();
            $findUser = taikhoan::where('maDangNhap', $userName)->where('matkhau', md5($password))->first();
            if ($findUser) {
                if ($findUser->quyen == 1)
                    return redirect('/home');
                else {
                    return redirect('/taikhoan');
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
