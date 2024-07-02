<style>
    .center-table {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50vh;
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
    table input[type="datetime-local"] {
      border-radius: 10px;
    }
</style>
<?php
  $sql_sua_khachhang = "SELECT * FROM tbl_khachhang WHERE id_khachhang='$_GET[idkhachhang]' LIMIT 1";
  $query_sua_khachhang = mysqli_query($conn, $sql_sua_khachhang);
?>
<div class="center-table">
<table>
<?php
  while ($row = mysqli_fetch_array($query_sua_khachhang)) {
?>
  <form method="POST" action="modules/quanlykhachhang/xuly.php?idkhachhang=<?php echo $row['id_khachhang'] ?>" enctype="multipart/form-data" onsubmit="return validateForm()">
  <tr>
      <th>Mã khách hàng</th>
      <td><input type="text" value = "<?php echo $row['makh'] ?>" name="makh"></td>
    </tr>
    <tr>
      <th>Tên khách hàng</th>
      <td><input type="text" value = "<?php echo $row['tenkh'] ?>" name="tenkh"></td>
    </tr>
    <tr>
      <th>Số điện thoại khách hàng</th>
      <td><input type="text" value = "<?php echo $row['sdt'] ?>" name="sdt"></td>
    </tr>
    <tr>
      <th>Địa chỉ</th>
      <td><input type="text" value = "<?php echo $row['diachi'] ?>" name="diachi"></td>
    </tr>
    <tr>
      <th>Giới tính</th>
      <td><input type="text" value = "<?php echo $row['gioitinh'] ?>" name="gioitinh"></td>
    </tr>
    <tr>
      <th colspan="2"><input type="submit" name="suakhachhang" value="Sửa thông tin khách hàng"></th>
    </tr>
  </form>
  <?php
  }
  ?>
</table>
</div>

<script>
  function validateForm() {
    var makh = document.forms[0].makh.value.trim();
    var tenkh = document.forms[0].tenkh.value.trim();
    var sdt = document.forms[0].sdt.value.trim();
    var diachi = document.forms[0].diachi.value.trim();
    var gioitinh = document.forms[0].gioitinh.value.trim();
    if (makh === "" || tenkh === "" || sdt === "" || diachi === ""|| gioitinh === "") {
      alert("Bạn chưa nhập đủ thông tin, vui lòng nhập lại");
      return false;
    }
  }
</script>