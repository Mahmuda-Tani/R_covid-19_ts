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

                      .hospital{
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
                   <!-- <h1 style="text-align:center; color:#f2e9e4;"><u>Rigonal <span style="color:#ee6c4d">Covid-19</span> Tracking System</u></h1> -->
            
                   <h2 style="text-align:center; color:#f2e9e4;"><u>Hospital</u></h2>
                   
                 <div class="button">
                 <form action="ht_insert.php" >
                   <button type="submit"  class="insert">Insert</button>
                 </form>
                </div>

                  <table border=2px  class="hospital">
                     <tr>
                         <th>Hos_id</th>
                         <th>Hos_name</th>
                         <th>Hos_add</th>
                         <th>Area</th>
                         <th>Hos_ph</th>
                         <th colspan="2">Operation</th>
                
                     </tr>
                     <?php

                           //include("connection.php");
                           error_reporting(0);
                           $query="select * from hospital";
                           $data=mysqli_query($con,$query);
                           $total=mysqli_num_rows($data);

                           if($total !=0)
                           {
                               while($result=mysqli_fetch_assoc($data))
                               {
                                   ?>

                                   <tr>
                                      <td><?php echo $result['Hos_id']; ?></td>
                                      <td style="width:300px;"><?php echo $result['Hos_name']; ?></td>
                                      <td style="width:300px;"><?php echo $result['Hos_add']; ?></td>
                                      <td><?php echo $result['Area']; ?></td>
                                      <td><?php echo $result['Hos_ph']; ?></td> 
                                      <td><a href="ht_update.php?id=<?php echo $result['Hos_id']; ?> & nm=<?php echo $result['Hos_name']; ?>
                                      & add=<?php echo $result['Hos_add']; ?> & ar=<?php echo $result['Area']; ?>&  ph=<?php echo $result['Hos_ph']; ?>" style="display:block;">&nbsp;<i class="fa fa-edit"></i></a></td>
                                      <td><a href="dh.php?id=<?php echo $result['Hos_id']; ?>" style="display:block;">&nbsp;<i class="fa fa-trash"></i></a></td>
                                      
                                      
                                    </tr>
                                    
                                <?php
                                
                               }
                           }
                           
                           

                    ?>

                 </table>
                  
                 <br>
               

                 
                   
                 




                 </body>
                 </html>
                 