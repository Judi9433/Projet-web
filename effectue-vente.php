<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Effectuer une vente — Bless Shop</title>
</head>

<body class="bg-light">

  
  

  <main class="container py-5">

    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6">

      
        <div class="text-center mb-4">
          <h2 class="fw-bold">Effectuer une vente</h2>
          <p class="text-muted small">Remplissez les informations de l'article et du client.</p>
        </div>

        <div class="card border-0 shadow-sm">
          <div class="card-body p-4 p-md-5">

            <form method="post" action="traitement-vente.php" id="effectuervente" name="effectuervente">

              
              <h6 class="fw-semibold text-uppercase text-muted mb-3 border-bottom pb-2"> Article</h6>

              <div class="mb-3">
                <label for="code_article" class="form-label fw-semibold">Code de l'article</label>
                <input type="text" class="form-control" id="code_article" name="code_article" placeholder="Ex: ART-001" required>
              </div>

              <div class="row g-3 mb-3">
                <div class="col-6">
                  <label for="prix_unitaire" class="form-label fw-semibold">Prix unitaire</label>
                  <input type="number" class="form-control" id="prix_unitaire" name="prix_unitaire" placeholder="0" min="0" required>
                </div>
                <div class="col-6">
                  <label for="quantite" class="form-label fw-semibold">Quantité</label>
                  <input type="number" class="form-control" id="quantite" name="quantite" placeholder="1" min="1" required>
                </div>
              </div>

              
              <h6 class="fw-semibold text-uppercase text-muted mb-3 border-bottom pb-2 mt-4"> Client</h6>

              <div class="row g-3 mb-3">
                <div class="col-6">
                  <label for="nom_client" class="form-label fw-semibold">Nom</label>
                  <input type="text" class="form-control" id="nom_client" name="nom_client" placeholder="TINKOU" required>
                </div>
                <div class="col-6">
                  <label for="prenom_client" class="form-label fw-semibold">Prénom</label>
                  <input type="text" class="form-control" id="prenom_client" name="prenom_client" placeholder="Judicael" required>
                </div>
              </div>

              <div class="mb-3">
                <label for="age" class="form-label fw-semibold">Âge</label>
                <input type="number" class="form-control" id="age" name="age" placeholder="Ex: 30" min="1" max="120">
              </div>

              <div class="mb-3">
                <label for="adresse" class="form-label fw-semibold">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="123 rue des Fleurs">
              </div>

              <div class="mb-3">
                <label for="ville" class="form-label fw-semibold">Ville</label>
                <input type="text" class="form-control" id="ville" name="ville" placeholder="Cotonou">
              </div>

              <div class="mb-4">
                <label for="mail" class="form-label fw-semibold">Email</label>
                <input type="email" class="form-control" id="mail" name="mail" placeholder="exemple@mail.com">
              </div>

              
              <div class="d-grid">
                <button class="btn btn-warning fw-semibold btn-lg text-dark" type="submit">
                   Valider la vente
                </button>
              </div>

            </form>

          </div>
        </div>

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