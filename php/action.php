<!doctype html>
<?php
	session_start();
?>
<!doctype html>
<html lang="en">
	<head>
		<title>slot and seat details</title>
		<meta charset="utf-8" />
		<meta name="developer" content="Sanmitha V S" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<link rel="stylesheet" href="../css/action.css" />
		<script src="../js/ticket.js"></script>
	</head>

	<body>
		<header>
		<img src="../img/jazz.jpg" alt="jazz" id="jazz" />
			<h1>Seat and payment details : </h1>
		</header>
		
		<form action="" method="post">
		
		<fieldset>
			<legend>Your details : </legend>
		<?php
				$name=$_POST["name"];
				$mn=$_POST['mn'];
				$em=$_POST["email"];
				$_SESSION['name']=$name;
				$_SESSION['email']=$em;
				$ph=(int)$_POST['phone'];
				echo "Your name : <h4 id=\"h4\">$name</h4><br><br>";
				echo "Your email : $em<br><br>";
				echo "Your mobile : $ph<br>";
		?>		
		</fieldset>
		
		<fieldset id="right">
			<legend>Slot and seating </legend>
			<?php
			$s=$_POST["selected"];
			$a=explode(',',$s);
			if((count($a)==1) && ($a[0]=="")){
				unset($a[0]);
			}
			$n=count($a);
			echo "Selected movie : ".$mn."<br><br>";
			echo "Selected slot : ".$_POST["st"]."<br><br>";
			echo "Number of seats : ".$n."<br><br>";
			echo "Selected seats : ".$_POST["selected"]."<br>";
			$p=array();
			foreach($a as $i){
				switch($i[0])
				{
					case 'a':
					case 'b':
						array_push($p,220);
						break;
					case 'c':
					case 'd':
					case 'e':
					case 'f':
						array_push($p,180);
						break;
					case 'g':
					case 'h':
					case 'i':
					case 'j':
						array_push($p,100);
						break;
				}
			}
			?>
			</fieldset>
			<br><br>
			<div id="l">
			<table>
				<thead>
				<tr>
				<th>Seat</th>
				<th>Price</th>
				</tr>
				</thead>
				
				<tbody>
			<?php
			for($i=0;$i<count($p);$i++){
				echo "<tr>";
				echo "<td>".$a[$i]."</td>";
				echo "<td>".$p[$i]."</td>";
				echo "</tr>";
			}
			echo "</tbody></table></div>";
			
			echo "<div id=\"r\">";
				$sum=array_sum($p);
				$gst=(15*$sum)/100;
				$_SESSION['amt']=($sum+$gst);
				echo "<br>Total Amount to be payed : <h3 id=\"h3\">Rs.".($sum+$gst)."</h3> (";
				echo " Ticket amount : Rs. ".$sum." + ";
				echo "%12 gst : Rs. ".$gst.")";
				
				/*$db=new mysqli("localhost","root","Sanmitha@33");
				$db->query("create database jazz;");
				$db=new mysqli("localhost","root","Sanmitha@33","jazz",3306);
				$sql="create table m1s1(sl_no integer(10) auto_increment primary key, name varchar(30), phone bigint(20), email varchar(255), seats varchar(255) unique);";
				$db->query($sql);
				$sql="create table m1s2(sl_no integer(10) auto_increment primary key, name varchar(30), phone bigint(20), email varchar(255), seats varchar(255) unique);";
				$db->query($sql);
				$sql="create table m1s3(sl_no integer(10) auto_increment primary key, name varchar(30), phone bigint(20), email varchar(255), seats varchar(255) unique);";
				$db->query($sql);
				$sql="create table m2s1(sl_no integer(10) auto_increment primary key, name varchar(30), phone bigint(20), email varchar(255), seats varchar(255) unique);";
				$db->query($sql);
				$sql="create table m2s2(sl_no integer(10) auto_increment primary key, name varchar(30), phone bigint(20), email varchar(255), seats varchar(255) unique);";
				$db->query($sql);
				$sql="create table m2s3(sl_no integer(10) auto_increment primary key, name varchar(30), phone bigint(20), email varchar(255), seats varchar(255) unique);";
				$db->query($sql);*/
				$movie=$_POST['movie'];
				$_SESSION['slot']=$movie;
				$db=new mysqli("localhost","root","Sanmitha@33","jazz",3306);
				foreach($a as $i){
				$sql="insert into $movie(name,phone,email,seats) values (\"$name\",$ph,\"$em\",\"$i\");";
				$db->query($sql);
				}
			?>
			<br><br><br><br><br>
			<a href="ticket.php">Go to Payment</a>
			<a href="../index.html">Back to home page</a>
			</div>
			
			</form>
	</body>
</html>