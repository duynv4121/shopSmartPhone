<form method="post" action="?ctrl=dienthoai&act=store">
    <p><input name="TenDT" type="text" placeholder="Tên điện thoại"></p>
    <p><input name="Gia" type="text" placeholder="Giá"></p>
    <p><input name="GiaKM" type="text" placeholder="Giá khuyến mãi"></p>
    <p><input name="urlHinh" type="file" placeholder="Hình ảnh"></p>
    <p><input name="ThoiDiemNhap" type="date" placeholder="Ngày nhập"></p>
    <select name="idNSX" id="cars">
   <?php
    foreach ($list as $row){
    ?>
    <option name="idNSX" value="<?=$row['idNSX']?>"><?=$row['TenNSX']?></option>
    <?php
    }
    ?>
  </select>
    <textarea name="MoTa"></textarea>
    <p><button name="nutsave" type="submit"> LƯU </button> </p>
</form>