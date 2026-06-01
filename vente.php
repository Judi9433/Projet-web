<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des ventes</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background-color: #f5f7fa;
    }

    .header-card {
        background: white;
        border-radius: 15px;
        padding: 25px;
        box-shadow: 0 2px 15px rgba(0, 0, 0, .08);
        margin-bottom: 25px;
    }

    .stats-card {
        background: #0d6efd;
        color: white;
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(13, 110, 253, .25);
    }

    .table-card {
        background: white;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 2px 15px rgba(0, 0, 0, .08);
    }

    .table thead {
        background-color: #0d6efd;
        color: white;
    }

    .table thead th {
        white-space: nowrap;
    }

    .table tbody tr:hover {
        background-color: #f8f9fa;
    }

    .page-title {
        font-weight: 700;
        color: #212529;
    }

    .page-subtitle {
        color: #6c757d;
    }

    .montant {
        font-weight: bold;
        color: #198754;
    }
</style>


</head>

<body>

<?php
include("config.php");

$req = $conn->query("
SELECT 
    commande.id_client,
    commande.nom,
    commande.prenom,
    commande.age,
    commande.adresse,
    commande.ville,
    commande.mail,
    commande.date_vente,
    commande.id_commande,
    ligne.code,
    ligne.prix_unitaire,
    ligne.quantite,
    ligne.montant
FROM commande
INNER JOIN ligne
ON ligne.id_commande = commande.id_commande
");

$resultats = $req->fetchAll(PDO::FETCH_ASSOC);

$reqCount = $conn->query("SELECT COUNT(*) as total FROM commande");
$nombre = $reqCount->fetch(PDO::FETCH_ASSOC)['total'];
?>

<div class="container py-5">


<div class="header-card">

    <div class="d-flex justify-content-between align-items-center flex-wrap">

        <div>
            <h2 class="page-title mb-1">
                Tableau des ventes
            </h2>

            <p class="page-subtitle mb-0">
                Historique complet des ventes enregistrées
            </p>
        </div>

        <a href="accueil.php" class="btn btn-outline-primary mt-3 mt-md-0">
            Retour à l'accueil
        </a>

    </div>

</div>

<div class="card stats-card mb-4">
    <div class="card-body text-center">
        <h6 class="text-uppercase mb-2">
            Nombre total de ventes
        </h6>

        <h1 class="display-4 fw-bold">
            <?= $nombre ?>
        </h1>
    </div>
</div>

<div class="table-card">

    <div class="table-responsive">

        <table class="table table-striped table-hover align-middle">

            <thead>
                <tr>
                    <th>Id Client</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Age</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Commande</th>
                    <th>Article</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Montant</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($resultats as $art) : ?>

                <tr>
                    <td><?= htmlspecialchars($art["id_client"]) ?></td>
                    <td><?= htmlspecialchars($art["nom"]) ?></td>
                    <td><?= htmlspecialchars($art["prenom"]) ?></td>
                    <td><?= htmlspecialchars($art["age"]) ?></td>
                    <td><?= htmlspecialchars($art["adresse"]) ?></td>
                    <td><?= htmlspecialchars($art["ville"]) ?></td>
                    <td><?= htmlspecialchars($art["mail"]) ?></td>
                    <td><?= htmlspecialchars($art["date_vente"]) ?></td>
                    <td><?= htmlspecialchars($art["id_commande"]) ?></td>
                    <td><?= htmlspecialchars($art["code"]) ?></td>
                    <td><?= htmlspecialchars($art["prix_unitaire"]) ?></td>
                    <td><?= htmlspecialchars($art["quantite"]) ?></td>
                    <td class="montant">
                        <?= htmlspecialchars($art["montant"]) ?>
                    </td>
                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</div>
```

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
