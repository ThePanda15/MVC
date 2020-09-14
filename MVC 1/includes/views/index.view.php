
  <?php
    require("header.view.php");
  ?>
<div class="container">
  <h4 class="title is-4 has-text-centered">Ingresar al sistema</h4>
  <div class="columns">
    <div class="column is-half is-offset-one-quarter">  
    <form action="logueo.php" method="post">
      <div class="field">
        <label class="label">Nombre</label>
          <div class="control">
            <input class="input" type="text" name="nombre" id="nombre"placeholder="e.g Alex Smith">
          </div>
    </div>
    <div class="field">
      <label class="label">Correo</label>
        <div class="control">
          <input class="input" type="email" name="correo" id="correo" placeholder="e.g. alexsmith@gmail.com">
        </div>
    </div>
    <div class="control">
      <button class="button is-primary">enviar</button>
    </div>
  </form>
    </div>
    </div>
</div>
<?php
    require("footer.view.php");
  ?>
