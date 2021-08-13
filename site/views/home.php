<div class="row">
    <?php
        foreach($listSPMoi as $sp){
    ?>
        <div class="col-sm-4 mt-2 mb-2 ">
            <div data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">

                <div style="min-height:365px" class="card card-hover">
                    <div class="card-body ">
                        <img class="col-sm-12 " src="../admin/views/public/img/<?=$sp['urlHinh']?>" alt=" ">
                        <h4 class="card-title ">
                            <?= $sp['TenDT'];?>
                        </h4>
                        <p class="card-text ">
                            <?=number_format($sp['GiaKM'])?> VNĐ
                        </p>
                        <a href="?act=detail&id=<?=$sp['idDT']?>" style="mb-2" class="btn btn-primary">CHỌN</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
    ?>
</div>


<h3><?=(isset($page_title2)==true)?$page_title2:"";?> </h3>
<div class="row">
    <?php
        foreach($listSPBanChay as $sp){
    ?>
        <div class="col-sm-4 mt-2 mb-2 ">
            <div data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">

                <div style="min-height:365px" class="card card-hover">
                    <div class="card-body ">
                        <img class="col-sm-12 " src="../admin/views/public/img/<?=$sp['urlHinh']?>" alt=" ">
                        <h4 class="card-title ">
                            <?= $sp['TenDT'];?>
                        </h4>
                        <p class="card-text ">
                            <?=number_format($sp['GiaKM'])?> VNĐ
                        </p>
                        <a href="?act=detail&id=<?=$sp['idDT']?>" style="mb-2" class="btn btn-primary">CHỌN</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
    ?>
</div>

<h3><?=(isset($page_title3)==true)?$page_title3:"";?> </h3>
<div class="row">
    <?php
        foreach($listSPXem as $sp){
    ?>
        <div class="col-sm-4 mt-2 mb-2 ">
            <div data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">

                <div style="min-height:365px" class="card card-hover">
                    <div class="card-body ">
                        <img class="col-sm-12 " src="../admin/views/public/img/<?=$sp['urlHinh']?>" alt=" ">
                        <h4 class="card-title ">
                            <?= $sp['TenDT'];?>
                        </h4>
                        <p class="card-text ">
                            <?=number_format($sp['GiaKM'])?> VNĐ
                        </p>
                        <a href="?act=detail&id=<?=$sp['idDT']?>" style="mb-2" class="btn btn-primary">CHỌN</a>
                        <i class="fa fa-eye" style="float: right" aria-hidden="true">  <?= $sp['SoLanXem'];?></i>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
    ?>
</div>