<?php
class UserRepository
{
    public static function checkLogin($u, $p)
    {
        $bd = Conectar::conexion();
        $q = "SELECT * FROM listascanciones.user WHERE name='" . $u . "'";
        $result = $bd->query($q);
        if ($result) {
            $datos = $result->fetch_assoc();
            if ($datos && $datos['pass'] == md5($p)) {
                return new User($datos);
            }
        }
        return NULL;
    }
    public static function checkUser($u)
    {
        $bd = Conectar::conexion();
        $q = "SELECT * FROM listascanciones.user WHERE name='" . $u . "'";
        $result = $bd->query($q);
        if ($result) {
            $datos = $result->fetch_assoc();
            if ($datos && $datos['name'] == $u) {
                return new User($datos);
            }
        }
        return NULL;
    }

    public static function registrarUsuario($name, $pass, $rol)
    {
        $bd = Conectar::conexion();
        $q = "INSERT INTO listascanciones.user VALUES (NULL, '$name', '$pass', '$rol')";
        $result = $bd->query($q);

        if ($result) {
            // La inserción fue exitosa
            return true;
        } else {
            // Error en la inserción
            return false;
        }
    }
}


?>;