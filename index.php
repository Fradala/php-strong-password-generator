<?php

//$lunghezza = $_GET['lunghezza'];

function generaPasswordCasuale($lunghezza = 4) {
    // Caratteri password
    $caratteri = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-_=+';

    // Lunghezza caratteri disponibili
    $lunghezzaCaratteri = strlen($caratteri);

    
    $password = '';

    // Genera la password casuale
    for ($i = 0; $i < $lunghezza; $i++) {
       
        $carattereCasuale = $caratteri[rand(0, $lunghezzaCaratteri - 1)];

        // Aggiungi il carattere casuale alla password
        $password .= $carattereCasuale;
    }

    
    return $password;
}


$passwordGenerata = generaPasswordCasuale();
echo "Password casuale generata: $passwordGenerata";

?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="./styles/styles.css">
</head>


<body>
    <header>
        <h1>
            Strong Password Generator
        </h1>
        <h2>
            Genera una password sicura
        </h2>
    </header>

    


    <form action="./index.php" method="GET">
        <div>
            <label for="lunghezzaP">inserisci la lunghezza della password</label>
            <input type="text" name="lunghezzaP" id="lunghezzaP">
        </div>
        <button type="submit">Crea</button>
    </form>
    
</body>
</html>