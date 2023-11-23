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

<?php 
function isPasswordLengthSpecified() {
    return isset($_GET['length']) && !empty($_GET['length']);
}

// questa condizione verifica se la richiesta HTTP è di tipo GET
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    // verifica se è stata specificata una lunghezza per la password nella richiesta GET utilizzando la funzione 
    if (isPasswordLengthSpecified()) {
         // ottiene e valida la lunghezza della password
        $passwordLength = filter_input(INPUT_GET, 'length', FILTER_VALIDATE_INT);
        // controlla se la lunghezza è un numero intero valido compreso tra 10 e 15
        if ($passwordLength !== false && $passwordLength >= 10 && $passwordLength <= 15) {
        // se la lunghezza è valida allora esce il messaggio positivo
            echo "La lunghezza della password specificata è valida: $passwordLength";
        }  else {
        // altrimenti negativo
            echo "Si prega di specificare la lunghezza della password.";
        }
    }
}

?>

</body>
</html>