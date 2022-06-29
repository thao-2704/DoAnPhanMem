@extends('admin.layout_admin')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Sửa Danh Mục</h6>
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
                    <form method="POST" action="{{route('danhmuc.update',[$danhmuc->id])}}" class="needs-validation" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="uname">Tên Danh Mục :</label>
                            <input type="text" class="form-control" value="{{$danhmuc->ten_dm}}" placeholder="Tiêu đề" name="ten_dm" required>
                        </div>
                        <div class="form-group">
                            <label for="uname">Nội Dung :</label>
                            <input type="text" class="form-control" value="{{$danhmuc->noidung}}" placeholder="Tiêu đề" name="noidung" required>
                        </div>
                        <div class="form-group">
                            <label>Nghị định:</label>
                            <select name="idnghidinh" class="form-select">
                                @foreach($nghidinh as $item)
                                <option {{$danhmuc->idnghidinh == $item->id ? 'selected' :''}} value ="{{$item->id}}">{{$item->so}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-outline-primary btn-sm mb-0 mb-4">Cập Nhật</button>
                        <a href="{{route('danhmuc.index',[$item->id])}}" class="btn btn-link  mx-n2 mb-0">
                                            <i class="btn btn-outline-primary btn-sm mb-0 mb-4">Xem </i>
                                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>


@endsection