<div class="col-sm-9">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Màn hình</th>
                        <th>HDH</th>
                        <th>Camera sau</th>
                        <th>Camera trước</th>
                        <th>CPU</th>
                        <th>RAM</th>
                        <th>ROM</th>
                        <th>Thẻ nhớ</th>
                        <th>Thẻ Sim</th>
                        <th>Pin</th>
                        <th>Edit</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody><?php
                    if ($listDetail==NULL) 
                        echo "Chưa có dữ liệu";
                        else
                            foreach ($listDetail as $row){
                        ?>
                    <tr>
                        <th><?= $row['idDT']?></th>
                        <th><?= $row['ManHinh']?></th>
                        <th><?= $row['HeDieuHanh']?></th>
                        <th><?= $row['CameraSau']?></th>
                        <th><?= $row['CameraTruoc']?></th>
                        <th><?= $row['CPU']?></th>
                        <th><?= $row['RAM']?></th>
                        <th><?= $row['BoNhoTrong']?></th>
                        <th><?= $row['TheNho']?></th>
                        <th><?= $row['TheSim']?></th>
                        <th><?= $row['DungLuongPin']?></th>
                        <th><a href="?ctrl=dienthoai&act=editDetails&idDT=<?=$row['idDT']?>">EDIT</a></th>
                        <th><a href="?ctrl=dienthoai&act=deleteDetails&idDT=<?=$row['idDT']?>" onclick="alert('Bạn có chắc muốn xóa')">XÓA</a></th>
                        
                    </tr>
                    <?php
                        }               
                    ?>
                </tbody>
            </table>
        </div>