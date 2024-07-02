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
        <form method="POST" action="modules/quanlynhanvien/xuly.php" enctype="multipart/form-data" onsubmit="return validateForm()">
            <tr>
                <th>Mã nhân viên</th>
                <th><input type="text" name="mauser"></th>
            </tr>
            <tr>
                <th>Tên nhân viên</th>
                <th><input type="text" name="tenuser"></th>
            </tr>
            <tr>
                <th>Địa chỉ</th>
                <th><input type="text" name="diachi"></th>
            </tr>
            <tr>
                <th>Số điện thoại</th>
                <th><input type="text" name="sdt"></th>
            </tr>
            <tr>
                <th>Chức vụ</th>
                <th><input type="text" name="chucvu"></th>
            </tr>
            <tr>
                <th>Giới tính</th>
                <th><input type="text" name="gioitinh"></th>
            </tr>
            <tr>
                <th>Tên đăng nhập</th>
                <th><input type="text" name="tendangnhap"></th>
            </tr>
            <tr>
                <th>Mật khẩu</th>
                <th><input type="text" name="password"></th>
            </tr>
            <tr>
                <th colspan="2"><input type="submit" name="themuser" value="Thêm người dùng"></th>
            </tr>
        </form>
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