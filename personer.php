<?php
include 'C:\wamp64\www\2\person\database.php';
?>
<html>
<head>
<title>Personer</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<h1 style="text-align: center;">Home<h1>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="index.php">Dashboard</a></li>
      <li class="active"><a href="personer.php">Personer</a></li>
      <li><a href="lokaler.php">Lokaler</a></li> 
      <li><a href="mere.php">Mere</a></li> 
    </ul>
  </div>
</nav>
<button type="button" class="btn btn-primary"><a style="color: white;" href="/2/person/opret_person.php">Opret person</a></button>
  <h2>Personer</h2>       
    <table class="table table-striped">
      <thead>
        <tr>
		  <th>ID</th>
            <th>Fornavn</th>
            <th>Efternavn</th>
            <th>CPR</th>
          </tr>
        </thead>
		<tbody> <!-- tbody definerer "body" af en tabel; den skal være uden for loopet -->

          <?php
          $sql = "SELECT * FROM user GROUP BY id";
          $result = $conn->query($sql);
          while($row = mysqli_fetch_array($result)):
          ?>
          <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['firstname']?></td>
            <td><?=$row['lastname']?></td>
            <td><?=$row['cpr']?></td>
            <td><a href="/2/person/ret_person.php?user_id=<?=$row['id']?>">RET </a><a href="/2/person/slet_person_mysql.php?user_id=<?=$row['id']?>"> SLET</a></td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>

<!-- Jeg har fjernet $conn->close();, fordi PHP's garbage collector lukker forbindelsen alligevel -->
</body>
</html>