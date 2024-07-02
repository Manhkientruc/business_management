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
    
    table td {
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
</style>
<div class="center-table">
<table>
  <form method="POST" action="modules/quanlyspban/xuly.php" enctype="multipart/form-data" onsubmit="return validateForm()">
  <tr>
      <td>Mã Sản phẩm</td>
      <td><input type="text" name="masp"></td>
    </tr>
    <tr>
      <td>Số lượng nhập</td>
      <td><input type="text" name="soluong"></td>
    </tr>
    <tr>
      <td>Số lượng xuất</td>
      <td><input type="text" name="soluong"></td>
    </tr>
    <tr>
      <td>Ngày nhập</td>
      <td><input type="datetime-local" name="soluong"></td>
    </tr>
    <tr>
      <td>Ngày xuất</td>
      <td><input type="datetime-local" name="soluong"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="themnhanvien" value="Thêm Sản phẩm"></td>
    </tr>
  </form>
</table>
</div>
<script>
  function validateForm() {
    var masp = document.forms[0].masp.value.trim();
    var tensp = document.forms[0].tensp.value.trim();
    var giaban = document.forms[0].giaban.value.trim();
    var soluong = document.forms[0].soluong.value.trim();
    if (masp === "" || tensp === "" || giaban === "" || soluong === "") {
      alert("Bạn chưa nhập đủ thông tin, vui lòng nhập lại");
      return false;
    }
  }
</script>