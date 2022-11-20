<?php 
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Trivia Game - Aleeza Ulang</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css" />
	</head>
	
	<body>
			<div class="container">
				<div class="row">
					<form class="col" action="result.php" method="POST">
						<h1>Trivia Game</h1>
						<div class="form-group">
							<label>1. What is my second name?</label>
							<select name="q1" class="form-control" required>
								<option value=""></option>
								<option value="a">Paris</option>
								<option value="b">China</option>
								<option value="c">Austria</option>
								<option value="d">Narita</option>
							</select>
						</div>
						<div class="form-group">
							<label>2. What is my favorite fruit?</label>
							<select name="q2" class="form-control" required>
								<option value=""></option>
								<option value="a">Apple</option>
								<option value="b">Grape</option>
								<option value="c">Banana</option>
								<option value="d">Orange</option>
							</select>
						</div>
						<div class="form-group">
							<label>3. What is the name of my future Raccoon?</label>
							<select name="q3" class="form-control" required>
								<option value=""></option>
								<option value="a">Virgil</option>
								<option value="b">Dante</option>
								<option value="c">Beatrice</option>
								<option value="d">Lucifer</option>
							</select>
						</div>
						<div class="form-group">
							<label>4. What is my favorite fast food?</label>
							<select name="q4" class="form-control" required>
								<option value=""></option>
								<option value="a">Burger King</option>
								<option value="b">Potato Corner</option>
								<option value="c">KFC</option>
								<option value="d">McDonald's</option>
							</select>
						</div>
						<div class="form-group">
							<label>5. What is my favorite color?</label>
							<select name="q5" class="form-control" required>
								<option value=""></option>
								<option value="a">Pink</option>
								<option value="b">Sky Blue</option>
								<option value="c">Mint Green</option>
								<option value="d">Pastel Peach</option>
							</select>
						</div>
						<div class="form-group">
							<label>6. Who is my favorite R6S attacker?</label>
							<select name="q6" class="form-control" required>
								<option value=""></option>
								<option value="a">Hibana</option>
								<option value="b">Thermite</option>
								<option value="c">Zofia</option>
								<option value="d">Buck</option>
							</select>
						</div>
						<div class="form-group">
							<label>7. Who is my favorite R6S defender?</label>
							<select name="q7" class="form-control" required>
								<option value=""></option>
								<option value="a">Lesion</option>
								<option value="b">Frost</option>
								<option value="c">Bandit</option>
								<option value="d">Jager</option>
							</select>
						</div>
						<div class="form-group">
							<label>8. Who is my most hated R6S operator?</label>
							<select name="q8" class="form-control" required>
								<option value=""></option>
								<option value="a">Caveira</option>
								<option value="b">Dokkaebi</option>
								<option value="c">Clash</option>
								<option value="d">Montagne</option>
							</select>
						</div>
						<div class="form-group">
							<label>9. When is my birthday?</label>
							<select name="q9" class="form-control" required>
								<option value=""></option>
								<option value="a">September 14</option>
								<option value="b">September 15</option>
								<option value="c">September 16</option>
								<option value="d">September 17</option>
							</select>
						</div>
						<div class="form-group">
							<label>10. What is my all-time favorite anime?</label>
							<select name="q10" class="form-control" required>
								<option value=""></option>
								<option value="a">Hunter x Hunter</option>
								<option value="b">Fullmetal Alchemist: Brotherhood</option>
								<option value="c">Gintama</option>
								<option value="d">D.Gray-Man</option>
							</select>
						</div>
						<div class="form-group">
							<label>11. Who is my favorite dream pop / ethereal artist?</label>
							<select name="q11" class="form-control" required>
								<option value=""></option>
								<option value="a">Halsey</option>
								<option value="b">Grimes</option>
								<option value="c">Lana del Rey</option>
								<option value="d">Kali Uchis</option>
							</select>
						</div>
						<div class="form-group">
							<label>12. My favorite medium of art is...?</label>
							<select name="q12" class="form-control" required>
								<option value=""></option>
								<option value="a">Painting</option>
								<option value="b">Film Photography</option>
								<option value="c">Kinetics and Sculpting</option>
								<option value="d">Dance and Theater</option>
							</select>
						</div>
						<div class="form-group">
							<label>13. My favorite clothing brand is...?</label>
							<select name="q13" class="form-control" required>
								<option value=""></option>
								<option value="a">Uniqlo</option>
								<option value="b">Bershka</option>
								<option value="c">Forever 21</option>
								<option value="d">Stradivarius</option>
							</select>
						</div>
						<div class="form-group">
							<button type="submit" name="submit" class="btn btn-success">
							Show Score
							</button>
						</div>
					</form>
				</div>	
			</div>
	</body>
</html>