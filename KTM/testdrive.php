<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Test Drive</title>
    <link rel="stylesheet" href="./css/service.css">
    <link rel="shortcut icon" href="./images/ktm-logo.png" type="image/x-icon">
</head>
<body>
<body>
    <nav>
        <b>
        <a href="./index.php">Home</a>
        <a href="./duke.php">Duke-Bikes</a>
        <a href="./ktm.php">Ktm-Bikes</a>
        <a href="./service.php">Service</a>
        <a href="#">Test-Drive</a>
        </b>
    </nav>
    <br>
    <hr>
    <br><br>
    <div class="outform">
        <form action="#" method="post">
            <h1><u>Book Test Drive</u></h1>
            <label for="name">NAME</label><br>
            <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
            <span id="nameerr"></span>
            <br><br>
            <label for="cnumber">CONTACT NUMBER</label><br>
            <input type="text" name="cnumber" id="cnumber" placeholder="Your Contact Number" required>
            <span id="numerr"></span>
            <br><br>
            <label for="email">EMAIL</label><br>
            <input type="text" name="email" id="email" placeholder="Enter Your Email " required>
            <span id="emailerr"></span>
            <br><br>
            <label for="bmodel">BIKE MODEL</label><br>
            <input type="text" name="bmodel" id="bmodel" placeholder="Enter Your Bike Model" required>
            <span id="modelerr"></span>
            <br><br>
            <label for="bcolor">BIKE CC</label><br>
            <input type="text" name="bcolor" id="bcolor" placeholder="Enter Your Bike Colour" required>
            <span id="colorerr"></span>
            <br><br>
            <input type="submit" value="submit" name="sub">
        </form>
    </div>
    <br><br>
    <br><br>
    <!--footer section  -->
    <footer><center>Copyright&nbsp;&nbsp;  &copy;  &nbsp;&nbsp;kannan_smk </center></footer>
    <p>
        <?php
          error_reporting(E_ERROR | E_PARSE);
          $conn=new mysqli("localhost","root","","ktm");
          if($conn->connect_error){
              echo "$conn->connect_error";
              die("Connection error");
          }
          
            if(isset($_POST['sub'])){

                $name=$_POST['name'];
                $cnumber=$_POST['cnumber'];
                $email=$_POST['email'];
                $bmodel=$_POST['bmodel'];
                $bcolor=$_POST['bcolor'];
              
              
                $sql="INSERT INTO testdrive VALUES ('','$name','$cnumber','$email','$bmodel','$bcolor')";

                // check the values are insert or not insert
                if (mysqli_query($conn,$sql)) {
                    // echo "data stored in database successfully";
                    header("location:./complete.php");
                }else{
                    echo "ERROR:". mysqli_error($conn);
                }
            }

            $conn->close();
        ?>
    </p>
</body>
</html>