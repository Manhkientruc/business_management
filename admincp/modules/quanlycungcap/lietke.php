<?php
  $sql_lietke_ncc = "SELECT * FROM tbl_ncc";
  $query_lietke_ncc = mysqli_query($conn, $sql_lietke_ncc);
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
    
    table th:nth-child(6) a:first-child {
        background-color: red;
        color: white;
        padding: 5px 10px;
        margin-right: 10px;
        text-decoration: none;
        border-radius: 20px;
    }
    
    table th:nth-child(6) a:last-child {
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
    <b>Liệt kê danh sách nhà cung cấp</b>
</div><br>
<table style="width:100%" border="1" style="border-collapse:collapse;">
    <tr>
        <th>Số thứ tự</th>
        <th>Mã nhà cung cấp</th>
        <th>Tên nhà cung cấp</th>
        <th>Số điện thoại nhà cung cấp</th>
        <th>Địa chỉ</th>
        <th>Thao tác</th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_ncc)){
            $i++;
    ?>
    <tr>
        <th><?php echo $i ?></th>
        <th><?php echo $row['mancc'] ?></th>
        <th><?php echo $row['tenncc'] ?></th>
        <th><?php echo $row['sdt'] ?></th>
        <th><?php echo $row['diachi'] ?></th>
        <th>
            <a href="modules/quanlycungcap/xuly.php?idncc=<?php echo $row['id_ncc'] ?>">Xóa</a>
            <a href="?action=quanlycungcap&query=sua&idncc=<?php echo $row['id_ncc'] ?>">Sửa</a>
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