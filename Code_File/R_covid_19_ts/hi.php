<?php 
include_once ("nav.html");
?>
<?php
    $con= new mysqli ("localhost", "root","","dbms_project");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Regional Covid-19 Tracking System</title>


    <style>
         
    *{
       margin: 0;
       padding: 0;
       box-sizing: border-box;
       font-family: "Cantora One";
     }

     body{
       
       /* background-image:url('uf2.png'); */
       background-blend-mode:screen;
       background-repeat: no-repeat;
       height:100vh;
       background-size: 100% 100%;
       background-color:white;
       
    }


    .heading h2{
       
       font-size: 1.5rem;
       line-height: 2;
       word-spacing: 4px;
       text-align:center;
       font-weight:600;
       color:#212529;
       /* box-shadow: 0 0 10px 0 #495057; */
   }
    

    .table-1 {
        border-collapse: separate;
        border-spacing: 0 0px;
        width:40%;
        margin-left:auto;
        margin-right:auto;
        margin-top:-510px;
        /* background-color:#e5e5e5; */

    }
    .table-1 th{
        height:50px;
        background-color:#6c757d;

    }

    .table-1  td ,th{
    
    text-align: center;
    border: 1px solid black;
    padding: 5px;
    height:40px;
    border-radius:0px;
    border: 1px solid #495057;
    font-size: 1.1rem;
    line-height: 1.5;
    word-spacing: 4px;
    text-align:center;
    font-weight:450;
    color:#212529;
    box-shadow: 0 0 2px 0 #495057;

    background-color:#979dac;

  
    
  }

  .table-1 td:hover{
    background-color:#ffffff;
    border: 1px solid black;
    
  }
   


  .table-2 {
        border-collapse: separate;
        border-spacing: 0 0px;
        width:40%;
        margin-left:120px;
        margin-right:auto;
        margin-top:-510px;
        margin-left:auto;
        margin-right:auto;
    }
    .table-2 th{
        height:50px;
        background-color:#6c757d;
    }

    .table-2  td,th {
    
    text-align: center;
    border: 1px solid black;
    padding: 5px;
    height:40px;
    border-radius:0px;
    border: 1px solid #495057;
    font-size: 1.1rem;
    line-height: 1.5;
    word-spacing: 4px;
    text-align:center;
    font-weight:450;
    color:#212529;
    box-shadow: 0 0 10px 0 #495057;
  
    background-color:#979dac;
  
    
  }

  .table-2 td:hover{
    background-color:#ffffff;
    border: 1px solid black;
  }




  .table-3 {
        border-collapse: separate;
        border-spacing: 0 0px;
        width:30%;
        margin-left:50px;
        margin-right:auto;
        margin-top:-460px;
        margin-left:auto;
        margin-right:auto;
    }
    .table-3 th{
        height:50px;
        background-color:#6c757d;
    }

    .table-3  td ,th{
    
    text-align: center;
    border: 1px solid black;
    padding: 5px;
    height:40px;
    border-radius:0px;
    border: 1px solid #495057;
    font-size: 1.1rem;
    line-height: 1.5;
    word-spacing: 4px;
    text-align:center;
    font-weight:450;
    color:#212529;
    box-shadow: 0 0 10px 0 #495057;
    /* background-color:#495057; */
    background-color:#979dac;
  
    
  }

  .table-3 td:hover{
    background-color:#ffffff;
    border: 1px solid black;
  }




  .table-4 {
        border-collapse: separate;
        border-spacing: 0 0px;
        width:50%;
        margin-left:60px;
        margin-right:auto;
        margin-top:-460px;
        margin-left:auto;
        margin-right:auto;
    }
    .table-4 th{
        height:50px;
        background-color:#6c757d;

    }

    .table-4  td ,th{
    
    text-align: center;
    border: 1px solid black;
    padding: 5px;
    height:40px;
    border-radius:0px;
    border: 1px solid #495057;
    font-size: 1.1rem;
    line-height: 1.5;
    word-spacing: 4px;
    text-align:center;
    font-weight:450;
    color:#212529;
    box-shadow: 0 0 10px 0 #495057;
    /* background-color:#495057; */
    background-color:#979dac;
  
    
  }

  .table-4 td:hover{
    background-color:#ffffff;
    border: 1px solid black;
  }



  .table-5 {
        border-collapse: separate;
        border-spacing: 0 0px;
        width:40%;
        margin-left:240px;
        margin-right:auto;
        margin-top:-510px;
        margin-left:auto;
        margin-right:auto;
    }
    .table-5 th{
        height:50px;
        background-color:#6c757d;
    }

    .table-5  td ,th{
    
    text-align: center;
    border: 1px solid black;
    padding: 5px;
    height:40px;
    border-radius:0px;
    border: 1px solid #495057;
    font-size: 1.1rem;
    line-height: 1.5;
    word-spacing: 4px;
    text-align:center;
    font-weight:450;
    color:#212529;
    box-shadow: 0 0 10px 0 #495057;
    background-color:#979dac;
  
    
  }

  .table-5 td:hover{
    background-color:#ffffff;
    border: 1px solid black;
  }

  .wave{
          position:absolute;
          left:0;
          bottom:0;
      }


      .big{
        width:1200px;
        height:200vh;
        box-shadow: 0 0 40px 0 #1b4332;
        margin-left:auto;
        margin-right:auto;
        margin-top:15px;
       
    }

    </style>


