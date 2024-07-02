<?php
  $sql_lietke_nv = "SELECT * FROM tbl_sanphamban";
  $query_lietke_nv = mysqli_query($conn, $sql_lietke_nv);
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
    <b>Liệt kê danh sách kho</b>
</div><br>
<table style="width:100%" border="1" style="border-collapse:collapse;">
    <tr>
        <th>Số thứ tự</th>
        <th>Mã sản phẩm</th>
        <th>Số lượng nhập</th>
        <th>Số lượng xuất</th>
        <th>Ngày nhập</th>
        <th>Ngày xuất</th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_nv)){
            $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['masp'] ?></td>
        <td><?php echo $row['tensp'] ?></td>
        <td><?php echo $row['mancc'] ?></td>
        <td><?php echo $row['ngaynhapkho'] ?></td>
        <td>
            <a href="modules/quanlysp/xuly.php?idnhanvien=<?php echo $row['id_sanpham'] ?>">Xóa</a>
            <a href="?action=quanlysp&query=sua&idnhanvien=<?php echo $row['id_sanpham'] ?>">Sửa</a>
        </td>
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