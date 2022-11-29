<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "social-media-app";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



if(isset($_POST['firstName'])) {
  $firstName = $_POST['firstName'];
  $lastName= $_POST['lastName'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];
  
  // inserting data in to DB
  $sql = "INSERT INTO user_details (name, last_name, number, email, password, gender) VALUES ('$firstName', '$lastName', '$number', '$email', '$password', '$gender')";
  $result = mysqli_query($conn, $sql);
}
$sql = null;

// checking if user is loged in
function checkLogin($conn) {
  if(isset($_POST["loginBtn"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user_details WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);    
    if ($user) {
      if ($password == $user["password"]) {
          echo "working";
          //session_start();
          //$_SESSION["user"] = "yes";
          header("Location: home.php");
          die();
        } else {
          echo $user['password'];
        }
  }
}
}

checkLogin($conn);
?>




