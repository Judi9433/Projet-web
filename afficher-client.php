<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;600;700;800&family=DM+Serif+Display&display=swap" rel="stylesheet">
    <title>Bless Shop — Clients</title>
    <style>
        :root {
            --indigo:       #4f46e5;
            --indigo-dark:  #3730a3;
            --indigo-light: #eef2ff;
            --rose:         #f43f5e;
            --rose-light:   #ffe4e6;
            --text:         #0f172a;
            --muted:        #64748b;
            --border:       #e2e8f0;
            --bg:           #f8faff;
        }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: 'Sora', sans-serif;
            min-height: 100vh;
        }

        /* HEADER */
        header {
            background: white;
            border-bottom: 1px solid var(--border);
            box-shadow: 0 2px 12px rgba(79,70,229,0.06);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .site-title {
            font-family: 'DM Serif Display', serif;
            font-size: 1.35rem;
            color: var(--indigo);
        }

        /* PAGE HERO BANNER */
        .page-banner {
            background: linear-gradient(135deg, #3730a3 0%, #4f46e5 40%, #7c3aed 75%, #a855f7 100%);
            position: relative;
            overflow: hidden;
        }

        .page-banner::before {
            content: '';
            position: absolute;
            width: 350px; height: 350px;
            border-radius: 50%;
            background: rgba(255,255,255,0.05);
            top: -100px; right: -60px;
        }

        .page-banner::after {
            content: '';
            position: absolute;
            width: 200px; height: 200px;
            border-radius: 50%;
            background: rgba(168,85,247,0.25);
            bottom: -60px; left: 10%;
        }

        .page-banner-title {
            font-family: 'DM Serif Display', serif;
            font-size: clamp(1.8rem, 4vw, 2.8rem);
            color: white;
        }

        .page-banner-sub {
            color: rgba(255,255,255,0.72);
            font-size: 0.9rem;
            font-weight: 300;
        }

        .banner-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(255,255,255,0.15);
            border: 1px solid rgba(255,255,255,0.25);
            color: white;
            font-size: 0.68rem;
            font-weight: 600;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            padding: 6px 16px;
            border-radius: 100px;
            backdrop-filter: blur(8px);
        }

        .count-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(255,255,255,0.18);
            border: 1px solid rgba(255,255,255,0.3);
            color: white;
            font-size: 0.8rem;
            font-weight: 600;
            padding: 6px 18px;
            border-radius: 100px;
        }

        /* BACK BUTTON */
        .btn-back {
            background: var(--indigo-light);
            color: var(--indigo);
            font-weight: 600;
            font-size: 0.82rem;
            padding: 8px 18px;
            border-radius: 8px;
            border: none;
            text-decoration: none;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .btn-back:hover {
            background: var(--indigo);
            color: white;
            transform: translateX(-2px);
        }

        /* SECTION */
        .section-label {
            font-size: 0.68rem;
            font-weight: 700;
            letter-spacing: 0.22em;
            text-transform: uppercase;
            color: var(--indigo);
        }

        .section-heading {
            font-family: 'DM Serif Display', serif;
            font-size: 1.6rem;
            color: var(--text);
        }

        .divider-bar {
            width: 44px;
            height: 4px;
            border-radius: 4px;
            background: linear-gradient(to right, var(--indigo), #a855f7);
        }

        /* TABLE */
        .table-card {
            background: white;
            border-radius: 18px;
            border: 1px solid var(--border);
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(79,70,229,0.07);
        }

        .table {
            margin-bottom: 0;
            font-size: 0.85rem;
        }

        .table thead tr {
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
        }

        .table thead th {
            color: white;
            font-weight: 600;
            font-size: 0.75rem;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            border: none;
            padding: 14px 16px;
            white-space: nowrap;
        }

        .table tbody tr {
            border-bottom: 1px solid var(--border);
            transition: background 0.18s;
        }

        .table tbody tr:last-child {
            border-bottom: none;
        }

        .table tbody tr:hover {
            background: var(--indigo-light);
        }

        .table tbody td {
            padding: 13px 16px;
            vertical-align: middle;
            border: none;
            color: var(--text);
        }

        .id-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: var(--indigo-light);
            color: var(--indigo);
            font-weight: 700;
            font-size: 0.78rem;
            padding: 3px 10px;
            border-radius: 6px;
            min-width: 36px;
        }

        .commande-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: var(--rose-light);
            color: var(--rose);
            font-weight: 700;
            font-size: 0.78rem;
            padding: 3px 10px;
            border-radius: 6px;
        }

        .age-text {
            color: var(--muted);
            font-size: 0.82rem;
        }

        .email-link {
            color: var(--indigo);
            text-decoration: none;
            font-weight: 500;
        }
        .email-link:hover {
            text-decoration: underline;
        }

        .date-text {
            color: var(--muted);
            font-size: 0.8rem;
            white-space: nowrap;
        }

        /* EMPTY STATE */
        .empty-state {
            padding: 60px 20px;
            text-align: center;
            color: var(--muted);
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
$req = $conn->query("SELECT * FROM commande");
$resultats = $req->fetchAll(PDO::FETCH_ASSOC);
$nombre = count($resultats);
?>

    <!-- HEADER -->
    <header class="py-3">
        <div class="container d-flex align-items-center justify-content-between">
            <img src="photo11.jpg" alt="Logo Bless Shop" style="height:52px; width:auto; object-fit:contain;">
            <span class="site-title">Bless Shop</span>
            <img src="logo-uac.jpg" alt="Logo UAC" style="height:52px; width:auto; object-fit:contain;">
        </div>
    </header>

    <!-- PAGE BANNER -->
    <section class="page-banner py-4">
        <div class="container py-3 position-relative" style="z-index:1;">
            <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
                <div>
                    <span class="banner-badge mb-3 d-inline-flex">
                        <i class="bi bi-people"></i> Gestion clients
                    </span>
                    <h1 class="page-banner-title mb-1 mt-2">Liste des Clients</h1>
                    <p class="page-banner-sub mb-0">Consultez et gérez tous vos clients enregistrés.</p>
                </div>
                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <span class="count-pill">
                        <i class="bi bi-people-fill"></i>
                        <?= $nombre ?> client<?= $nombre > 1 ? 's' : '' ?>
                    </span>
                    <a href="index.php" class="btn-back">
                        <i class="bi bi-arrow-left"></i> Retour
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- MAIN -->
    <main class="container py-5">

        <p class="section-label mb-1">Données</p>
        <h2 class="section-heading mb-2">Tous les clients</h2>
        <div class="divider-bar mb-4"></div>

        <div class="table-card">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th><i class="bi bi-hash me-1"></i>ID</th>
                            <th><i class="bi bi-person me-1"></i>Nom</th>
                            <th><i class="bi bi-person me-1"></i>Prénom</th>
                            <th><i class="bi bi-calendar3 me-1"></i>Âge</th>
                            <th><i class="bi bi-geo-alt me-1"></i>Adresse</th>
                            <th><i class="bi bi-building me-1"></i>Ville</th>
                            <th><i class="bi bi-envelope me-1"></i>Email</th>
                            <th><i class="bi bi-calendar-check me-1"></i>Date de vente</th>
                            <th><i class="bi bi-receipt me-1"></i>Commande</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($nombre === 0) : ?>
                            <tr>
                                <td colspan="9">
                                    <div class="empty-state">
                                        <i class="bi bi-people" style="font-size:2.5rem; color:#c7d2fe;"></i>
                                        <p class="mt-3 mb-0 fw-semibold" style="color:#94a3b8;">Aucun client trouvé.</p>
                                    </div>
                                </td>
                            </tr>
                        <?php else : ?>
                            <?php foreach ($resultats as $art) : ?>
                                <tr>
                                    <td><span class="id-badge"><?= htmlspecialchars($art["id_client"]) ?></span></td>
                                    <td class="fw-semibold"><?= htmlspecialchars($art["nom"]) ?></td>
                                    <td><?= htmlspecialchars($art["prenom"]) ?></td>
                                    <td><span class="age-text"><?= htmlspecialchars($art["age"]) ?> ans</span></td>
                                    <td><?= htmlspecialchars($art["adresse"]) ?></td>
                                    <td><?= htmlspecialchars($art["ville"]) ?></td>
                                    <td><a href="mailto:<?= htmlspecialchars($art["mail"]) ?>" class="email-link"><?= htmlspecialchars($art["mail"]) ?></a></td>
                                    <td><span class="date-text"><i class="bi bi-clock me-1"></i><?= htmlspecialchars($art["date_vente"]) ?></span></td>
                                    <td><span class="commande-badge"><?= htmlspecialchars($art["id_commande"]) ?></span></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </main>

    <!-- FOOTER -->
    <footer class="py-4 mt-3">
        <div class="container text-center">
            <p class="fw-bold mb-1" style="font-family:'DM Serif Display',serif; font-size:1.1rem; color:white;">Bless Shop</p>
            <p class="small mb-0" style="color:rgba(255,255,255,0.4);">&copy; 2026 Bless Shop — Tous droits réservés.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>