@extends('layout')
@section('content')
<section class="menu-section">
    <a href="{{URL::to('/cong-an-phuong/xem-thong-bao')}}" class="menu">
        <div class="menu-icon"><i class="fa-solid fa-clock"></i></div>
        <p class="menu-title">Thông báo</p>
    </a>
    <a href="{{URL::to('/cong-an-phuong/danh-sach-vi-pham')}}" class="menu">
        <div class="menu-icon"><i class="fa-solid fa-stamp"></i></div>
        <p class="menu-title">Tạo thông báo<br>vi phạm</p>
    </a>
</section>
@endsection