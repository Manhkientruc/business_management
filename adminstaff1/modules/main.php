<div class="clear"></div>
<div class="main">
    <?php
        if(isset($_GET['action']) && ($_GET['query'])){
            $abc = $_GET['action'];
            $query = $_GET['query'];
        }else{
            $abc = '';
            $query = '';
        }
        if(($abc == 'quanlydanhmucsanpham' && $query == 'them')){
            include("modules/quanlydanhmucsp/them.php");
            include("modules/quanlydanhmucsp/lietke.php");
        }elseif(($abc == 'quanlydanhmucsanpham' && $query == 'sua')){
            include("modules/quanlydanhmucsp/suaw.php");
        }elseif(($abc == 'quanlysp' && $query == 'them')){
            include("modules/quanlysp/them.php");
            include("modules/quanlysp/lietke.php");
        }elseif($abc == 'quanlysp' && $query == 'sua'){
            include("modules/quanlysp/suaw.php");
        }

        elseif(($abc == 'quanlykhachhang' && $query == 'them')){
            include("modules/quanlykhachhang/them.php");
            include("modules/quanlykhachhang/lietke.php");
        }elseif(($abc == 'quanlykhachhang' && $query == 'sua')){
            include("modules/quanlykhachhang/suaw.php");
        }

        elseif(($abc == 'quanlyhoadon' && $query == 'them')){
            include("modules/quanlyhoadon/them.php");
            include("modules/quanlyhoadon/lietke.php"); 
        }elseif(($abc == 'quanlyhoadon' && $query == 'sua')){
            include("modules/quanlyhoadon/suaw.php");
        }

        elseif(($abc == 'quanlykho' && $query == 'them')){
            include("modules/quanlykho/them.php");
            include("modules/quanlykho/lietke.php"); 
        }elseif(($abc == 'quanlykho' && $query == 'sua')){
            include("modules/quanlykho/suaw.php");
        }

        else{
            include("modules/dashboard.php");
        }
    ?>
</div>