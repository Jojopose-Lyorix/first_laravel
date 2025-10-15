<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Concours de Robots 2025</title>
  
  <!-- Feuilles de style -->
  <link rel="stylesheet" href="/css/pico.css">
  <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
  <div class="wrapper">

    <!-- En-tête -->
    <?php include 'header.html'; ?>
    

    <!-- Contenu principal -->
    <main class="main-content">
      <section class="inscription-eleve">
        <div class="form-container">
          <h2>Inscription élève</h2>

          <form action="traitement_inscription.php" method="POST">
            <div class="form-group">
              <label for="prenom">Prénom</label>
              <input type="text" id="prenom" name="prenom" placeholder="Entrer le prénom" required>
            </div>

            <div class="form-group">
              <label for="nom">Nom</label>
              <input type="text" id="nom" name="nom" placeholder="Entrer le nom" required>
            </div>

            <div class="form-group">
              <label for="genre">Genre</label>
              <select id="genre" name="genre" required>
                <option value="">Sélectionner</option>
                <option value="F">Féminin</option>
                <option value="M">Masculin</option>
                <option value="Autre">Autre</option>
              </select>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="exemple@email.com" required>
            </div>

            <div class="form-group">
              <label for="classe">Classe</label>
              <input type="text" id="classe" name="classe" placeholder="Entrer la classe" required>
            </div>

            <button type="submit" class="btn-enregistrer">Enregistrer</button>
          </form>
        </div>
      </section>
    </main>

    <!-- Pied de page -->
    

  </div>
  
</body>
<?php include 'footer.html'; ?>

</html>
