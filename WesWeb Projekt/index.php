
<!Doctype html>¨
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css" /> 
    <title>Registrering</title>
</head>

<h1>Registrera dig till gothia cup!</h1>
<body background="fotboll1.png">
    <div class="form"><h2>Kontakt information</h2></div>
    <form action='index.php' method="POST" class=form>
        <label for="user">Namn:</label>
        <input type='text' name='namn' id="namn" required/> <br> <br>

        <label for="email">Epost:</label>
        <input type='text' name='epost' id="epost" required/> <br> <br>

        <label for="mobil">Telefonnummer:</label>
        <input type='text' name='mobil' id="mobil" required/> <br> <br>

        <label for="lagnamn">lagnamn:</label>
        <input type='text' name='lagnamn' id="lagnamn" required/> <br> <br>

        <input type='submit' name='submit' id="submit" />
    </form>

    <?php 
    include 'connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $namn = $_POST["namn"];
        $epost = $_POST["epost"];
        $mobil = $_POST["mobil"];
        $lagnamn = $_POST["lagnamn"];
        $insertQuery = "INSERT INTO lag (namn,email,nummer,lagnamn) VALUES (' $namn', '$epost',  '$mobil',  '$lagnamn')";
        $conn->query($insertQuery);
      }
    
      $tasksQuery = "SELECT * FROM lag";
      $tasksResult = $conn->query($tasksQuery);

    ?>

</body>
</html>