<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Bless Shop - Gestion des articles, ventes et clients." />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;600;700;800&family=DM+Serif+Display&display=swap" rel="stylesheet">
  <title>Bless Shop — Accueil</title>
  <style>
    :root {
      --indigo:       #4f46e5;
      --indigo-dark:  #3730a3;
      --indigo-light: #eef2ff;
      --emerald:      #10b981;
      --emerald-light:#d1fae5;
      --amber:        #f59e0b;
      --amber-light:  #fef3c7;
      --rose:         #f43f5e;
      --rose-light:   #ffe4e6;
      --text:         #0f172a;
      --muted:        #64748b;
      --border:       #e2e8f0;
      --bg:           #f8faff;
    }

    * { box-sizing: border-box; }

    body {
      background: var(--bg);
      color: var(--text);
      font-family: 'Sora', sans-serif;
      min-height: 100vh;
    }

    /* ── HEADER ── */
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
      letter-spacing: 0.01em;
    }

    /* ── HERO ── */
    .hero {
      background: linear-gradient(135deg, #3730a3 0%, #4f46e5 40%, #7c3aed 75%, #a855f7 100%);
      position: relative;
      overflow: hidden;
    }

    .hero-circle-1 {
      position: absolute;
      width: 420px; height: 420px;
      border-radius: 50%;
      background: rgba(255,255,255,0.05);
      top: -120px; right: -80px;
      pointer-events: none;
    }

    .hero-circle-2 {
      position: absolute;
      width: 260px; height: 260px;
      border-radius: 50%;
      background: rgba(255,255,255,0.04);
      bottom: -80px; left: -60px;
      pointer-events: none;
    }

    .hero-circle-3 {
      position: absolute;
      width: 160px; height: 160px;
      border-radius: 50%;
      background: rgba(168,85,247,0.3);
      top: 30px; left: 30%;
      pointer-events: none;
    }

    .hero-badge {
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

    .hero-title {
      font-family: 'DM Serif Display', serif;
      font-size: clamp(2.8rem, 7vw, 5rem);
      color: white;
      line-height: 1.1;
      text-shadow: 0 2px 20px rgba(0,0,0,0.15);
    }

    .hero-sub {
      color: rgba(255,255,255,0.78);
      font-size: 1rem;
      font-weight: 300;
      line-height: 1.8;
      max-width: 500px;
    }

    .btn-hero-white {
      background: white;
      color: var(--indigo);
      font-weight: 700;
      font-size: 0.875rem;
      padding: 12px 26px;
      border-radius: 10px;
      border: none;
      text-decoration: none;
      box-shadow: 0 4px 14px rgba(0,0,0,0.12);
      transition: all 0.25s;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }
    .btn-hero-white:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.18);
      color: var(--indigo-dark);
    }

    .btn-hero-ghost {
      background: rgba(255,255,255,0.12);
      color: white;
      font-weight: 600;
      font-size: 0.875rem;
      padding: 12px 26px;
      border-radius: 10px;
      border: 1.5px solid rgba(255,255,255,0.35);
      text-decoration: none;
      backdrop-filter: blur(4px);
      transition: all 0.25s;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }
    .btn-hero-ghost:hover {
      background: rgba(255,255,255,0.22);
      color: white;
      transform: translateY(-2px);
    }

    /* ── SECTION ── */
    .section-label {
      font-size: 0.68rem;
      font-weight: 700;
      letter-spacing: 0.22em;
      text-transform: uppercase;
      color: var(--indigo);
    }

    .section-heading {
      font-family: 'DM Serif Display', serif;
      font-size: 1.75rem;
      color: var(--text);
    }

    .divider-bar {
      width: 44px;
      height: 4px;
      border-radius: 4px;
      background: linear-gradient(to right, var(--indigo), #a855f7);
    }

    /* ── CARDS ── */
    .quick-card {
      background: white;
      border: 1px solid var(--border);
      border-radius: 18px;
      text-decoration: none;
      color: var(--text);
      display: flex;
      flex-direction: column;
      height: 100%;
      transition: all 0.28s cubic-bezier(0.34, 1.56, 0.64, 1);
      overflow: hidden;
      position: relative;
    }

    .quick-card::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 3px;
      opacity: 0;
      transition: opacity 0.25s;
      border-radius: 18px 18px 0 0;
    }

    .quick-card:hover {
      transform: translateY(-7px) scale(1.01);
      box-shadow: 0 20px 40px rgba(79,70,229,0.13);
      border-color: transparent;
      color: var(--text);
    }

    .quick-card:hover::before { opacity: 1; }

    .card-articles::before  { background: linear-gradient(to right, var(--indigo), #818cf8); }
    .card-ventes::before    { background: linear-gradient(to right, var(--emerald), #34d399); }
    .card-transaction::before { background: linear-gradient(to right, var(--amber), #fbbf24); }
    .card-clients::before   { background: linear-gradient(to right, var(--rose), #fb7185); }

    .icon-wrap {
      width: 54px;
      height: 54px;
      border-radius: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.4rem;
      flex-shrink: 0;
    }

    .icon-indigo  { background: var(--indigo-light);  color: var(--indigo); }
    .icon-emerald { background: var(--emerald-light); color: var(--emerald); }
    .icon-amber   { background: var(--amber-light);   color: var(--amber); }
    .icon-rose    { background: var(--rose-light);    color: var(--rose); }

    .card-title-inner {
      font-weight: 700;
      font-size: 1rem;
      color: var(--text);
      margin-bottom: 0.3rem;
    }

    .card-desc {
      font-size: 0.82rem;
      color: var(--muted);
      line-height: 1.65;
      font-weight: 400;
    }

    .card-link-text {
      font-size: 0.78rem;
      font-weight: 700;
      letter-spacing: 0.04em;
    }

    .link-indigo  { color: var(--indigo); }
    .link-emerald { color: var(--emerald); }
    .link-amber   { color: var(--amber); }
    .link-rose    { color: var(--rose); }

    /* ── FOOTER ── */
    footer {
      background: #0f172a;
    }
  </style>
</head>

<body>

  <!-- HEADER -->
  <header class="py-3">
    <div class="container d-flex align-items-center justify-content-between">
      <img src="photo11.jpg" alt="Logo Bless Shop" style="height:52px; width:auto; object-fit:contain;">
      <span class="site-title">Bless Shop</span>
      <img src="logo-uac.jpg" alt="Logo UAC" style="height:52px; width:auto; object-fit:contain;">
    </div>
  </header>

  <!-- HERO -->
  <section class="hero py-5">
    <div class="hero-circle-1"></div>
    <div class="hero-circle-2"></div>
    <div class="hero-circle-3"></div>
    <div class="container py-4 text-center position-relative" style="z-index:1;">
      <span class="hero-badge mb-4 d-inline-flex">
        <i class="bi bi-stars"></i> Boutique en ligne
      </span>
      <h1 class="hero-title my-3">Bless Shop</h1>
      <p class="hero-sub mx-auto mb-4">
        Gérez vos articles, vos ventes et votre clientèle depuis une interface claire, rapide et professionnelle.
      </p>
      <div class="d-flex gap-3 justify-content-center flex-wrap mt-2">
        <a href="afficher.php" class="btn-hero-white">
          <i class="bi bi-box-seam"></i> Voir les articles
        </a>
        <a href="vente.php" class="btn-hero-ghost">
          <i class="bi bi-graph-up-arrow"></i> Consulter les ventes
        </a>
      </div>
    </div>
  </section>

  <!-- MAIN -->
  <main class="container py-5">

    <p class="section-label mb-1">Navigation</p>
    <h2 class="section-heading mb-2">Accès rapide</h2>
    <div class="divider-bar mb-4"></div>

    <div class="row g-4">

      <!-- Articles -->
      <div class="col-12 col-sm-6 col-lg-3">
        <a href="afficher.php" class="quick-card card-articles">
          <div class="p-4 flex-grow-1">
            <div class="icon-wrap icon-indigo mb-3">
              <i class="bi bi-box-seam"></i>
            </div>
            <div class="card-title-inner">Articles</div>
            <p class="card-desc mb-0">Consultez et gérez votre catalogue de produits.</p>
          </div>
          <div class="px-4 pb-4">
            <span class="card-link-text link-indigo"><i class="bi bi-arrow-right-circle me-1"></i>Voir les articles</span>
          </div>
        </a>
      </div>

      <!-- Ventes -->
      <div class="col-12 col-sm-6 col-lg-3">
        <a href="vente.php" class="quick-card card-ventes">
          <div class="p-4 flex-grow-1">
            <div class="icon-wrap icon-emerald mb-3">
              <i class="bi bi-cart3"></i>
            </div>
            <div class="card-title-inner">Ventes</div>
            <p class="card-desc mb-0">Suivez toutes vos ventes et leur historique.</p>
          </div>
          <div class="px-4 pb-4">
            <span class="card-link-text link-emerald"><i class="bi bi-arrow-right-circle me-1"></i>Voir les ventes</span>
          </div>
        </a>
      </div>

      <!-- Effectuer une vente -->
      <div class="col-12 col-sm-6 col-lg-3">
        <a href="effectue-vente.php" class="quick-card card-transaction">
          <div class="p-4 flex-grow-1">
            <div class="icon-wrap icon-amber mb-3">
              <i class="bi bi-credit-card"></i>
            </div>
            <div class="card-title-inner">Effectuer une vente</div>
            <p class="card-desc mb-0">Enregistrez une nouvelle transaction rapidement.</p>
          </div>
          <div class="px-4 pb-4">
            <span class="card-link-text link-amber"><i class="bi bi-arrow-right-circle me-1"></i>Démarrer</span>
          </div>
        </a>
      </div>

      <!-- Clients -->
      <div class="col-12 col-sm-6 col-lg-3">
        <a href="afficher-client.php" class="quick-card card-clients">
          <div class="p-4 flex-grow-1">
            <div class="icon-wrap icon-rose mb-3">
              <i class="bi bi-people"></i>
            </div>
            <div class="card-title-inner">Clients</div>
            <p class="card-desc mb-0">Accédez à votre base clientèle complète.</p>
          </div>
          <div class="px-4 pb-4">
            <span class="card-link-text link-rose"><i class="bi bi-arrow-right-circle me-1"></i>Voir les clients</span>
          </div>
        </a>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-ekxjHPBqCLgMjH7R/Kxj3z0eqn2mO3JFQLwNsTaxWJ6BHxVGmj7oVbGQU/S7MBG" crossorigin="anonymous"></script>
</body>
</html>