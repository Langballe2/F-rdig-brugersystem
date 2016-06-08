<html>
<head>
<title>Forside</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<h1 style="text-align: center;">Sygehus</h1>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Dashboard</a></li>
      <li><a href="personer.php">Personer</a></li>
      <li><a href="lokaler.php">Lokaler</a></li> 
      <li><a href="mere.php">Mere</a></li> 
    </ul>
  </div>
</nav>
<?php

include 'C:\wamp64\www\2\person\database.php';

$howmanyuser_query=$conn->prepare('SELECT COUNT(*)  FROM user;');
$howmanyuser=$howmanyuser_query->fetch_array(MYSQLI_NUM); 

echo "Personer ialt: <span class='badge'>$howmanyuser[0]	</span>";

?>

</body>
</html>