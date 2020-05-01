$servername = "localhost";
$dbUsername = "root";
$dbPassword = "12345";
$dbName="loginsystemtut";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
}
