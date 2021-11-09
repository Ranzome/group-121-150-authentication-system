<?php 
// establishing the MySQLi connection

include 'ph/dbcon.php';
//Inserting data into table 

if(isset($_POST['user'])){

	 $user_name = $_POST['user_name'];
	 $user_email =$_POST['user_email'];
	 $user_phone =$_POST['user_phone'];
	 $user_pass =$_POST['user_pass'];
	 $user_agree =$_POST['user_agree'];
	 
//creating mysqli query 
	 
	 $query = "insert into regtb (user_name,user_email,user_phone,user_pass,user_agree) values ('$user_name','$user_email','$user_phone','$user_pass','$user_agree')";
	 
	 $insert_query = mysqli_query($con, $query);

	if($insert_query){
	
    
	echo "<cemter><h2 class='text-primary'>User Registered, Thanks!</h2></center>";
	
	}


}
?>