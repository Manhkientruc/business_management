<?php
    include('../../config/config.php');
    $masp = $_POST['masp'];
    $tensp = $_POST['tensp'];
    $mancc = $_POST['mancc'];

    if(isset($_POST['themsanpham'])){
        $sql_them = "INSERT INTO tbl_sanpham(masp, tensp, mancc)
            VALUE('".$masp."','".$tensp."','".$mancc."')";
        mysqli_query($conn, $sql_them);
        header('Location:../../index.php?action=quanlysp&query=them');
    }
    elseif(isset($_POST['suasanpham'])){
        if($tongtien!=''){
            
            $sql_update = "UPDATE tbl_sanpham SET masp='".$masp."', tensp='".$tensp."',mancc='".$mancc."' WHERE id_sanpham='$_GET[idsanpham]'";

            $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
            $query = mysqli_query($conn, $sql);

        }else{
            $sql_update = "UPDATE tbl_sanpham SET masp='".$masp."', tensp='".$tensp."',mancc='".$mancc."' WHERE id_sanpham='$_GET[idsanpham]'";
        }
        mysqli_query($conn, $sql_update);
        header('Location:../../index.php?action=quanlysp&query=them');
    }
    else{
        $id=$_GET['idsanpham'];
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham = '".$id."'";
        mysqli_query($conn, $sql_xoa);
        header('Location:../../index.php?action=quanlysp&query=them');
    }
?>