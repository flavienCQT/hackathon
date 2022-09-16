<div class="d-flex flex-column justify-content-center vh-100 align-items-center">
    <div class="card col-xl-7  col-lg-9 col-md-10 col-12">
        <div class="card-body">
            <h5 class="card-title">
                Liste des membres

                <?php if (isset($lequipe)) { ?>
                    de l'équipe « <?= $lequipe['nomequipe'] ?> »
                <?php } ?>

            </h5>
            <table class="table card-text">
                <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $membre) { ?>
                    <tr>
                        <td><?= $membre['nom'] ?></td>
                        <td><?= $membre['prenom'] ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
