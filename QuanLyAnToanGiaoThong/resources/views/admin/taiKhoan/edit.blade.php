@extends('admin.layout_admin')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Sửa Tài Khoản</h6>
                        </div>
                    </div>
                </div>
                {{-- error --}}
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="container">
                    <form method="POST" action="{{route('taikhoan.update',[$taikhoan->maTaiKhoan])}}" class="needs-validation" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="uname">Mã Đăng Nhập :</label>
                            <input type="text" class="form-control" value="{{$taikhoan->madangnhap}}" placeholder="Tiêu đề" name="madangnhap" required>
                        </div>
                        <div class="form-group">
                            <label for="uname">Họ Tên :</label>
                            <input type="text" class="form-control" value="{{$taikhoan->hoten}}" placeholder="Tiêu đề" name="hoten" required>
                        </div>
                        <div class="form-group">
                            <label for="uname">Số Điện Thoại:</label>
                            <input type="text" class="form-control" value="{{$taikhoan->sodienthoai}}" placeholder="Tiêu đề" name="sdt" required>
                        </div>
                        <div class="form-group">
                            <label for="uname">Ngày Sinh:</label>
                            <input type="date" class="form-control" value="{{$taikhoan->ngaysinh}}" placeholder="Tiêu đề" name="ngaysinh" required>
                        </div>
                        <div class="form-group">
                            <label for="uname">Địa Chỉ:</label>
                            <input type="text" class="form-control" value="{{$taikhoan->diachi}}" placeholder="Tiêu đề" name="diachi" required>
                        </div>
                        <div class="form-group">
                            <label>Đơn Vị:</label>
                            <select name="maDonVi" class="form-select">
                                @foreach($donvi as $item)
                                <option {{$taikhoan->iddonvi == $item->id ? 'selected' :''}} value ="{{$item->id}}">{{$item->ten}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Chức Vụ :</label>
                            <select name="maChucVu" class="form-select">
                                @foreach($chucvu as $item)
                                <option {{$taikhoan->idchucvu == $item->id ? 'selected' :''}} value ="{{$item->id}}">{{$item->ten}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-outline-primary btn-sm mb-0 mb-4">Cập Nhật</button>
                        <a href="{{route('taikhoan.index',[$item->maTaiKhoan])}}" class="btn btn-link  mx-n2 mb-0">
                                            <i class="btn btn-outline-primary btn-sm mb-0 mb-4">Xem </i>
                                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>


@endsection