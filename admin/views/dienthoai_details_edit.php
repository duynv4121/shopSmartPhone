<form class="col-sm-9" action="?ctrl=dienthoai&act=updateDetails" method="post">

    <?php

        foreach ( $listEditDetails as $row){
    
    ?>
    <div class="form-group">
        <label for="">Màn hình</label>
        <input type="text" name="ManHinh" id="" value="<?=$row['ManHinh']?>" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Hệ điều hành</label>
        <input type="text" name="HeDieuHanh" id="" value="<?=$row['HeDieuHanh']?>" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Camera sau</label>
        <input type="text" name="CameraSau" id="" value="<?=$row['CameraSau']?>" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Camera trước</label>
        <input type="text" name="CameraTruoc" id="" value="<?=$row['CameraTruoc']?>" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">CPU</label>
        <input type="text" name="CPU" id="" value="<?=$row['CPU']?>" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Ram</label>
        <input type="text" name="RAM" id="" value="<?=$row['RAM']?>" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Bộ nhớ trong</label>
        <input type="text" name="BoNhoTrong" id="" value="<?=$row['BoNhoTrong']?>" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Thẻ sim</label>
        <input type="text" name="TheSim" id="" value="<?=$row['TheSim']?>" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Thẻ nhớ</label>
        <input type="text" name="TheNho" id="" value="<?=$row['ManHinh']?>" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Dung lượng pin</label>
        <input type="text" name="DungLuongPin" id="" value="<?=$row['DungLuongPin']?>" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <input type="hidden" name="idDT" value="<?=$row['idDT']?>">
    <button type="submit" name="update" class="btn btn-primary">Cập nhật</button>
<?php
    }
?>
</form>