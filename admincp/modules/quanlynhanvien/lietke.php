<?php
  $sql_lietke_user = "SELECT * FROM tbl_user";
  $query_lietke_user = mysqli_query($conn, $sql_lietke_user);
?>
<style>
    .center-text {
        text-align: center;
        font-size: 20px;
    }
    
    table {
        width: 50%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    
    table th, table td {
        padding: 10px;
    }
    
    table th:nth-child(10) a:first-child {
        background-color: red;
        color: white;
        padding: 5px 10px;
        margin-right: 10px;
        text-decoration: none;
        border-radius: 20px;
    }
    
    table th:nth-child(10) a:last-child {
        background-color: green;
        color: white;
        padding: 5px 10px;
        text-decoration: none;
        border-radius: 20px;
    }
    
    .footer {
        background-color: #f2f2f2;
        padding: 20px;
        text-align: center;
    }
</style>

<div class="center-text">
    <b>Liệt kê danh sách người dùng</b>
</div><br>

<table style="width:100%" border="1" style="border-collapse:collapse;">
    <tr>
        <th>Số thứ tự</th>
        <th>Mã nhân viên</th>
        <th>Tên nhân viên</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <th>Chức vụ</th>
        <th>Giới tính</th>
        <th>Tên đăng nhập</th>
        <th>Mật khẩu</th>
        <th>Thao tác</th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_user)){
            $i++;
    ?>
    <tr>
        <th><?php echo $i ?></th>
        <th><?php echo $row['mauser'] ?></th>
        <th><?php echo $row['tenuser'] ?></th>
        <th><?php echo $row['diachi'] ?></th>
        <th><?php echo $row['sdt'] ?></th>
        <th><?php echo $row['chucvu'] ?></th>
        <th><?php echo $row['gioitinh'] ?></th>
        <th><?php echo $row['tendangnhap'] ?></th>
        <th><?php echo $row['password'] ?></th>
        <th>
            <a href="modules/quanlynhanvien/xuly.php?iduser=<?php echo $row['id_user'] ?>">Xóa</a>
            <a href="?action=quanlynhanvien&query=sua&iduser=<?php echo $row['id_user'] ?>">Sửa</a>
        </th>
    </tr>
    <?php
        }
    ?>
</table>

<div class="footer">
    -Địa chỉ: Số 2, Tân Triều, Triều Khúc, Thanh trì, Hà Nội<br>
    -Tell:0326578324<br>
    -Email:hhhdm4231@gmail.com
</div>