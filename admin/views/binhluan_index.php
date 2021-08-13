<div class="col-sm-9">
            <table class="table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh</th>
                        <th>Thời gian</th>
                        <th>Số bình luận</th>
                        <th>Chi tiết</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody><?php
                $stt=1;   
                    if ($list==NULL) 
                        echo "Chưa có dữ liệu";
                        else
                            foreach ($list as $row){
                        ?>
                    <tr>
                        <th><?=$stt++;?></th>
                        <th><?= $row['TenDT']?></th>
                        <th><?= $row['urlHinh']?></th>
                        <th><?= $row['ThoiDiemBL']?></th>
                    
                        <th><a href="?ctrl=dienthoai&act=listPro&idNSX=<?=$row['idNSX']?>">Chi tiết</a></th>
                        <th><a href="?ctrl=binhluan&act=delete&idBL=<?=$row['idBl']?>" onclick="alert('Bạn có chắc muốn xóa')">XÓA</a></th>
                        
                    </tr>
                    <?php
                        }               
                    ?>
                </tbody>
            </table>
        </div>