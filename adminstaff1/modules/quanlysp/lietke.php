<?php
  $sql_lietke_sanpham = "SELECT * FROM tbl_sanpham";
  $query_lietke_sanpham = mysqli_query($conn, $sql_lietke_sanpham);
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
    
    table th:nth-child(5) a:first-child {
        background-color: red;
        color: white;
        padding: 5px 10px;
        margin-right: 10px;
        text-decoration: none;
        border-radius: 20px;
    }
    
    table th:nth-child(5) a:last-child {
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
        <th>Tên sản phẩm</th>
        <th>Mã nhà cung cấp</th>
        <th>Thao tác</th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_sanpham)){
            $i++;
    ?>
    <tr>
        <th><?php echo $i ?></th>
        <th><?php echo $row['masp'] ?></th>
        <th><?php echo $row['tensp'] ?></th>
        <th><?php echo $row['mancc'] ?></th>
        <th>
            <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a>
            <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
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