<!--
@access: public
@author: Marie Dadomo
@copyright : Copyright
@version : 1
-->
<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login_user</title>
    <link href="styles/styles_connection.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet"></head>



<body>
    <!-------------Header--------------->
    <!---------------------------------->

        <header>
            <div class="header">
                <a href="index.php">Retournez à la page d’acceuil.</a>
            </div>

        </header>

        <!-------------connection --------------->
        <!--------------------------------------->
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Une erreur s’est produite lors de votre connexion!</p>';
        }
        ?>
        <div class="connection_user">
            <h1>Se connecter</h1>
            <div class="connection_user_flexbox_center">
                <form action="includes/process_login.php" method="post" name="login_form">




                    <div class="identifiant_connection_user">
                        <div class="haut_connection">
                            <input type="email" name="email" placeholder="Votre adresse email" />
                        </div>
                        <input type="password" name="password" id="password" placeholder="Votre mot de passe"/>

                    </div>
                    <div class="bas_connection">
                        <div id="boutton_connection_user">
                            <input type="button" value="Connection" onclick="formhash(this.form, this.form.password);" />
                        </div>
                    </div>
                    <br>
                    <hr width="320">
                </form>
            </div>
            <div class="mpd_oblier_connection">
                <a href="#">Mot de passe oublié ?</a>
            </div>



            <p class="inscription_login">Si vous n’avez pas de compte, veuillez vous <a href="register.php">enregistrer</a></p>






        </div>

        <!-- -----------footer ------------->
        <!---------------------------------->
        <footer>
                <p id="copyright">Copyright © 2017</p>
        </footer>



</body>
</html>