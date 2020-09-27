<?php
session_start();
$_SESSION['message'] = '';
$_SESSION['message2'] = "";
$_SESSION['userName'] = '';
$_SESSION['userEmail'] = '';
$_SESSION['welcomeMsg'] = '';



$mysqli = new mysqli('localhost', 'root', 'rootpassword', 'diuohmsx_hostel');

$subscriberName = "";
$subscriberEmail = "";
$value = "";

if (isset($_POST['subscribe'])) { 
  $subscriberName = $mysqli->real_escape_string($_POST['subscriber-name']);
  $subscriberEmail = $mysqli->real_escape_string($_POST['subscriber-email']);

  $sql_e = "SELECT * FROM subscribers WHERE email='$subscriberEmail'";
  $qResult = $mysqli->query($sql_e);
  
    
      if($qResult) {  
        
          while($row=mysqli_fetch_array($qResult)){
          $value = $row['email']; 
          break;
          // echo $value;   
          }   
          
          if($value == $subscriberEmail) {
            $email_error = "Email already exit. Try another email please.";
            $_SESSION['welcomeMsg'] = $value." ".$email_error;
            header("Location: subscriber-welcome.php");
            exit();
          } 
          
          else if($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $subsName = $mysqli->real_escape_string($_POST['subscriber-name']);    
            $subsEmail = $mysqli->real_escape_string($_POST['subscriber-email']);
            
            $sql = "INSERT INTO subscribers (name, email)"
            . "VALUES ('$subsName', '$subsEmail')";
                    
                    if($mysqli->query($sql) === true){
                        
                        $_SESSION['userEmail'] = $subsEmail;      
                        $_SESSION['userName'] = $subsName ;
                        $_SESSION['welcomeMsg'] = "Welcome $subsName";                 
                        $_SESSION['message'] = "Thank You. Subscription succesful! ";
                        $_SESSION['message2'] = " has been added to Subscription list.";
                        header("Location: subscriber-welcome.php");
                    }
                    else {
                      $_SESSION['message'] = "Please try again. Subscription is not succesful!";
                  }
          }
          else {
            echo "Error, User could not be  added to Subscription!";
          }
    
     }
     else {
       echo "Unknown Error. Try to find error.";
     }
  }
  
else {
  echo "Error";          
}

?>








