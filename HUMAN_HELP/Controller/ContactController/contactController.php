<?php
include_once("../../Presentation/PresentationContact.php");


echo formulaireContact();

if (isset($_GET['action'])) 
{

    if ($_GET['action'] == 'send') 
    { 
        // ini_set('sendmail_from', 'localhost');

        $to="samir-mekhloufi@hotmail.fr";
        $mail=$_POST['ContactEmail'];
        $nom=$_POST['nomContact']; 
        $prenom=$_POST['prenomContact'];
        $header='MIME-version: 1.0' . "/r/n";
        $header .='Content-type: text/html; charset=utf-8' . "/r/n"; 
        $header .='To : Samir <' .$to. ">" ."/r/n";
        $header .='From :'. "<".$mail.">" . "/r/n";
        $tel=$_POST['NumContact'];
        $sujet=$_POST['objetContact'];
        $demande=$_POST['messageContact'];
        $message= "<html>
                        <head>
                            <title>Contact</title>
                        </head>
                        <body>
                            <p>" .
                                $nom. ',' . $prenom . ', Tel :' . $tel . ', Sujet : ' . $sujet . ', Message : ' . $demande ."
                            </p>
                        </body>

                    </html>";
        
                    mail($to, $sujet, $message, $header);
    }
}