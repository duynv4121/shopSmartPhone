<div class="row">
    <img style="height:400px;" src="../admin/views/public/img/<?=$sp['urlHinh']?>" alt="" class="col-sm-5">
    <ul class="col-sm-7 mt-5 list-group" style="margin-top: 0 !important">
        <h2> <?=$sp['TenDT']?></h2>
        <h4>Giá khuyến mãi: <span style="color:red"><?= number_format($sp['GiaKM']);?> VNĐ</span> </h4>
        <li class="list-group-item">Giá gốc: <h5 style="text-decoration: line-through;"><?= number_format($sp['Gia']);?>
                VNĐ</h5>
        </li>
        <li class="list-group-item">Màn hình: <?=$thuoctinh['ManHinh'];?> </li>
        <li class="list-group-item">Hệ điều hành: <?=$thuoctinh['HeDieuHanh'];?></li>
        <li class="list-group-item">Camera sau: <?=$thuoctinh['CameraTruoc'];?></li>
        <li class="list-group-item">Camera trước: <?=$thuoctinh['CameraSau'];?> </li>
        <li class="list-group-item">RAM: <?=$thuoctinh['RAM'];?> </li>
        <li class="list-group-item">CPU: <?=$thuoctinh['CPU'];?> </li>
        <li class="list-group-item">Bộ nhớ trong: <?=$thuoctinh['BoNhoTrong'];?> </li>
        <li class="list-group-item">Thẻ Sim: <?=$thuoctinh['TheSim'];?> </li>
        <li class="list-group-item">Thẻ nhớ: <?=$thuoctinh['TheNho'];?> </li>
        <li class="list-group-item">Dung lượng pin: <?=$thuoctinh['DungLuongPin'];?> </li>
        <div class="mt-2">
            <button class="btn btn-warning">Đặt hàng</button>
            <button class="btn btn-success "><a class="text-dark" href="<?="?act=cart&what=add&id=".$sp['idDT']?>"> Chọn </a></button>
        </div>
    </ul>
    <h3>Mô tả</h3>
    <p style="font-weight:600; font-size:18px"><?=$sp['MoTa']?></p>
    <form action="?act=comment" method="post" name="contact-form">
    <input type="hidden" name="id" value="<?= $sp['idDT']?>">
        <textarea style="resize:none" placeholder="Ý kiến của bạn về sản phẩm..." class="col-sm-12" name="comment" id="" cols="30" rows="5"></textarea>
        <button  type="submit" name="binhluan" class="btn btn-success mt-1">Bình luận</button>
    </form>

   

<div>