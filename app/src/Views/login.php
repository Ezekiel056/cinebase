<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Connexion | Cinéthèque</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        /* carte */
    </style>

</head>

<body>
    <main>
        <div class="login-card">
            <h1>Connexion</h1>
            <form method="post" action="/login">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" required>
                </div>

                <div class="form-group">
                    <label>Mot de passe</label>
                    <input type="password" name="password" required>
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
    </main>
</body>

</html>