<?php

session_start();
$_SESSION['name'] = "Jason";
?>


<!DOCTYPE>
<html>

<head>

</head>

<body>
<h1>This page uses SESSIONS</h1>

<a href="about.php">ABOUT</a>


<?php 

echo $_SESSION['name'];

?>





</body>

</html>