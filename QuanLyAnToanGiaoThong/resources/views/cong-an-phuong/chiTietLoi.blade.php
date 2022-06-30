@extends('layout')
@section('content')
<section class="main-content">
    <div class="pageTitle">Cảnh báo vi phạm</div>
    <div class="content">
        <div class="text">Cảnh báo vi phạm vượt đèn đỏ</div>
        <div class="table-section">
        <table style="text-align: center;">                
            <tr>
                <td>Hình ảnh</td>
                <td>Biển kiểm soát</td>                    
            </tr> 
            
            <tr>
                <td><img src="{{$canhCaos[1]->hinhAnh}}"></td>
                <td>{{$canhCaos[1]->bienSo}}</td>                    
            </tr>  
            
                                             
        </table>
        
            <button style="height:50px;width:130px; margin-top: 20px; background: #ffc300; border: 0;"><a href="{{URL::to('/cong-an-phuong/tao-canh-cao')}}">Tạo</a></button>
        </div>

    </div>
    
</section>
@endsection
