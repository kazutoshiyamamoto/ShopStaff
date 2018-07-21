<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>入力チェック画面</title>
</head>
<body>

<?php

$staff_name = $POST['name'];
$staff_pass = $POST['pass'];
$staff_pass2 = $POST['pass2'];

$staff_name = htmlspecialchars($staff_name, ENT_QUOTES, 'UTF-8');
$staff_pass = htmlspecialchars($staff_pass, ENT_QUOTES, 'UTF-8');
$staff_pass2 = htmlspecialchars($staff_pass2, ENT_QUOTES, 'UTF-8');

if(staff_name == '') {
    print 'スタッフ名が入力されていません。<br />';
} else {
    print 'スタッフ名';
    print $staff_name;
    print '<br />';
}

if($staff_pass == '') {
    print 'パスワードが入力されていません。<br />';
}

if($staff_pass != $staff_pass2) {
    print 'パスワードが一致しません。<br />';
}

?>
</body>
</html>
