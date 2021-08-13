<?php
    session_start();
?>
<?php
    $id=$_GET['masp'];
    if(isset($_SESSION['giohang'][$id])){
        $_SESSION['giohang'][$id]['Amount']--;
    }
    if($_SESSION['giohang'][$id]['Amount']==0){
        unset($_SESSION['giohang'][$id]);
    }
    header('location:../?act=cartview');

?>