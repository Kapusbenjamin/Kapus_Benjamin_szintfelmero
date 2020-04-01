<?php
echo "1) Feladat:" . "<br>";
for($i = 1; $i <= 10; $i++){
	for($k = 1; $k <= 10; $k++){
		echo $i*$k . " ";
	}
	echo "<br>";
}
echo "<br>";

echo "2) Feladat:" . "<br>";
function haromszogszerkeszthetoseg($a, $b, $c, $sz1, $sz2, $sz3){
	if($a < $b+$c && $b < $a+$c && $c < $a+$b){
		echo "A háromszög megszerkeszthető!" . "<br>";
		if($sz1 + $sz2 + $sz3 == 180){
			echo "A háromszög belső szögeinek mérete reális!" . "<br>";
			$legnagyobbszog = max($sz1, $sz2, $sz3);
			if($legnagyobbszog < 90){
				echo "A legnagyobb szög mérete " . $legnagyobbszog . ", és hegyesszög." . "<br>";
			}
			elseif($legnagyobbszog == 90){
				echo "A legnagyobb szög mérete " . $legnagyobbszog . ", és derékszög." . "<br>";
			}
			elseif($legnagyobbszog > 90){
				echo "A legnagyobb szög mérete " . $legnagyobbszog . ", és tompaszög." . "<br>";
			}
		}
		else{
			echo "A belső szögek mérete nem reális!" . "<br>";
		}
	}
	elseif($a > $b+$c){
		echo "A háromszög nem szerkeszthető, mert a b és a c oldalak összege nem megfelelő!" . "<br>";
	}
	elseif($b > $a+$c){
		echo "A háromszög nem szerkeszthető, mert az a és a c oldalak összege nem megfelelő!" . "<br>";
	}
	elseif($c > $a+$b){
		echo "A háromszög nem szerkeszthető, mert az a és a c oldalak összege nem megfelelő!" . "<br>";
	}
	else{
		echo "A háromszög nem szerkeszthető meg!" . "<br>";
	}
}

haromszogszerkeszthetoseg(12, 32, 21, 76, 57, 47);
echo "<br>";

echo "3) Feladat:" . "<br>";









echo "4) Feladat:" . "<br>";
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<form action='' method='post'>
			<input type='text' name='email' placeholder="E-mail">
			<input type='text' name='username' placeholder="Username">
			<input type='text' name='psw' placeholder="Password">
			<input type='text' name='pswr' placeholder="Password-Repeat">
			<input type='submit' name='submit' value="Register">
		</form>
	</body>
</html>


<?php


$conn = mysqli_connect("localhost", "root", "", "register");

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['psw']) && !empty($_POST['pswr'])){
		
		$email = strip_tags(trim(mysqli_real_escape_string($conn, $_POST['email'])));
		$username = strip_tags(trim(mysqli_real_escape_string($conn, $_POST['username'])));
		$password = strip_tags(trim(mysqli_real_escape_string($conn, $_POST['psw'])));
		$passwordr = strip_tags(trim(mysqli_real_escape_string($conn, $_POST['pswr'])));
}
else{
	echo "Töltse ki a mezőket!";
}

function register($email, $username, $password, $passwordr){
	
		$conn = mysqli_connect("localhost", "root", "", "register");
		$sql = "SELECT * FROM register WHERE email = '{$email}' OR username = '{$username}'";
		$result = mysqli_query($conn, $sql);
		
		if($result->num_rows > 0){
				echo "Már létezik ez az E-mail cím vagy Username!";
		}
		
		if($password == $passwordr){
			if(strlen($password) >= 8){
				
			}
			else{
				echo "A jelszó nem elég hosszú!";
			}
		}
		else{
			echo "A két jelsó nem egyezik meg!";
		}
}

echo "<br>";

echo "Összetett feladatok:" . "<br>";
echo "1) Feladat:" . "<br>";


