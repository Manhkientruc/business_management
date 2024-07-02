<?php
    include('../../config/config.php');
    $makh = $_POST['makh'];
    $tenkh = $_POST['tenkh'];
    $sdt = $_POST['sdt'];
    $diachi = $_POST['diachi'];
    $gioitinh = $_POST['gioitinh'];

    if(isset($_POST['themkhachhang'])){
        $sql_them = "INSERT INTO tbl_khachhang(makh, tenkh, sdt, diachi, gioitinh)
            VALUE('".$makh."','".$tenkh."','".$sdt."','".$diachi."','".$gioitinh."')";
        mysqli_query($conn, $sql_them);
        header('Location:../../index.php?action=quanlykhachhang&query=them');
    }
    elseif(isset($_POST['suakhachhang'])){

        $sql_update = "UPDATE tbl_khachhang SET makh='".$makh."', tenkh='".$tenkh."',sdt='".$sdt."',diachi='".$diachi."',gioitinh='".$gioitinh."'
            WHERE id_khachhang='$_GET[idkhachhang]'";

        $sql = "SELECT * FROM tbl_khachhang WHERE id_khachhang = '$_GET[idkhachhang]' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        mysqli_query($conn, $sql_update);
        header('Location:../../index.php?action=quanlykhachhang&query=them');
    }
    else{
        $id=$_GET['idkhachhang'];
        $sql = "SELECT * FROM tbl_khachhang WHERE id_khachhang = '$id' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $sql_xoa = "DELETE FROM tbl_khachhang WHERE id_khachhang = '".$id."'";
        mysqli_query($conn, $sql_xoa);
        header('Location:../../index.php?action=quanlykhachhang&query=them');
    }
?>