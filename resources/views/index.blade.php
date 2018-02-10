<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
        <h1><center>Formulaire d'inscription</center></h1>
        <form method="post" action="/email"><center>
         
            <p>
                <label for="pseudo">Votre Adresse E-mail :</label><br />
                <input type="text" name="email" id="email" /><br /
                <label for="pseudo">Votre pseudo :</label><br />
                <input type="text" name="email" id="email" /><br />

                <br />
                <label for="pass">Votre mot de passe :</label><br />
                <input type="password" name="pass" id="pass" /><br /><br />
                <label for="pass">Confirmez votre Adresse E-mail :</label><br /><br />
                <input type="password" name="pass" id="pass" /><br />

            </p>
<br />
            <p>
                <label for="pays">Dans quel pays habitez-vous ?</label><br /><br /><br />
                <select name="pays" id="pays">
                    <option value="france">France</option>
                    <option value="espagne">Espagne</option>
                    <option value="italie">Italie</option>
                    <option value="royaume-uni">Royaume-Uni</option>
                    <option value="canada">Canada</option>
                    <option value="etats-unis">États-Unis</option>
                    <option value="chine">Chine</option>
                    <option value="japon">Japon</option>
                </select>
            </p>
            </center></form>
    </body>
</html>
