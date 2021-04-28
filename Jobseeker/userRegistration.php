<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>

<style>
	.loginstyle{
		height: 600px;
		width: 400px;
		background-color: white;
		
		margin: 0 auto;
		padding: 20px;
		
		border-color: black;
		
		

		


}


.inputBox{
	height: 50px;
	width: 400px;
	background-color: white;
	
	border-style: solid black;
	margin: 0 auto;


	
}	


.loginButtonstl {

  background-color: gray;
  border: 1px solid black;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
  width: 150px;
  display: block;
 
  float: right;




}




</style>


</style>

</head>
<body bgcolor="white">
	 <?php

            $firstname = $lastname = $gender = $email = $username = $password = $rec_email ="";
            $firstnameerr = $lastnameerr= $gendererr = $emailerr = $usernameerr = $passworderr = $rec_emailerr = $notavailable = "";

            if($_SERVER['REQUEST_METHOD'] == "POST") {

                if(empty($_POST['fname'])) {
                    $firstnameerr = "Please Fill up the firstname!";
                }

                else if(empty($_POST['lname'])) {                    
                    $lastnameerr = "Please Fill up the lastname!";
                    
                }

                else if(empty($_POST['gender'])) {                    
                    $gendererr = "Please Fill up the gender!";
                    
                }

                else if(empty($_POST['email'])) {                    
                    $emailerr = "Please Fill up the email!";
                    
                }

                else if(empty($_POST['uname'])) {                    
                    $usernameerr = "Please Fill up the username!";
                }

                else if(empty($_POST['pass'])) {                    
                    $passworderr = "Please Fill up the password!";
                }

                else if(empty($_POST['remail'])) {                    
                    $rec_emailerr = "Please Fill up the recovery email!";
                }

                else {

                    $firstname = $_POST['fname'];
                    $lastname = $_POST['lname'];
                    $gender = $_POST['gender'];
                    $email = $_POST['email'];
                    $username = $_POST['uname'];
                    $password = $_POST['pass'];
                    $rec_email = $_POST['remail'];
        




                    
                           $_SESSION['user'] = $username;

                          header('Location: userLogin.php');








                    }
            }
        ?>
	
	


	<div class="loginstyle" >

	

	<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">


	<h1 align="center" style="background-color: gray;  "><i>Registration</i></h1>

	 
                <br>
            <fieldset>
               
                <legend style="font-size: 35px;"><b>Basic Information:</b></legend>
            
                <label class="inputBox" for="firstname">First Name:</label>
                <input class="inputField" type="text" name="fname" id="firstname">
                <?php echo  " <font color=red> $firstnameerr</font> "; ?> 
                

                <br>

                <label class="inputBox" for="lastname"> LastName:    </label>
                <input class="inputField" type="text" name="lname" id="lastname">
                <?php  echo " <font color=red> $lastnameerr</font> ";   ?> 

                <br>
                


                <label class="inputBox" for="gender">Gender:  </label>
                <input type="radio" name="gender" id="male" value="male">  
                <label for="gender">Male </label>
                <input type="radio" name="gender" id="female" value="female">
                <label for="gender">Female </label>
                <input type="radio" name="gender" id="other" value="other">
                <label for="gender">Other </label>
               <?php echo  "<font color=red> $gendererr </font>"; ?> 

                <br>

                <label class="inputBox" for="email">Email:</label>
                <input class="inputField" type="email" id="email" name="email">
               <?php echo "<font color=red> $emailerr </font>" ; ?>

            </fieldset>

            <fieldset>
                <legend style="font-size: 35px;"><b>Account Information:</b></legend>

                <label class="inputBox" for="username">Username:</label>
                <input class="inputField" type="text" name="uname" id="username">
                <?php echo "<font color=red>$usernameerr </font>" ; echo"<font color=red> $notavailable </font>"; ?>

                <br>

                <label class="inputBox" for="parmanent_address">Password:</label>
                <input class="inputField" type="password" name="pass" id="password">
                <?php echo "<font color=red>$passworderr </font>"; ?>

                <br>

                <label  class="inputBox"  for="rec_email">Recovery email:</label>
                <input class="inputField" type="email" id="rec_email" name="remail">
               <?php echo "<font color=red>$rec_emailerr </font>" ; ?>
                
                </fieldset>
           

            <input class="loginButtonstl" type="submit" value="REGISTER"> 


<?php  
    $hostname = "localhost";
    $userName = "jobseek";
    $Password = "123";
    $dbname = "jobseeker";

    // Mysqli Object-Oriented
    $conn1 = new mysqli($hostname, $userName, $Password, $dbname);
    if($conn1->connect_errno) {
        echo "<br>";
       // echo "1. Database Connection Failed!...";
        echo "<br>";
        echo $conn1->connect_error;
    }
    else {
        echo "<br>";
        //echo "1. Database Connection Successful!";
        echo "<br>";
        echo $conn1->error;

			if(empty($_POST['fname']) || empty($_POST['remail'])){
	 		echo "Falied To Insert Data";

			}
		else{


        $sql1 = "INSERT INTO `jobseek`(`ID`, `firstName`, `lastName`, `Gender`, `email`, `userName`, `password`, `recoEmail`)  values ('$firstname', '$lastname', '$gender', '$email', '$username', '$password', '$rec_email')";
        $conn1->query($sql1);
        
            echo "Data Inserted successfully";
        
    	}
    }

    echo "<br>";

 ?>

           
       

	
	
	

	



</form>





</body>
</html>