<?php
  $sql_lietke_khachhang = "SELECT * FROM tbl_khachhang";
  $query_lietke_khachhang = mysqli_query($conn, $sql_lietke_khachhang);
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
    
    table th:nth-child(7) a:first-child {
        background-color: red;
        color: white;
        padding: 5px 10px;
        margin-right: 10px;
        text-decoration: none;
        border-radius: 20px;
    }
    
    table th:nth-child(7) a:last-child {
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
    <b>Liệt kê danh sách khách hàng</b>
</div><br>
<table style="width:100%" border="1" style="border-collapse:collapse;">
    <tr>
        <th>Số thứ tự</th>
        <th>Mã khách hàng</th>
        <th>Tên khách hàng</th>
        <th>Số điện thoại khách hàng</th>
        <th>Địa chỉ</th>
        <th>Giới tính</th>
        <th>Thao tác</th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_khachhang)){
            $i++;
    ?>
    <tr>
        <th><?php echo $i ?></th>
        <th><?php echo $row['makh'] ?></th>
        <th><?php echo $row['tenkh'] ?></th>
        <th><?php echo $row['sdt'] ?></th>
        <th><?php echo $row['diachi'] ?></th>
        <th><?php echo $row['gioitinh'] ?></th>
        <th>
            <a href="modules/quanlykhachhang/xuly.php?idkhachhang=<?php echo $row['id_khachhang'] ?>">Xóa</a>
            <a href="?action=quanlykhachhang&query=sua&idkhachhang=<?php echo $row['id_khachhang'] ?>">Sửa</a>
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