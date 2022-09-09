<?php

namespace controllers;

use controllers\base\Web;
use utils\SessionHelpers;
use utils\Template;

class Hackathon extends Web
{
    private \models\Hackathon $hackathon;

    public function __construct()
    {
        $this->hackathon = new \models\Hackathon();
    }

    /**
     * Méthode qui permet à une équipe de joindre un hackathon
     * @param $idh
     * @return void
     */
    function join($idh = "")
    {
        // Si pas d'Id de passé en paramètre alors redirection en home
        if (!$idh) {
            $this->redirect("/");
        }

        // L'utilisateur est actuellement non connecté, redirection vers la page de login.
        if (!SessionHelpers::isLogin()) {
            $this->redirect("/login");
        }

        $this->hackathon->joinHackathon($idh, SessionHelpers::getConnected()['idequipe']);

        $this->redirect('/me');
    }


}