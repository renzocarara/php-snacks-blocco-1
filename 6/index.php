<!-- Utilizzare questo array: https://pastebin.com/CkX3680A.
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i
PM in un rettangolo verde.
Nome repo: php-snacks-blocco-1 -->

<?php
include 'staff_data.php'
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
    <title>Boolean clss#8 - php-snacks-blocco-1 snack6</title>
</head>

<body>
<header>
    <div class="container">
        <header>
                <h1>PHPSnack 6</h1>
        </header>
        <main>
<?php foreach ($db as $role => $list) {
    if ($role == 'teachers') { ?>
            <!-- visualizzo i teachers -->
            <h3>Teachers:</h3>
            <div class="teachers">
                 <!-- scorro la la lista dei teacher -->
                <?php foreach ($list as $teacher) { ?>
                    <!-- per ogni teacher visualizzo nome e cognome     -->
                    <p>Nome:<?php  echo  $teacher['name']; ?></p>
                    <p>Cognome:<?php  echo  $teacher['lastname']; ?></p>
                <?php }  ?>
            </div>
<?php
    } else { ?>
            <!-- visualizzo i PM -->
            <h3>PM:</h3>
            <div class="pm">
                 <!-- scorro la la lista dei PM -->
                <?php foreach ($list as $pm) { ?>
                    <!-- per ogni PM visualizzo nome e cognome     -->
                    <p>Nome:<?php  echo  $pm['name']; ?></p>
                    <p>Cognome:<?php  echo  $pm['lastname']; ?></p>
                <?php }  ?>
            </div>

     <?php } ?>

        <?php
}  ?>


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
