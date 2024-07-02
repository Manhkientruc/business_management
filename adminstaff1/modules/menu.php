<style>
    .admincp_list {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgb(0, 80, 145);
        padding: 0;
        list-style-type: none;
    }
    
    .admincp_list li {
        padding: 10px;
        text-align: center;
        margin: 0 40px;
    }
    
    .admincp_list li a {
        color: white;
        text-decoration: none;
    }
    ul li::after{
        content: '';
        width: 0%;
        height: 2px;
        background: #f44336;
        display: block;
        margin: auto;
        transition: 0.5s ;
    }
    ul li:hover::after{
        width: 100%;
    }
</style>

<ul class="admincp_list">
    <li><img src="../images/Cool_Game_Player_Logo-removebg-preview-removebg-preview.png" style="width: 200px; height: auto;"></li>
    <li><a href="index.php?action=quanlyhoadon&query=them">Quản lý hóa đơn</a></li>
    <li><a href="index.php?action=quanlykhachhang&query=them">Quản lý khách hàng</a></li>
    <li><a href="index.php?action=quanlysp&query=them">Quản lý sản phẩm</a></li>
    <li><a href="index.php?action=quanlykho&query=them">Quản lý kho</a></li>
    <li class="logout-link" style="background-color: red;">
        <a href="../login.php">Đăng xuất</a>
    </li>
</ul>