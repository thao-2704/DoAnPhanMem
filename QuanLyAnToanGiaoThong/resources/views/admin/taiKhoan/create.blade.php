@extends('admin.layout_admin')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Thêm Tài Khoản</h6>
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
                    <form method="POST" action="{{route('taikhoan.store')}}" class="needs-validation" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="uname">Mã Đăng Nhập :</label>
                            <input type="text" class="form-control" value="" placeholder="Tiêu đề" name="madangnhap" required>
                            <!-- <div class="invalid-feedback">Vui lòng nhập tên bài viết.</div> -->
                        </div>
                        <div class="form-group">
                            <label for="uname">Họ Tên :</label>
                            <input type="text" class="form-control" value="" placeholder="Tiêu đề" name="hoten"required>
                            <!-- <div class="invalid-feedback">Vui lòng nhập tên bài viết.</div> -->
                        </div>
                        <div class="form-group">
                            <label for="uname">Số Điện Thoại:</label>
                            <input type="text" class="form-control" value="" placeholder="Tiêu đề" name="sdt"required>
                            <!-- <div class="invalid-feedback">Vui lòng nhập tên bài viết.</div> -->
                        </div>
                        <div class="form-group">
                            <label for="uname">Ngày Sinh:</label>
                            <input type="date" class="form-control" value="" placeholder="Tiêu đề" name="ngaysinh"required>
                            <!-- <div class="invalid-feedback">Vui lòng nhập tên bài viết.</div> -->
                        </div>
                        <div class="form-group">
                            <label for="uname">Địa Chỉ:</label>
                            <input type="text" class="form-control" value="" placeholder="Tiêu đề" name="diachi"required>
                            <!-- <div class="invalid-feedback">Vui lòng nhập tên bài viết.</div> -->
                        </div>
                        <div class="form-group">
                            <label>Đơn Vị:</label>
                            <select name="maDonVi" class="form-select">
                                @foreach ($donvi as $item)
                                <option value="{{$item->id}}">{{$item->ten}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Chức Vụ :</label>
                            <select name="maChucVu" class="form-select">
                                @foreach ($chucvu as $item)
                                <option value="{{$item->id}}">{{$item->ten}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Quyền hạn :</label>
                            <select name="quyen" class="form-select">
                                <option value="2">Quản Trị</option>
                                <option value="1">Khách</option>
                            </select>
                        </div>
                        <!-- <div class="form-group">
                            <label>Trạng thái:</label>
                            <select name="trangThai" class="form-select">
                                <option value="1">Kích hoạt</option>
                                <option value="0">Không kích hoạt</option>
                            </select>
                        </div> -->
                        <!-- <div class="form-group">
                            <label for="">Ảnh Chính:</label>
                            <input type="file" class="form-control" name="image" id="">
                            <div class="invalid-feedback">Vui lòng chọn ảnh.</div>
                        </div>                         -->
                        <!-- <div class="form-group">
                            <label for="">Bộ Sưu Tập Ảnh:</label>
                            <input type="file" class="form-control" multiple name="images[]" id="">
                            <div class="invalid-feedback">Chưa Chọn Ảnh.</div>
                        </div> -->
                        <button type="submit" class="btn btn-outline-primary btn-sm mb-0 mb-4">Thêm</button>
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