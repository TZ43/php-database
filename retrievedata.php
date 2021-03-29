<!DOCTYPE html>
<html>
<head>
    <title>Retrieve Data</title>
</head>
<body>

    <h1>Retrieve Data</h1>
    <?php 

    $hostname = "localhost";
    $username = "talha";
    $password = "123";
    $dbname = "task";
    
    $conn1 = new mysqli($hostname, $username, $password, $dbname);
    if($conn1->connect_errno) {
        echo "1. Database Connection Failed!...";
        echo "<br>";
        echo $conn1->connect_error;
    }

    else {
        echo "1. Database Connection Successful!";
      echo "<br>";

        $stmt1 = $conn1->prepare("select Id, Name,Email, Username from user where Username = ? && Password = ?");
        $stmt1->bind_param("ss", $username , $password);
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $stmt1->execute();
        $res1 = $stmt1->get_result();
        $user = $res1->fetch_assoc();

        echo "<br>";
        echo "<br>";
        echo "Id: " .$user['Id'];
        echo "<br>";
        echo "Name: " .$user['Name'];
        echo "<br>";
        echo "Email: " .$user['Email'];
        echo "<br>";
        echo "Username: " .$user['Username'];
        echo "<br>";
        echo "<br>";

 }
    $conn1->close();
    ?>

</body>
</html>