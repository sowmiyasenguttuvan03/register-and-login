<?php

  $conn = mysqli_connect("localhost", "root", "", "signup");
    
  // Check connection
  if($conn === false){
      die("ERROR: Could not connect. " 
          . mysqli_connect_error());
  }
    
  // Taking all 5 values from the form data(input)
  $username =  $_REQUEST['username'];
  $email = $_REQUEST['email'];
  $password =  $_REQUEST['password'];
  $cpassword = $_REQUEST['cpassword'];
    
  // Performing insert query execution
  // here our table name is college
  $sql = "INSERT INTO signup_page  VALUES ('$username', 
      '$email','$password','$cpassword')";
    
  if(mysqli_query($conn, $sql)){
      echo "<h3>data stored successfully</h3>"; 

  } else{
      echo "ERROR: Hush! Sorry $sql. " 
          . mysqli_error($conn);
  }
    
  // Close connection
  mysqli_close($conn);
  ?>