</head>
<body>
    

   <div class="big">         
                

<?php
     

     $query="select count(Pat_id) as ct from  covid_ward ";
     $data=mysqli_query($con,$query);
     $result=mysqli_fetch_assoc($data);
     $t=$result['ct'];
     
 
     $query="select count(Pat_id) as ct from  covid_ward  where Status='cure';";
     $data=mysqli_query($con,$query);
     $result=mysqli_fetch_assoc($data);
     $a=$result['ct'];
     
 
     $query="select count(Pat_id) as ct from  covid_ward where Status='under treatment';" ;
            
     $data=mysqli_query($con,$query);
     $result=mysqli_fetch_assoc($data);
     $b=$result['ct'];
     
 
     $query="select count(Pat_id) as ct from  covid_ward where Status='dead';";
     $data=mysqli_query($con,$query);
     $result=mysqli_fetch_assoc($data);
     $c=$result['ct'];
     
 
     $query="select count(Pat_id) as ct from  covid_ward where Vaccine='yes';";
     $data=mysqli_query($con,$query);
     $result=mysqli_fetch_assoc($data);
     $vy=$result['ct'];
      
 
     $query="select count(Pat_id) as ct from  covid_ward where Vaccine='no';";
     $data=mysqli_query($con,$query);
     $result=mysqli_fetch_assoc($data);
     $vw=$result['ct'];
 
  
 
 
 
     ?>
     
       
     <div class="q0">
       <br>
         
       <div class="heading"><h2>Covid Condition Of Bangladesh</h2></div>

         <table border="2" class="table-1" id="t1">
            <th> Informations</th>
            <th>Count</th>
 
            <tr>
            <td>Total number of Covid Patients</td><td> <?php echo $t?></td>
            </tr>
 
            <tr>
            <td>Total number of Cured Patients</td><td> <?php echo $a?></td>
            </tr>
            
            <tr>
            <td>Total number of Currently in treatment</td><td> <?php echo $b?></td>
            </tr>
            <tr>
            <td>Total number of Dead</td><td><?php echo $c?></td>
            </tr>
 
            <tr>
            <td>Total number of  Patient who are given Vaccine</td><td>  <?php echo $vy?></td>
            </tr>
 
            <tr>
            <td>Total number of  Patient who are waiting for vaccine</td><td> <?php echo $vw?></td>
            </tr>
 
 
           
 
         </table>

        
      </div>
      <br>
      
     
          
      <?php
        
        $query="select Area,count(Pat_id) as 'Num' from hospital inner join covid_ward 
                using(Hos_id) where Status='under treatment' group by Area order by count(Pat_id) desc;";
 
        $data=mysqli_query($con,$query);
        $total=mysqli_num_rows($data);
 
      ?>

