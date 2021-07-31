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
        background-image:url('d5.png');
       background-repeat: no-repeat;
       height:100vh;
       background-size: 100% 100%;

    }

    
    .q5{
        /* background-image: linear-gradient( #7D9A81  ,#d5d8dc,#7D9A81); */
        width:950px;
        height:500px;
        margin-left: auto;
        margin-right: auto;
        /* box-shadow: 0 0 55px 0 #2D5C34; */
        margin-top:100px;
      
    }


    .table{
        background-color:#a2d2ff;
        margin-left: 110px;
        margin-top:280px;
        height:100px;
        box-shadow: 0 0 10px 0 #2D5C34;
       

    }
    
    th{
        text-align:center;
        background-color:#003049;
        box-shadow: 0 0 5px 0 #000814;
        color:white;
        font-size: 1rem;
        line-height: 2;
        word-spacing: 4px;
        text-align:center;
        font-weight:400;
        height:30px;
    }


    td{
        text-align:center;
        height:20px;
        box-shadow: 0 0 5px 0 #000814;
    }


    
    h2{
        
        margin-left: 110px;
        margin-top:250px;
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
        
        $nm= (isset($_POST['nm']) ? $_POST['nm'] : '');
        $query="select * from doctor where Doc_name LIKE '%$nm%';";   
        $data=mysqli_query($con,$query);
        $total=mysqli_num_rows($data);
 
      ?>
      <?php
        if($total>0){?>
      
      <div class="q5">
        <br>
          <!-- <h2>Doctors list named <?php echo  $nm?></h2> -->
         <table border=2px style="width : 80%;" class="table">
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

                       <?php }
                       else{
                           ?>
                           <h2 style="margin-left:420px;margin-top:420px; color:#012a4a">No doctor named "<?php echo $nm ?>"</h2>
                           <?php
                       }
                      ?>
</body>
</html>