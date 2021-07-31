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
       background-image:url('d4.png');
      
       background-repeat: no-repeat;
       height:200vh;
       background-size: 100% 100%;
    }    

  td{
       height:20px;
       text-align:center;
       color:#ffffff;
       height:30px;
      
                           
   }
  th{
        height:30px;
        color:#3a2e39;
        font-size:1.1rem;
        font-weight:100;
        background-color:#386fa4;
        height:30px;
    }

   


    .extra_div{
    /* background-image: linear-gradient( #7D9A81  ,#d5d8dc,#7D9A81); */
    /* border: 5px solid black; */
    margin-top:15px;
    padding: 50px !important;
    border-radius: 3px;
    transition: 0.3s;
    margin-left:800px;
    box-shadow: 0 0 25px 0 #2D5C34;
    position:relative;
    height:1300px;
    width:670px;

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

    .patient,.covid_ward{
        margin-left:auto;
         margin-right:auto;
         border-collapse: collapse;
         width:60%;
         background-color:#274c77;
         border:1px solid #ffffff;
         
    }


</style>


</head>
<body>
   

    
<br>



  
<div class="extra_div">
    

    <!-- <h3><u>Patient Info</u></h3><br> -->
    <h2><u> Patients  Detail   Under  Your  Observation</u></h2><br><br>


   <table border="1" style="width :70%;" class="patient">
                      <tr>
                        <th>Pat_id</th>
                         <th>Pat_add</th>
                         <th>Name</th>
                         <th>Pat_ph</th>
                         <th>Gender</th>
                         <th>Blood_grp</th>
                         <th>Age</th>
                         <th>Hos_id</th>
                        
                
                     </tr>

                     <?php
                          
                           error_reporting(0);
                           $query="select * from patient where  Doc_id='$id'";
                           $data=mysqli_query($con,$query);
                           $total=mysqli_num_rows($data);
                         

                           if($total !=0)
                           {
                               while($result=mysqli_fetch_assoc($data))
                               {
                                   ?>
                                
                                   <tr>
                                      <td><?php echo $result['Pat_id']; ?></td>
                                      <td><?php echo $result['Pat_add']; ?></td>
                                      <td><?php echo $result['Name']; ?></td>
                                      <td><?php echo $result['Pat_ph']; ?></td>
                                      <td><?php echo $result['Gender']; ?></td>
                                      <td><?php echo $result['Blood_grp']; ?></td>
                                      <td><?php echo $result['Age']; ?></td>
                                      <td><?php echo $result['Hos_id']; ?></td>
                                     
                                      
                                    </tr>
                                    
                                <?php
                                
                               }
                           }
                           

                    ?>
    </table>

    <h3 style="margin-left: auto;margin-right: auto; ; font-size:1.1rem;margin-top:10px;"> Total number of Patient Under Your Observation is : <span style="font-size
    :1.4rem; color:#1d2f6f;"><?php echo $total ?></span></h3>



      <br> <br> <br> <br> <br> <br>


 

   <?php
          

         

          error_reporting(0);
          $query="select * from  patient inner join covid_ward using(Pat_id)  WHERE (Status='cure' and Doc_id='$id')";
          $adata=mysqli_query($con,$query);
          $a=mysqli_num_rows($adata);


          $query="select * from  patient inner join covid_ward using(Pat_id)  WHERE (Status='under treatment' and Doc_id='$id')";
          $bdata=mysqli_query($con,$query);
          $b=mysqli_num_rows($bdata);


          $query="select * from  patient inner join covid_ward using(Pat_id)  WHERE (Status='dead' and Doc_id='$id')";
          $cdata=mysqli_query($con,$query);
          $c=mysqli_num_rows($cdata);

          $t=$a+$b+$c;






   ?>


  
    

    
  

   <h2 ><u>Covid Patient Details under Your Observation </u></h2>


   

   
  
    <div class="a">

     <h3  style="margin-left: auto;margin-right: auto; font-size:1.2rem;margin-top:50px;"><u>Cured</u></h3>

     <br>
           <table border=3px style="width :60%;" class="covid_ward">
                     <tr>
                         <th>Pat_id</th>
                         <th>Ward_id</th>
                         <th>Hos_id</th>
                         <th>Status</th>
                         <th>Vaccine</th>
                       
                
                     </tr>
                     <?php


                           if($a !=0)
                           {
                               while($result=mysqli_fetch_assoc($adata))
                               {
                                   ?>
                                
                                   <tr>
                                      <td><?php echo $result['Pat_id']; ?></td>
                                      <td><?php echo $result['Ward_id']; ?></td>
                                      <td><?php echo $result['Hos_id']; ?></td>
                                      <td><?php echo $result['Status']; ?></td>
                                      <td><?php echo $result['Vaccine']; ?></td>
                                      
                                    </tr>
                                    
                                <?php
                                
                               }
                           }
                           

                    ?>
                 </table>
            

                 <h3  style="margin-left: auto;margin-right: auto;  font-size:1.1rem;margin-top:10px;">Total number of Cured Patients  : <?php echo $a ?> <h3 >
               
       </div>        


     

      <div class="b">
          <br>

      <h3  style="margin-left: auto;margin-right: auto; ; font-size:1.2rem;margin-top:10px;"><u> Currently In Treatment</u></h3>
<br>
           <table border=2px style="width :60%;" class="covid_ward">
                     <tr>
                         <th>Pat_id</th>
                         <th>Ward_id</th>
                         <th>Hos_id</th>
                         <th>Status</th>
                         <th>Vaccine</th>
                       
                
                     </tr>
                     <?php


                           if($b !=0)
                           {
                               while($result=mysqli_fetch_assoc($bdata))
                               {
                                   ?>
                                
                                   <tr>
                                      <td><?php echo $result['Pat_id']; ?></td>
                                      <td><?php echo $result['Ward_id']; ?></td>
                                      <td><?php echo $result['Hos_id']; ?></td>
                                      <td><?php echo $result['Status']; ?></td>
                                      <td><?php echo $result['Vaccine']; ?></td>
                                      
                                    </tr>
                                    
                                <?php
                                
                               }
                           }
                           

                    ?> 
                 </table>
        
 
                 <h3  style="margin-left: auto;margin-right: auto; font-size:1.1rem;margin-top:10px;">Total number of Currently in Treatment Patients  : <?php echo $b ?><h3 >
                  
     </div>     
      

    <div class="c">



    <h3  style="margin-left: auto;margin-right: auto; ; font-size:1.1rem;margin-top:60px;"><u>Dead</u></h3><br>

           <table border=2px style="width :60%;" class="covid_ward">
                     <tr>
                         <th>Pat_id</th>
                         <th>Ward_id</th>
                         <th>Hos_id</th>
                         <th>Status</th>
                         <th>Vaccine</th>
                       
                
                     </tr>
                     <?php


                           if($c!=0)
                           {
                               while($result=mysqli_fetch_assoc($cdata))
                               {
                                   ?>
                                
                                   <tr>
                                      <td><?php echo $result['Pat_id']; ?></td>
                                      <td><?php echo $result['Ward_id']; ?></td>
                                      <td><?php echo $result['Hos_id']; ?></td>
                                      <td><?php echo $result['Status']; ?></td>
                                      <td><?php echo $result['Vaccine']; ?></td>
                                      
                                    </tr>
                                    
                                <?php
                                
                               }
                           }
                           

                    ?>
                 </table>
                 <br> <br><br><br><br><br>
                 <h3  style="margin-left: auto;margin-right: auto; ; font-size:1.1rem;margin-top:-110px;" >Total number of Dead Patients : <?php echo $c ?><h3 >

                </div>

         </div>
        
    

</body>
 </html> 

