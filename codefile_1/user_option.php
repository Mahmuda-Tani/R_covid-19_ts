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
      
        margin-left: 930px;
        margin-top: 200px;
    }

  
   
  

    table {
        border-collapse: separate;
        border-spacing: 0 29px;
        width:30%;
      }

      td {
    
        text-align: center;
        border: 1px solid black;
        padding: 5px;
        height:50px;
        border-radius:20px;
        border: 1px solid #495057;
        font-size: 1.6rem;
        line-height: 1.5;
        word-spacing: 4px;
        text-align:center;
        font-weight:450;
        color:#000814;
        box-shadow: 0 0 10px 0 #8a5a44;
        /* background-color:#774936; */
      
        
      }

      td:hover{
        background-color:#a98467;
        border: 1px solid black;
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
              <tr><td> <i class="fas fa-database"></i> <a href="user_static.php">Static Data</a></td></tr>
              <tr><td> <i class="fas fa-search"></i> <a href="user_search.php">Search Bars</a></td></tr>
          </table>



         <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#a98467" fill-opacity="1" d="M0,320L80,320C160,320,320,320,480,314.7C640,309,800,299,960,261.3C1120,224,1280,160,1360,128L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
          </svg>
    
</body>
</html>
