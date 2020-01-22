<!-- Creare un array di array: ogni array figlio avrà come chiave una data in questo
formato: DD-MM-YYYY (es 01-01-2007) e come valore un array di post
associati a quella data.
Stampare ogni data con i relativi post.

Qui l’array di esempio:
https://www.codepile.net/pile/R2K5d68z
Nome repo: php-snacks-blocco-1 -->

<!-- includo la struttura dati che contiene i posts -->
<?php
include 'posts_data.php';
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" /> -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style.css">
    <title>Boolean clss#8 - php-snacks-blocco-1 snack3</title>
</head>

<body>
    <div class="container">
        <header>
                <h1>PHPSnack 3</h1>
        </header>
        <main>

        <?php foreach ($posts as $date => $post_list) { ?>
            <h3><?php  echo 'Data: ' . $date ?></h3>
            <?php foreach ($post_list as $index => $single_post) { ?>
                <h4><?php  echo $single_post['title'] ?></h4>
                <p><?php  echo 'Autore: ' . $single_post['author'] ?></p>
                <p><?php  echo 'Testo: ' . $single_post['text'] ?></p>
            <?php } ?>
            <br><br>
        <?php }; ?>

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
