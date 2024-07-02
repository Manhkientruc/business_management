<?php
  $sql_lietke_hoadon = "SELECT * FROM tbl_hoadon";
  $query_lietke_hoadon = mysqli_query($conn, $sql_lietke_hoadon);
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
    <b>Liệt kê danh sách hóa đơn</b>
</div><br>

<table style="width:100%" border="1" style="border-collapse:collapse;">
    <tr>
        <th>Số thứ tự</th>
        <th>Mã hóa đơn</th>
        <th>Mã khách hàng</th>
        <th>Mã nhân viên</th>
        <th>Ngày lập hóa đơn</th>
        <th>Tổng tiền</th>
        <th>Thao tác</th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_hoadon)){
            $i++;
    ?>
    <tr>
        <th><?php echo $i ?></th>
        <th><?php echo $row['mahd'] ?></th>
        <th><?php echo $row['makh'] ?></th>
        <th><?php echo $row['mauser'] ?></th>
        <th><?php echo $row['ngaylap'] ?></th>
        <th><?php echo $row['tongtien'] ?></th>
        <th>
            <a href="modules/quanlyhoadon/xuly.php?idhoadon=<?php echo $row['id_hoadon'] ?>">Xóa</a>
            <a href="?action=quanlyhoadon&query=sua&idhoadon=<?php echo $row['id_hoadon'] ?>">Sửa</a>
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