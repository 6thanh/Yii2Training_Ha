<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increase Odd - Decrease Even</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="text" name="inputNumber" value="<?php echo $inputNumber;?>">
<input type="number" name="times" value="<?php echo $times;?>">
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>