<div class="row">
    <?php
        foreach($listSP as $sp){
    ?>
        <div class="col-sm-4 mt-2 mb-2 ">
            <div data-aos="fade-up" data-aos-duration="2000">

                <div style="min-height:365px" class="card card-hover">
                    <div class="card-body ">
                        <img class="col-sm-12 " src="../admin/views/public/img/<?=$sp['urlHinh']?>" alt=" ">
                        <h4 class="card-title ">
                            <?= $sp['TenDT'];?>
                        </h4>
                        <p class="card-text " style="font-weight:500; font-size:20px;">
                            <?=number_format($sp['Gia'])?> VNĐ
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

<nav aria-label="Page navigation example">
    <ul class="pagination  justify-content-center">
        <li class="page-item">
            <a class="page-link" href="?act=cat&id=<?=$idNSX?>&page=<?=1?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
<?php
for ($i=1; $i <= $totalPage; $i++){
?>   
    <li class="page-item"><a class="page-link" href="?act=cat&id=<?=$idNSX?>&page=<?=$i?>"><?=$i?></a></li>
<?php
}
?>
        <li class="page-item">
            <a class="page-link" href="?act=cat&id=<?=$idNSX?>&page=<?=$totalPage?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>
