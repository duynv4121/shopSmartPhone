<table class="table col-sm-9">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên điện thoại</th>
            <th>Ảnh</th>
            <th>Thêm thuộc tính</th>
            <th>Chi tiết</th>
            <th>Edit</th>
            <th>Xóa</th>
        </tr>
    </thead>
    <tbody><?php
                    if ($list==NULL) 
                        echo "Chưa có dữ liệu";
                        else
                            foreach ($list as $row){
                        ?>
        <tr>
            <th><?= $row['idDT']?></th>
            <th><?= $row['TenDT']?></th>
            <th><img style="height: 50px; width: 50px;" src="../../banhang/admin/views/public/img/<?= $row['urlHinh']?>"
                    alt=""></th>
            <th><a href="?ctrl=dienthoai&act=addNewDetails&idDT=<?=$row['idDT']?>">THÊM THUỘC TÍNH</a></th>
            <th><a href="?ctrl=dienthoai&act=details&idDT=<?=$row['idDT']?>">CHI TIẾT</a></th>
            <th><a href="?ctrl=dienthoai&act=edit&idDT=<?=$row['idDT']?>">EDIT</a></th>
            <th><a href="?ctrl=dienthoai&act=delete&idDT=<?=$row['idDT']?>"
                    onclick="alert('Bạn có chắc muốn xóa')">XÓA</a></th>
        </tr>
        <?php
                        }               
                    ?>
</table>