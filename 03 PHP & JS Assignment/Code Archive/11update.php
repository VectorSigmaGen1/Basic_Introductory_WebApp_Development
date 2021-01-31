 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record updated successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?> 