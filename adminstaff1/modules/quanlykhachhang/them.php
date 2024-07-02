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
</style>
<div class="center-table">
<table>
  <form method="POST" action="modules/quanlykhachhang/xuly.php" enctype="multipart/form-data" onsubmit="return validateForm()">
    <tr>
      <th>Mã khách hàng</th>
      <th><input type="text" name="makh"></th>
    </tr>
    <tr>
      <th>Tên khách hàng</th>
      <th><input type="text" name="tenkh"></th>
    </tr>
    <tr>
      <th>Số điện thoại khách hàng</th>
      <th><input type="text" name="sdt"></th>
    </tr>
    <tr>
      <th>Địa chỉ</th>
      <th><input type="text" name="diachi"></th>
    </tr>
    <tr>
      <th>Giới tính</th>
      <th><input type="text" name="gioitinh"></th>
    </tr>
    <tr>
      <th colspan="2"><input type="submit" name="themkhachhang" value="Thêm thông tin khách hàng"></th>
    </tr>
  </form>
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