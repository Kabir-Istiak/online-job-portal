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
  box-shadow: 10px 10px 10px 10px grey;
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

</style>
</head>
<body>

	<?php 

	session_start();
        $var = $_SESSION['user'];
        
       


      


	 ?>
	<div class="header">
		
  <h1 style="text-align: center;">Job Portal</h1>


<div class="dropdown">
  <button class="dropbtn"> <img src="user.png" style="width:35px;height:35px;padding-right:5px;"><?php echo $var ?></button>
  <div class="dropdown-content">
  
  <a href="logout.php">  Log Out</a>
  
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
      <li><a href="jobPosts.php"> JOb Posts</a></li>
  		
  		
   
	</ul> 
		
	</nav>
    <br>

	<div class="content" style="font-size: 15px;" >


   
    <div> </div>
<br>

<?php  





      
         


?> 



<br><br>

        <table class="tablestyl">

          <thead>
            <tr>
              <th colspan="2">Details</th>
              
              

              

            </tr>
          </thead>

          <tbody>

          <?php  
  $hostname = "localhost";
    $userName = "jobseek";
    $Password = "123";
    $dbname = "jobseeker";

    



         $conn1 = mysqli_connect($hostname,$userName,$Password);
          $db = mysqli_select_db($conn1, $dbname);




        $querry = "SELECT * FROM `jobpost` WHERE `designation` = '$_GET[user]' ";

        $stmt =mysqli_query($conn1, $querry);
        while ($row = mysqli_fetch_array($stmt))
        { 

          
          ?>

          <tr>

            <td style="text-align: left;">
             
             
                 
             
              
              
             


            </td>




           <td style="text-align: left;">
           
           
            
            
            
            
            
            









          </td>
            



          </tr>

          <tr>
            <td>
                ID
              <br>

            </td>

            <td>
                <?php echo  $row['ID'];  ?> 
<br>

            </td>




            </tr>

          <tr>
            <td>
                 designation
              <br>

            </td>

            <td>
                 <?php echo $row['designation'];  ?>
<br>

            </td>
            



          </tr>


          <tr>
            <td>
                 vacancy
              <br>

            </td>

            <td>
                 <?php echo $row['vacancy'];  ?>
<br>

            </td>
            



          </tr>


           <tr>
            <td>
                  status 
              <br>

            </td>

            <td>
                 <?php echo $row['status'];  ?>
<br>

            </td>
            



          </tr>



          <tr>
            <td>
                   experience 
              <br>

            </td>

            <td>
                 <?php echo $row['experience'];  ?>
<br>

            </td>
            



          </tr>




          <tr>
            <td>
                   age
              <br>

            </td>

            <td>
                 <?php echo $row['age'];  ?>
<br>

            </td>
            



          </tr>





          </tr>

          <tr>
            <td>
               jobLocation  
              <br>

            </td>

            <td>
               <?php echo $row['jobLocation'];  ?>
<br>

            </td>
            



          </tr>

          <tr>
            <td>
               salary  
              <br>

            </td>

            <td>
               <?php echo $row['salary'];  ?>
<br>

            </td>
            



          </tr>





          <tr>
            <td>
               Application Deadline 
              <br>

            </td>

            <td>
               <?php echo $row['deadline'];  ?>
<br>

            </td>
            



          </tr>



          <tr>
            <td>
               jobdetails  
              <br>

            </td>

            <td>
               <?php echo $row['jobdetails'];  ?>
<br>

            </td>
            



          </tr>


          <tr>
            <td>
               company  
              <br>

            </td>

            <td>
               <?php echo $row['company'];  ?>
<br>

            </td>
            



          </tr>


          


          



         <?php 
       }

      //}
        



       



        

    $conn1->close();

    echo "<br>";






            ?>
            




          </tbody>


         
            

          </tfoot>           

        </table>

   <br>
   <br>
   <br>
   <br>


   <input class="loginButtonstl" style="margin-right: 30%; margin-bottom: 10%;" type="" name="" value="APPLY">     



















		

	</div>



	<div class="footer">
			<h1> </h1>	
	</div>

	

</body>
</html> 