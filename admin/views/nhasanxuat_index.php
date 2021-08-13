        <div class="col-sm-9">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên nhà sản xuất</th>
                        <th>Danh sách điện thoại</th>
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
                        <th><?= $row['idNSX']?></th>
                        <th><?= $row['TenNSX']?></th>
                        <th><a href="?ctrl=dienthoai&act=listPro&idNSX=<?=$row['idNSX']?>">XEM DANH SÁCH</a></th>
                        <th><a href="?ctrl=nhasanxuat&act=edit&idNSX=<?=$row['idNSX']?>">EDIT</a></th>
                        <th><a href="?ctrl=nhasanxuat&act=delete&idNSX=<?=$row['idNSX']?>" onclick="alert('Bạn có chắc muốn xóa')">XÓA</a></th>
                        
                    </tr>
                    <?php
                        }               
                    ?>
                </tbody>
            </table>
        </div>