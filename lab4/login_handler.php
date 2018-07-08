<?php

	function sanitize_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	
	echo "<form>
	<input type='text' name='text' value='text'/>
	</form>";
	
	//$un=sanitize_input($_GET['un'];        //<h1>eee</h1>
	//$pass=sanitize_input($_GET['pass']);
	
	$un=$_GET['un'];
	$pass=$_GET['pass'];
	
	echo $un.' '.$pass;
	//echo $un;
	//echo $pass;
	
?>