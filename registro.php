<!-- <?php
$errors = '';
if(isset($_POST["name"])){
  $mimail = "arbust908@gmail.com,arbust_908@hotmail.com,yo@panchoblanco.com.ar";
  $mail = $_POST["email"];
  $nombre = $_POST["name"];
  $plan = $_POST["plan"];
}

if ($_POST) {
  $to = $mimail;
  $subject = "Quiero el plan ".$plan;
  $txt = "Hello soy ".$nombre.", Mi mail es ".$mail." y quiero el Plan ".$plan." para mi E-Commerse.";
  $headers = "From: ".$mail;

  if(mail($to,$subject,$txt,$headers)){
    header('Location: enviado.php');
  } else {
      header('Location: register.php');
  }

}

 ?> -->
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
               <form method="post" action="send-message.php" class="contact-form col-xs-10 col-sm-8 col-md-6">
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

                   <!-- <div class="row center-xs middle-xs">
                       <div class="col-xs-12 col-sm-6">
                           <label for="plan">Tu Plan</label>
                           <input type="text" name="plan" id="plan" placeholder="Pro" required>
                       </div>
                   </div> -->

                   <div class="row center-xs middle-xs">
                       <div class="col-xs-12 col-sm-6">
                           <label for="plan-2">Tu Plan</label>
                           <select class="plan-2" name="plan-2" required>
                             <option value="Prueba-Gratis">Prueba Gratis</option>
                             <option value="Basico">Básico</option>
                             <option value="Pro" selected>Pro</option>
                             <option value="Enterprise">Enterprise</option>
                           </select>
                       </div>
                   </div>

                   <!-- <div class="row">
                       <div class="col-xs-12 col-sm-6">
                           <label for="pass">Contraseña</label>
                           <input type="password" name="pass" id="pass" placeholder="Tu Contraseña" required>
                       </div>

                       <div class="col-xs-12 col-sm-6">
                           <label for="pass-check">Verificacion Contraseña</label>
                           <input type="password" name="pass-check" id="pass-check" placeholder="Verifica tu Contraseña" required>
                       </div>

                   </div> -->

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
