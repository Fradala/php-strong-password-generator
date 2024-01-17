<?php


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