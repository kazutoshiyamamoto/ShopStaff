<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>データベース追加</title>
</head>
<body>

<?php
try {
    $staff_name = $_POST['name'];
    $staff_pass = $_POST['pass'];

    $staff_name = htmlspecialchars($staff_name, ENT_QUOTES, 'UTF-8');
    $staff_pass = htmlspecialchars($staff_name, ENT_QUOTES, 'UTF-8');

    $dsn = 'mysql:dbname = shop;host = localhost;charset = utf8';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password);
    $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'INSERT INTO mst_staff(name, password) VALUES (?,?)';
    $stmt = $dbh -> prepare($sql);
    $data[] = $staff_name;
    $data[] = $staff_pass;
    $stmt -> execute($data);

    $dbh = null;


}


?>

</body>
</html>
