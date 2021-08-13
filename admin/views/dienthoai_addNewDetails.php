<form class="col-sm-9" action="?ctrl=dienthoai&act=addDetails" method="post">

    <div class="form-group">
        <label for="">Màn hình</label>
        <input type="text" name="ManHinh" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Hệ điều hành</label>
        <input type="text" name="HeDieuHanh" id=""  class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Camera sau</label>
        <input type="text" name="CameraSau" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Camera trước</label>
        <input type="text" name="CameraTruoc" id=""  class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">CPU</label>
        <input type="text" name="CPU" id=""  class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Ram</label>
        <input type="text" name="RAM" id=""  class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Bộ nhớ trong</label>
        <input type="text" name="BoNhoTrong" id=""  class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Thẻ sim</label>
        <input type="text" name="TheSim" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Thẻ nhớ</label>
        <input type="text" name="TheNho" id=""  class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Dung lượng pin</label>
        <input type="text" name="DungLuongPin" id=""  class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <?php
    foreach ($list as $row){
    ?>
    <input type="hidden" name="idDT" value="<?=$row['idDT']?>">

    <?php
    }
    ?>
    <button type="submit" name="update" class="btn btn-primary">Cập nhật</button>
</form>