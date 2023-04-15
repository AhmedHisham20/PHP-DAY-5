<?php 
session_start();
// echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';
include ('header.php');

// unset($_SESSION["$uname"]);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
  background-color: blue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: darkblue;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  
}

</style>
<body>
<div style="padding: 20px; height: 500px;" >
                 <h1>Login</h1><hr>
                <h5>Please fill this form to login :</h5>
        <form action="<?php $_PHP_SELF ?>" method="post" >           
                User Name : <br>
                <input type="text" name="uname"> <br>
                Password : <br>
                <input type="password" value="" name="password"> <br>
                
                <input type="submit" value="LogIn" name="submit">         
        </form>
    </div>

    
<?php 


$dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname ='day 5';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//    if(! $conn ) {
//     die('Could not connect: ' . mysqli_error($conn));
//  }
 
//  echo 'Connected successfully';


if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
  $uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
  if(!empty($uname) && !empty($pass)){

    $sql = "SELECT * FROM users WHERE user_name='$uname' AND user_password='$pass'";

		$result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['user_password'] === $pass) {
            	// echo"hello" . $uname;
              $_SESSION['user_name'] = $row['user_name'];
            	// $_SESSION['name'] = $row['name'];
              header("Location: home.php");
              
              exit();
            }
  }else{
    // header("Location: home.php?error=Incorect User name or password");
    // echo "<p class='in'> incorrect username or password </p>";
    echo '<script>alert("incorrect username or password")</script>';
        exit();
  }







}

}




?>

</body>
</html> 