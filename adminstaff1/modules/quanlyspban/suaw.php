<?php
  $sql_sua_nv = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idnhanvien]' LIMIT 1";
  $query_sua_nv = mysqli_query($conn, $sql_sua_nv);
?>
<p>Sửa Sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse;">
<?php
  while ($row = mysqli_fetch_array($query_sua_nv)) {
?>
  <form method="POST" action="modules/quanlysp/xuly.php?idnhanvien=<?php echo $row['id_sanpham'] ?>" enctype="multipart/form-data">
    <tr>
      <td>Mã Sản phẩm</td>
      <td><input type="text" value = "<?php echo $row['masp'] ?>" name="masp"></td>
    </tr>
    <tr>
      <td>Tên Sản phẩm</td>
      <td><input type="text" value = "<?php echo $row['tensp'] ?>" name="tensp"></td>
    </tr>
    <tr>
      <td>Giá bán</td>
      <td><input type="text" value = "<?php echo $row['giaban'] ?>" name="giaban"></td>
    </tr>
    <tr></tr>
      <td>Số lượng</td>
      <td><textarea row="10" name="soluong"><?php echo $row['soluong'] ?></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="suanhanvien" value="Sửa"></td>
    </tr>
  </form>
  <?php
  }
  ?>
</table>