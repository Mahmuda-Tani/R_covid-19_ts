<?php

  $con= new mysqli ("localhost", "root","","dbms_project");

    $pid = isset($_GET['pid']) ? $_GET['pid'] : '';
    $wid = isset($_GET['wid']) ? $_GET['wid'] : '';
    $hid = isset($_GET['hid']) ? $_GET['hid'] : '';
    $st = isset($_GET['st']) ? $_GET['st'] : '';
    $vc= isset($_GET['vc']) ? $_GET['vc'] : '';
    

 
?>




<!DOCTYPE html>
<html>
<head>
	<title>update</title>

	<link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
   <style>


    
body{
  /* background-image: linear-gradient(  #2c3e50  ,#d5d8dc,#2c3e50 );
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 100vh; */
        
       background-image: linear-gradient(rgba(25, 44, 42, 0.3),rgba(33, 168, 168, 0.3)),url('up2.png');
       background-repeat: no-repeat;
       height:100vh;
       background-size: 100% 100%;
}
*{
	font-family: "Cantora One";
	box-sizing: border-box;
}


.contact-form
{

 
	
	padding: 10px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	/* background: #e07a5f; */
	border: 2px solid #0077b6;
    width: 550px;
    height: 680px;
    /* box-shadow: 0 0 10px 0 #dc2f02; */
    /* border-radius: 20px; */
    margin-left:-300px;


}
.contact-form input[type="text"],.contact-form input[type="email"]
{
	
  
	text-align: center;
	border:2px solid #0077b6;
	width: 300px;
	height: 40px;
	color: black;
	transition: 0.25s;
    background-color: #caf0f8;
    padding: 8px;
    border-radius: 10px;
    display: block;
    text-align: center;
  
 }
.contact-form input[type="text"]:focus,.contact-form input[type="password"]:focus,.contact-form input[type="email"]:focus{
	
	background-color: #dbe7e4;
	width:312px;
    
}

.contact-form label {
	color:#012a4a;
	font-size: 18px;
	padding: 1px;
}

table {
  border-collapse: separate;
  border-spacing: 0 15px;
  display: block;
}

td {
  width: 150px;
  text-align: center;
  padding: 5px;
}

.contact-form button[type="submit"]{

background:#FFEBCD;
display: block;
text-align: center;
border:4px solid #0077b6	;
outline: none;
border-radius: 2px;
transition: 0.25s;
padding: 7px 8px;
color: white;
margin-left: 220px;
background-color: #0077b6;
width: 70px;
font-weight: bold;



}
.contact-form button[type="submit"]:hover{
opacity: .7;
}



.contact-form h2 {
text-align:center;
margin-bottom: 20px;
color:  #0077b6;
}
   
</style>

</head>
<body>
 
  <form action="" method="POST" class="contact-form" style="width: 520px;height: 457px;">
 	 <h2>Update</h2>
 
<table>

  <tr>
  <td> <label>Pat_id</label></td>
  <td> <input type="text" name="pid" value="<?php echo $pid?>"  required></td>
</tr>
 
 <tr>
   <td><label>Ward_id</label></td>
   <td><input type="text" name="wid" value="<?php echo $wid?>"  required></td>
</tr>
<tr>
   <td><label>Hos_id</label></td>
   <td><input type="text" name="hid" value="<?php echo $hid?>"  required></td>
</tr>
<tr>
   <td><label>Status</label></td>
   <td><input type="text" name="st" value="<?php echo $st?>"  required></td>
</tr>
<tr>
   <td><label>Vaccine</label></td>
   <td><input type="text" name="vc" value="<?php echo $vc?>"  required></td>

</tr>
</table>
   <br>
 
   <button type="submit" name="submit">Update</button>


 </form>

</body>
</html>




<?php
   
       
  
   $con= new mysqli ("localhost", "root","","dbms_project");
    
   

    if(Isset($_POST['submit']))
    {
      

        $pid = isset($_POST['pid']) ? $_POST['pid'] : '';
        $wid = isset($_POST['wid']) ? $_POST['wid'] : '';
        $hid = isset($_POST['hid']) ? $_POST['hid'] : '';
        $st = isset($_POST['st']) ? $_POST['st'] : '';
        $vc= isset($_POST['vc']) ? $_POST['vc'] : '';



 
  
     $query= "UPDATE covid_ward SET Pat_id='$pid' , Ward_id='$wid', Hos_id='$hid' , Status='$st', Vaccine='$vc'
      WHERE Ward_id='$wid'" ;
    
     $data=mysqli_query($con,$query);
     
       if($data)
       {
           header("location:ct.php");
       }
       else
        echo "not Updated";

    
    

   }
  
?>  


