<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>スタッフ一覧</title>
</head>
<body>

<?php

try {
    $dsn = 'mysql:dbname = shop;host = localhost;charset = utf8';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password);
    $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch {

}

?>

</body>
</html>
