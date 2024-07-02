<?php
  $sql_lietke_kho = "SELECT * FROM tbl_kho";
  $query_lietke_kho = mysqli_query($conn, $sql_lietke_kho);
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
    
    table th, table th {
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
    <b>Liệt kê danh sách sản phẩm</b>
</div><br>
<table style="width:100%" border="1" style="border-collapse:collapse;">
    <tr>
        <th>Số thứ tự</th>
        <th>Mã sản phẩm</th>
        <th>Số lượng nhập</th>
        <th>Số lượng xuất</th>
        <th>Ngày nhập hàng</th>
        <th>Ngày xuất kho</th>
        <th>Thao tác</th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_kho)){
            $i++;
    ?>
    <tr>
        <th><?php echo $i ?></th>
        <th><?php echo $row['masp'] ?></th>
        <th><?php echo $row['slnhap'] ?></th>
        <th><?php echo $row['slxuat'] ?></th>
        <th><?php echo $row['ngaynhap'] ?></th>
        <th><?php echo $row['ngayxuat'] ?></th>
        <th>
            <a href="modules/quanlykho/xuly.php?idkho=<?php echo $row['id_kho'] ?>">Xóa</a>
            <a href="?action=quanlykho&query=sua&idkho=<?php echo $row['id_kho'] ?>">Sửa</a>
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