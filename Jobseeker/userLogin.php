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

</head>
<body bgcolor="white">

	<?php

            $username = $password ="";
            $usernameerr = $passworderr ="";

            if($_SERVER['REQUEST_METHOD'] == "POST") {

                if(empty($_POST['uname']) || empty($_POST['pass']) ) {                    
                    $usernameerr = "Please Fill up the Username!";
                    $passworderr = "Please Fill up the password!";
                }

                
                else {
                    $username = $_POST['uname'];
                    $password = $_POST['pass'];

 


                   
                        

                         

                       

                    
                

                
                
                                       
                






                   
                }
            }
        ?>
	<br>
	<br>


	<div class="loginstyle" >

	<div  align="center" style="color: black; font-family: 'Righteous', sans-serif; font-style: bold ;  border-radius: 15px; background-color: #FFF5EE; border: 30px; height: 100px;" >
		<h1 >
			<br>
			<i><b> Job Portal</b></i>
		</h1>

	</div>

	<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">


	

	 
                <br>
            
               
                <input class="inputBox"  placeholder="USERNAME" type="text" name="uname" id="username">
                <?php echo "<font color=red> $usernameerr </font>" ; ?> 

                <br>
                <br>
                <br>

                

               
                <input class="inputBox"  placeholder="PASSWORD" type="password" name="pass" id="password">
                <?php echo "<font color=red> $passworderr </font>" ; ?>
                
              
                <br>
                <br>

           

            <input class="loginButtonstl" type="submit" value="Login"> 


             <a href="userRegistration.php" class="loginButtonstl" style="width: 80px;"> Signup </a>

       

	<?php  
    $hostname = "localhost";
    $userName = "jobseek";
    $Password = "123";
    $dbname = "jobseeker";


                    

     //Mysqli Object-Oriented
     $conn1 = new mysqli($hostname, $userName, $Password, $dbname);
     if($conn1->connect_errno) {
         echo "<br>";
         echo "1. Database Connection Failed!...";
         echo "<br>";
         echo $conn1->connect_error;
     }
     else {
         echo "<br>";
       //  echo "1. Database Connection Successful!";
         echo "<br>";


         $sql = "SELECT * from jobseek where userName= '$username' AND password = '$password' ";

         $result = mysqli_query($conn1, $sql);

         if(mysqli_num_rows($result) > 0)
         {
          while ($row = mysqli_fetch_assoc($result))
          {
            $username = $row["userName"];
            $password = $row["password"];

            

             session_start();
            $_SESSION['user'] = $username;
            header("Location: userProfile.php");

          }
          echo "login Successful";
          
         }
         else
         {
          
           echo "Wrong credentials";
         }




     

       


        
    }
    $conn1->close();

    echo "<br>";






            ?>


	
	

	



</form>





</body>
</html>