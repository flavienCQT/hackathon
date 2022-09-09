<?php

namespace controllers;

use controllers\base\Web;
use models\Hackathon;
use models\Organisateur;
use utils\Template;

/**
 * Contrôleur principal
 */
class Main extends Web
{
    private Hackathon $hackathon;
    private Organisateur $organisateur;

    public function __construct()
    {
        $this->hackathon = new Hackathon();
        $this->organisateur = new Organisateur();
    }

    function home()
    {
        $currentHackathon = $this->hackathon->getActive();
        $currentOrganisateur = $this->organisateur->getOne($currentHackathon['idorganisateur']);
        Template::render("views/global/home.php", array("hackathon" => $currentHackathon, "organisateur" => $currentOrganisateur));
    }

    function about()
    {
        Template::render("views/global/about.php", array());
    }
}