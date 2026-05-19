<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Bless Shop — Accueil</title>
</head>

<body class="bg-light">

  
  <header class="bg-success py-3 shadow-sm">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between">

        <img src="photo11.jpg" alt="Logo" style="height: 60px; width: auto; object-fit: contain;">


        <h4 class="text-white fw-bold text-center mb-0 flex-grow-1 mx-3">
          Bienvenue sur ma boutique
        </h4>

        
        <img src="logo-uac.jpg" alt="Logo UAC" style="height: 60px; width: auto; object-fit: contain;">

      </div>
    </div>
  </header>


  <section class="bg-dark text-white py-5">
    <div class="container py-3 text-center">
      <span class="badge bg-warning text-dark mb-3 px-3 py-2">Boutique en ligne</span>
      <h1 class="display-4 fw-bold mb-3">Bless Shop</h1>
      <p class="lead text-secondary col-lg-7 mx-auto mb-4">
        Gérez vos articles, vos ventes et votre clientèle depuis une interface claire, rapide et professionnelle.
      </p>
      <div class="d-flex gap-3 justify-content-center flex-wrap">
        <a href="afficher.php" class="btn btn-warning btn-lg fw-semibold text-dark px-4">Voir les articles →</a>
        <a href="vente.php" class="btn btn-outline-light btn-lg px-4">Consulter les ventes</a>
      </div>
    </div>
  </section>
  
  <main class="container py-5">

    <h2 class="fw-bold mb-1">Accès rapide</h2>
    <hr class="border-warning border-2 opacity-100 w-25 mb-4">

    <div class="row g-4 mb-5">

      <div class="col-12 col-sm-6 col-lg-3">
        <a href="afficher.php" class="card h-100 text-decoration-none border-0 shadow-sm">
          <div class="card-body p-4">
            <div class="fs-2 mb-3">📦</div>
            <h5 class="card-title fw-semibold">Articles</h5>
            <p class="card-text text-muted small">Consultez et gérez votre catalogue de produits.</p>
          </div>
          <div class="card-footer bg-transparent border-0 pb-3 px-4">
            <span class="text-warning small fw-semibold">Voir les articles →</span>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <a href="vente.php" class="card h-100 text-decoration-none border-0 shadow-sm">
          <div class="card-body p-4">
            <div class="fs-2 mb-3">🛒</div>
            <h5 class="card-title fw-semibold">Ventes</h5>
            <p class="card-text text-muted small">Suivez toutes vos ventes et leur historique.</p>
          </div>
          <div class="card-footer bg-transparent border-0 pb-3 px-4">
            <span class="text-warning small fw-semibold">Voir les ventes →</span>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <a href="effectue-vente.php" class="card h-100 text-decoration-none border-0 shadow-sm">
          <div class="card-body p-4">
            <div class="fs-2 mb-3">💳</div>
            <h5 class="card-title fw-semibold">Effectuer une vente</h5>
            <p class="card-text text-muted small">Enregistrez une nouvelle transaction rapidement.</p>
          </div>
          <div class="card-footer bg-transparent border-0 pb-3 px-4">
            <span class="text-warning small fw-semibold">Démarrer →</span>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <a href="afficher-client.php" class="card h-100 text-decoration-none border-0 shadow-sm">
          <div class="card-body p-4">
            <div class="fs-2 mb-3">👥</div>
            <h5 class="card-title fw-semibold">Clients</h5>
            <p class="card-text text-muted small">Accédez à votre base clientèle complète.</p>
          </div>
          <div class="card-footer bg-transparent border-0 pb-3 px-4">
            <span class="text-warning small fw-semibold">Voir les clients →</span>
          </div>
        </a>
      </div>

    </div>


  </main>

  
  <footer class="bg-dark text-white py-4 mt-5">
    <div class="container text-center">
      <p class="fw-semibold text-warning mb-1">Bless Shop</p>
      <p class="small text-secondary mb-0">&copy; 2026 Bless Shop — Tous droits réservés.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-ekxjHPBqCLgMjH7R/Kxj3z0eqn2mO3JFQLwNsTaxWJ6BHxVGmj7oVbGQU/S7MBG" crossorigin="anonymous"></script>

</body>
</html>