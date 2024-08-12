<?php
session_start();
$DATABASE_HOST = 'fdb1031.biz.nf';
$DATABASE_USER = '4365346_aktvdb';
$DATABASE_PASS = '@Nhkhoi123';
$DATABASE_NAME = '4365346_aktvdb';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	exit('Hãy thử kiểm tra lại kết nối của bạn. Mã lỗi: ' . mysqli_connect_error());
}
if ( !isset($_POST['username'], $_POST['password']) ) {
	exit('Hãy điền đầy đủ tên đăng nhập và mật khẩu!');
}
if ($stmt = $con->prepare('SELECT id, password FROM users WHERE username = ?')) {
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        if ($_POST['password'] === $password) {            
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: trang-chu.php');        
        } else {
            // Incorrect password
            echo 'Sai tên người dùng hoặc mật khẩu!';
        }
    } else {
        // Incorrect username
        echo 'Sai tên người dùng hoặc mật khẩu!';
    }

	$stmt->close();
}