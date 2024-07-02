<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhân viên</title>
    <link rel="stylesheet" href="css/styleadmincp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@500&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .centered-text {
            text-align: center;
            background-color: rgb(15, 91, 153);
            color: white;
        }
    </style>
</head>
<body>
    <div class="centered-text">
        <h1 class="title_admin">Chào mừng quản lý</h1>
        <p class="bold-text">Danh sách quản lý dành cho Nhân viên</p>
    </div>
    <div class="wrapper">
    <?php
        include("config/config.php");
        include("modules/menu.php");
        include("modules/main.php");
    ?>
    </div>
</body>
</html>