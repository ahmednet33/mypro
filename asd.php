
<?php


$servername = "localhost";
$username = "root";
$password = "";
 $db = "asd";
 
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
mysqli_query($conn,"set character_set_server='utf8'");
mysqli_query($conn,"set names 'utf8'");
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}




if(isset($_POST["fname"]) )	{ 
  $fname = $_POST['fname'];
 // $lname = $_POST['lname'];   && trim($_POST["lname"])
  
 


$stmt = $conn->prepare("INSERT INTO data (fname) VALUES (?)");


//$stmt->bind_param("ss", $fname,$lname);
$stmt->bind_param('s',$fname);
$stmt->execute();



$execute = $stmt;

if ($execute) 
{
    //echo "saved";
	
  
   echo '<br>';
    echo '<br>';
//	 echo 'تم اضافة البيانات بنجاح';
	   echo '<br>';
    echo '<br>';
  echo $fname;
   echo '<br>';
 // echo $lname;
	
	
}
  
  
}
$conn->close();
?>