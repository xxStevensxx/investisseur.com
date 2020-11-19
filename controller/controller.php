<?php
// Fonction du controller qui gere les vues a renvoyer

  function callViews($choixClient){
    // La variable qui stock l'info de la vue à retourner à l'utilisateur
    $returnView = 'none';

    // Notre switch qui valorise la variable returnViews selon le choix de l'utilisateur,
    // qui sera utilisé plus tard pour la suite du traitement.
    switch ($choixClient) {
      case 0:
      $returnView = 'none';
        break;

      case 1:
      $returnView = 'acceuil';
        break;

      case 2:
      $returnView = 'connexion';
        break;

      case 3:
      $returnView = 'deconnexion';
        break;

      default:
        // code...
        break;
    }

// Notre switch qui utilise returnViews afin de savoir quel vue retourner
    switch ($returnView) {
      case 'acceuil':
      include 'views/head.php';
      include 'views/body.php';
      include 'views/footer.php';
        break;

      case 'connexion':
      include 'views/signIn.php';
        break;

      case 'deconnexion':
      // include 'views/signIn.php';
        break;

        case 'none':
        include 'views/404.php';

      default:
        // none //
        break;
    }
  }
 ?>
