@extends('layout')
@section('content')
<section class="main-content">
    <div class="pageTitle">Cảnh báo vi phạm</div>
    <div class="content">
       <div class="text">THÔNG BÁO VI PHẠM HÀNH CHÍNH AN TOÀN GIAO THÔNG ĐƯỜNG BỘ</div>
       <hr style="background: #ffc300;">
       <form action="" method="post">
            <div class="infomation" >
                <div class="inf" >
                     <label>Kính gửi</label>
                     <input type="text" name="kinhGui" placeholder="Kính gửi">
                </div>
                <div class="inf" style="margin: auto;">
                     <label>Thời gian</label>
                     <input type="text" name="thoiGian" placeholder="Thời gian">
                </div>
                <div class="inf" style="margin: auto;">
                     <label>Địa điểm</label>
                     <input type="text" name="diaDiem" placeholder="Địa điểm">
                </div>
            </div>
            <div class="infomation" >
                <div class="inf" >
                     <label>Sử dụng phương tiện, thiết bị</label>
                     <input type="text" name="phuongTienThietBi" placeholder="Phương tiện, thiết bị">
                </div>
                <div class="inf" style="margin: auto;">
                     <label>Của đơn vị</label>
                     <input type="text" name="donVi" placeholder="Đơn vị">
                </div>
            </div>
            <label > <b>Công an quận Thanh Khê đã phát hiện</b></label>
            <div class="infomation" >
                <div class="inf" >
                     <label>Phương tiện giao thông</label>
                     <p ><b style="color: red">{{$canhCaos[0]->bienSo}}</b></p>
                </div>
                <div class="inf" style="margin: auto;">
                     <label>Chủ phương tiện</label>
                     <input type="text" name="chuPhuongTien" placeholder="Chủ phương tiện">
                </div>
            </div>
            <div class="infomation" >
                <div class="inf" >
                     <label>Địa chỉ</label>
                     <input type="text" name="diaChi" placeholder="Địa chỉ">
                </div>
                <div class="inf" style="margin: auto;">
                     <label>Phường</label>
                     <input type="text" name="phuong" placeholder="Phường">
                </div>
                <div class="inf" style="margin: auto;">
                     <label>Quận</label>
                     <input type="text" name="quan" placeholder="Quận">
                </div>
            </div>
            <label > <b>Có hành vi vi phạm</b></label>
            <p ><b style="color: red">{{$canhCaos[0]->noiDung}}</b></p>
            <div class="infomation" >
                <div class="inf" >
                     <label>Được quy định tại</label>
                </div>
                <div class="inf" style="margin: auto;">
                     <label>Nghị định</label>
                     <input type="text" name="nghiDinh" placeholder="Nghị định">
                </div>
                <div class="inf" style="margin: auto;">
                     <label>Ngày</label>
                     <input type="text" name="ngayNghiDinh" placeholder="Ngày">
                </div>
             </div>
             <label > <b>của Chính phủ quy định xử phạt vi phạm hành chính trong lĩnh vực giao thông đường bộ và đường sắt</b></label>
             <label > <b>Biện pháp được áp dụng</b></label>
             <textarea class="action" style="width: 90%; height: 30%; margin: auto;"></textarea>
             <label > <b><br>Yêu cầu chủ phương tiện hoặc đại diện tổ chức vi phạm, người điều khiển phương tiện giao thông thực hiện hành vi vi phạm</b></label>

             <div class="infomation" >
                <div class="inf" >
                     <label>Giờ</label>
                     <input type="text" name="gio" placeholder="Giờ">
                </div>
                <div class="inf" style="margin: auto;">
                     <label>Phút</label>
                     <input type="text" name="phut" placeholder="Phút">
                </div>
                <div class="inf" style="margin: auto;">
                     <label>Ngày</label>
                     <input type="text" name="ngay" placeholder="Ngày">
                </div>
            </div>
            
       </form>
       <label>có mặt tại trụ sở Công an quận Thanh Khê để giải quyết vụ việc vi phạm theo quy định của pháp luật.<br></label>
       <button type="" style="width: 10%; height: ;4%; margin: auto">In</button>
     </div>
    
    
</section>
@endsection