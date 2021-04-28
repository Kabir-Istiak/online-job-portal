<!--  -->

<!DOCTYPE html>
<html>
<head>
  <title>JS Form</title>
  <style>
  

   *{
    box-sizing: border-box;
    padding: 0;
    margin: 0;

   }

   li, a, button{
    color: black;
    text-decoration: none;
    font-size: 15px;
   }
.header {
  font-family: 'Yanone Kaffeesatz', sans-serif;
  border-color: black;
  background-color: lavender;
  
  height: 100px;
  width: 85%;
  padding: 10px;
   float: right;


}
.headerleft{
  background-color: lavender;
  height: 100px;
  width: 15%;
  padding: 10px;
  font-family: 'Lobster Two', cursive;
  justify-content: space-between;
  align-items: center;


}
.nav {
	
  
  font-family: 'calibiri', cursive;
	height: 540px;
	width: 15%;
	position: left;
	background-color: lavender;
  color: black;
  list-style: none;
	text-align: left;
	float: left;
  text-decoration: none;
  
}
.nav li{
  padding: 0px 25px 20px;
  

}
.nav li a{
  transition: all 0.3s ease 0s;

}




.content {
	font-family: 'Yanone Kaffeesatz', sans-serif;
  
	height: 540px;
	width: 85%;
	position: right;
	background-color: white;
	
	text-align: center;
	float: right;
	font-size: 20px;
  justify-content: space-between;
  align-items: center;

}

.dropdown {
  position: relative;
  display: inline-block;
  float: right;
}
.dropbtn {
  background-color: #262626;
  color: white;
  font-family: 'Yanone Kaffeesatz', sans-serif;
  text-transform: uppercase;
  padding: 5px;
  border-radius: 10px;
  font-size: 20px;
  border: none;
  cursor: pointer;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  width: 55px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 5px ;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #262626; color:white;}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #999999;
}

.insideContents {
  height: 150px;
  width: 200px;
  border-style: none;
  
  float: left;
  margin: 10px;
}


.loginButtonstl {

  background-color: #008CBA;
  border: 1px orange;
  color: white;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
  width: 120px;
  display: block;
  border-radius: 12px;
  float: right;




}
.loginButtonstl:hover {
  background-color: #001a4d;
  color: white;
}

.tablestyl {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
  border-style: solid;

  margin-left: 10%;
  margin-top: 20px;
}

.tablestyl tr:nth-child(even){background-color: whitesmoke;}



.tablestyl th {
  padding-top: 5px;
  padding-bottom: 5px;
  text-align: center;
  background-color: white;
  color: black;
  border-color: white;
  border-style: solid;
  border-color: black;

}






.footer {
	border-style: solid;
  background-color: lightsteelBlue;
 
  padding: 10px;
  text-align: center;
}
ul {
  list-style-type: square;
  margin: 0;
  padding: 0;
  font-size: 30px;
}



.insideContents {
  
  padding: 30px;
  font-weight: 700px;
  font-size: 25px;
  border-style: none;
  /*box-shadow: 10px 7px 7px 7px white;*/
  margin-top: 30px;
  margin-left: 400px;
  margin-right: 300px;
  text-align: left;
  background-color: white;
}

</style>
</head>
<body>
	 <?php

            $firstname = $lastname = $gender = $email = $username = $password = $rec_email ="";
            $firstnameerr = $lastnameerr= $gendererr = $emailerr = $usernameerr = $passworderr = $rec_emailerr = $notavailable = "";

            if($_SERVER['REQUEST_METHOD'] == "POST") {

                if(empty($_POST['fname']) ) {
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
        

                  //database

  

       


        

    


                    







                    }
            }
        ?>
	
  <?php 

  session_start();
        $var = $_SESSION['user'];
//        unset($_SESSION['user']); 


   ?>
  <div class="header">
    
  <h1 style="text-align: center;">Job Portal</h1>


