<!DOCTYPE html>
<head>
    <title>Transactions</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

/* :root {
  --main-color: #020305 ;
} */

*{
  padding: 0;
  margin: 0;
  text-decoration: none;
}
body,html {
  background-image: linear-gradient(#000000, #202020);
  height: 100%;
    
}
.navbar {
  overflow: hidden;
  background-color: rgba(0, 0, 0, 0);
  position: fixed; /* Set the navbar to fixed position */
  top: 0; /* Position the navbar at the top of the page */
  width: 100%; /* Full width */
  background-color: #000000;

}

/* Links inside the navbar */
.navbar {
  display: inline-block;
  text-align: center;
  padding: 14px;
}

.navbar a {
  font-family: 'Poppins', sans-serif;
  color: #f2f2f2;
  padding: 14px;
  text-decoration: none;
}

/* Change background on mouse-over */
.navbar a:hover {
  background: #38ef7d;
  color: black;
}
#box{
    margin-top: 100px;
    margin-left: auto;
    margin-right:auto;
    position: center;
    height: 75vh;
    width: 75vw;
    color: black;
}
table
	{
		border-collapse: collapse;
		width: 100%;
		color: white;
		font-family: 'Poppins', sans-serif;
		font-size: 24px;
    font-weight: 300;
		text-align: center;
		position:center;
		margin-top: auto;
    padding:15px;
   
}
h1{
  text-align:center;
  width:100%;
  margin-top: 100px;
  margin-left:auto;
  margin-right:auto;
  color: white;
  font-family: 'Poppins', sans-serif;

}
th 
{
  background-color: #38ef7d;
  color: black;
  font-weight: normal;
  font-size: 22px
}
tr:nth-child(odd) 
{
  background-color: #202020;
}
tr:hover {background-color: #38ef7d;color: #000000;}



/* FOOTER */

.footer{
  position: absolute;
  bottom: 0;
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px 0;
  width: 100%;
}

.logo{
  width: 50px;
  height: auto;
  margin-right: 20px;
  transition: 0.3s ease-in;

 }

.logo:hover{
  opacity: 0.5;
}

.footer__rights{
  font-family: "Poppins", sans-serif;
  font-weight: 300;
  color: white;
}

.footer__rights a{
  color: white;
}

.footer__rights a:hover{
  text-decoration: none;
}
</style>
<body>
<div class="navbar">
<a href="bankmain.php">Home</a>
<a href="Mtransfer.php">Fund Transfer</a>
  <a href="customers.php">Customers</a>
  <a href="deposit.php">Deposit</a>
  <a href="withdrawal.php">Withdrawal</a>
</div>

<h1 class='h1'>Transactions</h1>
<br>
<table align="center" class="tableus">
		<tr>
			<th>Sender</th>
			<th>Reciever</th>
			<th>Amount</th>
    </tr>
		

<?php


$conn = mysqli_connect("localhost", "root", "", "sparkbank");
if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sender,reciever,amount FROM transfer";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
	{
		echo "<tr><td>" . $row["sender"]. "</td><td>" . $row["reciever"] . "</td><td>". $row["amount"]. "</td> </tr>";
	}
echo "</table>";
} 
else 
{ 
	echo "0 results"; 
}

$conn->close();
?>

  </div>

  <div class="navbar__ham">

  </div>
</nav>

<!-- FOOTER -->


</table>

</body>

</html>
<script>
$("document").ready(function(){
  $(".navbar__ham").on("click", function(){
    $(".navbar__links").toggleClass("active");
    
  });

  $(".navbar__links a li").on("click", function(){
    $(".navbar__links").removeClass("active");
  });
});




  
</script>