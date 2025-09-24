<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Concours de Robots 2025</title>
  <link rel="stylesheet" href="./css/styles.css" media="all">
</head>

<body>
<div class="website">

  <?php 
  include 'header.html';
  ?>

  <!-- Barre latérale -->
  <aside class="aside">
    <nav class="navigation" role="navigation">
      <ul class="navigation-list">
        <li class="navigation-item"><a class="navigation-link" href="/">🏠 Accueil</a></li>
        <li class="navigation-item"><a class="navigation-link" href="equipes">👥 Équipes</a></li>
        <li class="navigation-item"><a class="navigation-link" href="epreuves">🤖 Épreuves</a></li>
        <li class="navigation-item"><a class="navigation-link" href="resultats">🏆 Résultats</a></li>
        <li class="navigation-item"><a class="navigation-link" href="informations">ℹ️ Infos pratiques</a></li>
        <li class="navigation-item"><a class="navigation-link" href="mention">📜 Mentions légales</a></li>
      </ul>
    </nav>
    <p>
      Bienvenue dans l’application du <strong>Concours de Robots 2025</strong>.  
      Les collèges participants peuvent gérer leurs équipes, saisir les résultats,  
      et consulter les classements après le concours.
    </p>
  </aside>

  <!-- Contenu principal -->
  <main id="main" role="main" class="main">
    <h2>Tableau de bord</h2>
    <p>Utilisez les boutons ci-dessous pour accéder rapidement aux principales fonctions :</p>

    <div class="actions">
      <a class="btn" href="equipes/ajouter">➕ Ajouter une équipe</a></br>
      <a class="btn" href="eleves/ajouter">👤 Ajouter un élève</a></br>
      <a class="btn" href="epreuves/ajouter">⚙️ Ajouter une épreuve</a></br>
      <a class="btn" href="resultats/saisie">✍️ Saisir des résultats</a></br>
      <a class="btn" href="resultats/classement">📊 Voir les classements</a></br>
    </div>

    <section class="presentation">
      
    </section>
  </main>

  <!-- Pied de page -->
  <footer class="footer" role="contentinfo">
    &copy; <strong>2025-2026 Campus la Futaie</strong> — Tous droits réservés.
  </footer>
</div>
</body>
</html>
