<!DOCTYPE html>
<html lang="en">
<?php
  require_once('head.html');
 ?>
<body>
  <div class="center-xs">
    <header class="special-box">
      <?php
        require_once('nav.html');
       ?>

       <section class="section-form">
           <div class="row center-xs middle-xs">
               <h2>Registrate</h2>
           </div>
           <div class="row center-xs middle-xs">
               <form method="post" action="#" class="contact-form col-xs-10 col-sm-8 col-md-6">
                   <div class="row">
                       <div class="col-xs-12 col-sm-6">
                           <label for="name">Nombre</label>
                           <input type="text" name="name" id="name" placeholder="Tu Nombre" required>
                       </div>

                       <div class="col-xs-12 col-sm-6">
                           <label for="email">E-mail</label>
                           <input type="email" name="email" id="email" placeholder="Tu E-mail" required>
                       </div>

                   </div>

                   <div class="row">
                       <div class="col-xs-12 col-sm-6">
                           <label for="pass">Contraseña</label>
                           <input type="password" name="pass" id="pass" placeholder="Tu Contraseña" required>
                       </div>

                       <div class="col-xs-12 col-sm-6">
                           <label for="pass-check">Verificacion Contraseña</label>
                           <input type="password" name="pass-check" id="pass-check" placeholder="Verifica tu Contraseña" required>
                       </div>

                   </div>

                   <div class="row" style="display:none;">
                       <div class="col-xs-12 col-sm-6">
                           <label for="plan">Contraseña</label>
                           <input type="text" name="plan" id="text" placeholder="Tu Plan" required>
                       </div>
                   </div>

                   <div class="row center-xs middle-xs end-sm">
                       <div class="col-xs-6">
                           <input type="submit" value="Enviar">
                       </div>
                   </div>

               </form>

           </div>
       </section>

    </header>

<main>
</main>

  <?php
    require_once('footer.html');
    require_once('scripts.html');
   ?>

 </div>
 <div class="buffer">
   --
 </div>
</body>

</html>
