<?php 
include_once ("nav.html");
?>

<?php 
  
   
    $email = (isset($_POST['email']) ? $_POST['email'] : '');
    $pass = (isset($_POST['password']) ? $_POST['password'] : '');

    //Database connection here

    $con= new mysqli ("localhost", "root","","dbms_project");
    
    if($con-> connect_error)
    {
    	die("Failed to connect : ".$con->connect_error);
    }
    else
    {
    	$stmt = $con->prepare("select * from admin where email=?");
    	$stmt->bind_param("s",$email);
    	$stmt->execute();
        
        $stmt_result = $stmt->get_result();

        if($stmt_result->num_rows>0)
        {
            $data= $stmt_result->fetch_assoc();
            if($data['password']===$pass)
            {
            	// echo  "<h2>Logged in successfully!!</h2>";
                
               ?>
                 


                 <?php 
include_once ("nav.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>tables</title>


    <style>
        *{
       margin: 0;
       padding: 0;
       box-sizing: border-box;
       font-family: "Cantora One";
	}
    a{
        text-decoration: none;
        color:#dee2ff;
    }
    body{
       /* background-image: linear-gradient(rgba(18, 54, 32, 0.534),rgb(230, 240, 240)),url('tiii.PNG'); */
       background-image: url('tow.PNG');
       background-repeat: no-repeat;
       height:100vh;
       background-size: 100% 100%;
    }
    
    .heading
    {
    
        padding:1px;
        text-align:center;
        width:550px;
        height:120px;
        margin-top: 70px;
        margin-left: 80px;
    }
    .heading h1{
       
        font-size: 1.5rem;
        line-height: 1.6;
        word-spacing: 4px;
        text-align:center;
        font-weight:750;
        color:#053623;
        TEXT-shadow: 0 0 50px 0 rgba(237, 243, 243, 0.377);
     
        
    }

    table, td, th {
      border: 5px solid rgb(235, 225, 225);
      font-size: 1.2rem;
      line-height: 1.5;
      word-spacing: 2px;
    }
  
  table {
  /* width: 100%; */
  border-collapse: collapse;
  text-align: center;
  }

  .table{
      height: 300px;
      width: 400px;

  }
  .table-div{
    height: 300px;
    width: 400px;
    background-color: #1b4332;
    margin-left: 140px;
    margin-top: 60px;
  }
  tr:hover{
        background-color:#081c15;
        
    }

  .tn{
    height: 40px;
    width: 200px;
    /* background-color: blueviolet; */
    color: rgb(12, 12, 11);
    margin-left: 200px;
    margin-top: 30px;
    font-size: 2rem;
    line-height: 1.6;
    word-spacing: 4px;
    text-align:center;
  }


    </style>


</head>
<body>
    
    <div class="heading">
        
        <h1>Welcome to</h1>
    
        <h1><u>Regioanl  <span style="color:#f31f1f;">COVID-19</span> Tracking System Admin Page!!!</u></h1>
        <u></u>
    
      </div>

       <!-- <h1 class="tn">Table names</h1> -->

     <div class="table-div">
        
         <table class="table">
             <tr><td><a href="ht.php">Hospital table </a></td></tr>
             <tr> <td><a href="pt.php">Patient table </a></td></tr>
             <tr><td><a href="dt.php">Doctor table</a> </td></tr>
             <tr><td><a href="mt.php">Medical_info table </a></td></tr>
             <tr><td><a href="ct.php">Covid_19 table </a></td></tr>
             

         </table>
    </div>
    

</body>

</html>

                

 <?php

            }
            else
            {
            	 echo"<h2>Invalid Password</h2>";
                 ?>
                 <a href="login_developer.html">Back to login page</a>
                <?php
            }
        }
        else
        {
        	echo "<h2>Invalid Email or Password</h2>";
        }

    }


 ?>