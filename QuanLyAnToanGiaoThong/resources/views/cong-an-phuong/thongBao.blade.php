@extends('layout')
@section('content')
<section class="main-content">
    <div class="pageTitle">Xem thông báo</div>
    <div class="table-section">
        <a href="{{URL::to('/cong-an-phuong/xem-thong-tin')}}">
            <table class="listThongBao">
            @foreach ($thongBaos as $thongBao)
                    <tr>
                        <th>{{$thongBao->thoiGian}}</th>
                        <th>{{$thongBao->noiDung}}</th>
                    </tr>
            @endforeach 
        </table >    
        </a>
        </div>
        
       <div class="load-more">
        
    </div>
    
</section>
@endsection