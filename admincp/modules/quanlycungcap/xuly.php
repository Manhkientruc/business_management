<?php
    include('../../config/config.php');
    $mancc = $_POST['mancc'];
    $tenncc = $_POST['tenncc'];
    $sdt = $_POST['sdt'];
    $diachi = $_POST['diachi'];

    if(isset($_POST['themncc'])){
        $sql_them = "INSERT INTO tbl_ncc(mancc, tenncc, sdt, diachi)
            VALUE('".$mancc."','".$tenncc."','".$sdt."','".$diachi."')";
        mysqli_query($conn, $sql_them);
        header('Location:../../index.php?action=quanlycungcap&query=them');
    }
    elseif(isset($_POST['suancc'])){

        $sql_update = "UPDATE tbl_ncc SET mancc='".$mancc."', tenncc='".$tenncc."',sdt='".$sdt."',diachi='".$diachi."'
            WHERE id_ncc='$_GET[idncc]'";

        $sql = "SELECT * FROM tbl_ncc WHERE id_ncc = '$_GET[idncc]' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        mysqli_query($conn, $sql_update);
        header('Location:../../index.php?action=quanlycungcap&query=them');
    }
    else{
        $id=$_GET['idncc'];
        $sql = "SELECT * FROM tbl_ncc WHERE id_ncc = '$id' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $sql_xoa = "DELETE FROM tbl_ncc WHERE id_ncc = '".$id."'";
        mysqli_query($conn, $sql_xoa);
        header('Location:../../index.php?action=quanlycungcap&query=them');
    }
?>