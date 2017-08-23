<!DOCTYPE html>
<html lang="en">
<?php
  require_once('head.html');
 ?>
<body>
  <div class="center-xs">
    <header>
      <?php
        require_once('nav_2.html');
       ?>
    </header>
  <main>

<section class="section-form">
    <div class="row">
        <h2>Queremos escucharte</h2>
    </div>
    <div class="row">
        <form method="post" action="#" class="contact-form">
            <div class="row">
                <div class="col span-1-of-3">
                    <label for="name">Nombre</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="text" name="name" id="name" placeholder="Tu Nombre" required>
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <label for="email">E-mail</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="email" name="email" id="email" placeholder="Tu Emilio" required>
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <label for="find-us">Como nos encontraste?</label>
                </div>
                <div class="col span-2-of-3">
                    <select name="find-us" id="find-us">
                        <option value="friends" selected>Un Amigo</option>
                        <option value="search">El Buscador</option>
                        <option value="ad">Publicidad</option>
                        <option value="other">Otros</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <label>Newsletter?</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="checkbox" name="news" id="news" checked> Obvio
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <label>Dejanos algo escrito</label>
                </div>
                <div class="col span-2-of-3">
                    <textarea name="message" placeholder="Tu mensaje"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <label>&nbsp;</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="submit" value="Ahí les va">
                </div>
            </div>

        </form>

    </div>
</section>

</main>

  <?php
    require_once('footer.html');
    require_once('scripts.html');
   ?>

</div>
</body>

</html>
