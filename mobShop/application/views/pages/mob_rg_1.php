<?php
$name=$this->input->post('name');
$emailId=$this->input->post('email');
$password=$this->input->post('password');
$isEmpty=0;

if($name == ""){
 $isEmpty++;
}
if($emailId == ""){
 $isEmpty++;
}
if($password == ""){
 $isEmpty++;
}


if($isEmpty == 0){
	//Mysql connection beginning
	$servername="localhost";
	$username="root";
	$passwrd="root";
	$dbname = "mobShop";
	$conn = new mysqli($servername, $username, $passwrd, $dbname);

	//Create Connection
	if($conn->connect_error){
	   die("Connection failed:");
	   echo "~Connection failed~";
	} 
	// echo "~Connected Successfully~";

   $sql="INSERT INTO UserLog(Name,Email,Password)
   VALUES('$name','$emailId','$password')";


   if(mysqli_query($conn, $sql)){
   	echo "~True~";
   }
   else{
   	echo "~".mysqli_error($conn)."~";
   }
   // echo "~".$sql."~";
 	

}
else{
	 echo "~False~";
}

?>
<script type="text/javascript">
	scrllNav('regAPI');
</script>