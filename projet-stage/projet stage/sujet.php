<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>afficher</title>
    <link rel="icon" href="biat.png" type="png">
    <script>
        function verifcin(ch)
{
  for(var i=0;i<ch.length;i++)
  { c=ch.charAt(i);
    if( (c<'0') || (c>'9') || (ch.length!=8) )
      return false;
  }

  return true;
}
        function verif()
        {
          cin=f1.cin.value;
          if(verifcin(cin)==false) 
           {
              alert("verifier votre numéro de CIN(huit chiffre)");
              return false;
           }
        }
    </script>
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
form{
 
     width:80%;
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
h1{  font-family: Verdana, Geneva, Tahoma, serif;text-align: center;
 font-size: 30px;
  font-weight:950 ;
  line-height: 30px ; 
   text-shadow:0.5px 1px  #dee675;
   font-style: italic;
}
input{
    height:45px;
    width:400px;
    border-radius:5px;
   border-color: #ccc;
   border-width:1px;
   border-style: solid;
    
    font-size:16px;
    padding-top:5px;
    padding-bottom:5px;
    padding-right:10px;
    padding-left:100px;
    margin-top:5px;
    margin-bottom:15px;
    

}
#input1{

    
   margin-top:55px;
    

}
#input2{
    padding:5px;

}
input:hover{
    background-color: rgba(245, 245, 245, 0.692);
}
input:focus{
    background-color:rgba(245, 245, 245, 0);
  
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
</style>

</head>
<body>
<a href="https://www.biat.com.tn/ "><div class="preimg">
      <pre>Siège de la 
        Banque Internationale Arabe de Tunisie 
            </pre>
    </pre></a>
    
    <a href="https://www.biat.com.tn/"><img src="biat.png" title="site de centre national d'informatique"></a>
    
   <form name="f3" method="post" action="affiche-sujet.php">
   <h1>verifié le  numéro d identité<h1>
    <input id="input1"type="text" name="cin2" placeholder="donner le numéro d'identité"/>
    
    <br> <input id="input2" input type="submit" value="Envoyer" onclick="return verif()"/>
       <br>
   </form>
   <br>
    
</body>
</html>