  <!DOCTYPE html>
<html>
<head>
   <title>inserer une image </title>
</head>
<body>
    <img src="photo.jpg" height=90px with=80px> <br/>
   <?php
$personne = array(
"prenom" =>"habsatou",
"nom" => "ball",
"telephone" => "777936929",);
foreach($personne as $key => $value){
echo "cle:".$key.",valeur:".$value. "<br/>\n";
}
   ?>
   </html>