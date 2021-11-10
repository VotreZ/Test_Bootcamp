<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="string">
        <input type="submit" value="INPUT">
    </form>
    <?php
    $string = $_POST['string'];
    $balik = strrev($string);
	if ($string == $balik) {
        echo "<p>" . $string;
        echo "<p><b>ini palindrome</p>";
    } else {
        echo "<p>" . $string;
        echo "<p><b>bukan palindrome</p>";
    }
    ?>
</body>

</html>