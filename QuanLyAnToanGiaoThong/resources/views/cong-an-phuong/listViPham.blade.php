@extends('layout')
@section('content')
<section class="main-content">
    <div class="pageTitle">Cảnh báo vi phạm</div>
    <table class="tblListThongBao" style="margin-top:20px;margin-bottom:   20px;">
 
            @foreach ($canhCaos as $canhCao)
                    <tr>
                        <td>{{$canhCao->noiDung}}</td>
                        <td><button class="btnCreate"><a href="{{URL::to('/cong-an-phuong/chi-tiet-loi')}}">Tạo</a></button></td>
                    </tr>
            @endforeach 
                                

                     
    </table>
    <div class="load-more">
        <button class="btn btn-animation" style="margin-top: 20px;">Tải thêm <i class="fa-solid fa-angles-down"></i></button>
    </div>
</section>
@endsection