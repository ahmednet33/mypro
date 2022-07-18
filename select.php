<style>


</style>
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




 $sql = 'SELECT * FROM data order by id';  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
 
//header("Refresh:5");


    echo   
	
	 "<div class='msgln'><span class='chat-time'>".date("g:i A")."</span> <b class='user-name'>".$row['fname']."</b> "."<br></div>";
	
	
	
	
	
         " {$row['fname']} <br> ";  
 } //end of while  
}else{  
echo "0 results";  
}  
mysqli_close($conn); 

?>