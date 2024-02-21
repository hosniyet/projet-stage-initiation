<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>afficher</title>
    <link rel="icon" href="biat.png" type="png">
    <style>
         *{
   margin:0;
   padding:0;
   box-sizing:border-box;

}
    body{
  height:100vh;
 
  background:linear-gradient(135deg,#1b5277,#dee675);
}
h1{  font-family: Verdana, Geneva, Tahoma, serif;text-align: center;
 font-size: 30px;
  font-weight:950 ;
  line-height: 30px ; 
   text-shadow:0.5px 1px  #dee675;
   font-style: italic;
}
#div2{

 
 width:60%;
 height:300px;
 background-color:rgb(0,0,0,0.3);
 padding:25px 30px;
 border-radius:5px;
 color:#ffffff;
 margin-left:20%;
     margin-right:20%;
     margin-top:3%;
     margin-bottom:10%;
}
table{
    margin-top:50px;
    border-color:white;
    
    border-spacing: 0px; 
    border-radius:px;
    height:100px;
    border-width:3px;
   
    
   

    


}
th{
    font-family: Verdana, Geneva, Tahoma, serif;text-align: center;
 font-size: 10px;
  

   text-shadow:0.5px 1px  #dee675;


}
pre{

text-transform: uppercase;
font-family: Verdana, Geneva, Tahoma, serif;
color:white;
font-weight: bold;
padding-top:15px;
text-shadow:0.5px 1px  #dee675;
   font-style: italic;


}
.preimg{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  margin-top: 10px;



}
a:link{text-decoration: none;}
    #b2{padding-right:80px;
        
    }
    p{
        font-family: Verdana, Geneva, Tahoma, serif;text-align: center;
 font-size: 15px;
  font-weight:950 ;
  line-height: 30px ; 
  margin-top:80px;
   
   

    }
    input{
        
        height:45px;
    width:300px;
    border-radius:5px;
   border-color: #ccc;
   border-width:1px;
   border-style: solid;
    
    font-size:16px;
  
    margin-top:10px;
    margin-bottom:15px;
    margin-left:300px;
    }
    input:hover{
    background-color: rgba(245, 245, 245, 0.692);
}
input:focus{
    background-color:rgba(245, 245, 245, 0);
  
}
#sujetid{
    padding-left:6px;
}
    </style>
</head>
<body>
 
 <a href="http://www.cni.tn "><div class="preimg">
      <pre>ministere des technologies la communication
                et de l'economie numerique 
          centre national de l'informatique  </pre>
    </pre></a>
    
    <a href="http://www.cni.tn "><img src="cni-removebg-preview.png" title="site de centre national d'informatique"></a>
    <div id="div2">      
<?php 
    $conn = mysqli_connect("localhost","root","","stage");
    if(mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    $cin=$_POST['cin'];
    $req="select * from stagiaire where (cin='$cin');";
    $res=mysqli_query($conn,$req);
    if($res)
    {
        echo"<h1>Résutat de votre recherche</h1>\n";
        //nb de lignes contenue dans RES
        $nb=mysqli_num_rows($res);
        if($nb>0)
        {
        echo "<table border='1'>\n";
        echo "<tr>\n";
        echo "<th>Nom et prenom</th>\n";
        echo "<th>CIN</th>\n";
        echo "<th>Date de naissance</th>\n";
        echo "<th>Lieu de naissance</th>\n";
        echo "<th>Adresse</th>\n";
        echo "<th>Niveau</th>\n";
        echo "<th>TEL</th>\n";
        echo "<th>Etablissement</th>\n";
        echo "<th>Organisme</th>\n";
        echo "<th>Type</th>\n";
        echo "<th>Sujet</th>\n";
        echo "<th>Debut</th>\n";
        echo "<th>Fin</th>\n";
        echo "<th>Paye?</th>\n";
        echo "<th>Montont</th>\n";
        echo "</tr>\n";
        $ligne = mysqli_fetch_array($res);
        
            echo "<tr >\n";
            echo "<td>".$ligne["nomprenom"]."</td>\n";
            echo "<td>".$ligne["cin"]."</td>\n";
            echo "<td>".$ligne["date"]."</td>\n";
            echo "<td>".$ligne["lieu"]."</td>\n";
            echo "<td>".$ligne["adresse"]."</td>\n";
            echo "<td>".$ligne["niveau"]."</td>\n";
            echo "<td>".$ligne["tel"]."</td>\n";
            echo "<td>".$ligne["etablissement"]."</td>\n";
            echo "<td>".$ligne["organisme"]."</td>\n";
            echo "<td>".$ligne["type"]."</td>\n";
            echo "<td><a id='sujetid' href='sujet.php'><img src='document.png'> </a></td>\n";
            echo "<td>".$ligne["debut"]."</td>\n";
            echo "<td>".$ligne["fin"]."</td>\n";
            echo "<td>".$ligne["c1"]."</td>\n";
            echo "<td>".$ligne["montant"]."</td>\n";
            echo "</tr>\n";
        
        echo("</table>\n");
        }
        else{ echo("<p>Désolé, il n'y a pas de réponse correspondant à votre recherche.</p>");}
        }


?>
<form name="f" action="recherche.php">
    <input type="submit" value="Rretourner à la page de recherche">
    </form>
          
    

    

    
    </div>   
</body>
</html>
