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
    table select {
        border-radius: 10px;
        width: 100%;
        font-size: 20px;
    }
</style>

<?php
  $sql_sua_sanpham = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
  $query_sua_sanpham = mysqli_query($conn, $sql_sua_sanpham);
?>
<div class="center-table">
<table>
<?php
  while ($row = mysqli_fetch_array($query_sua_sanpham)) {
?>
  <form method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" enctype="multipart/form-data" onsubmit="return validateForm()">
    <tr>
      <th>Mã Sản phẩm</th>
      <th><input type="text" value = "<?php echo $row['masp'] ?>" name="masp"></th>
    </tr>
    <tr>
      <th>Tên Sản phẩm</th>
      <th><input type="text" value = "<?php echo $row['tensp'] ?>" name="tensp"></th>
    </tr>
    <tr>
      <th>Mã nhà cung cấp</th>
      <th>
        <select name="mancc">
          <option value="">Chọn Mã nhà cung cấp</option>
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
      <th colspan="2"><input type="submit" name="suasanpham" value="Sửa"></th>
    </tr>
  </form>
  <?php
  }
  ?>
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