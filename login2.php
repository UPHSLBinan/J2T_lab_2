$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "yesha";

$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$Age = $_POST['Age'];
$Birthday = $_POST['Birthday'];
$Address = $_POST['Address'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (Username, Password, Fname, Lname, Age, Birthday, Address)
        VALUES ('".$Username."', '".$Password."', '".$Fname."', '".$Lname."', '".$Age."', '".$Birthday."', '".$Address."')";

if ($conn->query($sql) === TRUE) {
    echo "Registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();