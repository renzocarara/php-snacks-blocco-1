<!-- Passare come parametri GET “name”, “mail” e “age” e verificare (cercando i
metodi che non conosciamo nella documentazione) che:
● “name” sia più lungo di 3 caratteri;
● “mail” contenga un punto e una chiocciola;
● “age” sia un numero.
Se tutto è ok, stampare “Accesso riuscito”, altrimenti “Accesso negato”
Nome repo: php-snacks-blocco-1 -->
<?php
function check_name($name)
{
    // controllo che il nome sia composto da almeno 3 caratteri, elimino gli eventuali spazi iniziali  o finali
    $is_passed = false;
    if (mb_strlen(trim($name)) > 3) {
        $is_passed = true;
    } else {
        // warn the user
    }

    return $is_passed;
}
function check_age($age)
{
    // controllo che il valore sia numerico e maggiore di zero
    $is_passed = false;
    if ((is_numeric($age)) && ($age>0)) {
        $is_passed = true;
    } else {
        // warn the user
    }

    return $is_passed;
}
function check_email($mail)
{
    // controllo che nell'indirizzo ci sia almeno un carattere '.' e un carattere '@'
    $is_passed = false;
    // NOTA: il controllo sul carattere '@' sarebbe superfluo, poichè l'HTML col tag <input> già ne verifica la presenza obbligatoria
    if ((strpos($mail, '.') !== false) &&((strpos($mail, '@') != false))) {
        $is_passed = true;
    } else {
        // warn the user
    }

    return $is_passed;
}
 ?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Boolean clss#8 - php-snacks-blocco-1 snak2</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>PHPSnack 2</h1>
        </header>
        <main>
            <?php
            // estraggo i parametri dall'array $_GET
            $name=$_GET['name'];
            $mail=$_GET['mail'];
            $age=$_GET['age'];
            ?>

            <!-- creo il codice per visualizzare i parametri letti -->
            <h3>Parametri inseriti:</h3>
            <p>Nome: <?php echo $name; ?></p>
            <p>E-mail: <?php echo $mail; ?></p>
            <p>Età: <?php echo $age; ?></p>
            <br>

            <?php
            // chiamo delle funzioni per controllare la validità dei dati in input
            if (check_name($name) && check_age($age) && check_email($mail)) {
                ?>
                <h2 class="box success"><?php echo 'Accesso riuscito'; ?></h2>
            <?php
            } else {
                ?>
                <h2 class="box fail"><?php echo 'Accesso negato'; ?></h2>
            <?php
            }
            ?>
        </main>
    </div>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <!-- popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
    <!-- js bootstrap -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    <script src="public/js/main.js"></script>
</body>

</html>
