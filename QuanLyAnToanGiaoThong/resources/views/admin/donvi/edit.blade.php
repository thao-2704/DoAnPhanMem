@extends('admin.layout_admin')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Cập Nhật Đơn Vị</h6>
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
                    <form method="POST" action="{{route('donvi.update',[$donvi->id])}}" class="needs-validation" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="uname">Tên Chức Vụ :</label>
                            <input type="text" class="form-control" value="{{$donvi->ten}}" placeholder="Tiêu đề" name="tendonvi" required>
                        </div>
                        <div class="form-group">
                            <label for="uname">Mô Tả :</label>
                            <input type="text" class="form-control" value="{{$donvi->cap}}" placeholder="Tiêu đề" name="cap" required>
                        </div>
                      
                        
                        <button type="submit" class="btn btn-outline-primary btn-sm mb-0 mb-4">Cập Nhật</button>
                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection