<?php
include 'function.php'; // Includi il file function.php 

$length = isset($_GET['length']) ? $_GET['length'] : 10;

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
</body>
</html>