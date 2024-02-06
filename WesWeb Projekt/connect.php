

<?php
// db_connect.php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "gothia";

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// if($_SERVER['REQUEST_METHOD'] == 'POST' && isSet($_POST['submit'])) {
//     $conn= mysqli_connect('localhost', 'root', '', 'gothia' ) or die("Connection Failed" .mysqli_connect_error());
//     if(isset($_POST['namn']) && isset($_PSOT['epost']) && isset($_POST['mobil']) && isset($_POST['lagnamn'])) {
//         $name= $_POST['namn'];
//         $epost= $_POST['epost'];
//         $mobil= $_POST['mobil'];
//         $lagnamn= $_POST['lagnamn'];

//         $sql= "INSERT INTO 'lag' ('namn', 'epost', 'mobil', 'lagnamn') VALUES ('$name', '$epost', '$mobil', '$lagnamn')";

//         $query = mysqli_query($conn,$sql);
//         if($query) {
//             echo 'KLART';
//         }
//         else {
//             echo 'FEL UPPSTOD';
//         }
    
//     }

// }
?>