 <!-- 
 Session::setFormData("title", $movie['title'])
 Session::setFormData("poster_url", $movie['poster_url'])
 Session::setFormData("director", $movie['director'])
 Session::setFormData("year", $movie['year'])
 Session::setFormData("synopsis", $movie['synopsis']);
-->
 <?php


    use App\Core\Session;
    ?>

 <section class="edit-movie-container">
     <button class="back-to-movie" type="button" onclick="history.back()">
         <i class=" fa-solid fa-arrow-left"></i>
         Retour à la fiche du film
     </button>
     <form action="/films/edit/<?= $id ?>" method="POST">
         <div class="form-group">
             <label for="poster-url">Url de l'affiche</label>
             <input type="text" id="poster-url" name="poster_url" value="<?= Session::getFormData('poster_url') ?>">
             <div class="poster-popup hidden">
                 <img src="" alt="">
             </div>
         </div>

         <div class="form-group">
             <label for="movie-title">Titre</label>
             <input type="text" id="movie-title" name="title" value="<?= Session::getFormData('title') ?>">
         </div>

         <div class="form-group">
             <label for="movie-director">Realisteur</label>
             <input type="text" id="movie-director" name="director" value="<?= Session::getFormData('director') ?>">
         </div>

         <div class="form-group">
             <label for="movie-year">Année de sortie</label>
             <input type="text" id="movie-year" name="year" value="<?= Session::getFormData('year') ?>">
         </div>

         <div class="form-group">
             <label for="movie-synopsis">Synopsis</label>
             <textarea type="text" id="movie-synopsis" name="synopsis"><?= Session::getFormData('synopsis') ?></textarea>
         </div>

         <button class="valid-form-button" type="submit">Valider</button>
     </form>
 </section>