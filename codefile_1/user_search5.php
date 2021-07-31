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
       background-image:url('uf7.png');
       background-repeat: no-repeat;
       height:220vh;
       background-size: 100% 100%;
      
    }
    h2{
       
       font-size: 1.2rem;
       line-height: 2;
       word-spacing: 4px;
       text-align:center;
       font-weight:400;
       color:#212529;
       /* box-shadow: 0 0 10px 0 #495057; */
   }


   .q4{
        background-image: linear-gradient( #7D9A81  ,#d5d8dc,#7D9A81);
        width:650px;
        height:300px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 0 0 5px 0 #2D5C34;
      
    }

    .q5{
        background-image: linear-gradient( #7D9A81  ,#d5d8dc,#7D9A81);
        width:550px;
        height:200px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 0 0 25px 0 #2D5C34;
      
    }
    .q6{
        background-image: linear-gradient( #7D9A81  ,#d5d8dc,#7D9A81);
        width:550px;
        height:200px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 0 0 25px 0 #2D5C34;
      
    }
    .q7{
        background-image: linear-gradient( #7D9A81  ,#d5d8dc,#7D9A81);
        width:550px;
        height:200px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 0 0 25px 0 #2D5C34;
      
    }
    .q8{
        background-image: linear-gradient( #7D9A81  ,#d5d8dc,#7D9A81);
        width:550px;
        height:200px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 0 0 25px 0 #2D5C34;
      
    }

    .q9{
        background-image: linear-gradient( #7D9A81  ,#d5d8dc,#7D9A81);
        width:550px;
        height:200px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 0 0 25px 0 #2D5C34;
      
    }

    .btn{
        border:2px;
        border-radius:0px;
        /* background-color:#A89D93; */
        border: 1px solid #495057;
        border-radius:5px;
        box-shadow: 0 0 5px 0 #1E6729;
        width:100px;
        height:30px;

    }
    
    .table_s{
      
      margin-left: auto;
      margin-right: auto;
      width:50px;
      height:100px;
      padding:15px;
    
      /* box-shadow: 0 0 25px 0 #1E6729; */
  }


  .form{
    box-shadow: 0 0 10px 0 black;
    padding :15px;
    background-image: linear-gradient( #595959 ,#d5d8dc,#83c5be);
    width:400px;
    height:200px;
    margin-left: auto;
    margin-right: auto;
   
}

     table {
        border-collapse: separate;
        border-spacing: 0 29px;
        width:30%;
      }
      .table_s label {
  width:200px;
  display: inline-block;
}
  

    </style>


</head>
<body>
    <br><br>
<div class="q4">
      
     <h2>Enter Hospital id to see available doctors information who works there</h2>
     <form action="user_q4.php" method="post" class="form" >
       <table class="table_s">
         <tr>
             <td ><lebel >Enter Hospital Id: </td>
             <td><input type="text" name="id"></input>
             
         </tr>
         <tr><td> <button type="submit" class="btn">Result</button></td></tr>
      </table>
     </form>

    </div>



    <div class="q5">
    <br>
    <h2>Enter doctor Name to see his Detail</h2>
     <form action="user_q5.php" method="post" class="form" >
       <table class="table_s">
         <tr>
             <td><lebel>Enter doctor name: </td>
             <td><input type="text" name="nm"></input>
             
         </tr>
         <tr><td> <button type="submit" class="btn">Result</button></td></tr>
      </table>
     </form>

    </div>

    <br>

    <div class="q6">  
    <br>
   <h2>Enter Area name to know Overall covid Condition of that Area</h2>
      <form action="user_q6.php" method="post" class="form" >
        <table class="table_s">
          <tr>
              <td><lebel>Enter Area Name: </td>
              <td><input type="text" name="ar"></input>
              
          </tr>
          <tr><td> <button type="submit" class="btn">Result</button></td></tr>
       </table>
      </form>
 
     </div>

     <br>


     <div class="q7">
      
    <h2>Enter patient id to know the availability time of your provided doctor </h2>
      <form action="" method="post" class="form" >
        <table class="table_s">
          <tr>
              <td><lebel>Enter Patient id: </td>
              <td><input type="text" name="id"></input>
              
          </tr>
          <tr><td> <button type="submit" class="btn">Result</button></td></tr>
       </table>
      </form>

    </div>



  
    <div class="q8">  
    <br>
   <h2>Know the overall covid condition for a particular gender. </h2>
      <form action="user_q8.php" method="post" class="form" >
        <table class="table_s">
          <tr>
              <td><lebel>Enter gender: </td>
              <td><input type="text" name="gr"></input>
             
          </tr>
          <tr><td> <button type="submit" class="btn">Result</button></td></tr>
       </table>
      </form>
 
     </div>

     <br>

     
    <div class="q9">  
    <br>
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
             
          </tr>
          <tr><td> <button type="submit" class="btn">Result</button></td></tr>
       </table>
      </form>
 
     </div>

     <br>









    <br>

     <script >
          document.getElementById("myBtn").addEventListener("click", function() {
           document.getElementById("demo").classList.remove("dn");
           document.getElementById("demo").classList.add("dy");
       });

   </script>

</body>
</html>