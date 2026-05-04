<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="stylehp.css">

    <title>Inscription</title>
</head>

<body>
    <div class="container pt-5">
        <form class="row g-3 needs-validation" validate method="post" action="inscrire.php" name="register" >
            <h3 class="text-center pt-5">Inscription</h3>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Nom</label>
                <input type="text" class="form-control" id="validationCustom01" name="nom"  required>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="validationCustom02" name="prenom"  required>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Contact</label>
                <input type="tel" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required name="contact" >
            </div>
            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="validationCustom03" required  name="mdp1">

            </div>
            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Confirmer le mot de passe</label>
                <input type="password" class="form-control" id="validationCustom03" required name="mdp2">
            </div>
            <div class="d-grid gap-1 m-4">
                <button class="btn btn-secondary" type="submit">S'inscrire</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>