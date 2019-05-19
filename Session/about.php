<?php

session_start();

?>


<!DOCTYPE>
<html>

<head>

</head>

<body>
<h1>This page uses is an about page and it also uses SESSIONS</h1>
<a href="index.php">Back to title</a>
<?php 

echo $_SESSION['name'];

?>





</body>

</html>