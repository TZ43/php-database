
<!DOCTYPE html>
<html>
<head>
    <title>Registration form</title>
</head>
<body>
   
    <h1>Registration Form</h1>
    <br>
<form action="insertdata.php"   method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <br>
        <br>
        <label for="dob">Date of Birth: </label>
       <input type="date" id="dob" name="dob"
       value="2000-12-12">

      <br>
      <br>


        <label for="gender">Gender</label>
        <input type="radio" name="gender" id="male" value="male" required>
        <label for="male">Male</label>

        <input type="radio" name="gender" id="female" value="female" required>

        <label for="female">Female</label>

        <br>
        <br>

         
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>
        <br> 
        <br>
        <label for="username">User Name:</label>
        <input type="text" name="username" id="username" required>

        <br>
        <br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <br>
        <br>
         <input type="submit" value="Signup">
</form>

</body>
</html>

