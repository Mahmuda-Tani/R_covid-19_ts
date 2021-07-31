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
        
        margin-left: 204px;
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
        
        $query="select Area,count(Pat_id) as 'Num' from hospital inner join covid_ward 
                using(Hos_id) where Status='under treatment' group by Area order by count(Pat_id) desc;";
 
        $data=mysqli_query($con,$query);
        $total=mysqli_num_rows($data);
 
?>


<div class="qx">
     
     <h2><u>Top 5 District having most Covid-19 Patients</u></h2>
       <table border="2"  class="table">
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

</body>
</html>