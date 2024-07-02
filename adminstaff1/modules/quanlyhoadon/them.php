<style>
    .center-table {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 60vh;
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
        border-radius: 10px;
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
    }
    table input[type="text"] {
        border-radius: 10px;
    }
    table input[type="datetime-local"] {
        border-radius: 10px;
    }
    table select {
        border-radius: 10px;
        width: 100%;
        font-size: 20px;
    }
</style>
<div class="center-table">
<table>
  <form method="POST" action="modules/quanlyhoadon/xuly.php" enctype="multipart/form-data" onsubmit="return validateForm()">
    <tr>
      <th>Mã Hóa Đơn</th>
      <th><input type="text" name="mahd"></th>
    </tr>
    <tr>
      <th>Mã khách hàng</th>
      <th>
        <select name="makh">
          <option value="">Chọn mã khách hàng</option>
          <?php
          $sql = "SELECT * FROM tbl_khachhang";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['makh'] . "'>" . $row['makh'] . "</option>";
          }
          ?>
        </select>
      </th>
    </tr>
    <tr>
      <th>Mã nhân viên</th>
      <th>
        <select name="mauser">
          <option value="">Chọn mã nhân viên</option>
          <?php
          $sql = "SELECT * FROM tbl_user";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['mauser'] . "'>" . $row['mauser'] . "</option>";
          }
          ?>
        </select>
      </th>
    </tr>
    <tr>
      <th>Ngày lập</th>
      <th><input type="datetime-local" name="ngaylap"></th>
    </tr>
    <tr>
      <th>Tổng tiền</th>
      <th><input type="text" name="tongtien"></th>
    </tr>
    <tr>
      <th colspan="2"><input type="submit" name="themhoadon" value="Thêm hóa đơn"></th>
    </tr>
  </form>
</table>
</div>
<script>
  function validateForm() {
    var mahd = document.forms[0].mahd.value.trim();
    var makh = document.forms[0].makh.value.trim();
    var ngaylap = document.forms[0].ngaylap.value.trim();
    var tongtien = document.forms[0].tongtien.value.trim();
    var mauser = document.forms[0].mauser.value.trim();

    if (mahd === "" || makh === "" || ngaylap === "" || tongtien === "" || mauser === "") {
      alert("Bạn chưa nhập đủ thông tin, vui lòng nhập lại");
      return false;
    }
  }
</script>