<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Connexion | Cinéthèque</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        /* carte */

        .login-card {
            width: 380px;
            background: #1a1a1a;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
        }

        /* titre */

        .login-card h1 {
            font-size: 24px;
            margin-bottom: 30px;
            font-weight: 600;
        }

        /* champs */

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 6px;
            color: #bbb;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            background: #2b2b2b;
            color: white;
            font-size: 14px;
        }

        .form-group input:focus {
            outline: none;
            background: #333;
        }

        /* bouton */

        button {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border: none;
            border-radius: 4px;
            background: #1084f7;
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s;
        }

        button:hover {
            background: #0d6ed1;
        }

        /* footer */

        .login-footer {
            margin-top: 18px;
            font-size: 13px;
            color: #888;
            text-align: center;
        }
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

        </div>
    </main>

</body>

</html>