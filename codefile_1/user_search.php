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
        color:#1b4332;
    }
    body{
       /* background-image:url('ggk.png'); */
     
       background-repeat: no-repeat;
       height:200vh;
       background-size: 100% 100%;
      
    }
    .big{
        width:1000px;
        height:180vh;
        box-shadow: 0 0 100px 0 #cb997e;
        border: 5px solid #cb997e;
        margin-left:auto;
        margin-right:auto;
        margin-top:15px;
        background-image: linear-gradient(180deg,#cb997e , #cb997e);
    }
    h2{
       
       font-size: 1.2rem;
       line-height: 2;
       word-spacing: 4px;
       text-align:center;
       font-weight:400;
       color:#001d3d;
       /* box-shadow: 0 0 10px 0 #495057; */
   }


    .q4,.q5,.q6,.q7,.qx,.q8,.q9{
        border: 15px solid black;
        width:650px;
        height:190px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 0 0 10px 0 #343a40;
        background-color:white;
      
    }

    .form{

        /* border: 1px solid black; */
        margin-left: auto;
        margin-right: auto;

    }

    .table_s{
        text-align: center;
        /* border: 1px solid black; */
        height:100px;    
        font-size: 1.1rem;
        line-height: 1.5;
        word-spacing: 4px;
        text-align:center;
        font-weight:250;
        color:#000814;
        /* box-shadow: 0 0 10px 0 #8a5a44; */
        margin-left: auto;
        margin-right: auto;
        width:80%;
        margin-top:20px;
    }
    .table_s input[type="text"]
    {
        height:40px;
        width:200px;
        border:2px;
        border: 1px solid #495057;
        border-radius:5px;
        box-shadow: 0 0 5px 0 #343a40;
        /* background-color:#caf0f8; */
    }

    .table_s select
    {
        height:40px;
        width:200px;
        border:2px;
        border: 1px solid #495057;
        border-radius:5px;
        box-shadow: 0 0 5px 0 #343a40;
        /* background-color:#caf0f8; */
    }
    

    
    .btn{
        border:2px;
        border-radius:0px;
        background-color:#001d3d;
        border: 1px solid #023e8a;
        border-radius:5px;
        box-shadow: 0 0 5px 0 #001d3d;
        width:100px;
        height:30px;
        color:#ffffff

    }


    </style>


</head>
<body>

   <div class="big">
    <br><br>
<div class="q4">
      
     <h2>Enter Hospital id to see available doctors information who works there</h2>
     <form action="user_q4.php" method="post" class="form" >
       <table class="table_s">
         <tr>
             <td style="padding-right: 30px"><lebel >Enter Hospital Id: </td>
             <td style="padding-right: 20px"><input type="text" name="id"></input>
             <td style="padding-right: 10px"> <button type="submit" class="btn">Result</button>
             
         </tr>
        
      </table>
     </form>

    </div>

   <br>

    <div class="q5">
    <h2>Enter doctor Name to see his Detail</h2>
     <form action="user_q5.php" method="post" class="form" >
       <table class="table_s">
         <tr>
             <td><lebel>Enter doctor name: </td>
             <td><input type="text" name="nm"></input>
             <td> <button type="submit" class="btn">Result</button></td>
             
         </tr>
        
      </table>
     </form>

    </div>

    <br>

    <div class="q6">  
    
   <h2>Enter Area name to know Overall covid Condition of that Area</h2>
      <form action="user_q6.php" method="post" class="form" >
        <table class="table_s">
          <tr>
              <td><lebel>Enter Area Name: </td>
              <td><input type="text" name="ar"></input>
              <td> <button type="submit" class="btn">Result</button></td>
              
          </tr>
         
       </table>
      </form>
 
     </div>

     <br>


     <div class="q7">
      
    <h2>Enter patient id to know the availability time of your provided doctor </h2>
      <form action="user_q7.php" method="post" class="form" >
        <table class="table_s">
          <tr>
              <td><lebel>Enter Patient id: </td>
              <td><input type="text" name="id"></input>
              <td> <button type="submit" class="btn">Result</button></td>
              
          </tr>
         
       </table>
      </form>

    </div>


<br>
  
    <div class="q8">  
    
   <h2>Know the overall covid condition for a particular gender. </h2>
      <form action="user_q8.php" method="post" class="form" >
        <table class="table_s">
          <tr>
              <td style="padding-right: 20px"><lebel>Enter gender :   </td>
              <td><input type="text" name="gr"></input>
              <td> <button type="submit" class="btn">Result</button></td>
             
          </tr>
         
       </table>
      </form>
 
     </div>

     <br>
     
     
    <div class="q9">  
    
   <h2>Know the overall covid condition for a particular age range. </h2>
      <form action="user_q9.php" method="post" class="form" >
        <table class="table_s">
          <tr>
              <td><lebel>Choose age range: </td>

             <td> 
               <select name="op" id="option">
               <option value="71-80">71-80</option>
               <option value="61-70">61-70</option>
               <option value="51-60">51-60</option>
               <option value="41-50">41-50</option>
               <option value="31-40">31-40</option>
               <option value="21-30">21-30</option>
               <option value="11-20">11-20</option>
               <option value="1-10">1-10</option>
               </select>
            </td>
            <td> <button type="submit" class="btn">Result</button></td>
          </tr>
         
       </table>
      </form>
 
     </div>


</div>
</body>
</html>