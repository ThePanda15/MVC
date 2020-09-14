<?php
require_once("header.view.php");
?>
<div class="container">
  <h4 class="title is-h4 has-text-centered">Datos del usuario</h4>
  <div class="columns">
    <div class="column is-half is-offset-one-quarter">
<?php
echo("<p>Nombre: <strong>$datauser->nom</strong></p><br>");
echo("<p> Correo: <strong>$datauser->correo</strong></p>");
?>
    </div>
  </div>
</div>
<?php
require_once("footer.view.php");
?>
