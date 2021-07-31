
<?php 
include_once ("nav.html");
?>

<?php
    $con= new mysqli ("localhost", "root","","dbms_project");
?>


<!DOCTYPE html>
<html lang="en">
<head>
 <title>user</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
 <!-- <link rel="stylesheet" type="text/css" href="table.css"/>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

</head>

<style>

*{
       margin: 0;
       padding: 0;
       box-sizing: border-box;
       font-family: "Cantora One";
 
    }
    body{
        background-image:url('d8.png');
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
        background-color:#98c1d9;
        margin-left: 600px;
        margin-top:80px;
        height:200px;
        box-shadow: 0 0 10px 0 #2D5C34;
        width:50%;

    }
    
    th{
        text-align:center;
        background-color:#003566;
        box-shadow: 0 0 10px 0 #003566;
        color:white;
        font-size: 1rem;
        line-height: 2;
        word-spacing: 4px;
        text-align:center;
        font-weight:400;
    }


    td{
        text-align:center;
        box-shadow: 0 0 10px 0 #003566;
    }


    
    h2{
        
        margin-left: 540px;
        margin-top:80px;
        font-size: 1.5rem;
        line-height: 2;
        word-spacing: 4px;
        text-align:center;
        font-weight:500;
        color:#001a1a;
        width:700px;
    }



 



</style>

<body>
   
     <?php
        
        $id= (isset($_POST['id']) ? $_POST['id'] : '');
      
        $query="select * from doctor where Hos_id='$id';";   
        $data=mysqli_query($con,$query);
        $total=mysqli_num_rows($data);
 
      ?>

      <br><br>
      
      <div class="q4">

      <h2><u>Doctors Detail of your required hospital</u></h2>
        <br>
         <table border=2px style="width : 65%;" class="table">
                     <tr>
                         <th>Doc_id</th>
                         <th>Doc_name</th>
                         <th>Doc_ph</th>
                         <th>Email</th>
                         <th>Availability</th>
                         <th>Hos_id</th>
                         <th>Ward_id</th>
                         
                         
                     </tr>
                     <?php

                          
                           if($total !=0)
                           {
                               while($result=mysqli_fetch_assoc($data))
                               {
                                   ?>
                                
                                   <tr>
                                      <td><?php echo $result['Doc_id']; ?></td>
                                      <td><?php echo $result['Doc_name']; ?></td>
                                      <td><?php echo $result['Doc_phn']; ?></td>
                                      <td><?php echo $result['Email']; ?></td>
                                      <td><?php echo $result['Availability']; ?></td>
                                      <td><?php echo $result['Hos_id']; ?></td>
                                      <td><?php echo $result['Ward_id']; ?></td>
                                      
                                     
                                      
                                    </tr>
                                    
                                <?php
                                
                               }
                           }
                           

                    ?>
            </table>
  </div>

</body>
</html>