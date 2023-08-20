<?php
  
    $uname=$_POST["uname"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $message=$_POST["message"];

    //connection database
    $conn=new mysqli('localhost','root','Root@12','mydatabase');
    if($conn->connect_error){
        echo "Connection faild :".$conn->connect_error;
    }
    else{
        $stmt=$conn->prepare("insert into information(name,phone,email,message)values(?,?,?,?)");
        $stmt->bind_param("ssss",$uname,$phone,$email,$message);
        $stmt->execute();
        echo "Regestration Successfully done..";
        $stmt->close();
        $conn->close();
    }

?>