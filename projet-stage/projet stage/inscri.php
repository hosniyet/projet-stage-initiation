    
<html>
<head>
<meta charset="utf-8">
<style>
*{
   margin:0;
   padding:0;
   box-sizing:border-box;
}
body{
  height:105vh;
 
  background:linear-gradient(135deg,#1b5277,#dee675);
}
p {

     margin:250px;
  font-family: Verdana, Geneva, Tahoma, serif;
  text-align: center;
 font-size: 55px;
  font-weight:900 ;
  line-height: 30px ; 
   text-shadow:0.5px 1px  #dee675;
   font-style: italic;
   
}
</style>
</head>
<body>
<?php
$conn = mysqli_connect("localhost", "root", "", "stage");


if (!$conn) {
    die("mochkla: " . mysqli_connect_error());
}

$nom=$_POST['nom'];
$cin=$_POST['cin'];
$date=$_POST['date'];
$lieu=$_POST['lieu'];
$add=$_POST['add'];
$niv=$_POST['niv'];
$tel=$_POST['tel'];
$etab=$_POST['etab'];
$organ=$_POST['organ'];
$type=$_POST['type'];
$sujet=$_POST['sujet'];
$per1=$_POST['per1'];
$per2=$_POST['per2'];
$c1=$_POST['c1'];
$montant=$_POST['montant'];
$req = "SELECT cin FROM stagiaire WHERE cin='$cin';";
$res = mysqli_query($conn, $req);
if (mysqli_num_rows($res) > 0) {
    echo "<p>déjà inscrit</p>";
} else {
    $req1 = "INSERT INTO stagiaire VALUES ('$nom', '$cin', '$date', '$lieu', '$add', '$niv', '$tel', '$etab', '$organ', '$type', '$sujet', '$per1', '$per2', '$c1', '$montant');";
    $res1 = mysqli_query($conn, $req1);

    if ($res1) {
        echo "<p>Inscription confirmée</p>";
    } else {
        echo "<p>Erreur lors de l'inscription</p>";
    }
}
mysqli_close($conn);

?>
</body>
</html>