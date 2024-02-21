
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>sujet</title>
        <link rel="icon" href="biat.png" type="png" >
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
#d2{
 
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
#pre1{

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
    #b2{padding-right:80px;}
        #pre2{
            
            margin-top:19px;

        }
        </style>
    </head>
    <body>
    <a href="https://www.biat.com.tn/ ">
        <div class="preimg">
      <pre>Siège de la 
        Banque Internationale Arabe de Tunisie 
            </pre>
    </pre></a>
    
    <a href="https://www.biat.com.tn/"><img src="biat.png" title="site de centre national d'informatique"></a>
        <div id="d2">
    <?php
$conn = mysqli_connect("localhost","root","","stage");
if(mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
    $cin=$_POST['cin2'];
    $req="select * from stagiaire where (cin='$cin');";
    $res=mysqli_query($conn,$req);
    if($res)
    { $nb=mysqli_num_rows($res);
        if($nb>0)
        { $ligne=mysqli_fetch_array($res);
            echo"<h1>le sujet de ".$ligne["np"].":</h1>\n";
        echo "<pre id='pre2'>".$ligne["sujet"]."</pre>\n";
           
        }else{
            echo"n'y a pas de sujet";

        }

    }

    ?>
    </div>
    </body>
    </html>