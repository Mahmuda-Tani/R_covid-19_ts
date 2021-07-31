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
        margin-top:30px;
        height:270px;
        box-shadow: 0 0 10px 0 #2D5C34;
     

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
        height:10px;
    }


    td{
        text-align:center;
        box-shadow: 0 0 10px 0 #000814;
        height:40px;
    }


    
    h2{
        
        margin-left: 300px;
        margin-top:70px;
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
        

        $query="select Hos_id,Hos_name,Hos_add,Hos_ph,count('Pat_id') as Num from hospital 
               inner join covid_ward using(Hos_id) where Vaccine='yes' group by Hos_id order by count(Pat_id) desc;";
               

 
         $data=mysqli_query($con,$query);
         $total=mysqli_num_rows($data);
 
      ?>

      
      <div class="q3">
         
       <br>

       <h2><u>Num of patient taken vaccine in each hospital</u></h2>
        <table border=2px style="width : 60%;"class="table">
        <tr>
            <th>Hos_id</th>
            <th>Hos_name</th>
            <th>Hos_add</th>
            <th>Hos_ph</th>
            <th>Total Patient</th>
           
    
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