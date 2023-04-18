<?php

    // create connection
    // $conn=new mysqli("localhost","root","","");
    // if($conn->connect_error){
    // echo "$conn->connect_error";
    // die("Connection error");
    // }else{
    // echo "connected successfully"."<br>";
    // }

    // // create database
    // $sql="CREATE DATABASE ktm";
    // if ($conn->query($sql)===TRUE) {
    //     echo"Database Create Successfully";
    // }else{
    //     echo"Error Creating Database";
    // }


    //     // close connection
    // $conn->close();


    //  create connection
     $conn=new mysqli("localhost","root","","ktm");
     if($conn->connect_error){
     echo "$conn->connect_error";
     die("Connection error");
     }else{
     echo "connected successfully"."<br>";
     }
 


    // // create table for duke bikes
    // $sql = "CREATE TABLE duke_bike(
    //          d_id INT(20)AUTO_INCREMENT PRIMARY KEY,
    //          name VARCHAR(30), 
    //          price VARCHAR(30),
    //          engine_type VARCHAR(30),
    //          maximum_power VARCHAR(30),
    //          Maximum_torque VARCHAR(30),
    //          front_brake VARCHAR(30),
    //          rear_brake VARCHAR(30),
    //          petrol_capacity VARCHAR(30)
    //          )";

    //     if ($conn->query($sql)=== TRUE) {
    //     echo "duke bikes Table created successfully"."<br>";
    //     } else {
    //     echo "Error creating table: " . $conn->error;
    //     }

    // //duke bike details add to database
    // $sql="INSERT INTO `duke_bike`(`name`, `price`, `engine_type`, `maximum_power`, `Maximum_torque`, `front_brake`, `rear_brake`, `petrol_capacity`) VALUES
    //  ('KTM 1290 Super Duke R','12.50Lakh','Liquid cooled, 2-cylinder, 4-stroke, engine','179.4 PS','140 Nm','Disc(ABS)','Disc(ABS)','16 L'),
    //  ('KTM 890 DUKE R','10Lakh','2 cylinder, 4 stroke,Liquid cooled,DOHC Parallel twin','115.5 PS','92 Nm','Disc(ABS)','Disc(ABS)','14 L'),
    //  ('KTM 790 DUKE','8.63Lakh',' liquid-cooled 4-stroke parallel-twin','104.6 PS','86 Nm','Disc(ABS)','Disc(ABS)','14 L'),
    //  ('KTM 390 DUKE','2.96Lakh','Single Cylinder, Liquid Cooled, DOHC, FI Engine','43.5 PS','35 Nm','Disc(ABS)','Disc(ABS)','11 L'),
    //  ('KTM 200 DUKE','1.92Lakh','Single Cylinder, Liquid Cooled, DOHC, FI Engine','25.83 PS','19.5 Nm','Disc(ABS)','Disc(ABS)','13.5 L')
    //  ";

    // // check the values are insert or not insert
    // if (mysqli_query($conn,$sql)) {
    //     echo "data stored in database successfully";
    // }else{
    //     echo "ERROR:". mysqli_error($conn);
    // }



    // // create table for ktm bikes
    // $sql = "CREATE TABLE ktm_bike(
    //             k_id INT(20)AUTO_INCREMENT PRIMARY KEY,
    //              name VARCHAR(30), 
    //              price VARCHAR(30),
    //              engine_type VARCHAR(30),
    //              maximum_power VARCHAR(30),
    //              Maximum_torque VARCHAR(30),
    //              front_brake VARCHAR(30),
    //              rear_brake VARCHAR(30),
    //              petrol_capacity VARCHAR(30)
    //         )";


    // if ($conn->query($sql)=== TRUE) {
    // echo "ktm bikes Table created successfully"."<br>";
    // } else {
    //     echo "Error creating table: " . $conn->error;
    // }


    // // ktm bike details add to database
    // $sql="INSERT INTO `ktm_bike`(`name`, `price`, `engine_type`, `maximum_power`, `Maximum_torque`, `front_brake`, `rear_brake`, `petrol_capacity`) VALUES 
    // ('KTM RC 390','3.14Lakh','Liquid cooled,1-cylinder, 4-stroke engine','43.5 PS','37 Nm','Disc(ABS)','Disc(ABS)','13 L'),
    // ('KTM RC 200','2.34 Lakh','Liquid cooled,1-cylinder, 4-stroke engine','25 PS','19.2 Nm','Disc(ABS)','Disc(ABS)','13 L'),
    // ('KTM RC 125','1.80Lakh','Liquid cooled,1-cylinder, 4-stroke engine','14.5 PS','12 Nm','Disc(ABS)','Disc(ABS)','11 L')
    // ";

    // // check the values are insert or not insert
    // if (mysqli_query($conn,$sql)) {
    //     echo "data stored in database successfully";
    // }else{
    //     echo "ERROR:". mysqli_error($conn);
    // }

    // // create table for booking
    // $sql = "CREATE TABLE booking(
    //             id INT(20)AUTO_INCREMENT PRIMARY KEY,
    //              name VARCHAR(30), 
    //              number VARCHAR(30),
    //              address VARCHAR(30),
    //              bikename VARCHAR(30),
    //              price VARCHAR(30)
    //         )";

    // if ($conn->query($sql)=== TRUE) {
    // echo "booking Table created successfully"."<br>";
    // } else {
    //     echo "Error creating table: " . $conn->error;
    // }


    // // create table for service 
    // $sql = "CREATE TABLE service(
    //             id INT(20)AUTO_INCREMENT PRIMARY KEY,
    //              name VARCHAR(30), 
    //              number VARCHAR(30),
    //              email VARCHAR(30),
    //              date VARCHAR(30),
    //              model VARCHAR(30),
    //              color VARCHAR(30),
    //              problem VARCHAR(200)
    //         )";
    
    // if ($conn->query($sql)=== TRUE) {
    // echo "service Table created successfully"."<br>";
    // } else {
    //     echo "Error creating table: " . $conn->error;
    // }
    


    // // create table for test drive 
    // $sql = "CREATE TABLE testdrive(
    //             id INT(20)AUTO_INCREMENT PRIMARY KEY,
    //              name VARCHAR(30), 
    //              number VARCHAR(30),
    //              email VARCHAR(30),
    //              model VARCHAR(30),
    //              cc VARCHAR(30)
    //          )";

    // if ($conn->query($sql)=== TRUE) {
    // echo "testdrive Table created successfully"."<br>";
    // } else {
    //     echo "Error creating table: " . $conn->error;
    // }


    // // close connection
    // $conn->close();
?>