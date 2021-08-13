    <?php
        foreach ($list as $row){
    ?>
<form method="post" action="?ctrl=dienthoai&act=update">
    <p><input name="TenDT" value="<?=$row['TenDT'];?>" type="text" placeholder="Tên điện thoại"></p>
    <p><input name="Gia" value="<?=$row['Gia'];?>" type="text" placeholder="Giá"></p>
    <p><input name="GiaKM" value="<?=$row['GiaKM'];?>" type="text" placeholder="Giá khuyến mãi"></p>
    <p><input name="urlHinh"  type="file" placeholder="Hình ảnh"></p>
    <p><input name="ThoiDiemNhap"  type="date" placeholder="Ngày nhập"></p>
    <textarea name="MoTa"><?=$row['MoTa'];?></textarea>
    <input type="hidden" name="idDT" value="<?=$row['idDT']?>">
    <p><button name="nutsave" type="submit"> Cập nhật </button> </p>
</form>
<?php
    }
    ?>