<?php
$servername="localhost";
$username="root";
$password="";
$dbname="cwh demo db";



// Let's create a connection
$conn= new mysqli($servername,$username,$password,$dbname);
// checking connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
else {
    echo "<script> console.log('connection successful');</script>";    
    // echo "ok connection successful";
}


// echo "Hello world";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="contact.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&family=Lato&family=Open+Sans:wght@300&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&family=Open+Sans:wght@300&display=swap"
    rel="stylesheet">
  <title>Enquiry Form</title>
</head>

<body>
  <div class="header">
    <div id="navItems">
      <div class="logo">
        <span><a href="#">CodeWithHarry</a></span>
      </div>

      <div class="Menu">
        <ul class="">
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Courses</a></li>
          <li><a href="#" class="disabled">Blog</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <div class="community">
          <button class="btn btn-primary text-sm">Login</button>
          <button class="btn btn-primary text-sm">Signup</button>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div id="enquiry-form">
    <form action="" method="post">
      <div>
        <h1>Fill Out this form to connect with us</h1>
      </div>
      <div id="input-area">
      <input type="text" placeholder="Name" name="username">
        <input type="email" name="email" placeholder="Email">
        <input type="number" name="pnumber" placeholder="Phone Number">
        <textarea name="feedback" cols="30" rows="10" placeholder="Give Your Opinions here"></textarea>
        <button name="submit" class="btn-primary ">submit</button>

      </div>
      <?php
          
          if(isset($_POST["submit"])){
            $name = $_POST["username"];
            $email = $_POST["email"];
            $no = $_POST["pnumber"];
            $fdback;
          
            // echo "Name : ". $name . "<br>";
            // echo "$email<br>";
            // echo "$no<br>";
            // echo $fdback;

          $sql = "INSERT INTO `contact info` (`name` , `email` , `phone_number`) VALUES ('$name' , '$email' , '$no')";
          echo "<strong>";
          if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          echo "<br>";
          print_r($sql);
          echo "<br> <br> ";

          print_r ($_POST);

          echo "</strong>";
          header("Location: http://localhost/Cloning-Code-With-Harry-s-Website/contact.php");
          // exit();
          }
          ?>
    </form>
  </div>
</body>

</html>