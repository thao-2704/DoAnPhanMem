@extends('admin.layout_admin')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Thêm Nghị Định</h6>
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
                    <form method="POST" action="{{route('nghidinh.store')}}" class="needs-validation" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="uname">Nghị định số :</label>
                            <input type="text" class="form-control" value="" placeholder="Tiêu đề" name="so"required>
                            <!-- <div class="invalid-feedback">Vui lòng nhập tên bài viết.</div> -->
                        </div>
                        <div class="form-group">
                            <label for="uname">Tên Nghị định :</label>
                            <input type="longtext" class="form-control" value="" placeholder="Tiêu đề" name="ten_nghidinh"required>
                            <!-- <div class="invalid-feedback">Vui lòng nhập tên bài viết.</div> -->
                        </div>
                        <div class="form-group">
                            <label for="uname">Ngày ban hành :</label>
                            <input type="date" class="form-control" value="" placeholder="Tiêu đề" name="ngaybanhanh"required>
                            <!-- <div class="invalid-feedback">Vui lòng nhập tên bài viết.</div> -->
                        </div>
                        <div class="form-group">
                            <label for="uname">Cơ quan ban hành :</label>
                            <input type="longtext" class="form-control" value="" placeholder="Tiêu đề" name="coquanbanhanh"required>
                            <!-- <div class="invalid-feedback">Vui lòng nhập tên bài viết.</div> -->
                        </div>
                      
                        <button type="submit" class="btn btn-outline-primary btn-sm mb-0 mb-4">Thêm</button>
                   
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection




