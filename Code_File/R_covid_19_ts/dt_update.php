<?php

  $con= new mysqli ("localhost", "root","","dbms_project");

    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $nm = isset($_GET['nm']) ? $_GET['nm'] : '';
    $ph = isset($_GET['ph']) ? $_GET['ph'] : '';
    $em = isset($_GET['em']) ? $_GET['em'] : '';
    $av= isset($_GET['av']) ? $_GET['av'] : '';
    $Hos_id= isset($_GET['Hos_id']) ? $_GET['Hos_id'] : '';
    $Ward_id = isset($_GET['Ward_id']) ? $_GET['Ward_id'] : '';

 
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
    height: 560px;
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
    background-color:#caf0f8;
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
margin-left: 230px;
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
 

 <form action="" method="POST" class="contact-form">
   <h2>Update</h2>

   <table>
    
    <tr>
      <td><label>Doc_id</label></td>
      <td><input type="text" name="id"  value="<?php echo $id?> " required> </td>
    </tr>
   

    <tr>
    <td><label>Doc_name</label></td>
    <td> <input type="text" name="nm" value="<?php echo $nm ?>"required></td>
    </tr>
   
   <tr>
   <td><label>Doc_ph</label></td>
   <td><input type="text" name="ph"  value="<?php echo $ph?>" required></td>
   </tr>
   
   <tr>
    <td>
   <label>Email</label></td>
   <td>
   <input type="text" name="em" value="<?php echo $em?>"  required>
   </td>
   </tr>
   
   <tr>
    <td>
   <label>Availability</label></td>
   <td>
   <input type="text" name="av"  value="<?php echo $av?>" required>
   </td>
   </tr>

   <tr>

    <td>
   <label>Hos_id</label>
   </td>
   <td>
   <input type="text" name="Hos_id"  value="<?php echo $Hos_id?>"  required>
   </td>

   </tr> 

   <tr>
    <td>
   <label>Ward_id</label></td>
   <td>
   <input type="text" name="Ward_id"  value="<?php echo $Ward_id?> " required>
   </td>

   </tr>

  </table>

 
   <button type="submit" name="submit">Update</button>


 </form>

</body>
</html>







<?php
   
       
  
   $con= new mysqli ("localhost", "root","","dbms_project");
    
   

    if(Isset($_POST['submit']))
    {
      


    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $nm = isset($_POST['nm']) ? $_POST['nm'] : '';
    $ph = isset($_POST['ph']) ? $_POST['ph'] : '';
    $em = isset($_POST['em']) ? $_POST['em'] : '';
    $av= isset($_POST['av']) ? $_POST['av'] : '';
    $Hos_id= isset($_POST['Hos_id']) ? $_POST['Hos_id'] : '';
    $Ward_id = isset($_POST['Ward_id']) ? $_POST['Ward_id'] : '';



 
  
     $query= "UPDATE Doctor SET Doc_id='$id' ,  Doc_name='$nm', Doc_phn='$ph' , Email='$em', 
     Availability='$av', Hos_id='$Hos_id', Ward_id='$Ward_id' WHERE Doc_id='$id'" ;
    
     $data=mysqli_query($con,$query);
     
       if($data)
       {
           header("location:dt.php");
       }
       else
        echo "not Updated";

    
    

   }
  
?>  


