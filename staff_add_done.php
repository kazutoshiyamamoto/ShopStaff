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
}


?>

</body>
</html>
