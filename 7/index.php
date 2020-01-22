<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno
avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
Nome repo: php-snacks-blocco-1 -->
<!DOCTYPE html>
<html lang="it">
<?php include 'class_data.php' ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" /> -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style.css">
    <title>Boolean clss#8 - php-snacks-blocco-1 snack7</title>
</head>

<body>
<header>
    <div class="container">
        <header>
                <h1>PHPSnack 7</h1>
        </header>
        <main>

<?php foreach ($class as $student) {  ?>

    <h3>Studente:</h3>

    <p>Nome: <?php echo $student['name'] ?></p>
    <p>Cognome: <?php echo $student['lastname'] ?></p>
        <?php
            $total=0;
            foreach ($student['grades'] as $matter => $grade) {
                $total += $grade;
            }
            $average = round($total / count($student['grades']), 2); ?>

            <p>Media voti: <?php echo $average ?></p>

<?php } ?>

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
