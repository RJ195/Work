

<?php
//create variables

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itecdb";
$tablename = "dbtable";

$conn = new mysqli($servername,$username,$password,$dbname); 

if (isset($_POST['button1'])){
   $name=$_POST['name'];
    $Surname=$_POST['Sname']; 
    $Id =$_POST['ID'];
    $Pnum=$_POST['Pnum'];
    $Email=$_POST['email'];
   
     $ordernum=$_POST['OrderNum'];
   
    
    $query = "insert into dbtable (Name,Surname, ClientID,PhoneNumber,Email,OrderNum) 
    values ('$name','$Surname','$Id','$Pnum','$Email','$ordernum')";
   
    
    if ($conn->query($query) == TRUE) {
       // echo "Done";
        
    }  
   
    
    }
    
    
    if($conn->connect_error){
        
    //if it can't connnect to the db kill the thread and print err msg
	die("connection failed:".$conn->connect_error);
}
    else{
   
	$sql = "SELECT * FROM ".$tablename; //select all records from table
	
	$result = $conn->query($sql);
}
if( $result->num_rows > 0){ //oo approach
		//mysqli_num_rows($result) >0  pp approach
		
		//echo "the table contains ".$result->num_rows. "rows<br>"; //print amount of rows in table		
		while($row = $result->fetch_assoc()){
			//loop through table and fetch rows
		//echo "Name = ".$row["Name"]."<br>"; //print row currently fetched
            header("Location: ../index.html?SuccesfulOrderPlaced");
            
		}
				
	}else{
		echo"no data in table";
	}

mysqli_close($conn);//always remember to close the connection 

?>