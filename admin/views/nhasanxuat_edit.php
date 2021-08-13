<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach($list_one as $row) { ?>
<form method="post" action="?ctrl=nhasanxuat&act=update">
    <p><input name="TenNSX" type="text" placeholder="Tên loại" value="<?= $row['TenNSX']?>" ></p>
    <p><input name="ThuTu" type="text" placeholder="Thứ tự" value="<?= $row['ThuTu']?>"></p>
    <p><input name="AnHien" type="text" placeholder="Ẩn Hiện" value="<?= $row['AnHien']?>"></p>
    <input type="hidden" name="idNSX" value="<?= $row['idNSX']?>">
    <p><button name="nutsave" type="submit"> LƯU </button> </p>
</form>
<?php }?>
</body>
</html>