<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body class="bg-primary d-flex align-center flex-column">
    <h1>STRONG PASSWORD GENERATOR</h1>
    <div>
        <form action="password.php" method="get">
            <span>PW length: </span>
            <input type="text" placeholder="inserire un numero" name="number">
            <input type="checkbox" id="numbers" name="numeri" value="0">
            <label for="numbers">Numbers</label><br>
            <input type="checkbox" id="letters" name="lettere" value="1">
            <label for="letters">Letters</label><br>
            <input type="checkbox" id="symbols" name="simboli" value="2">
            <label for="symbols">Symbols</label><br><br>
            <button>Generate PW</button>
        </form>
    </div>
</body>

</html>