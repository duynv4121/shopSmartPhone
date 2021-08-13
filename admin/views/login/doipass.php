<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="col-md-9 m-auto">
        <div class="card">
            <div class="card-header bg-primary">ĐỔI MẬT KHẨU</div>
            <div class="card-body">
           
                <form class="form-horizontal" method="POST" action="../../?ctrl=login&act=xulipass">
             
                    <p> <label class="control-label">Tên đăng nhập</label>
                        <input class="form-control" name="user">
                    </p>
                    <p> <label>Mật khẩu cũ</label>
                        <input type="password" class="form-control" name="pass_old">
                    </p>
                    <p> <label>Mật khẩu mới:</label>
                        <input type="password" class="form-control" name="pass_new1">
                    </p>
                    <p><label>Gõ lại mật khẩu mới:</label>
                        <input type="password" class="form-control" name="pass_new2">
                    </p>
                    <p><button type="submit" class="btn btn-warning">Đổi mật khẩu</button></p>
                </form>
            
            </div>
        </div>
    </div>
    <?php
    ?>
</body>

</html>