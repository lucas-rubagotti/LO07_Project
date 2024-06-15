
<!-- ----- début fragmentCaveMenu -->

<nav class="navbar navbar-expand-lg bg-warning fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="router1.php?action=patrimoineClient">CHIVAS - RUBAGOTTI | CLIENT | <?php echo(" "); echo($_SESSION['user_name']);echo(" "); echo($_SESSION['user_prenom']);?></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mes comptes bancaires</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="router1.php?action=listeMesBanques">Liste de mes banques</a></li>
            <li><a class="dropdown-item" href="router1.php?action=addCompte">Ajouter un nouveau compte</a></li>
            <li><a class="dropdown-item" href="router1.php?action=transfertInterComptes">Transfert inter-comptes</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mes résidences</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="router1.php?action=listeMesResidences">Liste de mes résidences</a></li>
            <li><a class="dropdown-item" href="router1.php?action=achatResidence">Achat d'une nouvelle résidence</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mon patrimoine</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="router1.php?action=bilanPatrimoine">Bilan de mon patrimoine</a></li>
          </ul>
        </li>

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Innovations</a>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="router1.php?action=fonctionnalite">Proposez une fonctionnalité originale</a></li>
                  <li><a class="dropdown-item" href="router1.php?action=mvcUpgrade">Proposez une amélioration du code MVC</a></li>
              </ul>
          </li>
          <a class="nav-link" role="button" href="router1.php?action=deconnexion">Déconnexion</a>
      </ul>
    </div>
  </div>
</nav> 

<!-- ----- fin fragmentCaveMenu -->

