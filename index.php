<?php

include __DIR__ . '/function.php';

$lunghezza = $_GET['lunghezzaP'];







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

   

    <main>
        <form action="./index.php" method="GET">
            <div>
                <label for="lunghezzaP">inserisci la lunghezza della password</label>
                <input type="number" name="lunghezzaP" id="lunghezzaP">
                <button type="submit">CREA</button>
            </div>
            
        </form>

        <?php
            $passwordGenerata = generaPasswordCasuale($lunghezza);
            echo "Password casuale generata: $passwordGenerata";
        ?>
    </main>
   
    
</body>
</html>