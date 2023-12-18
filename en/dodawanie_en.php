<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULATOR</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <!--czcionka-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="banner">
        <h1>CALCULATOR</h1>

        <div class="language">
            <a href="../pl/dzielenie.php"><img src="../img/poland.png" alt=""></a>
            <a href="dzielenie_en.php"><img src="../img/united-kingdom.png" alt=""></a>
        </div>
    </div>

    <div class="menu">
        <a href="dodawanie_en.php">Addition</a>
        <a href="odejmowanie_en.php">Subtraction</a>
        <a href="mnozenie_en.php">Multiplication</a>
        <a href="dzielenie_en.php">Division</a><a href=""></a>
    </div>

    <section class="glowny">

        <div class="p_pierwsze">
            <p id="liczba1"></p>
        </div>

        <div class="plus">
            <p>+</p>
        </div>

        <div class="p_drugie">
            <p id="liczba2"></p>
        </div>

        <div class="plus">
            <p>=</p>
        </div>

        <div id="wynik">
            <input type="text" id="wynik1" name="wartosc">
        </div>

        <script>

            function losuj(){
            let x = Math.floor(Math.random() * 100) + 1;
            let y = Math.floor(Math.random() * 100) + 1;
            
            document.getElementById("liczba1").innerHTML = x;
            document.getElementById("liczba2").innerHTML = y;
            document.getElementById("wynik1").value = "";
            dodaj = x+y;
            }

            losuj()
            var poprawne = 0;
            var l_zadan = 0;

            function dodawanie(){


            if(dodaj == document.getElementById("wynik1").value){
                document.getElementById("test").innerHTML = "Great " + "<img src='../img/smile.png' alt='happy'>";
                l_zadan++;
                poprawne++;
            }

            else if(dodaj !== document.getElementById("wynik1").value && document.getElementById("wynik1").value !== ''){
                document.getElementById("test").innerHTML = "Bad " + "<img src='../img/dissapointment.png' alt='dissapointment'>";
                l_zadan++;
            }

            else if(document.getElementById("wynik1").value == ""){
                document.getElementById("test").innerHTML = "Please write an answer";
            }

            if(l_zadan == 10|| l_zadan > 10){
                document.getElementById("start").style.backgroundColor = "cornflowerblue";
                document.getElementById("dobre").innerHTML = "<div class = 'end'>The test has been completed" + "</br>" + "Your score: " + poprawne + "<br/>" + "<form action='sprawdzian.php' method='post' name='formularz'>Name: <input type='text' name='imie'> Surname: <input type='text' name='nazwisko'> Grade: <input name='klasa' type='text'><input type='hidden' name='punkty' value=''></br><button name='zapisz'>Send</button></form></div>";
                document.getElementById("punkty").value = poprawne;
                document.getElementById("start").innerHTML = "";
                document.getElementById("start").style.display = "none";
                document.getElementById("test").style.display = "none";
            }

        }
       
        

        
        
    
    </script>


    <?php
        $conn = mysqli_connect("localhost", "root", "", "kalkulator");
        if (isset($_POST['zapisz'])){
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $klasa = $_POST['klasa'];
        $punkty = $_POST['punkty'];
        $rodzaj_testu = $_POST['rodzaj_testu'];
        $sql1 = "INSERT INTO `sprawdziany` (Imie, Nazwisko, Klasa, Punkty, Rodzaj_testu) VALUES('$imie','$nazwisko','$klasa','$punkty','$rodzaj_testu')";
        $wynik1 = mysqli_query($conn, $sql1);
        
    }
    ?>


    <div class="button-container">
        <button type="submit" onclick="dodawanie(), losuj()" id="start">CHECK</button>
    </div>
    
        <p id="test"></p>
        <p id="dobre"></p>
        <p id="punkty"></p>
    </section>

    <div class="menu">
        <a href="dodawanie_en.php">Exam</a>
        <a href="../index_en.html">Learning</a>

    </div>

    <div class="stopka">
        <p>Mathematics learning page</p>
    </div>


</body>
</html>