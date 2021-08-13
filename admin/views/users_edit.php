<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach($list_one as $row) { ?>
<form method="post" action="?ctrl=users&act=update">
    <p><input name="Username" type="text" placeholder="Username"  value="<?= $row['Username']?>"></p>
    <p><input name="HoTen" type="text" placeholder="Họ Tên"  value="<?= $row['HoTen']?>"></p>
    <p><input name="urlHinh" type="file"  value="<?= $row['Username']?>"></p>
    <p><input name="email" type="text" placeholder="Email" value="<?= $row['Email']?>"></p>
    <input type="hidden" name="idUser" value="<?= $row['idUser']?>">
    <p><button name="nutsave" type="submit"> LƯU </button> </p>
</form>
<?php }?>
</body>
</html>