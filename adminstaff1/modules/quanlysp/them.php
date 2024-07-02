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
    table select {
        border-radius: 10px;
        width: 100%;
        font-size: 20px;
    }
</style>
<div class="center-table">
<table>
  <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data" onsubmit="return validateForm()">
    <tr>
      <th>Mã Sản phẩm</th>
      <th><input type="text" name="masp"></th>
    </tr>
    <tr>
      <th>Tên Sản phẩm</th>
      <th><input type="text" name="tensp"></th>
    </tr>
    <tr>
      <th>Mã nhà cung cấp</th>
      <th>
        <select name="mancc">
          <option value="">Chọn mã nhà cung cấp</option>
          <?php
          $sql = "SELECT * FROM tbl_ncc";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['mancc'] . "'>" . $row['mancc'] . "</option>";
          }
          ?>
        </select>
      </th>
    </tr>
    <tr>
      <th colspan="2"><input type="submit" name="themsanpham" value="Thêm Sản phẩm"></th>
    </tr>
  </form>
</table>
</div>
<script>
  function validateForm() {
    var masp = document.forms[0].masp.value.trim();
    var tensp = document.forms[0].tensp.value.trim();
    var mancc = document.forms[0].mancc.value.trim();
    if (masp === "" || tensp === "" || mancc === "") {
      alert("Bạn chưa nhập đủ thông tin, vui lòng nhập lại");
      return false;
    }
  }
</script>