<div class="dropdown">
  <button class="dropbtn"> <img src="user.png" style="width:35px;height:35px;padding-right:5px;"><?php echo $var ?></button>
  <div class="dropdown-content">
  
  <a href="logout.php">Log Out</a>
  
  </div>
</div>
  

  </div>

  <div class="headerleft">
    
     
  </div>


  <nav class="nav" >
    <br>

  <ul>
   
      <li><a href="userProfile.php">Profile</a></li>
      <li><a href="company.php"> Company</a></li>
      <li><a href=""> JOb Posts</a></li>
      
      
   
  </ul> 
    
  </nav>

  <div class="content" >

    <div class="insideContents" style="font-size: 30px;">




    	<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">


	<h1 align="center" style="background-color: #6495ED; border-radius: 12px; "><i>Registration</i></h1>

	 
                <br>
            <fieldset>
               
                <legend style="font-size: 35px;"><b>Basic Information:</b></legend>
            
                <label class="inputBox" for="firstname">First Name:</label>
                <input style="font-size: 30px;" class="inputField" type="text" name="fname" id="firstname">
                <?php echo  " <font color=red> $firstnameerr</font> "; ?> 
                

                <br>

                <label class="inputBox" for="lastname"> LastName:    </label>
                <input style="font-size: 30px;" class="inputField" type="text" name="lname" id="lastname">
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
                <input style="font-size: 30px;" class="inputField" type="email" id="email" name="email">
               <?php echo "<font color=red> $emailerr </font>" ; ?>

            </fieldset>

            <fieldset>
                <legend style="font-size: 35px;"><b>Account Information:</b></legend>

               <!--  <label class="inputBox" for="username">Username:</label>
                <input class="inputField" type="text" name="uname" id="username">
                <?php echo "<font color=red>$usernameerr </font>" ; echo"<font color=red> $notavailable </font>"; ?> -->

                

                <label class="inputBox" for="parmanent_address">Password:</label>
                <input style="font-size: 30px;" class="inputField" type="password" name="pass" id="password">
                <?php echo "<font color=red>$passworderr </font>"; ?>

                <br>

                <label  class="inputBox"  for="rec_email">Recovery email:</label>
                <input style="font-size: 30px;" class="inputField" type="email" id="rec_email" name="remail">
               <?php echo "<font color=red>$rec_emailerr </font>" ; ?>
                
                </fieldset>
           <br>
           <br>


            <input class="loginButtonstl" type="submit" name="update" value="update"> 







          <?php  


    $hostname = "localhost";
    $userName = "jobseek";
    $Password = "123";
    $dbname = "jobseeker";



					$firstname = $_POST['fname'];
                    $lastname = $_POST['lname'];
                    $gender = $_POST['gender'];
                    $email = $_POST['email'];
                    $password = $_POST['pass'];
                    $rec_email = $_POST['remail'];

  

                   


    $conn1 = mysqli_connect($hostname,$userName,$Password);
    $db = mysqli_select_db($conn1, $dbname);

    if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['gender']) || empty($_POST['email']) || empty($_POST['pass']) || empty($_POST['remail'])  )
    {
      echo '<script type="text/javascript"> alert("Fill The Blank BOX")</script>';


     
}
else 
{
   if (isset($_POST['update']))
      {

        if(empty($_POST['fname']) || empty($_POST['remail'])){
      echo "Falied To Insert Data";

      }
    else{

        $query = "UPDATE `jobseek` SET `firstName`='$firstname',`lastName`='$lastname',`Gender`='$gender',`email`='$email',`password`='$password',`recoEmail`='$rec_email' WHERE `userName`= '$var'";

        

        $query_run = mysqli_query($conn1, $query);
        if ($query_run)
        {
          echo '<script type="text/javascript"> alert("data Updated")</script>';
        }
        else
        {
          echo '<script type="text/javascript"> alert("data not Updated")</script>';
        }
      }

        }


}

    






            ?>



</form>

              
    </div>

  </div>



  <div class="footer">
      <h1> </h1>  
  </div>

  

</body>
</html> 