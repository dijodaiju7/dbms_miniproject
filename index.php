<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
        <script src="https://kit.fontawesome.com/b3fee0b18d.js" crossorigin="anonymous"></script>		
        <meta http-equiv="X-UA-Compatible"
			content="IE=edge" />
		<title>Bank Login</title>
		<meta name="description"
			content="" />
		<meta name="viewport"
			content="width=device-width,
					initial-scale=1" />
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
			* {
				box-sizing: border-box;
			}
			body {
				margin: 0;
				/*Display width and height*/
				height: 100vh;
				width: 100vw;
				overflow: hidden;
				font-family: 'Poppins', sans-serif;
				/* To make all the elements center */
				display: flex;
				align-items: center;
				justify-content: center;
				/*Font color and background Color*/
				color: #555;
                background-image: linear-gradient(#000000, #202020);
			}
			.lgn-div {
				/* Login Card Width and height */
				width: 430px;
				height: 500px;
				/* padding */
				padding: 20px 35px 15px 35px;
				border-radius: 20px;
                background-image: linear-gradient(#000000, #202020);
				/* Box-shadow for 3d visualization*/
				/* box-shadow:
				-3px -3px 3px #48494B,
				3px 3px 3px rgba(0, 0, 0, 0.2); */
				border-style: solid;
				border-color: #202020;
			}
			.lgn-logo {
                content: url("login.png");
                background-size: cover;
				width: 100px;
				height: 100px;
				border-radius: 50%;
				margin: 0 auto;
				/* Box-shadow for logo */
				/* box-shadow: 0px 0px 2px #48494B,
				0px 0px 0px 5px #48494B,
				3px 3px 3px #48494B,
				-8px -8px 15px #48494B; */
			}
			.lgn-title {
				text-align: center;
				font-size: 28px;
				padding-top: 24px;
				letter-spacing: 0.5px;
				color:  #38ef7d;
				font-weight: 700;
			}
			.lgn-sub-title {
				text-align: center;
				font-size: 15px;
				padding-top: 7px;
				letter-spacing: 1px;
				color:  #38ef7d;
			}
			.lgn-input-fields {
				width: 100%;
				padding: 20px 5px 10px 5px;
			}
			.lgn-input-fields input {
/* To hide default browser options of input field */
				border: none;
				outline: none;
				/* Custom design for the input field */
				background: none;
				font-size: 18px;
				color: #555;
				padding: 15px 10px 15px 5px;
			}
			.lgn-email,
			.lgn-password {
				margin-bottom: 20px;
				border-radius: 10px;
				/* Box-shadow for 3d */
				/* box-shadow: inset 2px 2px 2px #48494B,
				inset -2px -2px 2px #48494B; */
				border-style: ridge;
				border-color: #202020;
			}
			.lgn-input-fields svg {
				height: 22px;
				margin: 0 10px -3px 25px;
			}
			.lgn-button {
	/* To hide default browser options of input field */
				outline: none;
				border: none;
				/* Custom design for the Button */
				cursor: pointer;
				width: 100%;
				height: 60px;
				border-radius: 15px;
				font-size: 20px;
				font-weight: 400;
				color: #fff;
				text-align: center;
				background:  #38ef7d;
				transition: 0.5s;
			}
			.lgn-button:hover {
				background:  #5fb87d;
			}
			.lgn-button:active {
				background:  #28AF63;
                box-shadow: 0 5px #666;
                transform: translateY(30px);
			}
			.lgn-link {
				padding-top: 20px;
				text-align: center;
			}
			.lgn-link a {
				text-decoration: none;
				color: #aaa;
				font-size: 15px;
				transition: 0.5s;
			}
			.lgn-link a:hover {
				text-decoration: none;
				color:  #28AF63;
				font-size: 15px;
			}
		</style>
	</head>
	<body>
		<div class="lgn-div">
			<div class="lgn-logo"></div>
			<div class="lgn-title">Bank Login</div>
			<div class="lgn-sub-title">
			Enter your credentials
		</div>
		<form name action = "" onsubmit = "return validation()" method = "POST">
			<div class="lgn-input-fields">
				<div class="lgn-email">
					&nbsp;<i class="fa-solid fa-id-card-clip"></i> <input type="bankid" placeholder="Bank Id" name="usr"/>
				</div>
				<div class="lgn-password">
                    &nbsp;<i class="fa-solid fa-key"></i>                    <input type="password"
						placeholder="Password" name="pass"/>
				</div>
			</div>
			<input class="lgn-button" type="submit" name="sub" value="Log In">
			<br><br>
			<center>
			<?php 
include("dbconnection.php");

if(isset($_POST['sub']))
{
$username = $_POST['usr'];
$password = $_POST['pass'];

$res = mysqli_query($db_handler,"select * from user_login where username='$username'and password='$password'");
$result=mysqli_fetch_array($res);
if($result)
{
echo "Login Successful ";	
echo "<script> window.location.assign('bankmain.php'); </script>";

}
else
{
	echo "Invalid Credentials! ";
}
}
?>
			</center>
		</div>
		<script>  
            function validation()  
            {  
                var id=document.usr_frm.usr.value;  
                var ps=document.usr_frm.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("Bank Id and Password fields are empty!");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Bank Id is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password is empty!");  
                    return false;  
                    }  
                }                             
            }  
        </script> 
		
</body>
</html>
