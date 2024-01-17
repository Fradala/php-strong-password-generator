<?php

$lunghezza = $_GET['lunghezza'];

function generaPasswordCasuale($lunghezza = $lunghezza) {
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


<form action="./index.php" method="GET">
    <div>
        <label for="lunghezzaP">inserisci la lunghezza della password</label>
        <input type="text" name="lunghezzaP" id="lunghezzaP">
    </div>
    <button type="submit">Crea</button>
</form>