<br>

    <div class="qx">
     
     <div class="heading"><h2>Top 5 District having most Covid-19 Patients</h2></div><br>
       <table border="2"  class="table-2">
       <tr>
           <th>Area</th>      
           <th>num of covid patient</th>
          
   
       </tr>
      <?php
        
        $t=0;

       if($total !=0)
       {
           while($result=mysqli_fetch_assoc($data))
           {  
               $t++;
               if($t>5)break;
               ?>

               <tr>
                  
                  <td><?php echo $result['Area']; ?></td> 
                  <td><?php echo $result['Num']; ?></td> 
                  
                </tr>
                
            <?php
            
           }
       }
      

   ?>

    </table>
    <br>

    </div>
 
           
     <?php
        
        $query="select Hos_id,Hos_name,Hos_add,Hos_ph,count(Pat_id) as 'Num_of_recovery' from hospital inner join covid_ward 
                using(Hos_id) where Status='cure' group by Hos_id order by count(Pat_id) desc;";
 
        $data=mysqli_query($con,$query);
        $total=mysqli_num_rows($data);
 
      ?>
      
      <div class="q1">
      <br>
      <div class="heading"><h2>Top 3 hospital having  <span>most Recovery</span> of Covid-19 Patients</h2></div><br>
        <table border="2"style="width:45%;"class="table-3">
        <tr>
            <th>Hos_id</th>
            <th>Hos_name</th>
            <th>Hos_add</th>
            <th>Hos_ph</th>
            <th>num_of_recovery</th>
           
    
        </tr>
       <?php
         
         $t=0;
 
        if($total !=0)
        {
            while($result=mysqli_fetch_assoc($data))
            {  
                $t++;
                if($t>3)break;
                ?>
 
                <tr>
                   <td><?php echo $result['Hos_id']; ?></td>
                   <td><?php echo $result['Hos_name']; ?></td>
                   <td><?php echo $result['Hos_add']; ?></td>
                   <td><?php echo $result['Hos_ph']; ?></td> 
                   <td><?php echo $result['Num_of_recovery']; ?></td> 
                   
                 </tr>
                 
             <?php
             
            }
        }
       
 
    ?>
 
     </table>
     <br>
 
     </div>

           
    <?php
        

        $query="select Hos_id,Hos_name,Hos_add,Hos_ph,count('Pat_id') as Num_of_Covid_patient from hospital 
               inner join covid_ward using(Hos_id) where Status='under treatment' group by Hos_add order by count(Pat_id) desc;";
               

 
        $data=mysqli_query($con,$query);
        $total=mysqli_num_rows($data);
 
      ?>
      
      <div class="q2">
      <br>
       <div class="heading"><h2>Top 3 hospital having most Covid-19 Patients</h2></div><br>
        <table border=2px style="width :46%;"class="table-4">
        <tr>
            <th>Hos_id</th>
            <th>Hospital_name</th>
            <th>Hos_add</th>
            <th>Hos_ph</th>
            <th>covid_patient</th>
           
    
        </tr>
       <?php
        
        $t=0;

        if($total !=0)
        {   

            while($result=mysqli_fetch_assoc($data))
            {   
                $t++;
                if($t>3)break;
                ?>
 
                <tr>
                   <td><?php echo $result['Hos_id']; ?></td>
                   <td><?php echo $result['Hos_name']; ?></td>
                   <td><?php echo $result['Hos_add']; ?></td>
                   <td><?php echo $result['Hos_ph']; ?></td> 
                   <td><?php echo $result['Num_of_Covid_patient']; ?></td> 
                   
                 </tr>
                 
             <?php
             
            }
        }
       
 
    ?>
 
     </table>
  </div>

  </section>



  <section class="s5">
  <?php
        

        $query="select Hos_id,Hos_name,Hos_add,Hos_ph,count('Pat_id') as Num from hospital 
               inner join covid_ward using(Hos_id) where Vaccine='yes' group by Hos_id order by count(Pat_id) desc;";
               

 
         $data=mysqli_query($con,$query);
         $total=mysqli_num_rows($data);
 
      ?>

      
      <div class="q3">
         
       <br>

       <div class="heading"><h2>Num of patient taken vaccine in each hospital</h2></div><br>
        <table border=2px style="width : 70%;"class="table-5">
        <tr>
            <th>Hos_id</th>
            <th>Hos_name</th>
            <th>Hos_add</th>
            <th>Hos_ph</th>
            <th>Num of Patient taken vaccine</th>
           
    
        </tr>

       <?php
        
        if($total !=0)
        {
            while($result=mysqli_fetch_assoc($data))
            {
                ?>
 
                <tr>
                   <td><?php echo $result['Hos_id']; ?></td>
                   <td><?php echo $result['Hos_name']; ?></td>
                   <td><?php echo $result['Hos_add']; ?></td>
                   <td><?php echo $result['Hos_ph']; ?></td> 
                   <td><?php echo $result['Num']; ?></td> 
                   
                 </tr>
                 
             <?php
             
            }
        }
       
 
    ?>
 
     </table>
 
     </div>



  </div>

</body>
</html>