<?php
    include('../../config/config.php');
    $masp = $_POST['masp'];
    $tensp = $_POST['tensp'];
    $giaban = $_POST['giaban'];
    $soluong = $_POST['soluong'];

    if(isset($_POST['themnhanvien'])){
        $sql_them = "INSERT INTO tbl_sanpham(masp, tensp , giaban, soluong)
            VALUE('".$masp."','".$tensp."','".$giaban."','".$soluong."')";
        mysqli_query($conn, $sql_them);
        header('Location:../../index.php?action=quanlysp&query=them');
    }
    elseif(isset($_POST['suanhanvien'])){
        if($giaban!=''){
            
            $sql_update = "UPDATE tbl_sanpham SET masp='".$masp."', tensp='".$tensp."',
            giaban='".$giaban."',soluong='".$soluong."' WHERE id_sanpham='$_GET[idnhanvien]'";

            $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idnhanvien]' LIMIT 1";
            $query = mysqli_query($conn, $sql);

        }else{
            $sql_update = "UPDATE tbl_sanpham SET masp='".$masp."', tensp='".$tensp."',
            soluong='".$soluong."' WHERE id_sanpham='$_GET[idnhanvien]'";
        }
        mysqli_query($conn, $sql_update);
        header('Location:../../index.php?action=quanlysp&query=them');
    }
    else{
        $id=$_GET['idnhanvien'];
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham = '".$id."'";
        mysqli_query($conn, $sql_xoa);
        header('Location:../../index.php?action=quanlysp&query=them');
    }
?>