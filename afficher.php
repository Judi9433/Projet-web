<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;600;700&family=DM+Serif+Display&display=swap" rel="stylesheet">
    <title>Lecture de la table article</title>
    <style>
        :root {
            --indigo:        #4f46e5;
            --indigo-dark:   #3730a3;
            --indigo-light:  #eef2ff;
            --emerald:       #10b981;
            --emerald-light: #d1fae5;
            --amber:         #f59e0b;
            --amber-light:   #fef3c7;
            --text:          #0f172a;
            --muted:         #64748b;
            --border:        #e2e8f0;
            --bg:            #f8faff;
        }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: 'Sora', sans-serif;
        }

        h3 {
            font-family: 'DM Serif Display', serif;
            color: var(--indigo);
        }

        h4 {
            font-family: 'Sora', sans-serif !important;
            font-size: 1rem !important;
            color: var(--muted);
            font-weight: 400 !important;
        }

        /* BOUTONS */
        .btn-primary {
            background: linear-gradient(135deg, var(--indigo-dark), var(--indigo)) !important;
            border: none !important;
            border-radius: 8px !important;
            font-size: 0.82rem;
            font-weight: 600;
            padding: 8px 18px !important;
            box-shadow: 0 4px 12px rgba(79,70,229,0.25);
            transition: all 0.2s !important;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(79,70,229,0.35) !important;
        }

        .btn-primary a {
            text-decoration: none;
            color: white !important;
        }

        /* TABLE NAVIGATION (avec les boutons) */
        .table-primary thead tr th {
            background: transparent !important;
            border: none !important;
            padding: 0 0 16px 0 !important;
        }

        /* TABLE PRINCIPALE */
        .table-bordered {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(79,70,229,0.08);
            border: 1px solid var(--border) !important;
        }

        .table-bordered thead.table-warning tr th {
            background: linear-gradient(135deg, #4f46e5, #7c3aed) !important;
            color: white !important;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            border: none !important;
            padding: 14px 16px;
            white-space: nowrap;
        }

        .table-bordered tbody tr {
            border-bottom: 1px solid var(--border);
            transition: background 0.18s;
        }

        .table-bordered tbody tr:last-child {
            border-bottom: none;
        }

        .table-bordered tbody tr:hover {
            background-color: var(--indigo-light);
        }

        .table-bordered tbody td {
            padding: 13px 16px;
            vertical-align: middle;
            border: none !important;
            font-size: 0.85rem;
            color: var(--text);
        }

        /* FOOTER */
        footer {
            background: #0f172a;
        }
    </style>
</head>

<body>
    <?php
    include("config.php");
    $req = $conn->query("SELECT * FROM article");
    $resultats = $req->fetchAll(PDO::FETCH_ASSOC);
    $nombre = count($resultats);
    ?>

    <div class="container">
        <h3 class="text-center pt-5 fw-bold">Tous nos articles par catégorie :</h3>
        <?php
        echo "<h4 style='text-align:center; font-family:Sora,sans-serif; font-size:1rem;'>Il y a " . $nombre . " articles en magasin</h4>";
        ?>

        <div class="table-responsive">
            <table class="table pt-4">
                <thead class="table-primary">
                    <tr>
                        <th scope="col" class="bg-white">
                            <div class="d-grid justify-content-md-start">
                                <button class="btn btn-primary" type="button">
                                    <a class="text-white nav-link" href="accueil.php"><i class="bi bi-arrow-left me-1"></i>Retour</a>
                                </button>
                            </div>
                        </th>
                        <th scope="col" class="bg-white">
                            <div class="d-grid justify-content-md-end">
                                <button class="btn btn-primary" type="button">
                                    <a class="text-white nav-link" href="formarticle.php"><i class="bi bi-plus-circle me-1"></i>Ajouter un article</a>
                                </button>
                            </div>
                        </th>
                    </tr>
                </thead>
            </table>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered border-success">
                <thead class="table-warning">
                    <tr>
                        <th scope="col"><i class="bi bi-upc me-1"></i>Code article</th>
                        <th scope="col"><i class="bi bi-card-text me-1"></i>Description</th>
                        <th scope="col"><i class="bi bi-tag me-1"></i>Prix</th>
                        <th scope="col"><i class="bi bi-grid me-1"></i>Catégorie</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultats as $art) : ?>
                        <tr>
                            <td><?= htmlspecialchars($art["code"]) ?></td>
                            <td><?= htmlspecialchars($art["desq"]) ?></td>
                            <td><?= htmlspecialchars($art["prix"]) ?></td>
                            <td><?= htmlspecialchars($art["categorie"]) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>