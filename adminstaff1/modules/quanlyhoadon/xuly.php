<?php
    include('../../config/config.php');
    $mahd = $_POST['mahd'];
    $makh = $_POST['makh'];
    $mauser = $_POST['mauser'];
    $ngaylap = $_POST['ngaylap'];
    $tongtien = $_POST['tongtien'];

    if(isset($_POST['themhoadon'])){
        $sql_them = "INSERT INTO tbl_hoadon(mahd, makh, mauser, ngaylap, tongtien)
            VALUE('".$mahd."','".$makh."','".$mauser."','".$ngaylap."','".$tongtien."')";
        mysqli_query($conn, $sql_them);
        header('Location:../../index.php?action=quanlyhoadon&query=them');
    }
    elseif(isset($_POST['suahoadon'])){
        if($tongtien!=''){
            
            $sql_update = "UPDATE tbl_hoadon SET mahd='".$mahd."', makh='".$makh."',mauser='".$mauser."', ngaylap='".$ngaylap."',
            tongtien='".$tongtien."' WHERE id_hoadon='$_GET[idhoadon]'";

            $sql = "SELECT * FROM tbl_hoadon WHERE id_hoadon = '$_GET[idhoadon]' LIMIT 1";
            $query = mysqli_query($conn, $sql);

        }else{
            $sql_update = "UPDATE tbl_hoadon SET mahd='".$mahd."', makh='".$makh."',mauser='".$mauser."', ngaylap='".$ngaylap."',
            tongtien='".$tongtien."' WHERE id_hoadon='$_GET[idhoadon]'";
        }
        mysqli_query($conn, $sql_update);
        header('Location:../../index.php?action=quanlyhoadon&query=them');
    }
    else{
        $id=$_GET['idhoadon'];
        $sql = "SELECT * FROM tbl_hoadon WHERE id_hoadon = '$id' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $sql_xoa = "DELETE FROM tbl_hoadon WHERE id_hoadon = '".$id."'";
        mysqli_query($conn, $sql_xoa);
        header('Location:../../index.php?action=quanlyhoadon&query=them');
    }
?>