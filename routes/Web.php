<?php

namespace routes;

use controllers\Account;
use controllers\Equipe;
use controllers\Formation;
use controllers\Hackathon;
use controllers\Main;
use controllers\ApiDoc;
use routes\base\Route;
use utils\SessionHelpers;

class Web
{
    function __construct()
    {
        $main = new Main();
        $hackathon = new Hackathon();
        $equipe = new Equipe();
        $apiDoc = new ApiDoc();

        Route::Add('/', [$main, 'home']);
        Route::Add('/about', [$main, 'about']);

        Route::Add('/login', [$equipe, 'login']);
        Route::Add('/join', [$hackathon, 'join']);
        Route::Add('/create-team', [$equipe, 'create']);

        // Liste des routes de la partie API
        Route::Add('/sample/', [$apiDoc, 'liste']);
        Route::Add('/sample/hackathons', [$apiDoc, 'listeHackathons']);
        Route::Add('/sample/ateliers', [$apiDoc, 'listeAteliers']);
        Route::Add('/sample/membres', [$apiDoc, 'listeMembres']);
        Route::Add('/sample/equipes', [$apiDoc, 'listeEquipes']);

        if (SessionHelpers::isLogin()) {
            // Ici seront les routes nécessitant un accès protégés
            Route::Add('/logout', [$equipe, 'logout']);
            Route::Add('/me', [$equipe, 'me']);
            Route::Add('/membre/add', [$equipe, 'addMembre']);
        }
    }
}

