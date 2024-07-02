<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
    <style>
        .login-form {
            width: 600px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 0 auto;
        }
        img {
            max-width: 100%; /* Đảm bảo hình ảnh không vượt quá kích thước của khối "login-form" */
            display: block; /* Hiển thị hình ảnh như một khối độc lập */
            margin: 0 auto; /* Đặt margin tự động cho căn giữa */
        }
        .login-form h3 {
            text-align: center;
        }
        .login-form select,
        .login-form input[type="password"],
        .login-form input[type="text"],
        .login-form button[type="submit"] {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        #username-input,
        #password-input {
            width: 100%; /* Đặt chiều rộng mới cho các ô input */
            padding: 20px; /* Đặt khoảng cách xung quanh các ô input */
            box-sizing: border-box; /* Đảm bảo kích thước bao gồm cả border và padding */
        }
        #role-select{
            width: 100%; /* Đặt chiều rộng mới cho các ô input */
            padding: 20px; /* Đặt khoảng cách xung quanh các ô input */
            box-sizing: border-box; /* Đảm bảo kích thước bao gồm cả border và padding */
        }
        #username-input-wrapper {
            display: none;
        }
        #username-input-wrapper label {
            display: block;
        }
    </style>
</head>
<body>
<div class="login-form">
<img src="images/Cool_Game_Player_Logo-removebg-preview-removebg-preview.png">
    <h3>Đăng nhập</h3>
        <select id="role-select" onchange="toggleUsernameInput()">
            <option value="quản lý">Quản lý</option>
            <option value="nhân viên">Nhân viên</option>
        </select>
        <div id="username-input-wrapper" style="display: none;">
            <label for="username-input">Tài khoản:</label>
            <input type="text" id="username-input" placeholder="Nhập tài khoản">
        </div>
            <input type="password" id="password-input" placeholder="Mật khẩu">
            <button type="submit" onclick="login()">Đăng nhập</button>
</div>

<script>
    function toggleUsernameInput() {
        var roleSelect = document.getElementById("role-select");
        var usernameInputWrapper = document.getElementById("username-input-wrapper");

    if (roleSelect.value === "nhân viên") {
        usernameInputWrapper.style.display = "block";
    } else {
        usernameInputWrapper.style.display = "none";
    }
    }
    function login() {
        var roleSelect = document.getElementById("role-select").value;
        var usernameInput = document.getElementById("username-input").value;
        var passwordInput = document.getElementById("password-input").value;

    if (roleSelect === "quản lý" && passwordInput === "123456") {
        window.location.href = "admincp/index.php";
    }else if (roleSelect === "nhân viên" && usernameInput === "manh@staff" && passwordInput === "189203") {
        window.location.href = "adminstaff1/index.php";
    }else if (roleSelect === "nhân viên" && usernameInput === "hai@staff" && passwordInput === "123456") {
        window.location.href = "adminstaff1/index.php";
    }else if (roleSelect === "nhân viên" && usernameInput === "dao@staff" && passwordInput === "123456") {
        window.location.href = "adminstaff1/index.php";
    }else {
        alert("Thông tin đăng nhập không đúng");
    }
    }
        var passwordInput = document.getElementById("password-input");
        passwordInput.addEventListener("keyup", function(event) {
        event.preventDefault();
    if (event.keyCode === 13) {
        login();
    }
    });
</script>
</body>
</html>