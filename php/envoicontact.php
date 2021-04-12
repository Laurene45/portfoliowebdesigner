<?php
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$portable=$_POST["portable"];
$message=$_POST["message"];
$sujet=$_POST["sujet"];

/*if((isset($_POST["portable"]))&&($_POST["portable"]=="")){   si pas de Required : inserer cette ligne 
	$adresse="Pas de portable indiqué";
}
else{
	$portable=$_POST["portable"];	


}*/



$nom=stripslashes(trim($nom));
$prenom=stripslashes(trim($prenom));
$email=stripslashes(trim($email));
$portable=stripslashes(trim($portable));
$message=stripslashes(trim($message));

$denomination=$nom." ".$prenom;
/*
echo "<p>nom : ".$nom."</p>";
echo "<p>email : ".$email."</p>";
echo "<p>message : ".$message."</p>";
*/


$adressemail="laurene.c@laurenewebdesign.com";
/*$objet='Contact depuis CV en ligne pour : '.$sujet;*/



$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'From:'.$denomination.' <'.$email.'>' . "\r\n" .
		'Reply-To:'.$email. "\r\n" .
		'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
		'Content-Disposition: inline'. "\r\n" .
		'Content-Transfer-Encoding: 7bit'." \r\n" .
		'Bcc:'.$email."\r\n" .
		'X-Mailer:PHP/'.phpversion();



$mail_corps  = "Message de $denomination\n";
$mail_corps .= "\n$message\n";
$mail_corps .= "\nLe portable est : $portable\n";

//insérer ici la mise en place dans la bdd

 $envoi = mail($adressemail, $sujet, $mail_corps, $headers);
    if ($envoi) {
    	//$retour='/Index.hmtl';
        $retour='retour.php?envoi=oui';
		header("Location:" .$retour);
    }
    else{

        $retour='retour.php?envoi=non';
		header("Location:" .$retour);
    }


	/*if ($envoi) {
    	//$retour='/Index.hmtl';
        $retour='retour.php';
		header("Location:" .$retour);

    }*/

?>