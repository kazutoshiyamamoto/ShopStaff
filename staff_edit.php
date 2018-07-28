<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>スタッフ修正</title>
</head>
<body>

<?php

try {
    $staff_code = $_POST['staffcode'];

    $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = 'SELECT name FROM mst_staff WHERE code = ?';
    $stmt = $dbh -> prepare($sql);
    $data[] = $staff_code;
    $stmt -> execute($data);
}



?>

</body>
</html>
