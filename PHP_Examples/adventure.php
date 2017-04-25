<!DOCTYPE html>
<html>
<body>
<h1> Adventure Quest</h1>
<h3> Choose A direction </h3>
<?PHP 
 date_default_timezone_set('MST7MDT');


 
 
 
if(isset($_GET['dir'])){
		$dirTraveled = $_GET['dir'];
	
		if($dirTraveled == 'North'){
			 echo date('h:i:s a');

			echo "<p> You Traveled North!";
			if(rand(1, 10)==5){
				echo "<p> You found loot!!";
			}
			else if(rand(1, 20)==8){
				echo "<p> You were eaten by Cthulhu!";
			}
		   else if(rand(1, 20)==10){
				echo "<p> You fell in a pit and died!";
			}
			else if(rand(1, 20)==7){
				echo "<p> You found your way home!";
			}
			else if(rand(1, 20)==18){
				echo "<p> You have slain the dragon!";
			}
			else if(rand(1, 20)==3){
				echo "<p> You make camp for the night!";
			}
			else {
				echo"<p> A boring, seemingly endless field lies in front of you";
		}
		}
		if($dirTraveled == 'West'){
			 echo date('h:i:s a');
			echo "<p> You Traveled West!";
		if(rand(1, 10)==5){
				echo "<p> You found loot!!";
			}
			else if(rand(1, 20)==8){
				echo "<p> You were eaten by Cthulhu!";
			}
		   else if(rand(1, 20)==10){
				echo "<p> You fell in a pit and died!";
			}
			else if(rand(1, 20)==7){
				echo "<p> You found your way home!";
			}
			else if(rand(1, 20)==18){
				echo "<p> You have slain the dragon!";
			}
			else if(rand(1, 20)==3){
				echo "<p> You make camp for the night!";
			}
			else {
				echo"<p> a thick forrest is in the distance";
		
		}
		}
		if($dirTraveled == 'East'){
			 echo date('h:i:s a');
			echo "<p> You Traveled East!";
			if(rand(1, 10)==5){
				echo "<p> You found loot!!";
			}
			else if(rand(1, 20)==8){
				echo "<p> You were eaten by Cthulhu!";
			}
		   else if(rand(1, 20)==10){
				echo "<p> You fell in a pit and died!";
			}
			else if(rand(1, 20)==7){
				echo "<p> You found your way home!";
			}
			else if(rand(1, 20)==18){
				echo "<p> You have slain the dragon!";
			}
			else if(rand(1, 20)==3){
				echo "<p> You make camp for the night!";
			}
			else {
				echo"<p> A rocky mountain looms above";
		
		}
		}
		if($dirTraveled == 'South'){
			 echo date('h:i:s a');
			echo "<p> You Traveled South!";
		if(rand(1, 10)==5){
				echo "<p> You found loot!!";
			}
			else if(rand(1, 20)==8){
				echo "<p> You were eaten by Cthulhu!";
			}
		   else if(rand(1, 20)==10){
				echo "<p> You fell in a pit and died!";
			}
			else if(rand(1, 20)==7){
				echo "<p> You found your way home!";
			}
			else if(rand(1, 20)==18){
				echo "<p> You have slain the dragon!";
			}
			else if(rand(1, 20)==3){
				echo "<p> You make camp for the night!";
			}
			else {
				echo"<p> A desolate Waste Is in the distance";
		}
		}
		
       
 }
 //if (isset($_GET['olddirs'])) {
	// $alldirs = $_GET['olddirs'] . @_GET['dir'];
	 //echo "<input type='hidden' name='alldirs' value='" . $alldirs . "'>";
	 //echo "<p> Your Location is <b>" . $alldirs . "</b>";
// }

		?>
<form name="Form" method="get" action="adventure.php">

<?PHP 
//if (isset($GET['olddirs'])){
	//$olddirs = $_GET['hidden'] . $_GET['dir'];
	
//echo "<input type='hidden' name='olddirs' value='" . $alldirs . "'>";}
//else{
//		echo "<input type='hidden' name='olddirs' value=''>";
//	}
echo "<input type='submit' name='dir' value='West'>";
echo "<input type='submit' name='dir' value='North'>";
echo "<input type='submit' name='dir' value='East'>";

echo "<input type='submit' name='dir' value='South'>";
echo "<br />";
echo "<br />";
//echo "<input type='submit' name='loc' value='Where Am I'>";


?>
<br />
</form>
