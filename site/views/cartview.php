<div class="card m-auto">
    <div class="card-header">
        <h3>Sản phẩm bạn đã chọn</h3>
    </div>
    <div class="card-body p-0">

        <?php
            $stt = 1;

            foreach ($_SESSION['giohang'] as $idProduct => $sp){
          									
							
        ?>
        <div class="d-flex">
            <div class="p-2 border"><?=$stt++?></div>
            <div class="p-2 border  col-4 "><?=$sp['TenDT']?></div>
            <div class="p-2 border col-3 border text-center">
                <td class="cart_quantity">
                    <div class="cart_quantity_button">
                        <input type="hidden" name="idcart" value="<?= $carts['id'] ?>">
                        <a class="cart_quantity_down" href="views/trucart.php?masp=<?= $idProduct ?>"> - </a>
                        <input class="cart_quantity_input" style="width: 45px;" type="text" disabled min="0"
                            name="quantity" value="<?= $sp['Amount'] ?>">
                        <a class="cart_quantity_up" href="views/congcart.php?masp=<?= $idProduct ?>"> + </a>
                    </div>
                </td>
            </div>
            <div class="p-2 border col-2 border text-end"><?=number_format($sp['Gia']*$sp['Amount'])?>VNĐ</div>
            <div class="p-2 border flex-grow-1 text-end"><a href="<?="?act=cart&what=remove&id=". $idProduct?>"
                    class="btn btn-default ">
                    <i class="fa fa-trash"></i>
                </a></div>
        </div>
        <?php
            }
        ?>
    </div>
    <?php
        $totals=0;//TỔNG TIỀN
        foreach($_SESSION['giohang'] as $carts){
            $total=$carts['Amount']*$carts['Gia'];
            $totals+=$total;
        }	
    ?>
    <div class="card-footer text-muted">
        Tổng tiền: <?= number_format($totals)  ?>VNĐ
    </div>
</div>


<form action="?act=luudonhang" method="post">
<fieldset class="border m-2 p-3">
   <legend class="small text-primary fw-bold">Thông tin người nhận hàng</legend>
   <input type="hidden" name="idUser" value="<?=$idUser?>">
   <div class="form-group row mb-3">
    <label for="ht" class="col-sm-2 col-form-label">Họ tên</label>
    <div class="col-sm-10"><input type="text" class="form-control" id="ht" name="HoTen" value="<?=$hoTen?>"></div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10"> <input type="email" class="form-control" id="email" name="email" value="<?=$email?>"></div>
  </div>
  <div class="form-group row">
    <label for="address" class="col-sm-2 col-form-label">Địa chỉ</label>
    <div class="col-sm-10"> <input type="text" class="form-control" id="address" name="address"  value="<?=$address?>" ></div>
  </div>
  <div class="form-group row">
    <label for="phone" class="col-sm-2 col-form-label">Số điện thoại</label>
    <div class="col-sm-10"> <input type="text" class="form-control" id="phone" name="phone" value="<?=$phone?>" ></div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Ngày nhận hàng</label>
    <div class="col-sm-10"> <input type="date" class="form-control" id="date" name="date"></div>
  </div>
   <textarea style="resize:none" name="noteUser" id="" cols="100" rows="8" placeholder="Bạn có ghi chú gì về đơn hàng này..."></textarea>
</fieldset>

<div class="m-2 d-flex">
   <fieldset class="border p-3 mr-2 col-6">    
      <legend class="small text-primary fw-bold">Phương thức thanh toán</legend>
      <div class="form-group d-block">
        <p><input type="radio" name="phuongthuctt" value="ck"> Chuyển khoản</p>
        <p><input type="radio" name="phuongthuctt" value="khinhan"> Khi nhận hàng</p>
        <p><input type="radio" name="phuongthuctt" value="onepay"> Onepay</p>
        <p><input type="radio" name="phuongthuctt" value="nganluong"> Ngân Lượng</p>
      </div>
    </fieldset>
    <fieldset class="border p-3 ml-3 col-6">    
       <legend class="small text-primary fw-bold">Phương thức giao hàng</legend>
       <div class="form-group d-block">
         <p><input type="radio" name="phuongthucgh" value="ghnhanh"> Giao hàng nhanh</p>
         <p><input type="radio" name="phuongthucgh" value="ghtietkiem"> Giao hàng tiết kiệm</p>
         <p><input type="radio" name="phuongthucgh" value="vnpost"> VN Post</p>
         <p><input type="radio" name="phuongthucgh" value="viettel"> Viettel</p>
       </div>
    </fieldset>    
</div> 
<div class="py-2 m-2 d-flex justify-content-end">  
    <div class="text-end">
        <button class="btn btn-success" type="submit">Mua hàng</button>
    </div>
</div>

</form>