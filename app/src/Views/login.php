 <?php

    use App\Core\Session;

    ?>
 <div class="login-card">
     <h1>Connexion</h1>
     <form method="POST" action="/login">
         <div class="form-group">
             <label>Email</label>
             <input type="email" name="email" value="<?= Session::getFormData("email") ?>">
         </div>

         <div class="form-group">
             <label>Mot de passe</label>
             <input type="password" name="password" value="<?= Session::getFormData("password") ?>">
         </div>

         <button type="submit">
             Se connecter
         </button>
     </form>
     <div class="register-link">
         <p>Vous n'avez pas de compte ?</p>
         <a href="/register">Inscrivez-vous</a>
     </div>
 </div>