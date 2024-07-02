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
  <form method="POST" action="modules/quanlykho/xuly.php" enctype="multipart/form-data" onsubmit="return validateForm()">
    <tr>
      <th>Mã sản phẩm</th>
      <th>
        <select name="masp">
          <option value="">Chọn mã sản phẩm</option>
          <?php
          $sql = "SELECT * FROM tbl_sanpham";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['masp'] . "'>" . $row['masp'] . "</option>";
          }
          ?>
        </select>
      </th>
    </tr>
    <tr>
      <th>Số lượng nhập</th>
      <th><input type="text" name="slnhap"></th>
    </tr>
    <tr>
      <th>Số lượng xuất</th>
      <th><input type="text" name="slxuat"></th>
    </tr>
    <tr>
      <th>Ngày nhập kho</th>
      <th><input type="datetime-local" name="ngaynhap"></th>
    </tr>
    <tr>
      <th>Ngày xuất kho</th>
      <th><input type="datetime-local" name="ngayxuat"></th>
    </tr>
    <tr>
      <th colspan="2"><input type="submit" name="themkho" value="Thêm"></th>
    </tr>
  </form>
</table>
</div>
<script>
  function validateForm() {
    var masp = document.forms[0].masp.value.trim();
    var slnhap = document.forms[0].slnhap.value.trim();
    var slxuat = document.forms[0].slxuat.value.trim();
    var ngaynhap = document.forms[0].ngaynhap.value.trim();
    var ngayxuat = document.forms[0].ngayxuat.value.trim();
    if (masp === "" || slnhap === "" || slxuat === ""|| ngaynhap === ""|| ngayxuat === "") {
      alert("Bạn chưa nhập đủ thông tin, vui lòng nhập lại");
      return false;
    }
  }
</script>