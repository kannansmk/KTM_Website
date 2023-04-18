<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now!</title>
    <link rel="stylesheet" href="./css/booking.css">
    <link rel="shortcut icon" href="./images/ktm-logo.png" type="image/x-icon">
</head>
<body>
    <p>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $conn=new mysqli("localhost","root","","ktm");
        if($conn->connect_error){
            echo "$conn->connect_error";
            die("Connection error");
        }
        
        $sql="SELECT * FROM duke_bike where d_id='{$_GET["d_id"]}'";
        $res=$conn->query($sql);
        if($res->num_rows>0) {
            echo '<form action="'.$_SERVER["REQUEST_URI"].'" method="post">';
            if($row=$res->fetch_assoc()){
                $duke_bike=  '
                <div>    
                <h2><strong>'. $row['name'] .'</strong></h2>
                <h3>price : '. $row['price'].' </h3>
                <p><b>Engine :</b> '. $row['engine_type'].' </p>
                <p><b>Maximum-Power :</b> '. $row['maximum_power'] .'</p>
                <p><b>Maximum-Torque :</b> '. $row['Maximum_torque'] .'</p>
                <p><b>Front-Brake :</b> '. $row['front_brake'] .'</p>
                <p><b>Rear-Brake :</b> '. $row['rear_brake'] .'</p>
                <p><b>Petrol-Capacity :</b> '. $row['petrol_capacity'] .'</p>
                </div>
                </form>
                ';
                }
                }  
                
        $sql="SELECT * FROM ktm_bike where k_id='{$_GET["k_id"]}'";
        $res=$conn->query($sql);
        if($res->num_rows>0) {
            echo '<form action="'.$_SERVER["REQUEST_URI"].'" method="post">';
            if($row=$res->fetch_assoc()){
                $ktm_bike=  '
                <div>    
                <h2><strong>'. $row['name'] .'</strong></h2>
                <h3>price : '. $row['price'].' </h3>
                <p><b>Engine :</b> '. $row['engine_type'].' </p>
                <p><b>Maximum-Power :</b> '. $row['maximum_power'] .'</p>
                <p><b>Maximum-Torque :</b> '. $row['Maximum_torque'] .'</p>
                <p><b>Front-Brake :</b> '. $row['front_brake'] .'</p>
                <p><b>Rear-Brake :</b> '. $row['rear_brake'] .'</p>
                <p><b>Petrol-Capacity :</b> '. $row['petrol_capacity'] .'</p>
                </div>
                </form>
                ';
                }
                }

                
                ?>
    </p>
    <nav>
        <b>
        <a href="./index.php">Home</a>
        <a href="./duke.php">Duke-Bikes</a>
        <a href="./ktm.php">Ktm-Bikes</a>
        <a href="./service.php">Service</a>
        <a href="./testdrive.php">Test-Drive</a>
        </b>
    </nav>
    <br>
    <hr>
    <div class="divleft">
        <h1>Bike Details!</h1><hr>
        <?php  
        echo $duke_bike;
        echo $ktm_bike;
        ?>
    </div>
    <div class="divright">
        <h1>Book Now!</h1><hr><br>
    <form action="#" method="post">
        <label for="name">NAME:</label><br><input type="text" name="name" id="name" required><br><br>
        <label for="number">CONTACT NUMBER:</label><br><input type="text" name="number" id="number" required><br><br>
        <label for="address">ADDRESS:</label><br><input type="text" name="address" id="address" required><br><br>
        <label for="bikename">BIKE NAME:</label><br><input type="text" name="bike" id="bikename" value="<?php echo $row['name']; ?>"><br><br>
        <label for="bikeprice">BIKE PRICE:</label><br><input type="text" name="price" id="price" value="<?php echo $row['price'];?>"><br><br>
        <input type="submit" value="submit" name="sub">
    </form>
</div>    
<p>
    <?php

    if(isset($_POST['sub'])){
        $name=$_POST['name'];
        $number=$_POST['number'];
        $address=$_POST['address'];
        $bname=$row['name'];
        $bprice=$row['price'];
     
        $sql="INSERT INTO booking VALUES ('','$name','$number','$address','$bname','$bprice')";
        
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
<p>
    
</p>
</html>