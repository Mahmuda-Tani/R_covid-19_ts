<?php 
include_once ("nav.html");
?>


<?php
  $con= new mysqli ("localhost", "root","","dbms_project");
  $id = isset($_GET['id']) ? $_GET['id'] : '';
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
 <title>Display</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 




<style>


  *{
       margin: 0;
       padding: 0;
       box-sizing: border-box;
       font-family: "Cantora One";
	}
    a{
        text-decoration:none;
        
    }
    body{
       background-image: linear-gradient(rgba(25, 44, 42, 0.3),rgba(33, 168, 168, 0.3)),url('dx1.PNG');
       background-repeat: no-repeat;
       height:100vh;
       background-size: 100% 100%;
    }    

 





h2{

        margin-left: auto;
        margin-right: auto;
        margin-top:30px;
        text-align:center;
        font-size:1.5rem;
        font-weight:100;
        color:#0e273c;
        /* height:600px;
        width:40px; */
        word-spacing:4px;
        line-height:1.5rem;
        
    
}

h3{

margin-left: auto;
margin-right: auto;
margin-top:30px;
text-align:center;
font-size:1rem;
font-weight:100;
color:#0e273c;
/* height:600px;
width:40px; */
word-spacing:4px;
line-height:1.5rem;


}

.tani{
    padding:10px;
    margin-left:1030px;;
    margin-top:10px;
    width:400px;
    box-shadow: 0 0 20px 0 #495057;
    height:250px;
    /* background-image: linear-gradient( #83c5be  ,#d5d8dc,#7D9A81);
    box-shadow: 0 0 25px 0 #2D5C34; */
}

.tani h2{
    font-size:1.1rem!important;
    font-weight:600;
    /* box-shadow: 0 0 20px 0 black; */
    padding:13px;
    color:#001a1a;
    width:400px;
    margin-left:-10px;
}

.tani label{
    border:2px solid black!important;
    font-weight:bold !important;
    
}
.tani input{
    border:2px solid black;
    border-radius: 5px;
    background-color:white;
    font-size:1rem;
    width:200px;
   
}

.tani button{
    border:2px solid black;
    border-radius: 10px;
    background-color:#2a9d8f;
    font-size:1rem;
    width:100px;
   
}
.tani button:hover{
  background-color:#d8e2dc;
}
.form{
    box-shadow: 0 0 10px 0 black;
    padding :15px;
    background-image: linear-gradient( #595959 ,#d5d8dc,#83c5be);
    /* width:400px;
    height:100px; */
   
}
table{
  border:2;
  width: 300px!important;
  /* height:5px; */
  margin-left:auto;
  margin-right:auto;
}
td,th{
  text-align:center!important;

}




</style>


</head>
<body>
   <br><br>

<div class="tani" style="margin-top:21px;">
          <h2>Know Covid Patient Info Of Any Hospital </h2>
     <form action="doctor_q1.php" method="post" class="form" >
       <table>
         <tr>
             <td><lebel id="#">Enter hospital id: </td>
             <td><input type="text" name="id" style="width:100px;"></input>
             <td> <button type="submit">Submit</button></td>
         </tr>
      </table>
     </form>

    </div>

<br><br>

    <div class="tani"> 
       <h2>Know The Covid Overview Of Any hospital</h2>
     <form action="doctor_q2.php" method="post" class="form" >
       <table>
         <tr>
             <td><lebel id="#">Enter hospital id: </td>
             <td><input type="text" name="id" style="width:100px;"></input>
             <td> <button type="submit">Submit</button></td>
         </tr>
      </table>
     </form>

    </div>



    

</body>
 </html> 

