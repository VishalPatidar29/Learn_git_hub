<?php
 
 $host = "localhost";
 $username = "root";
 $password = "";
 $dbname = "com";
 
 $con = new  mysqli($host, $username, $password , $dbname);

 if($con->connect_error){

    die("failed connection");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
.container{

    margin:10px;
    
}
.form-control{
    margin:10px;
}

    </style>
</head>
<body>
    <div class="container">
<form action="" method="post" id="register">
    <label for="name">Name</label>
 <input type="text" name="name" class="form-control" id="name" ><br>
 <label for="name">Number</label>
 <input type="text" name="number" class="form-control" id="number" ><br>
 <label for="name">Email</label>
 <input type="text" name="email" class="form-control" id="email" ><br>
 <label for="name">Address</label>
 <input type="text" name="address" class="form-control" id="address" ><br>
<button type ="submit">SUBMIT</button>

</form>
</div>




</body>
</html>


