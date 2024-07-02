<?php
    include('../../config/config.php');
    $mauser = $_POST['mauser'];
    $tenuser = $_POST['tenuser'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
    $chucvu = $_POST['chucvu'];
    $gioitinh = $_POST['gioitinh'];
    $tendangnhap = $_POST['tendangnhap'];
    $password = $_POST['password'];

    if(isset($_POST['themuser'])){
        $sql_them = "INSERT INTO tbl_user(mauser,tenuser, diachi, sdt, chucvu, gioitinh, tendangnhap, password)
            VALUE('".$mauser."','".$tenuser."','".$diachi."','".$sdt."','".$chucvu."','".$gioitinh."','".$tendangnhap."','".$password."')";
        mysqli_query($conn, $sql_them);
        header('Location:../../index.php?action=quanlynhanvien&query=them');
    }
    elseif(isset($_POST['suauser'])){
        if($sdt!=''){
            
            $sql_update = "UPDATE tbl_user SET mauser='".$mauser."', tenuser='".$tenuser."',diachi='".$diachi."',sdt='".$sdt."'
            ,chucvu='".$chucvu."', gioitinh='".$gioitinh."',tendangnhap='".$tendangnhap."',password='".$password."' WHERE id_user='$_GET[iduser]'";

            $sql = "SELECT * FROM tbl_user WHERE id_user = '$_GET[iduser]' LIMIT 1";
            $query = mysqli_query($conn, $sql);

        }else{
            $sql_update = "UPDATE tbl_user SET mauser='".$mauser."', tenuser='".$tenuser."',diachi='".$diachi."',sdt='".$sdt."'
            ,chucvu='".$chucvu."', gioitinh='".$gioitinh."',tendangnhap='".$tendangnhap."',password='".$password."' WHERE id_nhanvien='$_GET[idnhanvien]'";
        }
        mysqli_query($conn, $sql_update);
        header('Location:../../index.php?action=quanlynhanvien&query=them');
    }
    else{
        $id=$_GET['iduser'];
        $sql = "SELECT * FROM tbl_user WHERE id_user = '$id' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $sql_xoa = "DELETE FROM tbl_user WHERE id_user = '".$id."'";
        mysqli_query($conn, $sql_xoa);
        header('Location:../../index.php?action=quanlynhanvien&query=them');
    }
?>