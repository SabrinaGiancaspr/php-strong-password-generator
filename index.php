<?php 
$length= $_GET['length']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di Password Sicure</title>
</head>
<body>
    <h2>Generatore di Password Sicure</h2>

    <!-- Form per inserire la lunghezza della password -->
    <form action="index.php" method="GET">
        <label for="length">Lunghezza della Password:</label>
        <input type="number" id="length" name="length" min="10" max="15" required>
        <input type="submit" value="Genera Password">
    </form>
    <div>
        <span>La tua password è: <?php echo generateRandomPassword($length) ?> </span>
    </div>

    <?php 

    function generateRandomPassword($length) {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?@';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $password .= $alphabet[rand(0, strlen($alphabet) - 1)];
    }

    return $password;
    }
?>
</body>
</html>