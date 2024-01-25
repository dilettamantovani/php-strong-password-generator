<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW</title>
</head>

<body>
    <?php $number = ($_GET["number"]); ?>
    <?php $min = "1"; ?>
    <?php $max = $number; ?>
    <?php if ($number == intval($number, $base = 10)) {
        echo '<span>' . $number . '</span>';
    } else echo '<h1>' . "Insert a number" . '</h1>'; ?>
    <?php if ($number > 0 && $number) {
        $password = str_shuffle($number);
        echo '<h2>' . "Your password is:" . '</h2>' . '<h2>' . $password . '</h2>';
    } elseif (isset($_GET["lettere"])) {
        $letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $password = $password . str_shuffle($letters);
        var_dump($letters);
    }; ?>

</body>

</html>