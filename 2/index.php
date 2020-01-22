<!-- Passare come parametri GET “name”, “mail” e “age” e verificare (cercando i
metodi che non conosciamo nella documentazione) che:
● “name” sia più lungo di 3 caratteri;
● “mail” contenga un punto e una chiocciola;
● “age” sia un numero.
Se tutto è ok, stampare “Accesso riuscito”, altrimenti “Accesso negato”
Nome repo: php-snacks-blocco-1 -->
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" /> -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style.css">
    <title>Boolean clss#8 - php-snacks-blocco-1 snak2</title>
</head>

<body>
    <div class="container">
        <header>
                <h1>PHPSnack 2</h1>
        </header>
        <main>

        <form class="" action="check_user.php" method="get">
            <div class="input-box">
                <label for="name">Nome:</label>
                <input type="text" name="name" value="Renzo" maxlength="80" required>
            </div>
            <div class="input-box">
                <label for="mail">E-mail:</label>
                <input type="email" name="mail" value="renzo@me.com" maxlength="50" required>
            </div>
            <div class="input-box">
                <label for="age">Età:</label>
                <input type="text" name="age" value="52" maxlength="3" required>
            </div>
            <div>
                <input type="submit" name="send" value="Invia">
            </div>
        </form>

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
