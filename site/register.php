<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Connexion sécurisée, formulaire d’enregistrement</title>
    <script type="text/JavaScript" src="js/sha512.js"></script>
    <script type="text/JavaScript" src="js/forms.js"></script>
    <link rel="stylesheet" href="styles/styles_connection.css" />
</head>
<body>
<!-- S’il n’y a pas de variables POST ou si l’enregistrement a retourné une erreur, cette page sera affichée -->
<!--
        <ul>
            <li>Le nom d’utilisateur ne peut contenir que des nombres, des lettres en minuscule et majuscule et des underscores</li>
            <li>Les emails doivent avoir un format valide</li>
            <li>Le mot de passe doit avoir au moins 6 caractères</li>
            <li>Le mot de passe doit contenir
                <ul>
                    <li>Au moins une lettre majuscule (A..Z)</li>
                    <li>Au moins une lettre minuscule (a..z)</li>
                    <li>Au moins un chiffre (0..9)</li>
                </ul>
            </li>
            <li>Les deux mots de passe entrés doivent être exactement les mêmes</li>
        </ul>-->
    <header>
        <div class="header">
            <a href="index.php">Retournez à la page d’acceuil.</a>
        </div>

    </header>
    <div class="connection_user">
        <h1>Inscription</h1>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <div class="connection_user_flexbox_center">
            <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">
                <div class="identifiant_connection_user">
                    <div class="haut_connection">
                        <input type='text' name='name' id='name' placeholder="Nom *"/>
                    </div>
                    <input type='text' name='first_name' id='first_name' placeholder="Prénom *"/>
                    <input type="text" name="email" id="email" placeholder="Adresse email *" />
                    <input type="password" name="password" id="password" placeholder="Mot de passe *"/>
                    <input type="password" name="confirmpwd" id="confirmpwd" placeholder="Confirmez le mot de passe *"/>
                </div>
                <div class="bas_connection">
                    <div id="boutton_connection_user">
                        <input type="button" value="S’enregistrer" onclick="return regformhash(this.form, this.form.name,  this.form.first_name,this.form.email, this.form.password, this.form.confirmpwd);" />
                    </div>
                </div><br>
                <hr width="320">
            </form>
        </div>
        <p class="inscription_login">Si vous avez déjà un compte, veuillez vous <a href="login.php">connecter</a></p>
    </div>

<!-- -----------footer ------------->
<!---------------------------------->
<footer>
    <p id="copyright">Copyright © 2017</p>
</footer>
</body>
</html>