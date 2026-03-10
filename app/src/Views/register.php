 <?php

    use App\Core\Session;

    ?>
 <div class="register-card">
     <h1>Créer votre compte</h1>
     <form method="POST" action="/register">
         <div class="form-group">
             <label>Pseudo</label>
             <input type="text" name="username" value="<?= Session::getFormData("username") ?>">
         </div>

         <div class="form-group">
             <label>Email</label>
             <input type="email" name="email" value="<?= Session::getFormData("email") ?>">
         </div>

         <div class="form-group">
             <label>Mot de passe</label>
             <input type="password" name="password" value="<?= Session::getFormData("password") ?>">
         </div>

         <div class="form-group">
             <label>Mot de passe</label>
             <input type="password" name="repeat-password" value="<?= Session::getFormData("repeat-password") ?>">
         </div>

         <button type="submit">
             Valider
         </button>
     </form>
     <div class="login-link">
         <p>Déja membre ?</p>
         <a href="/login">Connectez-vous</a>
     </div>
 </div>