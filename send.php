  <?php
$link = mysql_connect ('localhost', 'mohamedj_memo', 'memomemo') or die ("Impossible de se connecter");
mysql_select_db ("mohamedj_memo")or die ("Impossible d'accéder à la base de données");
$nom = $_POST['nom'];
$mail = $_POST['mail'];
$text = $_POST['text'];
echo '<p align="center"><b><fo<p></p><br></font><font face="Tahoma" color="red" size="4">Thanks For Adding Your Comment</font><font face="Tahoma" color="red"><br> </font><font face="Tahoma" color="blue">
</font><font face="Tahoma" color="red">&nbsp;</font></b></p>';
$sql="INSERT INTO book(nom, mail, text)VALUES('$nom', '$mail', '$text')";
$result =mysql_query($sql);
?>