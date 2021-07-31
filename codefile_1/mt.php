
<?php 
include_once ("nav.html");
?>
             <?php
               $con= new mysqli ("localhost", "root","","dbms_project");
             ?>



                <!DOCTYPE html>
                 <html lang="en">
                 <head>
                  <title>Display</title>
                  <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
                  <meta name="viewport" content="width=device-width, initial-scale=1">
                   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    




               <style>

                     *{font-family: "Cantora One";}
                     body{
                        background-image: url('tx2.PNG');
                        background-repeat: no-repeat;
                       background-size: 100% 100%;
                       height: auto;


                       
    
                     }

                      .medical_info{
                           /* box-shadow: 0 0 40px 0 #2D5C34; */
                           padding:15px;
                           margin-left:auto;
                           margin-right:auto;
                           margin-top:-80px;

                       }

                    

                      
                       table{
                        border-collapse: collapse;
                        width: 70%;
                        background-color:#468faf;
                        border-color:#f2e9e4;
                       }
                       i{
                           color:#1b4332;
                         
                       }
                       td{
                           height:50px;
                       }
                       th{
                        height:60px;
                       }
                       .button{
                           margin-left:1280px;
                           padding:20px;
                           margin-top:30px;
                         
                       }
                       .insert{
                           height:40px;
                           width:100px;
                           background-color:#468faf;
                           color:#f2e9e4;
                           font-weight:400px;
                           font-size:1.3rem;

                       }
                    </style>
                  </head>
                 <body>
<br>
            <h2 style="text-align:center; color:black;"><u>Medical_Info</u></h2>
              
            <div class="button">
                 <form action="mt_insert.php">
                   <button type="submit"  class="insert" >Insert</button>
                 </form>
                  
                </div>

           <table border=2px style="width : 70%;" class="medical_info">
                     <tr>
                         <th>Pat_id</th>
                         <th>Admit_date</th>
                         <th>Doc_id</th>
                         <th>Room_no</th>
                         <th colspan="2">Operation</th>
                
                     </tr>
                     <?php

                           //include("connection.php");
                           error_reporting(0);
                           $query="select * from medical_info";
                           $data=mysqli_query($con,$query);
                           $total=mysqli_num_rows($data);
                          

                           if($total !=0)
                           {
                               while($result=mysqli_fetch_assoc($data))
                               {
                                   ?>
                                
                                   <tr>
                                      <td><?php echo $result['Pat_id']; ?></td>
                                      <td><?php echo $result['Admit_date']; ?></td>
                                      <td><?php echo $result['Doc_id']; ?></td>
                                      <td><?php echo $result['Room_no']; ?></td>
                                      
                                      <td><a href="mt_update.php?id=<?php echo $result['Pat_id']; ?> & ad=<?php echo $result['Admit_date']; ?>
                                       & Doc_id=<?php echo $result['Doc_id']; ?>  & rn=<?php echo $result['Room_no']; ?>" style="display:block;"> &nbsp;  <i class="fa fa-edit"></i></a></td>

                                      <td><a href="dm.php?id=<?php echo $result['Pat_id']; ?>" style="display:block;">&nbsp;<i class="fa fa-trash"></i></a></td>
                                      
                                      
                                    </tr>
                                    
                                <?php
                                
                               }
                           }
                           

                    ?>
                 </table>
             
           

                         
       




                 </body>
                 </html>
                 