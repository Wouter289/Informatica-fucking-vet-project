<?php
	include('sql.php');
	include('errors.php');
	
	//var_dump($_POST['nextQuestion']);
	
	if(!isset($_SESSION["count"])){$_SESSION["count"] = 0;}
	if($_SESSION["count"] == 80){$_SESSION["count"] = 0;}
	
	if(isset($_POST['nextQuestion']))
	{
		?>
			<form action="/Project/vragen.php" method="post">
				<a><?php getQuestion($_SESSION["count"]);?></a><br>
				<input type = "text" name="question">
				<input type = "submit" name="nextQuestion">
			</form>
		<?php
		$_SESSION["count"]++;
		unset($_POST['nextQuestion']);
	}
	
	else
	{
		?>
			<form action="/Project/vragen.php" method="post">
				<a><?php getQuestion($_SESSION["count"]);?></a><br>
				<input type = "text" name="question">
				<input type = "submit" name="nextQuestion">
			</form>
		<?php
	}
?>
	
