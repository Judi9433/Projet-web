<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Connexion — Bless Shop</title>
</head>

<body class="bg-light">


  
  <main class="container py-5">

    <div class="row justify-content-center">
      <div class="col-12 col-sm-8 col-md-6 col-lg-4">

        
        <div class="text-center mb-4">
          <h2 class="fw-bold">Connexion</h2>
          <p class="text-muted small">Connectez-vous pour accéder à votre boutique.</p>
        </div>

        <div class="card border-0 shadow-sm">
          <div class="card-body p-4 p-md-5">

            <form action="connexion.php" method="post" name="form-signup" id="form-signup">

              <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="exemple@mail.com" required>
              </div>

              <div class="mb-4">
                <label for="mdp" class="form-label fw-semibold">Mot de passe</label>
                <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Votre mot de passe" required>
              </div>

              
              <div class="d-grid mb-3">
                <button class="btn btn-warning btn-lg fw-semibold text-dark" type="submit">
                  Se connecter 
                </button>
              </div>

              
              <div class="d-grid mb-2">
                <a href="inscription.php" class="btn btn-outline-secondary">Créer un compte</a>
              </div>
              <div class="text-center">
                <a href="#" class="text-muted small">Mot de passe oublié ?</a>
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