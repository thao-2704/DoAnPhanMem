@extends('admin.layout_admin')
@section('content')
<div class="container-fluid py-4">

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Danh mục xử phạt</h6>
                        </div>
                        <div class="col-6 text-end">
                            <a href="{{route('danhmuc.create')}}" class="btn btn-outline-primary btn-sm mb-0">Tạo Danh Mục</a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STT</th>  
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên Danh Mục</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nội Dung</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nghị Định</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" colspan="2">Thao Tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($danhmuc as $key => $item)
                                <tr>
                                    <td>
                                        <p class="text-xs ms-sm-3 font-weight-bold mb-0">{{$key + 1}}</p>
                                    </td>
                                    <td><p class="text-xs ms-sm-3 font-weight-bold mb-0">{{$item->ten_dm}}</p></td>
                                    <td><p class="text-xs ms-sm-3 font-weight-bold mb-0">{{$item->noidung}}</p></td>
                                    <td><p class="text-xs ms-sm-3 font-weight-bold mb-0">{{$item->nghidinh->so}}</p></td>
                                    <td>
                                        <form class="float-start mt-2" action="{{route('danhmuc.destroy',[$item->id])}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button href="" class="btn  btn-link text-danger text-gradient px-3 mb-0 m-sm-n3">
                                                <i class="far fa-trash-alt me-2"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                    <a href="{{route('danhmuc.edit',[$item->id])}}" class="btn btn-link text-dark px-3 mx-n2 mb-0">
                                            <i class="fas fa-pencil-alt text-dark me-2"></i>
                                        </a>
                                        <!-- <a href="{{route('taikhoan.index',[$item->maTaiKhoan])}}" class="btn btn-link  mx-n2 mb-0">
                                            <i class="fas fa-eye text-primary me-2"></i>
                                        </a> -->
                                    </td>
                                    @endforeach
                                </tr>
                                
                            </tbody>
                        </table>
                        <div class="p-2">
                            {{$danhmuc->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection