<?php

namespace App\Http\Controllers;

use App\Models\taikhoan;
use App\Http\Requests\StoretaikhoanRequest;
use App\Http\Requests\UpdatetaikhoanRequest;

class TaikhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoretaikhoanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretaikhoanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\taikhoan  $taikhoan
     * @return \Illuminate\Http\Response
     */
    public function show(taikhoan $taikhoan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\taikhoan  $taikhoan
     * @return \Illuminate\Http\Response
     */
    public function edit(taikhoan $taikhoan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetaikhoanRequest  $request
     * @param  \App\Models\taikhoan  $taikhoan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetaikhoanRequest $request, taikhoan $taikhoan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\taikhoan  $taikhoan
     * @return \Illuminate\Http\Response
     */
    public function destroy(taikhoan $taikhoan)
    {
        //
    }
}
