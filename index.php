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
    <section>

        <?php
            $passwordGenerata = generaPasswordCasuale($lunghezza);
            echo "Password casuale generata: $passwordGenerata";
        ?>

    </section>

   

    <main>
        <form action="./index.php" method="GET">
            <div class="d-flex justify-content-between mb-2">
                <label for="lunghezzaP">Lunghezza password</label>
                <input type="number" name="lunghezzaP" id="lunghezzaP">
            </div>
            <div class="d-flex justify-content-between">
                <label for="caratteri">Consenti ripetizioni uno o più caratteri:</label>
                <div class="me-5">
                    <div>
                        <input type="checkbox"> 
                        <label for="checkbox">si</label>
                    </div>
                    <div>
                        <input type="checkbox"> 
                        <label for="checkbox">no</label>
                    </div>
    
                </div>
            </div>
            <div class="modificheP me-3">
                <div>
                    <input type="checkbox"> 
                    <label for="checkbox">Lettere</label>
                </div>
                <div class="mt-2 mb-2">
                    <input type="checkbox">
                    <label for="checkbox">Numeri</label>
                </div>
                <div>
                    <input type="checkbox">
                    <label for="checkbox">Simboli</label>
                </div>
            
            </div>
            

                
                
            
            <button class="mt-5" type="submit">CREA</button>
            
        </form>

       
    </main>
   
    
</body>
</html>