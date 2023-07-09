<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klub wędkowania</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <div id="baner"> <h2>Wędkuj z nami!</h2></div>
    <div id="kontent">
        <div id="lewy"><img src="ryba2.jpg" alt="Szczupak"></div>
        <div id="prawy"><h3>Ryby spokojnego żeru (białe)</h3>
    
        <?php
        $conn = new mysqli("localhost", "root", "", "wedkowanie");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $sql="select id, nazwa, wystepowanie from Ryby where styl_zycia = 2;";
    $result=$conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row["id"]. " ". $row["nazwa"]. " ". $row["wystepowanie"]."</br>";
        }
    }
    else echo "błąd";
    ?>
        <ol>
            <li><a href="https://wedkuje.pl/" target="_blank">Odwiedź także</a></li>
            <li><a href="http://www.pzw.org.pl/" target="_self">Polski Związek Wędkarski</a></li>
        </ol>
    </div>
    </div>
    <div id="stopka">
        <p>Stronę wykonał: PESEL</p>
    </div>
</body>
</html>