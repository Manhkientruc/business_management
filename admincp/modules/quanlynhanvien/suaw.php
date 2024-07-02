<?php
  $sql_sua_user = "SELECT * FROM tbl_user WHERE id_user='$_GET[iduser]' LIMIT 1";
  $query_sua_user = mysqli_query($conn, $sql_sua_user);
?>
<style>
    .center-table {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 70vh;
    }
    
    table {
        width: 50%;
        border-collapse: collapse;
    }
    
    table th {
        padding: 10px;
    }
    
    table input, table textarea {
        width: 100%;
        font-size: 20px;
    }
    
    table input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 10px;
    }
    table input[type="text"] {
        border-radius: 10px;
    }
</style>

<div class="center-table">
    <table>
        <?php while ($row = mysqli_fetch_array($query_sua_user)) { ?>
            <form method="POST" action="modules/quanlynhanvien/xuly.php?iduser=<?php echo $row['id_user'] ?>" enctype="multipart/form-data" onsubmit="return validateForm()">
            <tr>
                <th>Mã nhân viên</th>
                <td><input type="text" value = "<?php echo $row['mauser'] ?>" name="mauser"></td>
            </tr>
            <tr>
                <th>Tên người dùng</th>
                <td><input type="text" value = "<?php echo $row['tenuser'] ?>" name="tenuser"></td>
            </tr>
            <tr>
                <th>Địa chỉ</th>
                <td><input type="text" value = "<?php echo $row['diachi'] ?>" name="diachi"></td>
            </tr>
            <tr>
                <th>Số điện thoại</th>
                <td><input type="text" value = "<?php echo $row['sdt'] ?>" name="sdt"></td>
            </tr>
            <tr>
                <th>Chức vụ</th>
                <td><input type="text" value = "<?php echo $row['chucvu'] ?>" name="chucvu"></td>
            </tr>
            <tr>
                <th>Giới tính</th>
                <td><input type="text" value = "<?php echo $row['gioitinh'] ?>" name="gioitinh"></td>
            </tr>
            <tr>
                <th>Tên đăng nhập</th>
                <td><input type="text" value = "<?php echo $row['tendangnhap'] ?>" name="tendangnhap"></td>
            </tr>
            <tr>
                <th>Mật khẩu</th>
                <td><input type="text" value = "<?php echo $row['password'] ?>" name="password"></td>
            </tr>
                <tr>
                    <th colspan="2"><input type="submit" name="suauser" value="Sửa thông tin người dùng"></th>
                </tr>
            </form>
        <?php } ?>
    </table>
</div>

<script>
  function validateForm() {
    var mauser      = document.forms[0].mauser.value.trim();
    var tenuser     = document.forms[0].tenuser.value.trim();
    var diachi      = document.forms[0].diachi.value.trim();
    var sdt         = document.forms[0].sdt.value.trim();
    var chucvu      = document.forms[0].chucvu.value.trim();
    var gioitinh    = document.forms[0].gioitinh.value.trim();
    var tendangnhap = document.forms[0].tendangnhap.value.trim();
    var password    = document.forms[0].password.value.trim();

    if (mauser === "" || tenuser === "" || diachi === "" || sdt === "" || chucvu === "" || gioitinh === "" || tendangnhap === "" || password === "") {
      alert("Bạn chưa nhập đủ thông tin, vui lòng nhập lại");
      return false;
    }
  }
</script>