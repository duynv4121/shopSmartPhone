
            <table class="table col-sm-9">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Họ tên</th>
                        <th>Username</th>
                        <th>Hình</th>
                        <th>Email</th>
                        <th>EDIT</th>
                        <th>XÓA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($list==NULL) 
                        echo "Chưa có dữ liệu";
                        else
                            foreach ($list as $row){
                        ?>
                    <tr>
                        <td>
                            <?= $row['idUser']?>
                        </td>
                        <td>
                            <?= $row['HoTen']?>
                        </td>
                        <td>
                            <?= $row['Username']?>
                        </td>
                        <td><img style="height: 50px; width: 50px;"
                                src="../../banhang/admin/views/public/img/<?= $row['urlHinh']?>" alt=""></td>
                        <td>
                            <?= $row['Email']?>
                        </td>
                        <td><a href="?ctrl=users&act=edit&idUser=<?=$row['idUser']?>">EDIT</a></td>
                        <td><a href="?ctrl=users&act=delete&idUser=<?=$row['idUser']?>" onclick="alert('Bạn có chắc muốn xóa')">XÓA</a></td>

                    </tr>
                    <?php
                        }               
                    ?>
                </tbody>
            </table>
