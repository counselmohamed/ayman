 <?php
$link = mysql_connect ('23.95.25.103', 'mohamedj_memo', 'memomemo') or die ("Impossible de se connecter");
mysql_select_db ("mohamedj_memo")or die ("Impossible d'accéder à la base de données");
$sql="SELECT * FROM book";
$result=mysql_query($sql);
while($rows=@mysql_fetch_array($result)){
$id = $rows['id'];
$nom = $rows['nom'];
$mail = $rows['mail'];
$text = $rows['text'];
echo '
<html lang="en">
<head>
  <title>Heroku Demo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Comment</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>'.$id.'</td>
        <td>'.$nom.'</td>
        <td>'.$text.'</td>
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>
';
}
?>