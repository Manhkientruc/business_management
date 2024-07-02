<?php
    include('../../config/config.php');
    $masp = $_POST['masp'];
    $slnhap = $_POST['slnhap'];
    $slxuat = $_POST['slxuat'];
    $ngaynhap = $_POST['ngaynhap'];
    $ngayxuat = $_POST['ngayxuat'];

    if(isset($_POST['themkho'])){
        $sql_them = "INSERT INTO tbl_kho(masp, slnhap , slxuat, ngaynhap, ngayxuat)
            VALUE('".$masp."','".$slnhap."','".$slxuat."','".$ngaynhap."','".$ngayxuat."')";
        mysqli_query($conn, $sql_them);
        header('Location:../../index.php?action=quanlykho&query=them');
    }
    elseif(isset($_POST['suakho'])){
        if($slxuat!=''){
            
            $sql_update = "UPDATE tbl_kho SET masp='".$masp."', slnhap='".$slnhap."',
            slxuat='".$slxuat."',ngaynhap='".$ngaynhap."',ngayxuat='".$ngayxuat."' WHERE id_kho='$_GET[idkho]'";

            $sql = "SELECT * FROM tbl_kho WHERE id_kho = '$_GET[idkho]' LIMIT 1";
            $query = mysqli_query($conn, $sql);

        }else{
            $sql_update = "UPDATE tbl_kho SET masp='".$masp."', slnhap='".$slnhap."',
            slxuat='".$slxuat."',ngaynhap='".$ngaynhap."',ngayxuat='".$ngayxuat."' WHERE id_kho='$_GET[idkho]'";
        }
        mysqli_query($conn, $sql_update);
        header('Location:../../index.php?action=quanlykho&query=them');
    }
    else{
        $id=$_GET['idkho'];
        $sql = "SELECT * FROM tbl_kho WHERE id_kho = '$id' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $sql_xoa = "DELETE FROM tbl_kho WHERE id_kho = '".$id."'";
        mysqli_query($conn, $sql_xoa);
        header('Location:../../index.php?action=quanlykho&query=them');
    }
?>