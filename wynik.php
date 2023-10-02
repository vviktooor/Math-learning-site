<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <!--czcionka-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="banner">
        <h1>KALKULATOR</h1>
    </div>

    <div class="menu">
        <a href="dodawanie.php">Dodawanie</a>
        <a href="odejmowanie.php">Odejmowanie</a>
        <a href="mnozenie.php">Mnożenie</a>
        <a href="dzielenie.php">Dzielenie</a><a href=""></a>
    </div>

    <section class="glowny">

        <div class="wynik">
            <?php
                $conn = mysqli_connect("localhost", "root", "", "kalkulator");
                $sql2 = "SELECT `dataZadania`, `miesiac`, `wpis` FROM `zadania` WHERE `miesiac` = 'sierpien';";
                $wynik2 = mysqli_query($conn, $sql2);
                while($row1 = mysqli_fetch_array($wynik2)){
                    echo "<div class='blok'><h6>".$row1[0].", ".$row1[1]."</h6><p>".$row1[2]."</p></div>";
                }
            ?>
        </div>
        
    </section>

    <div class="menu">
        <a href="dodawanie.php">Sprawdzian</a>
        <a href="index.html">Nauka</a>

    </div>

    <div class="stopka">
        <p>Strona do nauki matematyki</p>
    </div>


</body>
</html>