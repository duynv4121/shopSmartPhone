<div class="row">

<?php
    foreach($listOrder as $sp){
?>
    <img style="height:400px;" src="../admin/views/public/img/<?=$sp['urlHinh']?>" alt="" class="col-sm-5">
    <ul class="col-sm-7 mt-5 list-group" style="margin-top: 0 !important">
        <h2> <?=$sp['TenDT']?></h2>
        <h4>Thành tiền: <span style="color:red"><?= number_format($sp['Gia']);?> VNĐ</span> </h4>
        <li class="list-group-item">Tên người nhận: <?=$sp['TenNguoiNhan'];?> </li>
        <li class="list-group-item">Số điện thoại: <?=$sp['soDienThoaiNguoiNhan'];?></li>
        <li class="list-group-item">Thời gian giao hàng: <?=$sp['ThoiDiemGiaoHang'];?></li>
        <li class="list-group-item">Địa chỉ: <?=$sp['DiachiNguoiNhan'];?> </li>
        <li class="list-group-item">Số lượng: <?=$sp['SoLuong'];?> </li>
        <li class="list-group-item">Tình trạng đơn hàng: </li>
    </ul>
<?php
    }
?>
<div>

