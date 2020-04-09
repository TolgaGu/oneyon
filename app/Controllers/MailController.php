<?php
/**
 * Created by PhpStorm.
 * User: Tolga
 * Date: 04/06/2019
 * Time: 22:16
 */

namespace App\Controllers;

use Slim\Views\Twig as View;

class MailController extends Controller
{

    public function sendMail($request, $response)
    {


        if (isset($_POST) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message'])) {
            extract($_POST);
            if (!empty($nom) && !empty($email) && !empty($message)) {
                $message = str_replace("\'", "'", $message);
                $destinataire = "yozgatolga66@gmail.com";
                $sujet = "Contact";
                $msg = "mail oneyon \n
      Nom : $nom \n
      Email : $email \n
      Message : $message ";
                $entete = "From: $nom \n Reply-To : $email";
                mail($destinataire, $sujet, $msg, $entete);

            }

        }

        return $response->withRedirect('/merci-pour-votre-message');
    }


}