<?php 
include_once ("nav.html");
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
        color:#000814;
    }
    body{
       
       background-image:url('uf2.png');
       background-repeat: no-repeat;
       height:100vh;
       background-size: 100% 100%;
       
    }

  
    .a{
      
        margin-left: 900px;
        margin-top: 110px;
    }

  
   
  

    table {
       
        border-collapse: separate;
        border-spacing: 0 29px;
        width:38%;
       
      }

      td {
    
        text-align: center;
        height:50px;
        border-radius:20px; 
        font-size: 1.4rem;
        line-height: 1.5;
        word-spacing: 4px;
        text-align:center;
        font-weight:450;
        color:#000814;
        box-shadow: 0 0 10px 0 #000000;
        background-color:#b08968;
      
        
      }

      td:hover{
        background-color:#e6ccb2;
        
      }

    
      
      .wave{
          position:absolute;
          left:0;
          bottom:0;
      }





    </style>

</head>
<body>
           
         

          
          <table class="a">
             
              <tr><td> <i class="fas fa-search"></i> <a href="us_1.php">Covid Condition Of Bangladesh</a></td></tr>
              <tr><td> <i class="fas fa-search"></i> <a href="us_2.php">Top 5 District having most Covid-19 Patients</a></td></tr>
              <tr><td> <i class="fas fa-search"></i> <a href="us_3.php">Top 3 hospital having  <span>most Recovery</a></td></tr>
              <tr><td> <i class="fas fa-search"></i> <a href="us_4.php">Top 3 hospital having most Covid-19 Patients</a></td></tr>
              <tr><td> <i class="fas fa-search"></i> <a href="us_5.php">Num of patient taken vaccine in each hospital</a></td></tr>
           
          </table>
     


</body>
</html>
