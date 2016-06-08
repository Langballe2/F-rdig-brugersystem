<?php
include 'C:\wamp64\www\2\person\database.php';
?>
<html>
<head>
<title>Ret person</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<h1 style="text-align: center;">Sygehus<h1>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="\2\index.php">Dashboard</a></li>
      <li class="active"><a href="\2\personer.php">Personer</a></li>
      <li><a href="\2\lokaler.php">Lokaler</a></li> 
      <li><a href="\2\mere.php">Mere</a></li> 
    </ul>
  </div>
</nav>
<h2>Ret bruger</h2>
<form action="ret_person_mysql.php" method="post">

<?php
$id = $_GET['user_id'];

if($sql = $conn->prepare("SELECT id, firstname, lastname, cpr FROM user WHERE id = ?"))
{
	$sql->bind_param("s", $id);
    $sql->execute();
	$sql->bind_result($id, $firstname, $lastname, $cpr);
	$sql->fetch();
	
} else {
	echo "fejl fejl fejl";
}

		  
?>
ID: <input type="text" name="id" value="<?=$id?>"><br>
Fornavn: <input type="text" name="firstname" value="<?=$firstname?>"><br>
Efternavn: <input type="text" name="lastname" value="<?=$lastname?>"><br>
CPR: <input type="text" name="cpr" value="<?=$cpr?>"><br>
<input type="submit">
</form>

</body>
</html>