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
        if(($abc == 'quanlycungcap' && $query == 'them')){
            include("modules/quanlycungcap/them.php");
            include("modules/quanlycungcap/lietke.php");
        }elseif(($abc == 'quanlycungcap' && $query == 'sua')){
            include("modules/quanlycungcap/suaw.php");
        }

        elseif(($abc == 'quanlynhanvien' && $query == 'them')){
            include("modules/quanlynhanvien/them.php");
            include("modules/quanlynhanvien/lietke.php");
        }elseif(($abc == 'quanlynhanvien' && $query == 'sua')){
            include("modules/quanlynhanvien/suaw.php");
        }

        elseif(($abc == 'quanlythongke' && $query == 'them')){
            include("modules/quanlythongke/them.php");
            include("modules/quanlythongke/lietke.php");
        }elseif(($abc == 'quanlythongke' && $query == 'sua')){
            include("modules/quanlythongke/suaw.php");
        }

        else{
            include("modules/dashboard.php");
        }
    ?>
</div>