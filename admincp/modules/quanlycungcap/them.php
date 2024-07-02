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
        <form method="POST" action="modules/quanlycungcap/xuly.php" enctype="multipart/form-data" onsubmit="return validateForm()">
            <tr>
                <td>Mã nhà cung cấp</td>
                <td><input type="text" name="mancc"></td>
            </tr>
            <tr>
                <td>Tên nhà cung cấp</td>
                <td><input type="text" name="tenncc"></td>
            </tr>
            <tr>
                <td>Số điện thoại</td>
                <td><input type="text" name="sdt"></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input type="text" name="diachi"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="themncc" value="Thêm nhà cung cấp"></td>
            </tr>
        </form>
    </table>
</div>
<script>
  function validateForm() {
    var mancc = document.forms[0].mancc.value.trim();
    var tenncc = document.forms[0].tenncc.value.trim();
    var sdt = document.forms[0].sdt.value.trim();
    var diachi = document.forms[0].diachi.value.trim();
    if (mancc === "" || tenncc === "" || sdt === "" || diachi === "") {
      alert("Bạn chưa nhập đủ thông tin, vui lòng nhập lại");
      return false;
    }
  }
</script>