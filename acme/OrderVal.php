
<?php

$name = $_POST['name'];
$Surname = $_POST['Sname'];
$email = $_POST['email'];
$Id = $_POST['id'];
$Pnum = $_POST['Pnum'];
$Email = $_POST['email'];
//$password = $_POST['Password'];   
$ordernum = $_POST['OrderNum'];   
    
require connect.php;
if(empty($_POST['name', 'surname'])){

        echo '<p class="login-status">Name cant be Empty</p>';


    }else if(empty($_POST['email'])){

      echo '<p class="login-status">Email cant be empty!</p>';

    }else if(empty($_POST['term'])){

      echo '<p class="login-status">Term cant be empty!</p>';

    }else{

         echo '<p class="login-status">Your Order has been placed</p>';
    
    $sql1 = $sql = "INSERT INTO dbtable (Name, Surname, ClientID, PhoneNumber, Email, OrderNum) VALUES ('$name','$Surname','$Id','$Pnum','$Email','$ordernum');"; 
	$result = $conn->query($sql1);
    
    
    
    
    ?>