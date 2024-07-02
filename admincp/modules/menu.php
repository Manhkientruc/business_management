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
        margin: 0 70px;
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
    <li><a href="index.php?action=quanlynhanvien&query=them">Quản lý nhân viên</a></li>
    <li><a href="index.php?action=quanlycungcap&query=them">Quản lý nhà cung cấp</a></li>
    <li><a href="index.php?action=quanlythongke&query=them">Quản lý thống kê</a></li>
    <li class="logout-link" style="background-color: red;">
        <a href="../login.php">Đăng xuất</a>
    </li>
</ul>