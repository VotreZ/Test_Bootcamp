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
        <input type="number" name="angka" value="Masukkan Angka">
        <input type="submit" value="INPUT">
    </form>
    <?php
    error_reporting(0);
    $angka = $_POST['angka'];
    for ($i = 1; $i <= $angka; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz <br />";
        } elseif ($i % 3 == 0) {
            echo "Fizz <br />";
        } elseif ($i % 5 == 0) {
            echo "Buzz <br />";
        } else {
            echo $i . "<br />";
        }
    }
    ?>
</body>

</html>