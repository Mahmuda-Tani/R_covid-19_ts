

<?php 
include_once ("nav.html");
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
  
	<link rel="stylesheet" type="text/css" href="login-style.css"/>
	<link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>

    body{
      /* background-image: linear-gradient(  #2c3e50  ,#d5d8dc,#2c3e50 );
            background-repeat: no-repeat;
            background-size: 100% 100%;
            height: 100vh; */

       background-image: linear-gradient(rgba(25, 44, 42, 0.3),rgba(33, 168, 168, 0.3)),url('st.png');
       background-repeat: no-repeat;
       height:100vh;
       background-size: 100% 100%;
       
    }



*{
	font-family: "Cantora One";
	box-sizing: border-box;
}

.contact-form
{
	width: 300px;
	padding: 40px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	/* background:#52b788; */
	border: 3px solid #2ec4b6;
	border-radius: 10px;
	/* box-shadow: 0 0 100px 0 #52b788; */
	margin-left:300px;


}
.contact-form input[type="password"],.contact-form input[type="email"]
{
	border: 0;;
	display: block;
	margin: 10px auto;
	text-align: center;
	/* border:2px solid #000000; */
	width: 200px;
	height: 40px;
	outline: none;
	color: black;
	border-radius: 24px;
	transition: 0.25s;

}
.contact-form input[type="text"]:focus,.contact-form input[type="password"]:focus,.contact-form input[type="email"]:focus{
	width: 220px;
	border-color: #66CDAA;
}

.contact-form h2 {
	text-align:center;
	margin-bottom: 20px;
	color: white;
}



.contact-form label {
	color:white;
	font-size: 18px;
	padding: 10px;
}

.contact-form button[type="submit"]{

	
	display: block;
	text-align: center;
	border:2px solid #eae9f1	;
	outline: none;
	border-radius: 40px;
	transition: 0.25s;
	padding: 7px 8px;
	margin-left: 70px;
	background-color: white;
	width: 70px;

	

}
.contact-form button[type="submit"]:hover{
	
	opacity: .7;
}

.img{
	margin-left:700px;
	margin-top:150px;

}

</style>
   
</head>
<body >
 
  <form action="tables.php" method="post" class="contact-form">
 	 <h2>lOGIN</h2>
 
    <label>Email</label>
    <input type="email" name="email" placeholder="email" required>

   <label>Password</label>
   <input type="password" name="password" placeholder="Password" required>
   
   <br>
 
   <button type="submit">Login</button>
    
  

 </form>


</body>
</html>