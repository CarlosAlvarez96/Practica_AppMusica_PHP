<?php
if (!empty($_POST['regist'])) {
    $userRegistred = userRepository::checkUser($_POST['username']);
    if (empty($userRegistred)) {
        $username = ($_POST['username']);
        $password = md5($_POST['password']); // Use MD5 for password hashing (not recommended for production)
        $rol = 1;
        UserRepository::registrarUsuario($username, $password, $rol);
        echo ' <script>alert("Usuario Creado")</script>';
        echo '
        <form action="index.php" method="get">
        <button type="submit" name="u" value="login" class="btn btn-primary">Ir al login</button>
        </form>';
    } else {
        echo ' <script>alert("Usuario Repetido")</script>';
    }
}

include("View\signUpView.phtml");
?>;