$tomb = array(3, 5, 67, 2, 23);
function lotto($tomb){
	
	$talalatok = array();
	
	for($i = 1; $i <= 5; $i++){
		$talalatok[$i] = rand(1, 90);
	}
	
	$nyert = 0;
	
	foreach($tomb as $key){
		foreach($talalatok as $szam){
			if($key == $szam){
				$nyert++;
			}
		}
	}
	
	switch($nyert){
		case 1;
		echo "A nyeremény: " . 0.05*320000000;
		break;
		case 2;
		echo "A nyeremény: " . 0.1*320000000;
		break;
		case 3;
		echo "A nyeremény: " . 0.2*320000000;
		break;
		case 4;
		echo "A nyeremény: " . 0.5*320000000;
		break;
		case 5;
		echo "A nyeremény: 320000000";
		break;
	}
	
	
	
}
lotto();
echo "<br>";

echo "2) Feladat:";

?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<form action='' method='post'>
			<input type='text' name='vezeteknev' placeholder="Vezetéknév">
			<input type='text' name='keresztnev' placeholder="Keresztnév">
			<input type='text' name='tel_szam' placeholder="Telefonszám">
			<input type='text' name='email2' placeholder="E-mail">
			<input type='text' name='psw2' placeholder="Password">
			<input type='text' name='pswr2' placeholder="Password-Repeat">
			<input type='text' name='iranyitoszam' placeholder="Írányítószám">
			<input type='text' name='telepules' placeholder="Település">
			<input type='text' name='utca' placeholder="Utca">
			<input type='text' name='hazszam' placeholder="Házszám">
			<input type='text' name='bkartya_szam' placeholder="Bankkártya szám">
			<input type='submit' name='submit2' value="Register">
		</form>
	</body>
</html>

<?php


if(isset($_POST['submit2']) && !empty($_POST['vezeteknev']) && !empty($_POST['keresztnev']) && !empty($_POST['tel_szam']) && !empty($_POST['email2']) && !empty($_POST['psw2']) && !empty($_POST['pswr2']) && !empty($_POST['iranyitoszam']) && !empty($_POST['telepules']) && !empty($_POST['utca']) && !empty($_POST['hazszam']) && !empty($_POST['bkartya_szam'])){
	
	$vezeteknev = strip_tags(trim(mysqli_real_escape_string($conn, $_POST['vezeteknev'])));
	$keresztnev = strip_tags(trim(mysqli_real_escape_string($conn, $_POST['keresztnev'])));
	$tel_szam = strip_tags(trim(mysqli_real_escape_string($conn, $_POST['tel_szam'])));	
	$email2 = strip_tags(trim(mysqli_real_escape_string($conn, $_POST['email2'])));
	$psw2 = strip_tags(trim(mysqli_real_escape_string($conn, $_POST['psw2'])));
	$pswr2 = strip_tags(trim(mysqli_real_escape_string($conn, $_POST['pswr2'])));
	$iranyitoszam = strip_tags(trim(mysqli_real_escape_string($conn, $_POST['iranyitoszam'])));
	$telepules = strip_tags(trim(mysqli_real_escape_string($conn, $_POST['telepules'])));
	$utca = strip_tags(trim(mysqli_real_escape_string($conn, $_POST['utca'])));
	$hazszam= strip_tags(trim(mysqli_real_escape_string($conn, $_POST['hazszam'])));
	$bkartya_szam = strip_tags(trim(mysqli_real_escape_string($conn, $_POST['bkartya_szam'])));

}

function öregister($vezeteknev, $keresztnev, $tel_szam, $email2, $psw2, $pswr2, $iranyitoszam, $telepules, $utca, $hazszam, $bkartya_szam){

	if($psw2 == $pswr2){}
	else{
		echo "A két jelszó nem egyezik meg!";
	}
	
	if(strlen($tel_szam) == 15){}
	else{
		echo "A telefonszám nem megfelelő formátumú! Megfelelő formátum: '+36 20/123-4567'";
	}
	
	if(filter_var($email2, FILTER_VALIDATE_EMAIL)){}
	else{
		echo "Az E-mail cím nem lett megfelelően megtisztítva!";
	}
	
	if(strlen($bkartya_szam) == 21){
		if(strpos($bkartya_szam, 112233)){}
		else{
			echo "Nem jó azonosító! (112233)";
		}
	}
	else{
		echo "Nem megfelelő formátum!" (112233-112233-112233);
	}

}



?>