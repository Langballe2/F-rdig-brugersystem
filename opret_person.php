<html>
<head>
<title>Opret person</title>
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
<h2>Opret bruger</h2>
<form action="opret_person_mysql.php" method="post">
Fornavn: <input type="text" name="firstname"><br>
Efternavn: <input type="text" name="lastname"><br>
CPR: <input type="text" name="cpr"><br>
<input type="submit">
</form>

</body>
</html>