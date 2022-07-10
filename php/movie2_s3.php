<!doctype html>
<html lang="en">
	<head>
		<title>Rocketry - the nambi effect</title>
		<meta charset="utf-8" />
		<meta name="developer" content="Sanmitha V S" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<link rel="stylesheet" href="../css/movie2.css" />
		<script src="../js/showtimes.js"></script>
		
	</head>

	<body  onload="av6()">
	<form action="action.php" method="post" onsubmit="return check()" autocomplete="on">
		
	<?php
	$a6="";
	$db=new mysqli("localhost","root","Sanmitha@33","jazz",3306);
	$res6=$db->query("select * from m2s3;");
				$r6=$res6->fetch_all();
				if(count($r6)>0){
				foreach($r6 as $i){
					$a6.=($i[4].',');
				}
				}
				echo "<input type=\"hidden\" name=\"filled6\" id=\"filled6\" value=$a6 />";
				
	?><nav>
		<h2 class="h1">Rocketry - the nambi effect</h2>
		<img src="../img/movie2.jpg" alt="rocketry_movie" id="rocketry" />
	
			<h2>Showtimes : </h2> 
			<ul>
			<li><a href="movie2_s1.php" > 12:00 </a></li>
			<li><a href="movie2_s2.php"> 15:30 </a></li>
			<li><a href=""> 19:00 </a></li>
			</ul>
			
			<input type="hidden"  name="movie" value="m2s3" />
			<input type="hidden"  name="mn" value="rocketry the nambi effect" />
			
			<input type="text" id="name" name="name" maxlength="20" placeholder="Your name" required />
			<br><br>
			<input type="email" id="email" name="email"  placeholder="Your email id" required /><br><br>
		
			<input type="tel" id="phone" name="phone"  placeholder="Your phone number"  required />
			<br><br><br>
			<button type="submit" name="submit">Book Tickets</button>
			<br><br>
			<a href="../index.html">Back to Home Page</a>
		</nav>
		
		<div id="left">
		
		<header>
			<h1 class="h1">Jazz Film City </h1>
		</header>
		
			
			<label for="no_seats">No. of seats </label>
				<select id="no_seats"  name="no_seats">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
				</select>
			
				<label for="selected">Selected slot</label>
				<input type="text" id="st" name="st" value="19:00" size=5 readonly />
				
				<label for="selected">Selected seats</label>
				<textarea id="selected" name="selected" readonly></textarea>
				<br><br>
		
		<div id="seat_ar">
		<br>
			Platinum section : Rs. 220<br><br>
			<img src="../img/vaccant.jpg" id="a1" onclick="select(a1)" alt="a1" class="seats">
			<img src="../img/vaccant.jpg" id="a2" onclick="select(a2)" alt="a2" class="seats">
			<img src="../img/vaccant.jpg" id="a3" onclick="select(a3)" alt="a3" class="seats">
			<img src="../img/vaccant.jpg" id="a4" onclick="select(a4)" alt="a4" class="seats">
			<img src="../img/vaccant.jpg" id="a5" onclick="select(a5)" alt="a5" class="seats">
			<img src="../img/vaccant.jpg" id="a6" onclick="select(a6)" alt="a6" class="seats">
			<img src="../img/vaccant.jpg" id="a7" onclick="select(a7)" alt="a7" class="seats">
			<img src="../img/vaccant.jpg" id="a8" onclick="select(a8)" alt="a8" class="seats">
			<img src="../img/vaccant.jpg" id="a9" onclick="select(a9)" alt="a9" class="seats">
			<img src="../img/vaccant.jpg" id="a10" onclick="select(a10)" alt="a10" class="seats">
			<img src="../img/vaccant.jpg" id="a11" onclick="select(a11)" alt="a11" class="seats">
			<img src="../img/vaccant.jpg" id="a12" onclick="select(a12)" alt="a12" class="seats">
			<img src="../img/vaccant.jpg" id="a13" onclick="select(a13)" alt="a13" class="seats">
			<img src="../img/vaccant.jpg" id="a14" onclick="select(a14)" alt="a14" class="seats">
			<img src="../img/vaccant.jpg" id="a15" onclick="select(a15)" alt="a15" class="seats">
			<br>
			<img src="../img/vaccant.jpg" id="b1" onclick="select(b1)" alt="b1" class="seats">
			<img src="../img/vaccant.jpg" id="b2" onclick="select(b2)" alt="b2" class="seats">
			<img src="../img/vaccant.jpg" id="b3" onclick="select(b3)" alt="b3" class="seats">
			<img src="../img/vaccant.jpg" id="b4" onclick="select(b4)" alt="b4" class="seats">
			<img src="../img/vaccant.jpg" id="b5" onclick="select(b5)" alt="b5" class="seats">
			<img src="../img/vaccant.jpg" id="b6" onclick="select(b6)" alt="b6" class="seats">
			<img src="../img/vaccant.jpg" id="b7" onclick="select(b7)" alt="b7" class="seats">
			<img src="../img/vaccant.jpg" id="b8" onclick="select(b8)" alt="b8" class="seats">
			<img src="../img/vaccant.jpg" id="b9" onclick="select(b9)" alt="b9" class="seats">
			<img src="../img/vaccant.jpg" id="b10" onclick="select(b10)" alt="b10" class="seats">
			<img src="../img/vaccant.jpg" id="b11" onclick="select(b11)" alt="b11" class="seats">
			<img src="../img/vaccant.jpg" id="b12" onclick="select(b12)" alt="b12" class="seats">
			<img src="../img/vaccant.jpg" id="b13" onclick="select(b13)" alt="b13" class="seats">
			<img src="../img/vaccant.jpg" id="b14" onclick="select(b14)" alt="b14" class="seats">
			<img src="../img/vaccant.jpg" id="b15" onclick="select(b15)" alt="b15" class="seats">
			<br>
			Gold section : Rs. 180<br><br>
			<img src="../img/vaccant.jpg" id="c1" onclick="select(c1)" alt="c1" class="seats">
			<img src="../img/vaccant.jpg" id="c2" onclick="select(c2)" alt="c2" class="seats">
			<img src="../img/vaccant.jpg" id="c3" onclick="select(c3)" alt="c3" class="seats">
			<img src="../img/vaccant.jpg" id="c4" onclick="select(c4)" alt="c4" class="seats">
			<img src="../img/vaccant.jpg" id="c5" onclick="select(c5)" alt="c5" class="seats">
			<img src="../img/vaccant.jpg" id="c6" onclick="select(c6)" alt="c6" class="seats">
			<img src="../img/vaccant.jpg" id="c7" onclick="select(c7)" alt="c7" class="seats">
			<img src="../img/vaccant.jpg" id="c8" onclick="select(c8)" alt="c8" class="seats">
			<img src="../img/vaccant.jpg" id="c9" onclick="select(c9)" alt="c9" class="seats">
			<img src="../img/vaccant.jpg" id="c10" onclick="select(c10)" alt="c10" class="seats">
			<img src="../img/vaccant.jpg" id="c11" onclick="select(c11)" alt="c11" class="seats">
			<img src="../img/vaccant.jpg" id="c12" onclick="select(c12)" alt="c12" class="seats">
			<img src="../img/vaccant.jpg" id="c13" onclick="select(c13)" alt="c13" class="seats">
			<img src="../img/vaccant.jpg" id="c14" onclick="select(c14)" alt="c14" class="seats">
			<img src="../img/vaccant.jpg" id="c15" onclick="select(c15)" alt="c15" class="seats">
			<br>
			<img src="../img/vaccant.jpg" id="d1" onclick="select(d1)" alt="d1" class="seats">
			<img src="../img/vaccant.jpg" id="d2" onclick="select(d2)" alt="d2" class="seats">
			<img src="../img/vaccant.jpg" id="d3" onclick="select(d3)" alt="d3" class="seats">
			<img src="../img/vaccant.jpg" id="d4" onclick="select(d4)" alt="d4" class="seats">
			<img src="../img/vaccant.jpg" id="d5" onclick="select(d5)" alt="d5" class="seats">
			<img src="../img/vaccant.jpg" id="d6" onclick="select(d6)" alt="d6" class="seats">
			<img src="../img/vaccant.jpg" id="d7" onclick="select(d7)" alt="d7" class="seats">
			<img src="../img/vaccant.jpg" id="d8" onclick="select(d8)" alt="d8" class="seats">
			<img src="../img/vaccant.jpg" id="d9" onclick="select(d9)" alt="d9" class="seats">
			<img src="../img/vaccant.jpg" id="d10" onclick="select(d10)" alt="d10" class="seats">
			<img src="../img/vaccant.jpg" id="d11" onclick="select(d11)" alt="d11" class="seats">
			<img src="../img/vaccant.jpg" id="d12" onclick="select(d12)" alt="d12" class="seats">
			<img src="../img/vaccant.jpg" id="d13" onclick="select(d13)" alt="d13" class="seats">
			<img src="../img/vaccant.jpg" id="d14" onclick="select(d14)" alt="d14" class="seats">
			<img src="../img/vaccant.jpg" id="d15" onclick="select(d15)" alt="d15" class="seats">
			<br>
			<img src="../img/vaccant.jpg" id="e1" onclick="select(e1)" alt="e1" class="seats">
			<img src="../img/vaccant.jpg" id="e2" onclick="select(e2)" alt="e2" class="seats">
			<img src="../img/vaccant.jpg" id="e3" onclick="select(e3)" alt="e3" class="seats">
			<img src="../img/vaccant.jpg" id="e4" onclick="select(e4)" alt="e4" class="seats">
			<img src="../img/vaccant.jpg" id="e5" onclick="select(e5)" alt="e5" class="seats">
			<img src="../img/vaccant.jpg" id="e6" onclick="select(e6)" alt="e6" class="seats">
			<img src="../img/vaccant.jpg" id="e7" onclick="select(e7)" alt="e7" class="seats">
			<img src="../img/vaccant.jpg" id="e8" onclick="select(e8)" alt="e8" class="seats">
			<img src="../img/vaccant.jpg" id="e9" onclick="select(e9)" alt="e9" class="seats">
			<img src="../img/vaccant.jpg" id="e10" onclick="select(e10)" alt="e10" class="seats">
			<img src="../img/vaccant.jpg" id="e11" onclick="select(e11)" alt="e11" class="seats">
			<img src="../img/vaccant.jpg" id="e12" onclick="select(e12)" alt="e12" class="seats">
			<img src="../img/vaccant.jpg" id="e13" onclick="select(e13)" alt="e13" class="seats">
			<img src="../img/vaccant.jpg" id="e14" onclick="select(e14)" alt="e14" class="seats">
			<img src="../img/vaccant.jpg" id="e15" onclick="select(e15)" alt="e15" class="seats">
			<br>
			<img src="../img/vaccant.jpg" id="f1" onclick="select(f1)" alt="f1" class="seats">
			<img src="../img/vaccant.jpg" id="f2" onclick="select(f2)" alt="f2" class="seats">
			<img src="../img/vaccant.jpg" id="f3" onclick="select(f3)" alt="f3" class="seats">
			<img src="../img/vaccant.jpg" id="f4" onclick="select(f4)" alt="f4" class="seats">
			<img src="../img/vaccant.jpg" id="f5" onclick="select(f5)" alt="f5" class="seats">
			<img src="../img/vaccant.jpg" id="f6" onclick="select(f6)" alt="f6" class="seats">
			<img src="../img/vaccant.jpg" id="f7" onclick="select(f7)" alt="f7" class="seats">
			<img src="../img/vaccant.jpg" id="f8" onclick="select(f8)" alt="f8" class="seats">
			<img src="../img/vaccant.jpg" id="f9" onclick="select(f9)" alt="f9" class="seats">
			<img src="../img/vaccant.jpg" id="f10" onclick="select(f10)" alt="f10" class="seats">
			<img src="../img/vaccant.jpg" id="f11" onclick="select(f11)" alt="f11" class="seats">
			<img src="../img/vaccant.jpg" id="f12" onclick="select(f12)" alt="f12" class="seats">
			<img src="../img/vaccant.jpg" id="f13" onclick="select(f13)" alt="f13" class="seats">
			<img src="../img/vaccant.jpg" id="f14" onclick="select(f14)" alt="f14" class="seats">
			<img src="../img/vaccant.jpg" id="f15" onclick="select(f15)" alt="f15" class="seats">
			<br>
			Silver section : Rs. 100<br><br>
			<img src="../img/vaccant.jpg" id="g1" onclick="select(g1)" alt="g1" class="seats">
			<img src="../img/vaccant.jpg" id="g2" onclick="select(g2)" alt="g2" class="seats">
			<img src="../img/vaccant.jpg" id="g3" onclick="select(g3)" alt="g3" class="seats">
			<img src="../img/vaccant.jpg" id="g4" onclick="select(g4)" alt="g4" class="seats">
			<img src="../img/vaccant.jpg" id="g5" onclick="select(g5)" alt="g5" class="seats">
			<img src="../img/vaccant.jpg" id="g6" onclick="select(g6)" alt="g6" class="seats">
			<img src="../img/vaccant.jpg" id="g7" onclick="select(g7)" alt="g7" class="seats">
			<img src="../img/vaccant.jpg" id="g8" onclick="select(g8)" alt="g8" class="seats">
			<img src="../img/vaccant.jpg" id="g9" onclick="select(g9)" alt="g9" class="seats">
			<img src="../img/vaccant.jpg" id="g10" onclick="select(g10)" alt="g10" class="seats">
			<img src="../img/vaccant.jpg" id="g11" onclick="select(g11)" alt="g11" class="seats">
			<img src="../img/vaccant.jpg" id="g12" onclick="select(g12)" alt="g12" class="seats">
			<img src="../img/vaccant.jpg" id="g13" onclick="select(g13)" alt="g13" class="seats">
			<img src="../img/vaccant.jpg" id="g14" onclick="select(g14)" alt="g14" class="seats">
			<img src="../img/vaccant.jpg" id="g15" onclick="select(g15)" alt="g15" class="seats">
			<br>
			<img src="../img/vaccant.jpg" id="h1" onclick="select(h1)" alt="h1" class="seats">
			<img src="../img/vaccant.jpg" id="h2" onclick="select(h2)" alt="h2" class="seats">
			<img src="../img/vaccant.jpg" id="h3" onclick="select(h3)" alt="h3" class="seats">
			<img src="../img/vaccant.jpg" id="h4" onclick="select(h4)" alt="h4" class="seats">
			<img src="../img/vaccant.jpg" id="h5" onclick="select(h5)" alt="h5" class="seats">
			<img src="../img/vaccant.jpg" id="h6" onclick="select(h6)" alt="h6" class="seats">
			<img src="../img/vaccant.jpg" id="h7" onclick="select(h7)" alt="h7" class="seats">
			<img src="../img/vaccant.jpg" id="h8" onclick="select(h8)" alt="h8" class="seats">
			<img src="../img/vaccant.jpg" id="h9" onclick="select(h9)" alt="h9" class="seats">
			<img src="../img/vaccant.jpg" id="h10" onclick="select(h10)" alt="h10" class="seats">
			<img src="../img/vaccant.jpg" id="h11" onclick="select(h11)" alt="h11" class="seats">
			<img src="../img/vaccant.jpg" id="h12" onclick="select(h12)" alt="h12" class="seats">
			<img src="../img/vaccant.jpg" id="h13" onclick="select(h13)" alt="h13" class="seats">
			<img src="../img/vaccant.jpg" id="h14" onclick="select(h14)" alt="h14" class="seats">
			<img src="../img/vaccant.jpg" id="h15" onclick="select(h15)" alt="h15" class="seats">
			<br>
			<img src="../img/vaccant.jpg" id="i1" onclick="select(i1)" alt="i1" class="seats">
			<img src="../img/vaccant.jpg" id="i2" onclick="select(i2)" alt="i2" class="seats">
			<img src="../img/vaccant.jpg" id="i3" onclick="select(i3)" alt="i3" class="seats">
			<img src="../img/vaccant.jpg" id="i4" onclick="select(i4)" alt="i4" class="seats">
			<img src="../img/vaccant.jpg" id="i5" onclick="select(i5)" alt="i5" class="seats">
			<img src="../img/vaccant.jpg" id="i6" onclick="select(i6)" alt="i6" class="seats">
			<img src="../img/vaccant.jpg" id="i7" onclick="select(i7)" alt="i7" class="seats">
			<img src="../img/vaccant.jpg" id="i8" onclick="select(i8)" alt="i8" class="seats">
			<img src="../img/vaccant.jpg" id="i9" onclick="select(i9)" alt="i9" class="seats">
			<img src="../img/vaccant.jpg" id="i10" onclick="select(i10)" alt="i10" class="seats">
			<img src="../img/vaccant.jpg" id="i11" onclick="select(i11)" alt="i11" class="seats">
			<img src="../img/vaccant.jpg" id="i12" onclick="select(i12)" alt="i12" class="seats">
			<img src="../img/vaccant.jpg" id="i13" onclick="select(i13)" alt="i13" class="seats">
			<img src="../img/vaccant.jpg" id="i14" onclick="select(i14)" alt="i14" class="seats">
			<img src="../img/vaccant.jpg" id="i15" onclick="select(i15)" alt="i15" class="seats">
			<br>
			<img src="../img/vaccant.jpg" id="j1" onclick="select(j1)" alt="j1" class="seats">
			<img src="../img/vaccant.jpg" id="j2" onclick="select(j2)" alt="j2" class="seats">
			<img src="../img/vaccant.jpg" id="j3" onclick="select(j3)" alt="j3" class="seats">
			<img src="../img/vaccant.jpg" id="j4" onclick="select(j4)" alt="j4" class="seats">
			<img src="../img/vaccant.jpg" id="j5" onclick="select(j5)" alt="j5" class="seats">
			<img src="../img/vaccant.jpg" id="j6" onclick="select(j6)" alt="j6" class="seats">
			<img src="../img/vaccant.jpg" id="j7" onclick="select(j7)" alt="j7" class="seats">
			<img src="../img/vaccant.jpg" id="j8" onclick="select(j8)" alt="j8" class="seats">
			<img src="../img/vaccant.jpg" id="j9" onclick="select(j9)" alt="j9" class="seats">
			<img src="../img/vaccant.jpg" id="j10" onclick="select(j10)" alt="j10" class="seats">
			<img src="../img/vaccant.jpg" id="j11" onclick="select(j11)" alt="j11" class="seats">
			<img src="../img/vaccant.jpg" id="j12" onclick="select(j12)" alt="j12" class="seats">
			<img src="../img/vaccant.jpg" id="j13" onclick="select(j13)" alt="j13" class="seats">
			<img src="../img/vaccant.jpg" id="j14" onclick="select(j14)" alt="j14" class="seats">
			<img src="../img/vaccant.jpg" id="j15" onclick="select(j15)" alt="j15" class="seats">
			<br><br><br>
			<img src="../img/screen_this_way.png" alt="Screen this way" id="stw" />
		</div>
		</div>
		
		</form>
	</body>
</html>