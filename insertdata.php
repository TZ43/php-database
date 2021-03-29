<!DOCTYPE html>
<html>
<head>
    <title>Insertion</title>
</head>
<body>

    <h1>Insertion Data</h1>
    
     <?php 

    $hostname = "localhost";
    $username = "talha";
    $password = "123";
    $dbname = "task";
    // Mysqli Procedural
    $conn1 = mysqli_connect($hostname, $username, $password, $dbname);
    if(mysqli_connect_error()) {
        echo "Database Connection Failed!...";
        echo "<br>";
        echo mysqli_connect_error();
    }
    else {
        echo "Database Connection Successful!";

         $stmt1 = mysqli_prepare($conn1, "insert into user (Name,Dob,Gender,Email,Username,Password) values (?, ?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt1, "ssssss", $name, $dob , $gender , $email , $username , $password);
        $name = $_POST['name'];
       $dob = $_POST['dob'];
       $gender = $_POST['gender'];
       $email = $_POST['email'];
       $username = $_POST['username'];
       $password = $_POST['password'];
        $res = mysqli_stmt_execute($stmt1);

 

        if($res) {
            echo " <br> Data Insert Successful!";


        }
        else {
            echo "Failed to Insert Data.";
            echo "<br>";
            echo $conn1->error;
        }
         mysqli_close($conn1);
    }
?>
  <br>
   <a href="login.php">Login </a>
 
</body>
</html>