<?php error_reporting(E_ALL & ~E_NOTICE); ?>

<div class="container" id="contactez">
  <div class="row">
    <h2 class="contactez">Vous souhaitez me contacter ?</h2>
  </div>
  <div class="row">
    <div class="col-xs-2 col-xs-offset-4" id="iconssocial">
      <a href="https://twitter.com/srebouh"><img class="social" src="view/images/twitter.png" alt=""></a>
    </div>
    <div class="col-xs-2">
      <a href="https://www.linkedin.com/in/sarah-rebouh-7542b725/"><img class="social" src="view/images/linked.png" alt=""></a>
    </div>
  </div>
  <form class="" action="controller/verif_form.php" method="post">
      <div class="form-group row col-md-offset-3" id="form">
          <div class="col-xs-12 col-md-8">
              <span class="error"> <?= $_SESSION['nameErr']  ?></span>
              <input type="name" class="form-control" name="name" placeholder="Nom, Prénom..." value="">

          </div>
          <div class="col-xs-12 col-md-8">
              <span class="error"><?= $_SESSION['phoneErr']  ?></span>
              <input type="tel" class="form-control" name="tel" placeholder="Téléphone..." value="">

          </div>
          <div class="col-xs-12 col-md-8">
              <span class="error"><?= $_SESSION['mailErr']  ?></span>
              <input type="mail" class="form-control" name="mail" placeholder="Email..." value="">

          </div>
          <div class="col-xs-12 col-md-8">
              <span class="error"><?= $_SESSION['messageErr']  ?></span>
              <textarea name="message" class="form-control" placeholder="Vore message..." rows="8" cols="80"></textarea>

          </div>
          <div class="col-xs-12 col-md-8">
              <button type="submit" class="form-control" id="button" name="button">Envoyer</button>
          </div>
      </div>
  </form>
</div>

<?php

unset($_SESSION['nameErr']);
unset($_SESSION['phoneErr']);
unset($_SESSION['mailErr']);
unset($_SESSION['messageErr']);

?>
