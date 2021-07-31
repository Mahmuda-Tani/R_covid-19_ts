
<?php 
include_once ("nav.html");
?>

<?php
    $con= new mysqli ("localhost", "root","","dbms_project");
    $ar= (isset($_POST['ar']) ? $_POST['ar'] : '');
    
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
        background-image:url('d4.png');
       background-repeat: no-repeat;
       height:100vh;
       background-size: 100% 100%;

    }

    
  


    .table{
        background-color:#343a40;
        margin-left: 870px;
        margin-top:150px;
        height:90px;
        box-shadow: 0 0 10px 0 #343a40;
        width:40%;

    }
    
    th{
        text-align:center;
        background-color:#ac1c1e;
        font-size: 1rem;
        line-height: 2;
        word-spacing: 4px;
        text-align:center;
        font-weight:400;
    }


    td{
        color:#98c1d9;
        text-align:center;
        font-size: 1.3rem;
        /* box-shadow: 0 0 10px 0 #ac1c1e; */

    }


    
    h2{
        
        margin-left: 180px;
        margin-top:100px;
        font-size: 1.5rem;
        line-height: 2;
        word-spacing: 4px;
        text-align:center;
        font-weight:500;
        color:#9c191b;
        width:700px;
    }



 




</style>

<body>
   
 <?php
         

         error_reporting(0);

         $con= new mysqli ("localhost", "root","","dbms_project");
         $id= (isset($_POST['id']) ? $_POST['id'] : '');
         $query="select Availability from doctor where Doc_id=(select Doc_id from patient where Pat_id='$id');";
         $data=mysqli_query($con,$query);
         $result=mysqli_fetch_assoc($data);
         $c=$result['Availability'];
     
   ?>

      
  <div class="q7">
      <table class="table">

      <tr><td>The availability of Your required doctor :  <?php echo $c?></td></tr>

      </table>
        
    
  </div>

</body>
</html>