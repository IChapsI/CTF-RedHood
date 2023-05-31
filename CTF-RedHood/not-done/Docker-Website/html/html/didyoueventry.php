<?php
$username = trim($_POST['username']);
$password = trim($_POST['password']);

if ($username == 'Baraba$' && $password == 'Dant1och') {
	// success
	header('Location: youcantcheatwiththisextension.php');
	exit;
} else {
	// failure
	echo '<h1>Good try, but <span style="color:red;">no</span></h1>';
	echo '<a href="index.html">Try again</a>';
}

?>
