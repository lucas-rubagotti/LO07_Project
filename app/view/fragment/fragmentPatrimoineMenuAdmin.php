
<!-- ----- début fragmentCaveMenu -->

<nav class="navbar navbar-expand-lg bg-warning fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="router1.php?action=patrimoineAdmin">CHIVAS - RUBAGOTTI | ADMIN | <?php echo(" "); echo($_SESSION['user_name']);echo(" "); echo($_SESSION['user_prenom']);?></a>


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Banques</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="router1.php?action=banqueReadAll">Liste des banques</a></li>
            <li><a class="dropdown-item" href="router1.php?action=banqueCreate">Ajout d'une banque</a></li>
            <li><a class="dropdown-item" href="router1.php?action=banqueReadAllLabel">Listes des comptes d'une banque</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Clients</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="router1.php?action=listeClients">Liste des clients</a></li>
            <li><a class="dropdown-item" href="router1.php?action=listeAdministrateurs">Liste des administrateurs</a></li>
            <li><a class="dropdown-item" href="router1.php?action=listeComptes">Liste des comptes</a></li>
            <li><a class="dropdown-item" href="router1.php?action=listeResidences">Liste des résidences</a></li>
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

