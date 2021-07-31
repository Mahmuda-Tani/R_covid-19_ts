<?php 
include_once ("nav.html");
?>


<?php 
  
   
    $email = (isset($_POST['email']) ? $_POST['email'] : '');
    $pass = (isset($_POST['password']) ? $_POST['password'] : '');
    $id= (isset($_POST['id']) ? $_POST['id'] : '');


    $con= new mysqli ("localhost", "root","","dbms_project");
    
    if($con-> connect_error)
    {
    	die("Failed to connect : ".$con->connect_error);
    }
    else
    {
    	$stmt = $con->prepare("select * from doctor_login where email=?");
    	$stmt->bind_param("s",$email);
    	$stmt->execute();
        
        $stmt_result = $stmt->get_result();

        if($stmt_result->num_rows>0)
        {
            $data= $stmt_result->fetch_assoc();
            if($data['password']===$pass)
            {
   ?>          



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Regional Covid-19 Tracking System</title>

    <style>
    
    *{
       margin: 0;
       padding: 0;
       box-sizing: border-box;
       font-family: "Cantora One";
	}
    a{
        text-decoration:none;
        color:white;
    }
    body{
       background-image: linear-gradient(rgba(25, 44, 42, 0.3),rgba(33, 168, 168, 0.3)),url('d6.png');
       background-repeat: no-repeat;
       height:100vh;
       background-size: 100% 100%;
    }

  
    .a{
        /* width:100px;
        height:40px; */
        /* background-color:red; */
        margin-left: 950px;
        margin-top: 160px;
    }
   
  

    table {
        border-collapse: separate;
        border-spacing: 0 29px;
        width:20%;
       
        /* background-color:red; */
      }

      td {
    
        text-align: center;
        border: 1px solid black;
        padding: 5px;
        height:70px;
        border-radius:100%;
        border: 5px solid #0b525b;
        font-size: 1.6rem;
        line-height: 1.5;
        word-spacing: 4px;
        text-align:center;
        font-weight:450;
        color:#f5f0ee;
        box-shadow: 0 0 50px 0 #0b525b;
        background-color:#0b525b;
      
        
      }

      td:hover{
        background-color:#5bc0be;
        border: 1px solid #5bc0be;
      }

      tr{
          
      }
      
    





    </style>

</head>
<body>
           

          <table class="a">
              <tr><td> <i class="fas fa-database"></i> <a href="dstatic.php ?id=<?php echo $id;?>">Static Data</a></td></tr>
    
              <tr><td> <i class="fas fa-search"></i> <a href="dsearch.php ?id=<?php echo $id;?>">Search Bars</a></td></tr>

            
          </table>

    
</body>
</html>




             <?php
            }
            else
            {
            	 echo"<h2>Invalid Email or Password</h2>";
                 ?>
                 <a href="login_doctor.php">Back to login page</a>
                <?php
            }
        }
        else
        {
        	echo "<h2>Invalid Email or Password</h2>";
            ?>
            <a href="login_doctor.php">Back to login page</a>
           <?php
            
        }

    }


 ?>