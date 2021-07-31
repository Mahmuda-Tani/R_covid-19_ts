<?php 
include_once ("nav.html");
?>


<?php
    $con= new mysqli ("localhost", "root","","dbms_project");
    $gr= (isset($_POST['gr']) ? $_POST['gr'] : '');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <title>user</title>
 <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
 <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style>
  
 
  *{
       margin: 0;
       padding: 0;
       box-sizing: border-box;
       font-family: "Cantora One";
 
    }
    body{
        background-image:url('gpp.png');
       background-repeat: no-repeat;
       height:100vh;
       background-size: 100% 100%;

    }

    
    .q4{
        /* background-image: linear-gradient( #7D9A81  ,#d5d8dc,#7D9A81); */
        width:950px;
        height:500px;
        margin-left: auto;
        margin-right: auto;
        /* box-shadow: 0 0 55px 0 #2D5C34; */
        margin-top:100px;
      
    }


    .table{
        background-color:#6c757d;
        margin-left: 200px;
        margin-top:60px;
        height:270px;
        box-shadow: 0 0 10px 0 #2D5C34;
        width:45%;

    }
    
    th{
        text-align:center;
        background-color:#000814;
        color:white;
        font-size: 1rem;
        line-height: 2;
        word-spacing: 4px;
        text-align:center;
        font-weight:400;
    }


    td{
        text-align:center;
        box-shadow: 0 0 10px 0 #000814;
    }


    
    h2{
        
        margin-left: 180px;
        margin-top:100px;
        font-size: 1.5rem;
        line-height: 2;
        word-spacing: 4px;
        text-align:center;
        font-weight:500;
        color:#000814;
        width:700px;
    }



 

 





</style>

<body>
   
     <?php
     

    $query="select count(Pat_id) as ct from covid_ward inner join patient using (Pat_id) where Gender='$gr';";
    $data=mysqli_query($con,$query);
    $result=mysqli_fetch_assoc($data);
    $t=$result['ct'];
    

    $query="select count(Pat_id) as ct from covid_ward inner join patient using (Pat_id) where Gender='$gr' and Status='cure';";
    $data=mysqli_query($con,$query);
    $result=mysqli_fetch_assoc($data);
    $a=$result['ct'];
    

     $query="select count(Pat_id) as ct from covid_ward inner join patient using (Pat_id) where Gender='$gr'
            and Status='under treatment';";

    $data=mysqli_query($con,$query);
    $result=mysqli_fetch_assoc($data);
    $b=$result['ct'];
    

    $query="select count(Pat_id) as ct from covid_ward inner join patient using (Pat_id) where Gender='$gr' and Status='dead';";
    $data=mysqli_query($con,$query);
    $result=mysqli_fetch_assoc($data);
    $c=$result['ct'];
    

    $query="select count(Pat_id) as ct from covid_ward inner join patient using (Pat_id) where Gender='$gr' and Vaccine='yes';";
    $data=mysqli_query($con,$query);
    $result=mysqli_fetch_assoc($data);
    $vy=$result['ct'];
     

    $query="select count(Pat_id) as ct from covid_ward inner join patient using (Pat_id) where Gender='$gr'and Vaccine='no';";
    $data=mysqli_query($con,$query);
    $result=mysqli_fetch_assoc($data);
    $vw=$result['ct'];

 



    ?>
      
  <div class="q8">
        <h2><u>Covid Condition of <?php echo $gr?> patients in Bangladesh</u></h2>
        <table border="2" class="table">

           <th>Information</th>
           <th>Count</th>

           <tr>
           <td>Total number of <php echo $gr ?> Covid Patient</td><td> <?php echo $t?></td>
           </tr>

           <tr>
           <td>Total number of <php echo $gr ?> Cured Patient</td><td> <?php echo $a?></td>
           </tr>
           
           <tr>
           <td>Total number of <php echo $gr ?>Currently in treatment patient</td><td> <?php echo $b?></td>
           </tr>
           <tr>
           <td>Total number of <php echo $gr ?> Dead patinet</td><td><?php echo $c?></td>
           </tr>

           <tr>
           <td>Total number of <php echo $gr ?> Patient who are given Vaccine</td><td>  <?php echo $vy?></td>
           </tr>

           <tr>
           <td>Total number of <php echo $gr ?> Patient who are waiting for vaccine</td><td> <?php echo $vw?></td>
           </tr>


          

        </table>
  </div>

</body>
</html>