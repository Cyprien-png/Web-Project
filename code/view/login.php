<?php
$title = "Créer un compte";
ob_start();
?>

    <head>
        <link href="view/css/style_lo.css" rel="stylesheet">
        <script type="text/javascript" src="view/js/signUp.js"></script>
    </head>

    <div class="container">

        <form id="frmLogin" method="post" action="index.php?action=login">

            <label for="txtAuth">E-Mail / Nom d'utilisateur : </label>
            <input type="text" id="txtAuth" name="userInputAuth" required>

            <label for="txtPassword">Mot de passe* : </label>
            <input type="text" id="txtPassword" name="userInputPassword" required>

            <input type="submit" value="Se connecter" id="btnSubmitSign">

        </form>

        <p>Pas de compte ? <a href="index.php?action=register">S'inscrire</a></p>

    </div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";