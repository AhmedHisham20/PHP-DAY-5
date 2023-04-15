<?php include ('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
</head>
<style>
        input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  
}

</style>
<body>
    
<div style="padding: 20px; height: 500px;" >
                 <h2>Registration Form</h2><hr>
                <h5>Please fill this form to sign up :</h5>
        <form action="<?php $_PHP_SELF ?>" method="post" >           
                User Name : <br>
                <input type="text" name="name"> <br>
                Password : <br>
                <input type="password" value="" name="password"> <br>
                
                <a href="login.php"><input type="submit" value="Sign Up" name="submit"></a>            
        </form>
    </div>

<?php
session_start();

$dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname ='day 5';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//    if(! $conn ) {
//     die('Could not connect: ' . mysqli_error($conn));
//  }
 
//  echo 'Connected successfully';

$name= $_POST['name'];
$password= $_POST['password'];
$submit= $_POST['submit'];

if( !empty($submit)){
if( !empty($name) && !empty($password) ) {
  if($submit = 'submit'){header("Location: login.php");}
    $sql = "INSERT INTO users  VALUES ('$name',
                '$password')";
    
     $retval = mysqli_query( $conn,$sql );
    //  if(! $retval ) {
    //     die('Could not insert to table: ' . mysqli_error($conn));
    //  }
      
    //  echo "<br>Data inserted to table successfully\n";
}    
}
mysqli_close($conn);

?>



</body>
</html>