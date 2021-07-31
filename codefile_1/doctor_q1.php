
<?php 
include_once ("nav.html");
?>

<?php 
   
    error_reporting(0);
    $id= (isset($_POST['id']) ? $_POST['id'] : '');
    $con= new mysqli ("localhost", "root","","dbms_project");
    $query="select * from  covid_ward WHERE Hos_id='$id'";
    $xdata=mysqli_query($con,$query);
    $x=mysqli_num_rows($xdata);


    
    $query="select * from  covid_ward WHERE Status='cure' and Hos_id='$id'";
    $adata=mysqli_query($con,$query);
    $a=mysqli_num_rows($adata);


    $query="select * from  covid_ward WHERE Status='under treatment ' and Hos_id='$id' ";
    $bdata=mysqli_query($con,$query);
    $b=mysqli_num_rows($bdata);

    $query="select * from  covid_ward WHERE Status='dead' and Hos_id='$id'";
    $cdata=mysqli_query($con,$query);
    $c=mysqli_num_rows($cdata);



    
    $query="select * from  covid_ward WHERE Vaccine='yes' and Hos_id='$id'";
    $vydata=mysqli_query($con,$query);
    $vy=mysqli_num_rows($vydata);
    
    $query="select * from  covid_ward WHERE Vaccine='no' and Hos_id='$id'";
    $vndata=mysqli_query($con,$query);
    $vn=mysqli_num_rows($vndata);





    $query="select * from  covid_ward WHERE Vaccine='yes' and Status='dead' and Hos_id='$id'";
    $vyddata=mysqli_query($con,$query);
    $vyd=mysqli_num_rows($vyddata);
    

    $query="select * from  covid_ward WHERE Vaccine='no'and Status='under treatment' and Hos_id='$id'";
    $vncdata=mysqli_query($con,$query);
    $vnc=mysqli_num_rows($vncdata);




?>


<!DOCTYPE html>
<html lang="en">
<head>
 <title>Display</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
 <link rel="stylesheet" type="text/css" href="table.css"/>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 




<style>
       
 *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Cantora One";

  }

  body{
    
       background-image: linear-gradient(rgba(25, 44, 42, 0.3),rgba(33, 168, 168, 0.3)),url('dx3.PNG');
       background-repeat: no-repeat;
       height:120vh;
       background-size: 100% 100%; 
  }

       .container_a{
           height:500px;
          
       }


  .extra_div{
    /* border: 2px solid black; */
    padding: 50px !important;
    border-radius: 3px;
    transition: 0.3s;
    width:700px;
    height:400px;
    margin-left:auto;
    margin-right:auto;
    /* box-shadow: 0 0 35px 0 #2D5C34; */
    /* background-image: linear-gradient( #7D9A81  ,#d5d8dc,#7D9A81); */
  

}




.extra_div:hover{
   
  
   /* transform:translateY(-10px) ; */
   
}




h3{
    font-size:0.9rem!important;
}

table{
  
    width: 40%;
    /* height:5px; */
}
td{
    text-align:center!important;
    border-color:#1b4332;
    height:30px;

}
th{
    background-color:#1b4332;
    /* border-color:#335c67; */
    text-align:center!important;
    height:40px;
}

.heading h2{
       
        font-size: 1.4rem;
        line-height: 2;
        word-spacing: 4px;
        text-align:center;
        font-weight:600;
        color:#9d0208;
    }


    .tani{
        margin-left:460px;
        margin-top:-250px;
        background-color:#a8dadc;
    }

    .heading{
        margin-left:-720px;
        margin-top:100px;
    }

</style>
</head>
<body>

 <br> <div class="heading"><h2><u>All Covid Patients  Detail  Who are  admitted into Hospital_Id-<?php echo $id?></u></h2></div>

 
       



   
   
         <table border="1" class="tani">

                   <tr>
                       <th>Pat_id</th>
                       <th>Ward_id</th>
                       <th>Status</th>
                       <th>Vaccine</th>
                     
              
                   </tr>
                   <?php


                         if($x !=0)
                         {
                             while($result=mysqli_fetch_assoc($xdata))
                             {
                                 ?>
                              
                                 <tr>
                                    <td><?php echo $result['Pat_id']; ?></td>
                                    <td><?php echo $result['Ward_id']; ?></td>
                                    <td><?php echo $result['Status']; ?></td>
                                    <td><?php echo $result['Vaccine']; ?></td>
                                    
                                  </tr>
                                  
                              <?php
                              
                             }
                         }
                         

                  ?>
               </table>
           <br>



 </body>
  </html>