  <!DOCTYPE html>
<html>
   <title>inserer une image </title>
</head>
<body>
    <img src="photo.jpg" height=1500px with=120px> <br/>

   <?php
$personne = array(
"prenom" =>"habsatou",
"nom" => "ball",
"date de naissance" => "15/06",
"identifiant stock" => "2",
"telephone" => "777936929",);
foreach($personne as $cle=>$valeur)
    {
    echo $cle.' : '.$valeur.'<br>';
    }
  ?>
   </html>